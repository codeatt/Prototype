<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Protipo Software de Evento</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </head>

  <body>
    <!-- Aqui segue o exemplo 1 -->
    <form style="background-color: gray;" action="cadastro.php" method="post" id="formulario">
  <input  type="button" id="novoProd" value="Novo serviço" />
  <input type="submit" value="Enviar" />
  Valor total do evento é de R$
  <p style="display:inline; color:yellow"id="result"></p>
  <!-- <input type="text" id="result" size="20"> -->
  <div id="item" class="item">
    <label>Selecione o(s) serviço(s) para o seu evento:</label>
    <select name="produtoId[]">
      <option value="1">Buffet 1</option>
      <option value="5">Decoração 1</option>
      <option value="9">Transporte 1</option>
    </select>
    <!-- <label>Quantidade(s):</label> -->
    <!-- <input type="number" name="quant[]" /> -->
    <select id="no" onchange="myFunction()">
    <option>0</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
</select>
  </div>
</form>
<!-- Script Total R$ Evento -->
<script>
function myFunction() {
    var no = document.getElementById("no");
    var option = no.options[no.selectedIndex].text;
    var txt = document.getElementById("result").value;
    txt = option;
    document.getElementById("result").innerHTML = txt*2;
}
</script>
<!-- Button Exemplo 1 -->
    <!-- <div id="carr">
        <p style="display:inline">Serviço de Buffet 1<br> Iten(s):<input type="button" name="ser" onclick="add()" value="Adicionar ao Carrinho"><p style="display:inline" id="num">0</p></p>
    </div> -->
  </body>
<!-- Script Exemplo 1 -->
  <script type="text/javascript">
    $(document).ready(function() {
      $("#novoProd").click(function() {
      var novoItem = $("#item").clone().removeAttr('id');
       // para não ter id duplicado (Adicionar ID diferente na proxima atualizacao)
      novoItem.children('input').val(''); //limpa o campo quantidade
      $("#formulario").append(novoItem);
    });
  });
  </script>
<!-- Script Exemplo 2 -->
  <!-- <script &lt;script type="text/javascript">
  function add() {
    // OBS: Só considera o primeiro input
    var numero = document.getElementById("num");
    numero.innerHTML = parseInt(numero.innerHTML) + 1;
  }
</script> -->
<!--
<script>
document.getElementById("result").innerHTML =
"The value of is " + z + ".";
</script> -->

<!-- Isto evitaria as manipulações nos id's dos input's, reduzindo seu código jQuery e de certa forma simplificando o insert com PHP. -->
</html>
