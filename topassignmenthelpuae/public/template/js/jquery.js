            $(document).ready(function() {
                $('#fname').on('input', function () {
                    checkfname();
                });
            $('#lname').on('input', function () {
                    checklname();
                });
            $('#email').on('input', function () {
                checkemail();
            });
            $('#phone').on('input', function () {
                checkphone();
            });
            $('#message').on('input', function () {
                checkmessage();
            });
                    $('#butsave').on('click', function() {
            // $("#butsave").attr("disabled", "disabled");
            var fname = $('#fname').val();
            var lname = $('#lname').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var code = $('#code').val();
            var message = $('#message').val();
            var captcha = $('#captcha').val();
            if(fname!="" && lname!="" && email!="" && phone!="" && message!=""){
                $.ajax({
                    url: "ajax/save",
                    type: "POST",
                    data: {
                        fname: fname,
                        lname: lname,
                        email: email,
                        phone: phone,
                        code: code,
                        message: message,
                        captcha: captcha				
                    },
                    cache: false,
                    success: function(dataResult){
                        var dataResult = JSON.parse(dataResult);
                        if(dataResult.statusCode==200){
                            $('#fupForm').find('input:text').val('');
                            $('#fupForm')[0].reset();
                            // setTimeout(function(){ window.location.href = "thankyou"; }, 100);
                            var url =
              "https://wa.me/447474941704?text=" +
              "Frist Name: " +  fname + "%0a" +
              "Last Name: " + lname + "%0a" +
              "E-Mail: " +  email + "%0a" +
              "Country: " +  code + "%0a" +
              "Phone: " +  phone + "%0a" +
              "Message: " +  message;
            window.open(url, "_blank").focus();
                            window.location.href= "thanks.html";
                        }
                        else if(dataResult.statusCode==201){
                            alert("Error occured !");
                        }
                        else if(dataResult.statusCode==202){
                            alert("Please enter the captcha.");
                        }
                        else if(dataResult.statusCode==203){
                            alert("Captcha is invalid.");
                        }
                        
                    }
                });
                }
                else{
                    alert('Please fill all the field !');
                }
            });
            });
            
            function checkfname() {
                var pattern = /^[a-zA-Z ]{2,30}$/;
                var fuser = $('#fname').val();
                var validuser = pattern.test(fuser);
                if ($('#fname').val().length < 4) {
                    $('#fname_err').html('firstname length is too short');
                    return false;
                } else if (!validuser) {
                    $('#fname_err').html('firstname should be a-z ,A-Z only');
                    return false;
                } else {
                    $('#fname_err').html('');
                    return true;
                }
            }
            
            function checklname() {
                var pattern = /^[a-zA-Z ]{2,30}$/;
                var luser = $('#lname').val();
                var validuser = pattern.test(luser);
                if ($('#lname').val().length < 4) {
                    $('#lname_err').html('lastname length is too short');
                    return false;
                } else if (!validuser) {
                    $('#lname_err').html('lastname should be a-z ,A-Z only');
                    return false;
                } else {
                    $('#lname_err').html('');
                    return true;
                }
            }
            
         function checkemail() {
            var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $('#email').val();
            var validemail = pattern1.test(email);
            if (email == "") {
                $('#email_err').html('required field');
                return false;
            } else if (!validemail) {
                $('#email_err').html('invalid email');
                return false;
            } else {
                $('#email_err').html('');
                return true;
            }
        }
        
        function checkphone() {
            if (!$.isNumeric($("#phone").val())) {
                $("#phone_err").html("only number is allowed");
                return false;
            } else if ($("#phone").val().length > 14 ) {
                $("#phone_err").html("14 digit required");
                return false;
            }
            else {
                $("#phone_err").html("");
                return true;
            }
        }
        
        function checkmessage() {
    var pattern = /^[a-zA-Z ]{2,100}$/;
    var messg = $('#message').val();
    var validuser = pattern.test(messg);
    if ($('#message').val().length < 40) {
        $('#message_err').html('message length is too short, please enter at least 40 characters');
        return false;
    } else if (!validuser) {
        $('#message_err').html('message should be a-z ,A-Z only');
        return false;
    } else {
        $('#message_err').html('');
        return true;
    }
}

