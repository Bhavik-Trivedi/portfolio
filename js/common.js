	$('.scrolls').click(function(evt) { 
	 	var $anchor = $(this); 
	 	$('html, body').stop().animate({ 
	 		scrollTop: $($anchor.attr('href')).offset().top 
	 	}, 800);

	 	evt.preventDefault(); 
	});
// https://www.freewebhostingarea.com
$(document).ready(function(){
  $("a[href$='https://www.freewebhostingarea.com']").css("display", "none");});
$(document).on('click','.recent_works_slider_tabs_div_a', function(e){

	var recent_works_slider_tabs = $(this).attr('for');
	// $(".all_services").fadeOut(0);
	// $("."+recent_works_slider_tabs).fadeIn(1000);
	$('.recent_works_slider_tabs_div_a').removeClass('active_a');
	$(this).addClass('active_a');

});

$('.recentwork-filter').jplist({				
	itemsBox: '.list' 
	,itemPath: '.list-item' 
	,panelPath: '.rw_filter'	
    ,effect: 'fade'
    ,redrawCallback: function(collection, $dataview, statuses){
        var filteredOf=statuses[0].data.path;
        if(filteredOf=="default"){
        	filteredOf="All";
        }else{
        	filteredOf=filteredOf.replace('.','');
        }
    }
});

$(document).ready(function(){
	function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }

    	$("#contactform .send_btn").click(function() {

            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var yourmessage = $('#yourmessage').val();



            $('#name').css("border","2px solid #282828");
            $('#email').css("border","2px solid #282828");
            $('#phone').css("border","2px solid #282828");
            $('#yourmessage').css("border","2px solid #282828");



            if(name === ''){

                $('#name').focus();
                $('#name').css("border","2px solid red");
                return false;
            }

            else if(email === ''){
                $('#email').focus();
                $('#email').css("border","2px solid red");
                return false;
            }

            else if(!validateEmail(email)){
                $('#email').focus();
                $('#email').css("border","2px solid red");
                return false;
            }

            else if(phone === ''){
                $('#phone').focus();
                $('#phone').css("border","2px solid red");
                return false;
            }

            else if(isNaN(phone)){
                $('#phone').focus();
                $('#phone').css("border","2px solid red");
                return false;
            }

            else if(phone.length > 10 || phone.length < 10){
                $('#phone').focus();
                $('#phone').css("border","2px solid red");
                return false;
            }

            else if(yourmessage === ''){
                $('#yourmessage').focus();
                $('#yourmessage').css("border","2px solid red");
                return false;
            }        

           	else{
                   	// var base_url = window.location.origin;
                   	// $.ajax({

                    //    	url: 'action.php',

                    //    	type: 'post',

                    //    	data: {name: name,email: email,phone: phone,yourmessage: yourmessage},

                    //    	success:function(responseText){

                           

                    //        	if(responseText == 1){

                    //           	// window.location.href="thankyou";
                    //           	alert(responseText);
                    //           	alert("Form Submitted !");

                    //        	}

                    //        else if(responseText == 2){
                    //        		alert(responseText);
                    //           	//$('.email_id_error').show();

                    //           	$(".email_id_error").show().delay(5000).fadeOut();

                    //           	$('#email').css("border","2px solid red");

                    //           	return false;

                    //        	}

                    //        	else

                    //        	{

                    //            alert(responseText);

                    //        	}

                    //    	}

                   	// });
                   	// alert();
               	}

        });    

        function validateEmail($email) {

          var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

          return emailReg.test( $email );

        }
    
    // function validateEmail($email) {
    //  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    //  return emailReg.test( $email );
    // }

	// $('#contactform').submit(function(e){
	//     e.preventDefault();
	//     var name = $(this).find('#name').val();
	//     var email_id = $(this).find('#email').val();
	//     var phone = $(this).find('#phone').val();
	//     var yourmessage = $(this).find('#yourmessage').val();
	    
	//     if(name === ''){
	//         $(this).find('#name').focus();
	//         $(this).find('#name').addClass('validateerror');
	//         return;
	//     }
	//     else{
	//         $(this).find('#name').removeClass('validateerror');
	//     }		    
	    
	//     if(email_id === '' || (!validateEmail(email_id)) ){
	//         $(this).find('#email').focus();
	//         $(this).find('#email').addClass('validateerror');
	//         return;
	//     }
	//     else{
	//         $(this).find('#email').removeClass('validateerror');
	//     }
	    
	//     if(phone === '' || phone.length < 10 || phone.length > 10 ){
	//         $(this).find('#phone').focus();
	//         $(this).find('#phone').addClass('validateerror');
	//         return;
	//     }
	//     else{
	//         $(this).find('#phone').removeClass('validateerror');
	//     }
	    
	//     if(yourmessage === ''){
	//         $(this).find('#yourmessage').focus();
	//         $(this).find('#yourmessage').addClass('validateerror');
	//         return;
	//     }
	//     else{
	//         $(this).find('#yourmessage').removeClass('validateerror');
	//     }
	    
	//     var data = $(this).serialize();
	//     $("#contactform .send_btn").prop('disabled',true);
	//     $.ajax({
	//         // url:'mailGetInTouch.php',
	//         // url:'mailGetInTouch',
	//         // url:'mailContactus',
	//         // type:'post',
	//         // data:data,
	//         // success:function(result){
	//         //     $("#appointmentform .sh_submit_btn").prop('disabled',false);
	//         //     if(result == '1'){
	//         //         // window.location.replace("get-in-touch-thankyou.php");
	//         //         // window.location.replace("contactus-thankyou.php");
	//         //         window.location.replace("thank-you.php");

	//         //         // $('#form_msg').modal();
	//         //         // $('#form_msg .modal_msg').html('Thank you for writing to us.<br>We will get in touch with you soon.');
	//         //         // setTimeout(function(){
	//         //         //     $('#appointmentform')[0].reset();
	//         //         // },800)
	//         //     }
	//         //     else{
	//         //         $('#form_msg .modal_msg').text('Please try again');
	//         //     }
	//         //     setTimeout(function(){
	//         //         $('#form_msg').modal('hide');
	//         //         setTimeout(function(){
	//         //             $('#form_msg .modal_msg').html('');
	//         //             $('#form_msg .modal_msg').fadeIn();
	//         //         },800)
	//         //     },4000);
	//         // }
	//     })
	// })

	

	var targetOffset = 10;

	var $w = $(window).scroll(function(){
	    if ( $w.scrollTop() > targetOffset ) {
	        $(".navbar").addClass("minimized");
	    } else {
	      	$(".navbar").removeClass("minimized");
	    }
    });

	// $('.scrolls').click(function(evt) {
	// 	// alert();
 // 		var $anchor = $(this); 
 // 		// $('html, body').stop().animate({ 
 // 		// 	scrollTop: $($anchor.attr('href')).offset().top 
 // 		// }, 800);
 // 		$('html, body').animate({
	// 	        scrollTop: $("#myDiv").offset().top
	// 	    }, 2000);
 // 		evt.preventDefault(); 

 // 	});
});

var swiper = new Swiper('.who_am_i_swiper.swiper-container', {
	slidesPerView: 1,
  	spaceBetween: 0,
  	direction: 'vertical',
  	loop: true,
  	simulateTouch: false,
  	autoplay: {
        delay: 1500,
        disableOnInteraction: true,
    },
   	breakpoints: {
        767: {
        	
        	direction: 'horizontal',
        },
  	}
});

var swiper = new Swiper('.features_swiper.swiper-container', {
	slidesPerView: 3,
  	spaceBetween: 30,
  	observer: true,
  	observeParents: true,
	autoplay: {
        delay: 3000,
        disableOnInteraction: true,
    },
    pagination: {
    	el: '.swiper-pagination',
    	clickable: true,
  	},
  	breakpoints: {
        767: {
    		slidesPerView: 1,
    	  	spaceBetween: 0,
        },
  	}
});

var swiper = new Swiper('.education_swiper.swiper-container', {
	slidesPerView: 2,
  	spaceBetween: 0,
  	observer: true,
  	observeParents: true,
	autoplay: {
        delay: 3000,
        disableOnInteraction: true,
    },
    pagination: {
    	el: '.swiper-pagination',
    	clickable: true,
  	},
  	breakpoints: {
        767: {
    		slidesPerView: 1,
    	  	spaceBetween: 0,
        },
  	}
});

var swiper = new Swiper('.work_experience_swiper.swiper-container', {
	slidesPerView: 3,
  	spaceBetween: 30,
});

var swiper = new Swiper('.recent_works_tabs_swiper.swiper-container', {
	slidesPerView: 6,
  	spaceBetween: 20,
  	observer: true,
  	observeParents: true,
  	simulateTouch: false,
  	breakpoints: {
        814: {
			slidesPerView: 4.5,
		  	simulateTouch: true,
        },
        767: {
			slidesPerView: 2.5,
		  	simulateTouch: true,
        },
        375: {
			slidesPerView: 2.5,
		  	simulateTouch: true,
        },
        320: {
			slidesPerView: 1.5,
		  	simulateTouch: true,
        },
  	}
});

var swiper = new Swiper('.recent_works_swiper.swiper-container', {
	slidesPerView: 4,
  	slidesPerColumn: 2,
  	spaceBetween: 20,
  	observer: true,
  	observeParents: true,
  	pagination: {
    	el: '.swiper-pagination',
    	clickable: true,
  	},
  	breakpoints: {
        767: {
			slidesPerView: 1,
		  	slidesPerColumn: 2,
        },
  	}
});