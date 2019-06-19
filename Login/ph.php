<style type="text/css">
	body{
  background-color: black;
}
h2, h1 {
  color: white;
  font-family: verdana;
}
fieldset{
  position: absolute;
  top: 195px;
  left: 580px;
  width: 400px;
  height: 300px;
}
.h1{
 position: absolute;
 top: 40px;
 left: 190px;
 }
 .b1{
  position: absolute;
  width: 290px;
  height: 25px;
  top: 110px;
  left: 65px;
 }
 .h2{
  position: absolute;
  top: 170px;
  left: 184px;
 }
 .b2{
  position: absolute;
  width: 290px;
  height: 25px;
  top: 161px;
  left: 65px;
 }
 .cont{
 position: absolute;
 font-family: Verdana;
 width: 270px;
 height: 30px;
 left: 75px;
 top: 210px;
 background-color: white;
 }
 h4{
  position: absolute;	
  color: red;
  font-family: verdana;
  top: 250px;
  left: 115px;
 }
</style>
<?php 
echo "<meta charset=utf-8>";
echo "<div class='Sen'>";
echo "<fieldset>";
echo "<h1 align='center'>Login</h1>";
echo "<input type='text' class='b1' name='log' placeholder='E-mail'>";
echo "<input type='text' class='b2' name='pass' placeholder='Senha'>";
echo "<h4>Erro de Autenticação</h4>";

echo "</fieldset>";
echo "</div>";

 ?>