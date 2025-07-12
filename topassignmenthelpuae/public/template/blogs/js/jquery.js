        $(document).ready(function() {
                $('#uname').on('input', function () {
                    checkname();
                });
            $('#uemail').on('input', function () {
                checkemail();
            });
            $('#ucomment').on('input', function () {
                checkmessage();
            });
        $('#saveComm').on('click', function() {
            // $("#butsave").attr("disabled", "disabled");
            var bid = $('#bid').val();
            var uname = $('#uname').val();
            var uemail = $('#uemail').val();
            var ucomment = $('#ucomment').val();
            if(uname!="" && uemail!="" && ucomment!=""){ 
                $.ajax({
                    url: "https://www.researchmyassignment.com/blogs/ajax/savecomm/",
                    type: "POST",
                    data: {
                        bid: bid,
                        uname: uname,
                        uemail: uemail,
                        ucomment: ucomment
                    },
                    cache: false,
                    success: function(dataResult){
                        var dataResult = JSON.parse(dataResult);
                        if(dataResult.statusCode==200){
                            $('#myform').find('input:text').val('');
                            $('#myform')[0].reset();
                            // setTimeout(function(){ window.location.href = "thankyou"; }, 100);
                            // window.location.href= "thanks.php";
                            $('#message').html("<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Success!</strong> Thank you for your submission.</div>");
                            setTimeout(function(){ window.location.href = "../blogs.html"; }, 4000);
                        }
                        else if(dataResult.statusCode==201){
                            alert("Error occured !");
                        }
                    }
                });
                }
                else{
                    alert('Please fill all the field !');
                }
            });
            });
            
            function checkname() {
                var pattern = /^[a-zA-Z ]{2,30}$/;
                var user = $('#uname').val();
                var validuser = pattern.test(user);
                if ($('#uname').val().length < 4) {
                    $('#name_err').html('Please enter your name|');
                    return false;
                } else if (!validuser) {
                    $('#name_err').html('name should be a-z ,A-Z only');
                    return false;
                } else {
                    $('#name_err').html('');
                    return true;
                }
            }
            

         function checkemail() {
            var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $('#uemail').val();
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
        

        function checkmessage() {
    var pattern = /^[a-zA-Z ]{2,100}$/;
    var messg = $('#ucomment').val();
    var validuser = pattern.test(messg);
    if ($('#ucomment').val().length < 40) {
        $('#message_err').html('message length is too short, please enter at least 40 characters');
        return false;
    } else {
        $('#message_err').html('');
        return true;
    }
}