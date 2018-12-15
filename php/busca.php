<?php
require_once('conect.php');
require_once('function.php');
$busca = $_POST['busca'];
$var = busca($pdo,$busca);

echo '<table class="table-busca">
	<div class="btn-busca-sair">
		<h2><strong>Resultado da Busca</strong><h2/>
		<button class="btn-sair">Sair</button><br><br>
	</div>

	<thead>
		<th scope="column">Nome medico</th>
		<th scope="column">Especialização</th>
		<th scope="column">Email</th>
		<th scope="column">Posto</th>
		<th scope="column">Cidade</th>
		<th scope="column">Endereço</th>
		<th scope="column">numero</th>
	</thead>';
foreach ($var as $key){
	// echo "<pre>";
	//  print_r($key);
	//  echo "</pre>";
	$html = '<tr>
			<td>'.$key['nome'].'</td>
			<td>'.$key['especialização'].'</td>
			<td>'.$key['email_user'].'</td>
			<td>'.$key['5'].'</td>
			<td>'.$key['cidade'].'</td>
			<td>'.$key['endereço'].'</td>
			<td>'.$key['4'].'</td></tr>';
		echo $html;
}

?>
<script type="text/javascript">
	$(function(){
		$('.btn-sair').bind('click',function(){
			$('.busca-btn').val("");
			$('.busca-btn').focus();
			$('.div-busca').hide();
			$('.text1').show();
		});
	
});
</script>