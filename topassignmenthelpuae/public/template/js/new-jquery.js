
    
    
    setTimeout(function () {
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
    $.src="http://v2.zopim.com/?34KurlRciOZfxKvgpzMNnejxGMPl8uS0";z.t=+new Date;$.
    type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    }, 15000);
 
 
                function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }


                function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }



$(document).ready(function() {
     $('#eemail').on('input', function () {
        checkemail();
    });
$('#butsave1').on('click', function() {
var email = $('#eemail').val();
if(email !=""){
	$.ajax({
		url: "https://www.researchmyassignment.com/ajax/save_email",
		type: "POST",
		data: {
			email: email,
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				$('#myfrom').find('input:text').val('');
				$('#myfrom')[0].reset();
                // setTimeout(function(){ window.location.href = "thankyou.php"; }, 100);
                // window.location.href= "thankyou.php";
                // $('#message').html('Thanks for Subscribe.');
                alert('Thanks for Subscribe.');
			}
			else if(dataResult.statusCode==201){
			    $('#myfrom').find('input:text').val('');
				$('#myfrom')[0].reset();
				// alert("Error occured !");
				// $('#message').html('Error occured !');
				alert('You are already Subscribed.');
			}
			else if(dataResult.statusCode==202){
				// alert("Error occured !");
				// $('#message').html('Error occured !');
				alert('Invalid email address.');
			}
		}
	});
	}else{
	    alert('Please fill all the field !');
	}
});
});

function checkemail() {
    var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var email = $('#eemail').val();
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



        // $('.owl-carousel').owlCarousel({
        //     loop: true,
        //     margin: 10,
        //     nav: true,
        //     items: 1,
        //     dots: false,
        //     autoplay: true,
        //     autoplayTimeout: 2000,
        //     autoplayHoverPause: true,
        //     navText: ["<i class='fa-solid fa-left-long'></i>", "<i class='fa-solid fa-right-long'></i>"]
        // })

  var myDropdown = document.getElementsByClassName('toggle')
for (i=0; i<myDropdown.length; i++) {
    myDropdown[i].addEventListener('click' , function () {
        var el = this.nextElementSibling;
        el.style.display = el.style.display == 'block' ? 'none' : 'block';
    });
}
$('.toggle').on('click', function (e) {
    e.target.classList.toggle('rotate');
});


        // Get the button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }


var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  
//   dots[slideIndex-1].className += " active";
}

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image every 5 seconds
} 


        window.onscroll = function () {
            myFunction();
        };

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }

        }
  
  
                    $(function () {
                //$('.showstore').hide();
                $('.showbrand').hide();

                $("input[name=user-type]:radio").click(function () {

                    if ($('input[name=user-type]:checked').val() == "Brand") {
                        $('.showstore').hide();
                        $('.showbrand').show();

                    } else if ($('input[name=user-type]:checked').val() == "Store") {
                        $('.showstore').show();
                        $('.showbrand').hide();

                    }
                });
            }); 


      $(function(){
    setTimeout(function(){
        $("#alert").hide();
        }, 8000);
      });
