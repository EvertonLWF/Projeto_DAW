var id_user;
$(function(){
	// $('.btn-admin').bind('click', function(){
	// 	var $this = $(this),
	// 		teste = $this.attr('data-teste');

	// 		console.log(teste);
	// 	$('.Dashboard-admin').attr('data-teste', teste).toggle();

	// });
	//footer effects
	$('.redes-sociais-nave').bind('click',function(){
		$('.footer-index').hide();
		$(this).find('div').toggle();
		$('html').animate({
			"scrollTop": medic+300
		},1000);
	});

	$('.redes-sociais-cont').bind('click',function(){
		$('.footer-index').hide();
		$(this).find('div').toggle();
		$('html').animate({
			"scrollTop": medic+300
		},1000);
	});
	$('.redes-sociais-soci').bind('click',function(){
		$('.footer-index').hide();
		$(this).find('div').toggle();
		$('html').animate({
			"scrollTop": medic+300
		},1000);
	});
	
	//botoes admin-cadastro ->
	
	$('#btn-cadastro-users').bind('click',function(){
		$('.Dashboard-admin-cadastro').hide();
		$('.cadastro-admin-users').toggle();
	});
	$('#btn-cadastro-device').bind('click',function(){
		$('.Dashboard-admin-cadastro').hide();
		$('.cadastro-admin-mqtt').toggle();
	});
	$('#btn-cadastro-clinica').bind('click',function(){
		$('.Dashboard-admin-cadastro').hide();
		$('.cadastro-admin-posto').toggle();
	});

	//botoes admin-dashboard ->
	$('#btn-admin-medic').bind('click',function(){
		$('.Dashboard-admin').hide();
		$('.Dashboard-admin-medic').toggle();
	});
	$('#btn-admin-user').bind('click',function(){
		$('.Dashboard-admin').hide();
		$('.Dashboard-admin-user').toggle();
	});
	$('#btn-admin-device').bind('click',function(){
		$('.Dashboard-admin').hide();
		$('.Dashboard-admin-device').toggle();
	});
	$('#btn-admin-map').bind('click',function(){
		$('.Dashboard-admin').hide();
		$('.Dashboard-admin-map').toggle();
	});
	$('#btn-admin-emerg').bind('click',function(){
		$('.Dashboard-admin').hide();
		$('.Dashboard-admin-emerg').toggle();
	});
	$('#btn-admin-atend').bind('click',function(){
		$('.Dashboard-admin').hide();
		$('.Dashboard-admin-atend').toggle();
	});
	$('.btn-login').bind('click',function(){
		window.location.assign("php/index_user/select.php");
	});
	$('#btn4-a').bind('click',function(){
		window.location.assign("../../../index.php");
	});
	$('#btn8-a').bind('click',function(){
		window.location.assign("../../../index.php");
	});
	$('#btn4-u').bind('click',function(){
		window.location.assign("../../../index.php");
	});
	$('#btn8-u').bind('click',function(){
		window.location.assign("../../../index.php");
	});
	$('#btn4-m').bind('click',function(){
		window.location.assign("../../../index.php");
	});
	$('#btn8-m').bind('click',function(){
		window.location.assign("../../../index.php");
	});
	$('#opcao-1').bind('mouseover', function(){
		$('#txt1').fadeToggle();
		$(this).css('width',"200");
	});
	$('#opcao-1').bind('mouseout', function(){
		$('#txt1').toggle();
		$(this).css('width',"150");

	});
	$('#opcao-2').bind('mouseover', function(){
		$('#txt2').fadeToggle();
	});
	$('#opcao-2').bind('mouseout', function(){
		$('#txt2').toggle();
	});
	$('#opcao-3').bind('mouseover', function(){
		$('#txt3').fadeToggle();
	});
	$('#opcao-3').bind('mouseout', function(){
		$('#txt3').toggle();
	});
	$('#opcao-4').bind('mouseover', function(){
		$('#txt4').fadeToggle();
	});
	$('#opcao-4').bind('mouseout', function(){
		$('#txt4').toggle();
	});
	$('#opcao-5').bind('mouseover', function(){
		$('#txt5').fadeToggle();
	});
	$('#opcao-5').bind('mouseout', function(){
		$('#txt5').toggle();
	});
	$('#opcao-6').bind('mouseover', function(){
		$('#txt6').fadeToggle();
	});
	$('#opcao-6').bind('mouseout', function(){
		$('#txt6').toggle();
	});
	$('.hamburger').bind('click',function(){
		$('.div-btn').slideToggle('slow');
		$('html').animate({
			"scrollTop": home -300
		},1000);
	});

	//sublinado botoes text
	$('.li').hover(function(){
		$(this).css('text-decoration','underline');
	},function(){
		$(this).css('text-decoration','none');
	});

	$('.redes-sociais h3').hover(function(){
		$(this).css('text-decoration','underline');
	},function(){
		$(this).css('text-decoration','none');
	});


	//botões medicos
	$('.h1-medic-urol').bind('click',function(){
		$('.urol').toggle('slow');
		$('.pedi').hide('slow');
		$('.psiq').hide('slow');
		$('.card').hide('slow');
		$('.endo').hide('slow');
		
	});
	$('.h1-medic-pedi').bind('click',function(){
		$('.urol').hide('slow');
		$('.pedi').toggle('slow');
		$('.psiq').hide('slow');
		$('.card').hide('slow');
		$('.endo').hide('slow');
	});
	$('.h1-medic-psiq').bind('click',function(){
		$('.urol').hide('slow');
		$('.pedi').hide('slow');
		$('.psiq').toggle('slow');
		$('.card').hide('slow');
		$('.endo').hide('slow');
	});
	$('.h1-medic-card').bind('click',function(){
		$('.urol').hide('slow');
		$('.pedi').hide('slow');
		$('.psiq').hide('slow');
		$('.card').toggle('slow');
		$('.endo').hide('slow');
	});
	$('.h1-medic-endo').bind('click',function(){
		$('.urol').hide('slow');
		$('.pedi').hide('slow');
		$('.psiq').hide('slow');
		$('.card').hide('slow');
		$('.endo').toggle('slow');
	});
	

	var home = $('.home').offset().top;
	var medic = $('.medic').offset().top;
	var services = $('.services').offset().top;
	$('#btn1').bind('click',function(){
		$('html').animate({
			"scrollTop": home -300
		},1000);
	});
	$('#btn2').bind('click',function(){
		$('html').animate({
			"scrollTop": services -65
		},1000);
	});
	$('#btn3').bind('click',function(){
		$('html').animate({
			"scrollTop": medic -65
		},1000);
	});

	//responsividade
	$('#btn5').bind('click',function(){
		$('html').animate({
			"scrollTop": home -300
		},1000);
	});
	$('#btn6').bind('click',function(){
		$('html').animate({
			"scrollTop": services -100
		},1000);
	});
	$('#btn7').bind('click',function(){
		$('html').animate({
			"scrollTop": medic -100
		},1000);
	});
	$('#btn4').bind('click', function(){
		$('.login').slideToggle();
		$('.btn-login').attr('disabled','disabled');
		$('.input-login-senha').attr('disabled','disabled');
	});
	$('#btn8').bind('click', function(){
		$('.login').slideToggle();
		$('.btn-login').attr('disabled','disabled');
	});
	$('.input-login').bind('blur',function(e){
		e.preventDefault();
		var email = $(this).val();
		$.ajax({
			type: 'POST',
			url: 'php/login.php',
			data: {mail:email},
			dataType: "json",
			success:function(html){
				console.log(html.mail);
				console.log(html.id_user);
				id_user = html.id_user;
				if(html.status == 'ok'){
					$('.input-login').css('border-color','green');
					$('.input-login-senha').removeAttr('disabled','disabled');
				}else{
					$('.input-login-senha').attr('disabled','disabled');
					$('.input-login').css('border-color','red');
					
				}
				
			}
			

		});
	});
	$('.input-login-senha').bind('blur',function(e){
		e.preventDefault();
		var senha = $(this).val();
		$.ajax({
			type: 'POST',
			url: 'php/login.php',
			data: {senha:senha, id_user:id_user},
			dataType: "json",
			success:function(html){
				console.log(id_user);
				if(html.status == 'ok'){
					$('.input-login-senha').css('border-color','green');
					$('.btn-login').removeAttr('disabled','disabled');
				}else{
					$('.input-login-senha').css('border-color','red');
					$('.btn-login').attr('disabled','disabled');
				}
			}
		});
	});
	
	
});
var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
	forEach(hamburgers, function(hamburger) {
		hamburger.addEventListener("click", function() {
			this.classList.toggle("is-active");
		}, false);
	});
}