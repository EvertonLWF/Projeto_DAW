<?php 

$id = $_SESSION['id_user'];


?>



<div class="home">
	<br><br>
	<form class="form-cadastro" id="changeKey">
		<input type="hidden" name="id" id="id_user"value="<?php echo $id; ?>">
		<h3>Seja bem vindo:</h3>
		<hr>
		<h4>É necessario alterar a sua senha </h4>
		<label for="key">Nova senha:</label>
		<input type="password" name="key" id="key"><br><br>
		<label for="keyRep">Repita a senha:</label>
		<input type="password" name="keyRep" id="keyRep"><br><br>
		<div id="forca">Força da senha:</div><br><br>
		
		<input type="submit" class="submit-firstAcess" value="Salvar">
	</form>
</div>
<div class="services">
	<h3>Termos e condições</h3>
	<textarea class="terms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget rhoncus quam, vel feugiat turpis. Maecenas eget fringilla ante, id mattis arcu. Nullam sagittis sem vel urna consequat maximus. In ultrices odio id tellus commodo consectetur. Integer eget viverra elit. Pellentesque varius eros non imperdiet scelerisque. Sed velit diam, consectetur eget nisi ut, aliquet tempor eros. Suspendisse sit amet massa sit amet risus sagittis semper quis in elit. Aliquam fermentum rhoncus ante in rutrum. Donec et volutpat lorem, sed faucibus eros. Fusce rutrum felis urna, quis elementum erat dignissim nec. Donec sem augue, mattis ac velit sed, feugiat interdum diam. Pellentesque eget urna vitae est pulvinar maximus ut a erat.

		Cras arcu magna, lobortis vel sapien vel, tincidunt rhoncus turpis. Mauris blandit nulla a ipsum fermentum, eu fringilla nulla aliquet. Aliquam bibendum metus a turpis facilisis suscipit. Nunc commodo dolor urna, vel eleifend sem placerat in. Praesent eu vulputate tellus. Ut ultrices volutpat vehicula. Sed vitae viverra nunc.

		Donec id elit sed velit rhoncus ornare id sed felis. Proin quis ante at ligula tempus egestas. Aliquam vitae lobortis ante. Etiam at posuere dolor, vel pharetra augue. Nam eget pharetra nisl. Praesent iaculis felis mi, in sagittis tortor aliquet a. Mauris id lectus mattis, scelerisque tellus quis, lacinia odio. In sollicitudin mollis felis, eu blandit ex. Fusce ornare tempor neque at pharetra. Donec pretium cursus porttitor.

		Praesent id odio neque. Duis mollis, ante sed tristique mollis, sem erat lacinia sem, vel tempus risus urna ac ipsum. Morbi vulputate semper lectus, vel commodo metus ullamcorper quis. Maecenas magna urna, maximus id tortor at, interdum blandit nisi. Sed hendrerit volutpat metus nec vehicula. Quisque imperdiet nulla eu interdum convallis. Ut quis mi nec lorem euismod suscipit non sed ante. Donec vel lorem orci. Fusce finibus libero mollis, interdum justo a, sodales dui. Cras id consequat sem. Morbi pretium molestie commodo. Quisque ullamcorper volutpat diam vitae pretium. Sed fringilla fringilla orci, sit amet euismod dui condimentum vel. Integer rhoncus quam at urna dignissim commodo.

		Fusce scelerisque dolor eget lacus consectetur, a ornare odio elementum. Duis in urna congue, molestie augue facilisis, porta lorem. Duis varius eros purus, non elementum risus sollicitudin nec. Phasellus sed tincidunt eros. Vivamus in massa scelerisque, luctus ante vitae, ultricies velit. Donec tincidunt consectetur tempus. Donec nec risus urna. Curabitur vel augue feugiat sapien consequat pharetra a sed libero. Quisque convallis lacinia ex ac laoreet. Donec a varius felis. Sed elementum blandit sapien, sed lobortis purus scelerisque non. Curabitur tempus consequat velit, a elementum risus tincidunt eget. Nullam ullamcorper laoreet erat sed porttitor. Sed auctor metus euismod turpis iaculis fringilla. Maecenas eget semper ante. Aenean aliquam sagittis turpis sed placeratLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget rhoncus quam, vel feugiat turpis. Maecenas eget fringilla ante, id mattis arcu. Nullam sagittis sem vel urna consequat maximus. In ultrices odio id tellus commodo consectetur. Integer eget viverra elit. Pellentesque varius eros non imperdiet scelerisque. Sed velit diam, consectetur eget nisi ut, aliquet tempor eros. Suspendisse sit amet massa sit amet risus sagittis semper quis in elit. Aliquam fermentum rhoncus ante in rutrum. Donec et volutpat lorem, sed faucibus eros. Fusce rutrum felis urna, quis elementum erat dignissim nec. Donec sem augue, mattis ac velit sed, feugiat interdum diam. Pellentesque eget urna vitae est pulvinar maximus ut a erat.

		Cras arcu magna, lobortis vel sapien vel, tincidunt rhoncus turpis. Mauris blandit nulla a ipsum fermentum, eu fringilla nulla aliquet. Aliquam bibendum metus a turpis facilisis suscipit. Nunc commodo dolor urna, vel eleifend sem placerat in. Praesent eu vulputate tellus. Ut ultrices volutpat vehicula. Sed vitae viverra nunc.

		Donec id elit sed velit rhoncus ornare id sed felis. Proin quis ante at ligula tempus egestas. Aliquam vitae lobortis ante. Etiam at posuere dolor, vel pharetra augue. Nam eget pharetra nisl. Praesent iaculis felis mi, in sagittis tortor aliquet a. Mauris id lectus mattis, scelerisque tellus quis, lacinia odio. In sollicitudin mollis felis, eu blandit ex. Fusce ornare tempor neque at pharetra. Donec pretium cursus porttitor.

		Praesent id odio neque. Duis mollis, ante sed tristique mollis, sem erat lacinia sem, vel tempus risus urna ac ipsum. Morbi vulputate semper lectus, vel commodo metus ullamcorper quis. Maecenas magna urna, maximus id tortor at, interdum blandit nisi. Sed hendrerit volutpat metus nec vehicula. Quisque imperdiet nulla eu interdum convallis. Ut quis mi nec lorem euismod suscipit non sed ante. Donec vel lorem orci. Fusce finibus libero mollis, interdum justo a, sodales dui. Cras id consequat sem. Morbi pretium molestie commodo. Quisque ullamcorper volutpat diam vitae pretium. Sed fringilla fringilla orci, sit amet euismod dui condimentum vel. Integer rhoncus quam at urna dignissim commodo.

	Fusce scelerisque dolor eget lacus consectetur, a ornare odio elementum. Duis in urna congue, molestie augue facilisis, porta lorem. Duis varius eros purus, non elementum risus sollicitudin nec. Phasellus sed tincidunt eros. Vivamus in massa scelerisque, luctus ante vitae, ultricies velit. Donec tincidunt consectetur tempus. Donec nec risus urna. Curabitur vel augue feugiat sapien consequat pharetra a sed libero. Quisque convallis lacinia ex ac laoreet. Donec a varius felis. Sed elementum blandit sapien, sed lobortis purus scelerisque non. Curabitur tempus consequat velit, a elementum risus tincidunt eget. Nullam ullamcorper laoreet erat sed porttitor. Sed auctor metus euismod turpis iaculis fringilla. Maecenas eget semper ante. Aenean aliquam sagittis turpis sed placerat.</textarea><br>

	<h5> <input type="checkbox" name="">   Aceito os termos e condições</h5>
</div>

<div class="medic">
	<h2 class="text1">The Future Of Medical Website</h2><br><br>
	<div>
		<img class="img" id="opcao-1" src="../../img/medic.png">
		<img class="img" id="opcao-2" src="../../img/term.png">
		<img class="img" id="opcao-3" src="../../img/remedio.png">
		<p class="home-p" id="txt1">	Lorem ipsum hendrerit lorem vestibulum dui suscipit massa potenti accumsan, aliquam suscipit duis ultrices conubia tortor feugiat pharetra, nulla commodo elit vestibulum enim blandit platea neque. pharetra aliquam molestie consectetur nec, habitant tincidunt gravida himenaeos interdum, sagittis accumsan erat. sodales habitasse inceptos vel consectetur torquent lorem curae fermentum, proin purus lacus iaculis risus malesuada nulla sagittis, platea senectus eu fringilla tempor at aenean. primis erat ante etiam fusce curae cubilia vivamus consectetur, mollis sem et ligula class neque curae, diam pharetra etiam tempor aptent a tempor. elit condimentum integer sociosqu eu mauris sed libero, etiam ultrices integer scelerisque quis justo. </p>
		<p class="home-p" id="txt2">Lorem ipsum per odio mattis tellus donec elit lacinia felis, pharetra iaculis pharetra blandit semper sem pharetra ultrices auctor, eu malesuada libero tincidunt lobortis imperdiet curae eget. faucibus lorem nam consequat ut congue dolor gravida venenatis pretium eget, euismod sem ligula platea auctor ut aliquam aptent dictumst magna congue, dolor ultricies quisque litora lobortis tincidunt vel habitasse sollicitudin. fames senectus ultricies orci ultrices inceptos ultrices lobortis, nec non adipiscing potenti rutrum nisl aptent placerat, commodo cras imperdiet curae vulputate viverra. platea ligula nisi in aliquam dapibus curae ullamcorper, et porttitor consequat odio ad bibendum, mollis ad feugiat metus gravida aptent. </p>
		<p class="home-p" id="txt3">Lorem ipsum aliquam tellus at himenaeos metus neque litora, imperdiet potenti porttitor urna ad ipsum aenean varius condimentum, id litora vitae class felis conubia aliquet. tempus ante interdum semper posuere ad eros lacus purus arcu, erat auctor sodales fusce purus molestie phasellus torquent sollicitudin, ad id etiam sociosqu et sollicitudin a torquent. nulla feugiat etiam aliquam posuere tellus aliquam, tortor lobortis nam viverra leo mattis orci, tempor pretium cursus quisque elit. suscipit taciti mattis enim pharetra posuere mi viverra curabitur cursus risus praesent senectus, pulvinar dolor bibendum ipsum venenatis at erat etiam nullam mattis. </p>
	</div>
</div>
