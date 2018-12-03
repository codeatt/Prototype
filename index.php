<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Protipo Software de Evento</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </head>

  <body>
  <form style="background-color: gray;" action="" method="post" id="formulario">
  <input type="button" id="novoProd" value="Novo serviço"/>
  <input type="submit" value="Enviar" onclick=""/>
  Valor total do evento é de R$
  <p style="display:inline; color:yellow" id="result"></p>
  <div id="item" class="item">

    <!-- Serviços -->
    <label>Selecione o(s) serviço(s) para o seu evento:</label>
    <select name="produtoId[]">
      <option value="Buffet1">Buffet 1</option>
      <option value="Decoração1">Decoração 1</option>
      <option value="Transporte1">Transporte 1</option>
    </select>

    <!-- TOTAL de custos -->
    <input type="number" class="qtd" onchange="myTotal()">

    <!-- TOTAL de cada LINHA -->
    <p style="display:inline">R$ </p><p style="display:inline" class='til'></p>
   </div>

</form>
<!-- Função Calcula o TOTAL -->
<script>
function myTotal() {
	  var total = 0;
    var total2 = 0;

    var x = document.getElementsByClassName("qtd");
    var i;

    for (i = 0; i < x.length; i++) {
    	total = total + parseInt(x[i].value);
      total2 = parseInt(x[i].value);
        document.getElementById("result").innerHTML = total;
        document.getElementsByClassName("til")[i].innerHTML = total2;
    }
}
</script>
<!-- Função OFF -->
<script>
function myFunction2() {
    var no = document.getElementById("no");
    var option = no.options[no.selectedIndex].text;
    var txt = document.getElementById("result").value;
    txt = option;
    document.getElementById("result").innerHTML = txt*2;
}
</script>
<!-- Função CLONA linha -->
<script type="text/javascript">
    $(document).ready(function() {
      $("#novoProd").click(function() {
      var novoItem = $("#item").clone().removeAttr('id'); // Deleta ID caso tenha
      // document.getElementsByClassName("til").val("");
      // $('input').removeAttr('value');
      novoItem.children('til').val(''); //limpa o campo quantidade
      $("#formulario").append(novoItem);
    });
  });
  </script>
<!-- Função OFF - Emissão de Report -->
  <script>
function myReport() {
	var myJSON = '{ "name":"John", "age":31, "city":"New York" }';
	var myObj = JSON.parse(myJSON);
    var x = document.getElementsByClassName("json");
    var i;
    for (i = 0; i < x.length; i++) {
        x[i].innerHTML = myObj.age;
    }
}
</script>
  </body>
</html>

<?php
// $figura = $_POST['figura'];
//
// switch ($figura) {
//     case "Buffet1":
//         echo ($_POST['valor']*$_POST['valor2'];
//         break;
//     case "Decoração1":
//         echo ($_POST['valor']*$_POST['valor2'];
//         break;
//     case "Decoração1":
//         echo ($_POST['valor']*$_POST['valor2'];
//         break;
//    case "quatro":
//         echo ($_POST['valor']*$_POST['valor2'];
//         break;
//     default:
//         //nada
// }
?>
