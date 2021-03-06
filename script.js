var a =0;
var b=1;
var interval;
var id_user;

 


$(function(){

	var ctx = document.getElementById('Graphc').getContext('2d');
	var chart = new Chart(ctx,{
		type: 'line',
		data: {
			labels: [],
			datasets: [{
				label: [],
				backgroundColor: 'rgb(255, 99, 132)',
				borderColor: 'rgb(255, 99, 132)',
				data: [],
				fill: false,
			}],
		},
		options: {

			
			responsive: true,

			title: {
				display: true,
				text: 'Trabalho de DAW'
			},
			tooltips: {
				mode: 'index',
				intersect: true,
			},
			hover: {
				mode: 'nearest',
				intersect: true
			},
			scales: {
				xAxes: [{
					display: true,
					scaleLabel: {
						display: false,
						labelString: 'Tempo (segundos)'
					}
				}],
				yAxes: [{
					display: true,
					scaleLabel: {
						display: false,
						labelString: 'Value'
					}
				}]
			}
		}

	});
	function addData(chart, label, data) {
		chart.data.labels.push(label);
		chart.data.datasets.forEach((dataset) => {
			dataset.data.push(data);
		});
		chart.update();
	}
	function removeData(chart) {
		chart.data.labels.shift();
		chart.data.datasets.forEach((dataset) => {
			dataset.data.shift();
		});
		chart.update();
	}
	//fechar monitor

	$('.Graphc-sair').bind('click',function(){
		$('.Dashboard-admin-device-online').show();
		$('.Dashboard-admin-device-online-mqtt').hide();
		$('.Dashboard-admin-device-online-mqtt').each(function(){this.reset();})
	})

	//abrir monitor
	$('.selectDevice').bind('click',function(e){
		e.preventDefault();
		$('.Dashboard-admin-device-online').hide();
		for (i = 0; i < 8; i++) {
			removeData(chart);		
		}
		$('.Dashboard-admin-device-online-mqtt').show();
		
		var dados=[];
		var txt = $('#h3').text();
		for (var i = 0 ; i < 4; i++) {
			dados[i] = $(this).parents('tr').find('td').eq(i).text();
		}
		
		cont = 0;
		interval = setInterval(function(){
			$.ajax({
				type:'POST',
				url: '../../MQTT/subscribe.php',
				data: {server:dados[0],topic:dados[1],port:dados[2],client_id:dados[3]},
				dataType: 'json',
				success:function(html){
					
					a = parseInt(html)-10;
					b=4;
					console.log(cont);
					
					addData(chart,cont, a);
					if(a == 4){
						addData(chart,cont, a);
					}else{
						addData(chart,cont, a*-1);
					}
					
					addData(chart,cont, b);
					addData(chart,cont, b);
					if(cont<10){
						cont += 3;
					}else{
						for (i = 0; i < 4; i++) {
							removeData(chart);		
						}
					}
					
				}
			});
		}, 700);
	});


	//Força da senha
	$('#key').bind('keyup',function(){
		var txt = $(this).val();
		var force = 0;
		
		if(txt.length > 6){
			force += 25;
		}
		var reg = new RegExp(/[a-z]/i);
		if(reg.test(txt)){
			force += 25;
		}
		var reg = new RegExp(/[0-9]/i);
		if(reg.test(txt)){
			force += 25;
		}
		var reg = new RegExp(/[^a-z0-9]/i);
		if(reg.test(txt)){
			force += 25;
		}
		$('#forca').html('Força da senha:'+force+'%');
	});
	$(document).ready(function(){
		$("#cep").mask("99.999-999");
	});
	$(document).ready(function(){
		$("#fone").mask("(99)999-999-999");
	});	
	
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
	$('#btn-admin-device-online').bind('click',function(){
		$('.Dashboard-admin').hide();
		$('.Dashboard-admin-device-online').toggle();
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
	});
	$('#opcao-1').bind('mouseout', function(){
		$('#txt1').toggle();
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
		console.log('clicou');
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
		$('.login-forgot').hide();
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

	//cadastro mqtt
	$('#cadastroAdminMqtt').bind('click',function(e){
		e.preventDefault();
		for (var i = 0; i < 4; i++) {
			if($('#formMqtt').find('input:eq('+i+')').val()==''){
				alert("Favor verificar o campo vazio");
				$("input:text:eq("+i+"):visible").focus();
				var campo = "vazio";
				return;

			}
		}

		var txt = $('#formMqtt').serialize();
		console.log(txt);
		$.ajax({
			type: 'POST',
			url: '../../cadastroMqtt.php',
			data: txt,
			dataType: "json",
			success:function(html){
				$('#formMqtt').each(function(){this.reset();})
				alert("Sucesso!");
			}
		});
	});

	//cadastro posto
	$('#cadastroAdminPosto').bind('click',function(e){
		e.preventDefault();
		for (var i = 0; i < 5; i++) {
			if($('#formPosto').find('input:eq('+i+')').val()==''){
				alert("Favor verificar o campo vazio");
				$('#formPosto').find("input:eq("+i+"):visible").focus();
				var campo = "vazio";
				return;
			}
		}
		var txt = $('#formPosto').serialize();
		console.log(txt);
		$.ajax({
			type: 'POST',
			url: '../../cadastroPosto.php',
			data: txt,
			dataType: "json",
			success:function(html){
				$('#formPosto').each(function(){this.reset();})
				alert("Sucesso!");
			}
		});
	});

	//verifica senha
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
	//verifica email para criar
	$('#emailCadastro').bind('blur',function(){
		var email = $(this).val();
		$.ajax({
			type: 'POST',
			url: '../../scan.php',
			data: {email:email},
			dataType: "json",
			success:function(html){
				if(html != false){
					$('#emailCadastro').val("");
					alert("Este email ja existe");
				}
			}
		});
	});
	// verifica mqtt para criar
	$('#cliente_id').bind('blur',function(){
		var cliente_id = $(this).val();
		console.log(cliente_id);
		$.ajax({
			type: 'POST',
			url: '../../iot.php',
			data: {cliente_id:cliente_id},
			dataType: "json",
			success:function(html){
				if(html != false){
					$('#cliente_id').val("");
					alert("Este cliente_id já existe");
					$("input:text:eq(0):visible").focus();
				}
			}
		});
	});

	// verifica posto para criar
	$('#nomePosto').bind('blur',function(){
		var nome = $(this).val();
		console.log(nome);
		$.ajax({
			type: 'POST',
			url: '../../posto.php',
			data: {nome:nome},
			dataType: "json",
			success:function(html){
				if(html != false){
					$('#nomePosto').val("");
					alert("Este posto já existe");
					$('#formPosto').find("input:text:eq(0):visible").focus();

				}
			}
		});
	});
	//esqueci a senha
	$('.btn-login-forgot').bind('click',function(){
		$('.login').hide();
		$('.login-forgot').slideToggle();
	});
	//esqueci a senha etapa II
	$('.btn-login-forgot-enviar').bind('click',function(e){
		e.preventDefault();
		var email = $('.login-forgot').find('input:eq(0)').val();
		$.ajax({
			type: 'POST',
			url: 'php/forgot.php',
			data: {email,email},
			dataType: 'json',
			success:function(html){
				if(html != false){
					var id = html.id_user;
					var key = html.key_user;
					var hash = html.hash;
					var email = html.email_user;
					$.ajax({
						type: 'POST',
						url:'php/autoSend.php',
						data: {id:id,key:key,hash:hash,email:email},
						dataType: 'json',
						success:function(index){
							alert("teste");
						}
					});
				}else{
					$('.login-forgot').find('input:eq(0)').val("");;
					alert("Este Email não existe");
					$('.login-forgot').find("input:eq(0):visible").focus();
					return;
				}
				alert("Verifique seu email");
				$('.login-forgot').hide();
			}
		});
	});
	//açoẽs do botao de ativo 
	$('.table-medicos').on('click','.ativo_on',function(){
		var on = $(this).parents('tr').find('td').eq(3).text();
		var $this = $(this);
		$.ajax({
			type: 'POST',
			url: '../../active.php',
			data: {on:on},
			dataType: 'json',
			success:function(html){
				alert("Usuario desbloqueado");
				$this.attr('class','ativo_off').text('Ativo');
			}
		});

	});
	$('.table-medicos').on('click','.ativo_off',function(){
		var off = $(this).parents('tr').find('td').eq(3).text();
		var $this = $(this);
		$.ajax({
			type: 'POST',
			url: '../../disabled.php',
			data: {off:off},
			dataType: 'json',
			success:function(html){
				alert("Usuario bloqueado");
				$this.attr('class','ativo_on').text('Inativo');
			}
		});
	});
	// ações botão  ativar device

	$('.table-devices').on('click','.ativo_on',function(){
		var on = $(this).parents('tr').find('td').eq(3).text();
		var $this = $(this);
		console.log(on)
		$.ajax({
			type: 'POST',
			url: '../../activeDevice.php',
			data: {on:on},
			dataType: 'json',
			success:function(html){
				alert("Dispositivo desbloqueado");
				$this.attr('class','ativo_off').text('Ativo');
			}
		}); 

	});
	$('.table-devices').on('click','.ativo_off',function(){
		var off = $(this).parents('tr').find('td').eq(3).text();
		var $this = $(this);
		console.log(off)
		$.ajax({
			type: 'POST',
			url: '../../disabledD.php',
			data: {off:off},
			dataType: 'json',
			success:function(html){
				alert("Dispositivo bloqueado");
				$this.attr('class','ativo_on').text('Inativo');
			}
		});
	});
	$('.table-enferm').on('click','.ativo_on',function(){
		var on = $(this).parents('tr').find('td').eq(2).text();
		var $this = $(this);
		console.log(on);
		$.ajax({
			type: 'POST',
			url: '../../activeEnferm.php',
			data: {on:on},
			dataType: 'json',
			success:function(html){
				alert("Usuario desbloqueado");
				$this.attr('class','ativo_off').text('Ativo');
			}
		});

	});
	$('.table-enferm').on('click','.ativo_off',function(){
	var off = $(this).parents('tr').find('td').eq(2).text();
	var $this = $(this);
	console.log(off);
	$.ajax({
		type: 'POST',
		url: '../../disabledEnferm.php',
		data: {off:off},
		dataType: 'json',
		success:function(html){
			alert("Usuario bloqueado");
			$this.attr('class','ativo_on').text('Inativo');
		}
	});
});
// campo busca
$('.btn').bind('click', function(e){
	e.preventDefault();
	if($('.busca-btn').val()==""){
		alert("campo está vazio");
		$('.busca-btn').focus();
	}else{
		$('.text1').hide();
		$('.div-busca').show();
		
		var busca = $('.busca-btn').val();
		$.ajax({
			type:'POST',
			url: 'php/busca.php',
			data: {busca:busca},
			dataType:'html',
			success:function(html){
				console.log(html);
				$('.div-busca').html(html);
			}
		});
	}

});
$('.btn-sair').bind('click',function(){
	$('.busca-btn').focus();
	$('.div-busca').hide();
	$('.text1').show();
});

	//botao deletar medicos
	$('.table-medicos').on('click','.drop',function(){
		var drop = $(this).parents('tr').find('td').eq(3).text();
		var $this = $(this);
		$.ajax({
			type:'POST',
			url:'../../drop.php',
			data:{drop:drop},
			dataType:'json',
			success:function(html){
				alert("Medico Deletado");
				$this.parents('tr').hide();
			},
		});
	});
	//botao deletar enfermeiros
	$('.table-enferm').on('click','.dropEnferm',function(){
		var drop = $(this).parents('tr').find('td').eq(2).text();
		var $this = $(this);
		$.ajax({
			type:'POST',
			url:'../../dropUser.php',
			data:{drop:drop},
			dataType:'json',
			success:function(html){
				alert("Usuario Deletado");
				$this.parents('tr').hide();
			},
		});
	});
	//botao deletar devices
	$('.table-devices').on('click','.dropDevice',function(){
		var drop = $(this).parents('tr').find('td').eq(3).text();
		var $this = $(this);
		$.ajax({
			type:'POST',
			url:'../../dropDevice.php',
			data:{drop:drop},
			dataType:'json',
			success:function(html){
				alert("Device Deletado");
				$this.parents('tr').hide();
			},
		});
	});

	//atualiza dados medico fist acess
	$('#atualizar').bind('click',function(e){
		e.preventDefault();
		var form = document.getElementById('dados');
		var Serial = $('#dados').serialize();
		var formData = new FormData(form);
		$.ajax({
			type: 'POST',
			url: '../../imagem.php',
			data: formData,
			dataType: 'json',
			processData: false,  
			contentType: false,
			success:function(html2){
				document.getElementById('url').value = html2;
				var form = document.getElementById('dados');
				var Serial = $('#dados').serialize();
				$.ajax({
					type: 'POST',
					url: '../../atualizaMedico.php',
					data: Serial,
					dataType: 'json',
					success:function(html){
						alert("Alteração realizada com sucesso!!");
						location.reload(true);
					}
				});
			}
		});
	});
	//update Dados Medico etapa I
	$('.btn-dados-medico').bind('click',function(){
		$('.meusDados').hide();
		$('.atualizarDadosMedico').show();
	});
	//Update dados medico etapa II
	$('#SalvarDadosMedicos').bind('click',function(e){
		e.preventDefault();
		var form = document.getElementById('atualizarDadosMedico');
		var Serial = $('#atualizarDadosMedico').serialize();
		var formData = new FormData(form);
		$.ajax({
			type: 'POST',
			url: '../../imagem.php',
			data: formData,
			dataType: 'json',
			processData: false,  
			contentType: false,
			success:function(html2){
				document.getElementById('url').value = html2;
				var Serial = $('#atualizarDadosMedico').serialize();
				$.ajax({
					type: 'POST',
					url: '../../update.php',
					data: Serial,
					dataType: 'json',
					success:function(html){
						alert("Alteração realizada com sucesso!!");
						location.reload(true);
					}
				});
			}
		});
	});
	//update Dados enfermeiro etapa I
	$('.btn-dados-enfermeiro').bind('click',function(){
		$('.meusDados').hide();
		$('.atualizarDadosEnferm').show();
	});
	//Update dados enfermeiro etapa II
	$('#SalvarDadosEnferm').bind('click',function(e){
		e.preventDefault();
		
		var Serial = $('#atualizarDadosEnferm').serialize();
		console.log(Serial);
		$.ajax({
			type: 'POST',
			url: '../../updateU.php',
			data: Serial,
			dataType: 'json',
			success:function(html){
				alert("Alteração realizada com sucesso!!");
				location.reload(true);
			}
		});
	});
	//atualiza dados enfermeiro fist acess
	$('#atualizar-Enferm').bind('click',function(e){
		e.preventDefault();
		var Serial = $('#dados').serialize();
		$.ajax({
			type: 'POST',
			url: '../../atualizaEnferm.php',
			data: Serial,
			dataType: 'json',
			success:function(html){
				alert("Alteração realizada com sucesso!!");
				location.reload(true);
			}
		});
		
	});
	//enviar email para contato

	$('.input-cont-btn').bind('click',function(e){
		e.preventDefault();
		var email = $('#email').serialize();
		
		$.ajax({
			type: 'POST',
			url: 'php/send.php',
			data: email,
			dataType: 'json',
			success:function(){
				$('#email').each(function(){this.reset();})
				alert("Sua mensagem foi enviada com Sucesso!!!");

			}
		});

	});

	//altera senha e redireciona usuarios para seletor
	$('.submit-firstAcess').bind('click',function(e){
		e.preventDefault();
		var txt = $('#key').val();
		var force = 0;
		
		if(txt.length > 6){
			force += 25;
		}
		var reg = new RegExp(/[a-z]/i);
		if(reg.test(txt)){
			force += 25;
		}
		var reg = new RegExp(/[0-9]/i);
		if(reg.test(txt)){
			force += 25;
		}
		var reg = new RegExp(/[^a-z0-9]/i);
		if(reg.test(txt)){
			force += 25;
		}
		var old = $('#key').val();
		var senha = $('#keyRep').val();
		if(old == senha){
			for (var i = 0; i < 4; i++) {
				if($('#changeKey').find('input:eq('+i+')').val()==''){
					alert("Favor verificar o campo vazio");
					$('#changeKey').find("input:eq("+i+"):visible").focus();
					return;
				}
			}
			if(force >= 75){
				

				var id_user = $('#id_user').val();
				if (senha != null && id_user != null) {
					$.ajax({
						type: 'POST',
						url: '../keygen.php',
						data: {senha:senha, id_user,id_user},
						dataType: "json",
						success:function(){
							alert("Sua senha  foi alterada com sucesso! agora você sera redirecionado a sua dashboard.")
							window.location.assign("select.php");
						}
					});
				}
			}else{
				alert("Senha digitada é muito fraca!!!!");
				$('#changeKey').each(function(){
					this.reset();
					$('#key').focus();
				});
				
			}

		}else{
			
			alert("Senhas digitadas não estão iquais!!!!!");
			$('#changeKey').each(function(){
				this.reset();
				$('#key').focus();
			});
			
		}

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

});