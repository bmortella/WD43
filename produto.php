<?php
    $conexao = mysqli_connect("mysql.hostinger.com.br","u815183394_mysdd","nainein","u815183394_teste");
    $dados = mysqli_query($conexao, "SELECT * FROM teste WHERE id = 1");
    $produto = mysqli_fetch_array($dados);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Mirror Fashion - <?= $produto["nome"]?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
    <link rel="stylesheet" href="css/produto.css">
  </head>
  <body>
<?php include("cabecalho.php"); ?>
<div class="produto-back">
<div class="container">
 <div class="produto">
  <h1><?= $produto["nome"] ?></h1>
  <p>por apenas <?= $produto["preco"]?></p>
  
  <form action="checkout.php" method="POST">
  <input type="hidden" name="nome" value="<?= $produto["nome"]?>">
  <input type="hidden" name="preco" value="<?= $produto["preco"] ?>">
  <input type="hidden" name="id" value="<?= $produto["id"] ?>">
  <fieldset class="cores">
    <legend>Escolha a cor:</legend>
    <input type="radio" name="cor" value="verde" id="verde" checked>
    <label for="verde">
        <img src="img/produtos/foto<?= $produto["id"] ?>-verde.png" alt="verde">
    </label>
    
   <input type="radio" name="cor" value="rosa" id="rosa">
    <label for="rosa">
        <img src="img/produtos/foto<?= $produto["id"] ?>-rosa.png" alt="rosa">
    </label>
   
    <input type="radio" name="cor" value="azul" id="azul">
    <label for="azul">
        <img src="img/produtos/foto<?= $produto["id"] ?>-azul.png" alt="azul">
    </label>
   </fieldset>
   <fieldset class="tamanhos">
        <legend>Escolha o tamanho:</legend>
        <input type="range" name="tamanho" max="46" min="36" value="42" step="2" id="tamanho">
   </fieldset>
   
   <input type="submit" class="comprar" value="Comprar">
   </form>
 </div>
 
 <div class="detalhes">
    <h2>Detalhes do produto</h2>
    <p><?= $produto["descricao"] ?></p>
 </div>
 <table>
    <thead>
        <tr>
            <th>Característica</th>
            <th>Detalhe</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Modelo</td>
            <td>Cardigã 7845</td>
        </tr>
        <tr>
            <td>Material</td>
            <td>Algodão e poliester</td>
        </tr>
        <tr>
            <td>Cores</td>
            <td>Azul, Rosa e Vermelho</td>
        </tr>
        <tr>
            <td>Lavagem</td>
            <td>Lavar a mão</td>
        </tr>
    </tbody>
 </table>
</div>
</div>
  <?php include("rodape.php"); ?>
  </body>
</html>
