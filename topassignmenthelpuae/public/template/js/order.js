$(document).ready(function() {
                $('#email').on('input', function () {
                    checkemail();
                });
                $('#phoneuser').on('input', function () {
                    checkphone();
                });
            $('#order_submit').on('click', function() {
               
            // $("#butsave").attr("disabled", "disabled");
            var product = $('#product').val();
            var subject = $('#subject').val();
            var gread = $('#gread').val();days
            var documentlength = $('#documentlength').val();
            var days = $('#days').val();
            var email = $('#email').val();
            var countrycode = $('#countrycode').val();
            var phoneuser = $('#phoneuser').val();
            var captcha = $('#captcha').val();
            if(product!="" && subject!="" && gread!="" && documentlength!="" && days!="" && email!="" && countrycode!="" && phoneuser!=""){
                $.ajax({
                    url: "https://www.researchmyassignment.com/ajax/orderDataSave1",
                    type: "POST",
                    data: {
                        product: product,
                        subject: subject,
                        gread: gread,
                        documentlength: documentlength,
                        days: days,
                        email: email,
                        countrycode: countrycode,
                        phoneuser: phoneuser,
                        captcha: captcha        
                    },
                    cache: false,
                    success: function(dataResult){
                        var dataResult = JSON.parse(dataResult);
                        if(dataResult.statusCode==200){
                            $('#fupForm2').find('input:text').val('');
                            $('#fupForm2')[0].reset();
                            // setTimeout(function(){ window.location.href = "thankyou"; }, 100);
                            var url =
                          "https://wa.me/447474941704?text=" +
                          "Product: " +  product + "%0a" +
                          "Subject: " + subject + "%0a" +
                          "Gread: " +  gread + "%0a" +
                          "Document length: " +  documentlength + "%0a" +
                          "Days: " +  days + "%0a" +
                          "EMail: " +  email + "%0a" +
                          "Country code: " +  countrycode + "%0a" +
                          "Phone: " +  phoneuser;
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
            function checkemail() {
                var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                var email = $('#useremail').val();
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
                if (!$.isNumeric($("#phoneuser").val())) {
                    $("#phone_err").html("only number is allowed");
                    return false;
                } else if ($("#phoneuser").val().length > 14 ) {
                    $("#phone_err").html("14 digit required");
                    return false;
                }
                else {
                    $("#phone_err").html("");
                    return true;
                }
            }