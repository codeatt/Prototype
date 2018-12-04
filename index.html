<?php
session_start();

$_SESSION['result'] = 'green';
$_SESSION['animal']   = 'cat';
$_SESSION['time']     = time();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Protipo Software de Evento</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </head>

  <body>
  <form style="background-color: gray;" action="report.php" method="post" id="formulario">
  <input type="button" id="novoProd" value="Novo serviço" onclick="myTotal()"/>
  <input type="button" value="Limpar" onclick="reload()"/>
  <input type="submit" value="Enviar"/>

  <p style="display:inline;" id="result"></p>
  <p style="display:inline;" id="lucrototal"></p>
  <div id="item" class="item">

    <!-- Serviços -->

    <label>Selecione o(s) serviço(s) para o seu evento:</label>
    <select onchange="myTotal()" class="service">
      <option value="5">Buffet</option>
      <option value="15">Decoração</option>
      <option value="20">Transporte</option>
    </select>

    <!-- QTD TOTAL -->

    <select class="qtd" onchange="myTotal()">
      <option>0</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>

    <!-- Descriminando cada LINHA -->
    <p style="display:inline" class='til'></p><p style="display:inline" class="linha" ></p>
   </div>

</form>

<!-- Função Calcula o TOTAL -->
<script>
function myTotal(valor) {
	  var total = 0;
    var total2 = 0;
    var total3 = 0;
    var total4 = 0;
    var total5 = 0;
    let totalvalor = 0;
    var servicosExibe = [" Buffet ", " Decoração ", " Transporte "]
    var lucrototalp = 0;
    var lucrototal = 0;

    var quantidade = document.getElementsByClassName("qtd");
    var servico = document.getElementsByClassName("service");

    var i;

    for (i = 0; i < quantidade.length; i++) {
    	total = total + parseInt(quantidade[i].value);
      total2 = parseInt(quantidade[i].value);
      total3 = parseInt(servico[i].value);
      total4 = parseInt(servico[i].value);
      total5 = parseInt(servico[i].value);

        console.log(total3);

        // document.getElementsByClassName("til")[i].innerHTML = total2;

        switch (total3||total4||total5) {
          case 5:
            lucrototal = lucrototal + ((total3*0.2)*total2);
            lucrototalp =  ((total3*0.2)*total2);
            totalvalor = totalvalor + (total3*total2);
            document.getElementsByClassName("linha")[i].innerHTML = (` unidade(s) do serviço de ${servicosExibe[0]}`).concat(" totaliza R$ ").concat(total3*total2).concat(" e lucro (20%) de R$ <lucro>").concat(lucrototalp).concat("</lucro>");
            break;
          case 15:
            lucrototal = lucrototal + ((total4*0.4)*total2);
            lucrototalp = ((total4*0.4)*total2);
            totalvalor = totalvalor + (total4*total2);
            document.getElementsByClassName("linha")[i].innerHTML = (" unidade(s) do serviço de ").concat(servicosExibe[1]).concat(" totaliza R$ ").concat(total4*total2).concat(" e lucro (40%) de R$ <lucro>").concat(lucrototalp).concat("</lucro>");
            break;
          case 20:
            lucrototal = lucrototal + ((total5*0.6)*total2);
            lucrototalp = ((total5*0.6)*total2);
            totalvalor = totalvalor + (total5*total2);
            document.getElementsByClassName("linha")[i].innerHTML = (" unidade(s) do serviço de ").concat(servicosExibe[2]).concat(" totaliza R$ ").concat(total5*total2).concat(" e lucro (60%) de R$ <lucro>").concat(lucrototalp).concat("</lucro>");
            break;
            default:
        }
    }

    document.getElementById("result").innerHTML = (`Valor do evento totaliza R$ <span style="color:#ff0"> ${totalvalor}</span>`);
    document.getElementsByClassName("linha").innerHTML = lucrototalp;
    document.getElementById("lucrototal").innerHTML = (`com lucro total de R$ <span style="color:#ff0"> ${lucrototal}</span>`);

}
</script>
<!-- Função Modelo OFF -->
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

    var item =  `<div id="item" class="item">

      <label>Selecione o(s) serviço(s) para o seu evento:</label>
      <select onchange="myTotal()" class="service">
        <option value="5">Buffet</option>
        <option value="15">Decoração</option>
        <option value="20">Transporte</option>
      </select>

      <select class="qtd" onchange="myTotal()">
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>

      <!-- TOTAL de cada LINHA -->
      <p style="display:inline" class='til'></p><p style="display:inline" class="linha" ></p>
     </div>`;
    $(document).ready(function() {
      $("#novoProd").click(function() {
    //  var novoItem = $("#item").clone().val(''); // Deleta ID caso exista
      // document.getElementsByClassName("til").removeAttr('');
      // $('input').removeAttr('value');
      //novoItem.children('til').val(''); //limpa o campo quantidade
      $("#formulario").append(item);
      console.log();
    })
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
<script>
function reload(){
  window.location.reload();
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
