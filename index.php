<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Produtos</title>
		<meta charset="UTF-8"/>
        <link rel="stylesheet" href="./css/style.css">
	</head>
	<body>
	<div class="box">
        <div class="img-box">
            <img src="imagens/img-formulario.png" alt="">
            <h1></h1>
        </div>
        <div class="form-box">
            <h2>PRODUTO</h2>
            <section>
                <Form action="funcao.php" method="GET" >
                    <div class="input">
                        <label>Nome:</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite o nome do produto"  required> 
                    </div>
               
                    <div class="input">
                        <label>Preço:</label>
                        <input type="text" id="preco" name="preco"  placeholder="Digite o preço" required>
                    </div>
                       
                    <div class="input">
                        <label>Quantidade:</label>
                        <input type="number" id="number"  name="quant" placeholder="Digite a quantidade" required>
                    </div>
                    
                    <div class="input">
                        <label>Imagem:</label>
                        <input type="text" name="image" id="image" placeholder="link da imagem">
                    </div>
                 
                    <div class="input" id="enviar">
                      <input type="submit" value="Cadastrar">
                    </div>
                </Form>
            </section>
        </div>
   </div>

	</body>
</html>