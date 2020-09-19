<?php
if ( $_POST ) {
	$firstname = $_POST["primeironome"];
	$lastname = $_POST["ultimonome"];
?>

<!DOCTYPE html>
<html> 
	<head> 
		<meta name="robots" content="noindex,  nofollow">
		<meta charset="utf-8">
		<title>Sorteio</title> 
		<style type="text/css">
		img {
			float: left;
			margin-right: 20px;
		}
		div {
			padding-top: 40px;
		}
		</style>
	</head>
	<body>

		<p>
			<img src="smiley-emoji-emoticon.jpg" alt="">
		</p>

		<div>
			<p>
				Obrigado, <strong><?php print($firstname); print(" "); print($lastname); ?></strong>,
				por entrar no sorteio.
			</p>
			<p>
				Se você ganhar alguma coisa, você será o primeiro a saber.
			</p>
		</div>


	</body> 
</html>


<?php

}

?>