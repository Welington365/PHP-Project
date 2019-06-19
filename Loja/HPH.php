<style type="text/css">
h1{
	text-align: center;
	position: relative;
    top: 29px;
    color: white;
    font-family: verdana;
	}
	div{
	position: absolute;
	background-color: red;
	width: 1348px;
    height: 138px;
	}
	hr{
	width: 220px;
  	position: relative;
  	top: -10px;
  	right: 567px;
  	background-color: white;
  	border: none;
	}
	.um{
    position: relative;
	background-color: red;
    width: 399px;
    height: 660px;
    border-radius: 10px;
    top: 147px;
	}
	.ps4{
  	position: relative;
  	width: 200px;
  	height: 240px;
  	left: 95px;
  	top: 30px;
  	border: 1px solid ;
  }
  p  { position: relative;
 top: 0px; left: 15px;
 color: white;
 font-family: verdana;
  }
  h4  { position: relative;
 top: 28.5px; left: 15px;
 color: white;
 font-family: verdana;
 position: relative;
  font-size: 18px;
  	top: 0px;
  }
  .dois{
  	position: absolute;
  background-color: red;
    width:493px;
    height: 660px;
    border-radius: 10px;
    top: 156px;
    left: 410px;
  }
  .tres{
  	position: absolute;
  background-color: red;
    width: 450px;
    height: 658px;
    border-radius: 10px;
    top: 157px;
    left: 906px;
  }
</style>
<?php
echo "<meta charset=utf-8>";
echo "<div><h1> Dados da Compra </h1></div>";
echo "<div class='um'>
<img class='ps4' src='PS4.jpg'>
    <br><br><br>
	<h4><b>Produto</b></h4>
	<p>Camiseta Beatles</p>
	<h4><b>Cor</b></h4>
	<p>Preto e Branco</p>
	<h4><b>Tamanho</b></h4>
	<p>M</p>
	<h4><b>Preço</b></h4>
	<p>R$ 42,50</p>
 </div>";

echo "<div class='dois'>";
echo "<h4>Nome do Comprador:</h4> " .$_POST["Nome"];
echo "<br>";
echo "<h4>E-mail:</h4> " .$_POST["email"];
echo "<br>";
echo "<h4>CPF:</h4> " .$_POST["cpf"];
echo "<br>";
echo "<h4>Quero ser avisado:</h4> " .$_POST["Si"];
elseif (condition) {
  # code...
}
echo "<br>";
echo "</div>";

echo "<div class='tres'>";
echo "<h4>Número CVV:</h4> " .$_POST["CVV"];
echo "<br>";
echo "<h4>bandeira:</h4> " .$_POST["bandeira"];
echo "<br>";
echo "<h4>Data de Validade:</h4> " .$_POST["val"];
echo "<br>";

echo "</div>";

?>