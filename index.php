<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Protipo Software de Evento</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </head>
  <style media="screen">
    input[type="number"] {
  width: 50px;
}
label {
  font-weight: bold;
  margin-left: 10px;
}
div.item {
  border: 1px solid black;
  padding: 10px;
  margin: 5px;
}
  </style>

  <body>
    <form action="cadastro.php" method="post" id="formulario">
  <input type="button" id="novoProd" value="Novo serviço" />
  <input type="submit" value="Enviar" />
  <div id="item" class="item">
    <label>Selecione o(s) serviço(s) para o seu evento:</label>
    <select name="produtoId[]">
      <option value="1">Buffet 1</option>
      <option value="5">Decoração 1</option>
      <option value="9">Transporte 1</option>
    </select>
    <label>Quantidade(s):</label>
    <input type="number" name="quant[]" />
  </div>
</form>
  </body>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#novoProd").click(function() {
      var novoItem = $("#item").clone().removeAttr('id'); // para não ter id duplicado
      novoItem.children('input').val(''); //limpa o campo quantidade
      $("#formulario").append(novoItem);
    });
  });
  </script>
</html>
