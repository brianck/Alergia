// JavaScript Document by: jchavez
$(document).ready(function() {
	$('.bxslider').bxSlider({
		responsive: true,
		adaptiveHeight:true,
		hideControlOnEnd:false,
		touchEnabled:true,
		controls:false,
		pagerCustom: '#thumbs'

	});
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	//Modal Open Lost Password Form
	$('#lostPassword').click(function(){
		$('#modalLogin').modal('hide');
		$('#modalLostPassword').modal('show');
	});
	//Modal Open Login Form
	$('#backLogin').click(function(){
		$('#modalLostPassword').modal('hide');
		$('#modalLogin').modal('show');
	});

	//Modal Open Lost Password Form
	$('#newUser').click(function(){
		$('#modalLogin').modal('hide');
		$('#modalNewUser').modal('show');
	});

		//Modal Open Login Form
	$('#backLogin2').click(function(){
		$('#modalNewUser').modal('hide');
		$('#modalLogin').modal('show');
	});



	
	$('#menu ul.nav li.submenu').hover(function() {
		$(this).addClass("active");
		$(this).find('ul.subs').show();
	}, function() {
		$(this).find('ul.subs').hide();
		$(this).removeClass("active");
	});


	$('#menu ul.nav li.submenu-sub').hover(function() {
		$(this).addClass("active");
		$(this).find('ul.subs-sub').slideDown();
	}, function() {
		$(this).find('ul.subs-sub').slideUp();
		$(this).removeClass("active");
	});

  	clean();
});

/*==Clean Form==*/
function clean(){
	jQuery(".clean").focusin(function() {
		var textareaTxt = this.value;
		if(textareaTxt == 'Nombre' || textareaTxt == 'Email' || textareaTxt == 'Mensaje'){
			this.value = '';
			jQuery(this).css({'color':'#000'});
		}
	});
}
/*==//END-Clean Form==*/

/*==Email Validator==*/
function validateEmail(email){
   var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
   isValid = emailPattern.test(email);
	if(isValid){
		return true;
	}else{
		return false;
	}
}
/*==//END-Email Validator==*/

/*==FORM VALIDATOR ==*/
function checkRequired(){
	//Check if required fields are filled
	var counter = 0;
	jQuery("input.required, select.required, textarea.required").each(function(index) {
		contentField = jQuery(this).val();
		//Check if empty
		if(contentField == '' || contentField == null || contentField == '0'){
			//Change BG style
			jQuery(this).css({'background-color':'#8a8a8a'});
			//Take the cursor to the first field
			if(counter == 0){
				jQuery(this).focus();
			}
			counter++;
		}else{
			//Reset style
			jQuery(this).css({'background-color':'#FFFFFF'});
		}
	});

	//If any field is "not valid"
	if(counter > 0){
		//Set this message
		alert('Fields can not be empty');
		return false;
	}else{
		//Reset the error message
		return true;
	}
}
/*==END-FORM VALIDATOR ==*/


function checkForm(){
	one = checkRequired();
	jQuery("input.validEmail").each(function(index) {
		contentField = jQuery(this).val();
		two = validateEmail(contentField);
		if(!two){
			//jQuery('.errMsg').html('Insert a valid email');
			alert('Insert a valid email');
		}
	});
if(one && two){
	var name = $('#name').val();
	var email = $('#email').val();
	var subject = $('#subject').val();
	var message = $('#message').val();

	var flag1=true;

			$('#wrapper_form').html('<div id="response_div"><img src="img/ajax-loader.gif" /></div>');
			/*
			$.ajax({
			   type: "POST", 
			   url: "sendform.php",
			   data: 'pname='+name+'&pemail='+email+'&psubject='+subject+'&pmessage='+message,
			   success: function(msg){
				   if(msg){
				   		flag1=true;
				   }else{
				   		flag1=false;
				   }
			   }
			 });
			*/
			$.ajax({
			   type: "POST", 
			   url: "app/insert-contact.php",
			   data: 'pname='+name+'&pemail='+email+'&psubject='+subject+'&pmessage='+message,
			   success: function(msg){
			   	alert(msg);
				   if(msg){
				   	//if(flag1==true){
				   		successFull();
				   	//}
   					    
				   }else{
				   		errorFull();
				   }
			   }
			 });
		return true; 
	}else{
		return false;
	}
}

function successFull(){
	clean();
	$('#wrapper_form').html('<div id="response_div">Thank you your message has been sent</div>');
}

function errorFull(){
	clean();
	$('#wrapper_form').html('<div id="response_div">Your message was sent to NO, please try again later.</div>');
}

