<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/funcao.css">
    <title>CADASTRO DE ITENS</title>
</head>
<body>
	<header>
		<h1>Carrinho</h1>
	</header>

	<main>
   <?php

	session_start();
	
	$nome = $_GET['nome'];	
	$preco = $_GET['preco'];
	$quant = $_GET['quant'];
	$img = $_GET['image'];

	$produtos[] = array($nome,$preco,$quant,$img);

	$_SESSION['produtos'][] = $produtos;

	if(isset($_SESSION['produtos'])){
		foreach($_SESSION['produtos'] as $produtos){
			echo "<section>";
			echo '<h1>Produto: '.$produtos[0][0].'</h1>';
			echo '<br>';
			echo '<h1>Preço: R$ '.$produtos[0][1] . '</h1>';
			echo '<br>';
			echo '<h1> Quantidade: ' . $produtos[0][2] . ' unidades</h1>';
			echo '<br>';
			echo  '<img src="'. $produtos[0][3] . '" alt ="img">';
			echo '</br>';
			echo '<input type="submit" value="Comprar" class="input">';
			echo '</section>';
	
		}
	}
	?>
   </main>
    
</body>
</html>