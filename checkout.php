<html>
<head>
    <meta charset="UTF-8">
    <title>Checkout Mirror Fashion</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="jumbotron">
    <div class="container">
    <h1>Ótima escolha!</h1>
    <p>Obrigado por comprar na Mirror Fashion!
    Preencha seus dados para efetivar a compra.</p>
</div>
</div>
    
<div class="panel panel-default">
  <div class="panel-heading">
    <h2 class="panel-title">Sua Compra</h2>
  </div>
  <div class="container">
  <div class="panel-body">
  <img src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" class="img-thumbnail img-responsive">
  <dl>
    <dt>Cor</dt>
    <dd><?= $_POST["cor"] ?></dd>
    <dt>Tamanho</dt>
    <dd><?= $_POST["tamanho"] ?></dd>
    <dt>Produto</dt>
    <dd><?= $_POST["nome"] ?></dd>
    <dt>Preco</dt>
    <dd><?= $_POST["preco"] ?></dd>
  </dl>
</div>
<form>
  <fieldset>
      <legend>Dados pessoais</legend>
      <div class="form-group">
          <label for="nome">Nome completo</label>
          <input type="text" class="form-control" id="nome" name="nome" autofocus>
      </div>
      <div class="form-group">
          <label for="email">Email</label>
          <div class="input-group">
            <span class="input-group-addon">@</span>
            <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
          </div>
      </div>
      <div class="form-group">
          <label for="cpf">CPF</label>
          <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00">
      </div>
      <div class="checkbox">
          <label>
              <input type="checkbox" value="sim" name="spam" checked>
              Quero receber spam da Mirror Fashion
          </label>
      </div>
  </fieldset>
  <fieldset>
      <legend>Cartao de crédito</legend>
      <div class="form-group">
          <label for="numero-cartao">Número - CVV</label>
          <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
      </div>
      <div class="form-group">
          <label for="bandeira-cartao">Bandeira</label>
          <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
          <option value="master">MasterCard</option>
          <option value="visa">VISA</option>
          <option value="amex">American Express</option>
          </select>
      </div>
      <div class="form-group">
          <label for="validade-cartao">Validade</label>
          <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
      </div>
  </fieldset>
  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-up"></span> Confirmar pedido</button>
</form>
</div>
</div>
</body>
</html>
