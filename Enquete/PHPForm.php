<?php
echo "<meta charset=utf-8>";
echo "<h1> Exibindo Dados </h1>";

echo "<fieldset><legend><h3>Identificação</h3></legend>";
echo "Nome: " .$_POST["nome"];
echo "<br>";
echo "Data: " .$_POST["data"];
echo "<br>";
echo "Sexo: " .$_POST["Sexo"];
echo "<br>";
echo "RG: " .$_POST["RG"];
echo "<br>";
echo "C.P.F: " .$_POST["CPF"];
echo "</fieldset>";

echo "<fieldset><legend><h3> Localização </h3></legend>";
echo "C.E.P: " .$_POST["CEP"];
echo "<br>";
echo "Endereço: " .$_POST["Endereço"];
echo "<br>";
echo "Bairro: " .$_POST["Bairro"];
echo "<br>";
echo "Cidade: " .$_POST["Cidade"];
echo "<br>";
echo "Telefone: " .$_POST["Telefone"];
echo "<br>";
echo "E-mail: " .$_POST["Email"];
echo "<br>";

echo "</fieldset>";

echo "<fieldset><legend><h3> Pretensão </h3></legend>";
foreach ($_POST["area"] as $area) {
	echo "Área Desejada: " . $area . "<br>";
}
echo "Salário: " .$_POST["Sal"];
echo "<br>";
echo "Cargo: " .$_POST["Cargo"];
echo "<br>";

echo "</fieldset>";

echo "<fieldset><legend><h3> Formação </h3></legend>";
echo "Nível: " .$_POST["Niv"];
echo "<br>";
echo "Instituição: " .$_POST["Cargo"];
echo "<br>";

echo "</fieldset>";



?>

