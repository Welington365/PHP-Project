<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Formulário </title>
	<style type="text/css">
		div{
		}
	</style>
</head>
<div>
<body><form name="cadastro" method="post" action="PHPform.php">
	<fieldset><legend><h2>Identificação</h2></legend>
	
		<h3>Nome:<input type="text" name="nome"></h3> 
        <h3>Data de Nascimento:<input type="date" name="data"></h3>
        <h3>Sexo:</h3> <input type="radio" value="Masculino" name="Sexo">Masculino
        <br><br>
        <input type="radio" value="Feminino" name="Sexo">Feminino<br><br>
        <h3>R.G:<input type="text" name="RG"></h3>
        <h3>CPF:<input type="text" name="CPF"></h3>
     </fieldset>

     <fieldset><legend><h2>Localização</h2></legend>
        <h3>C.E.P:<input type="text" name="CEP"></h3>
        <h3>Endereço:<input type="text" name="Endereço"></h3>
        <h3>Bairro:<input type="text" name="Bairro"></h3>
        <h3>Cidade:<input type="text" name="Cidade"></h3>
        <h3>Telefone:<input type="text" name="Telefone"></h3>
        <h3>E-mail:<input type="E-mail" name="Email"></h3>
     </fieldset>
                     
     <fieldset><legend><h2>Pretensão</h2></legend>
	    <h3>Área Desejada</h3> <input type="checkbox" value="Juridico" name="area[]">Juridico
	    <input type="checkbox" value="Finaceiro" name="area[]">Finaceiro
	    <input type="checkbox" value="Produção" name="area[]">Produção
	    <input type="checkbox" value="T.I" name="area[]">T.I
	    <h3>Salário Pretendido</h3><input type="text" name="Sal">
	   <h3>Cargo: </h3><input type="text" name="Cargo">
    </fieldset>
 
    <fieldset><legend><h2>Formação</h2></legend>
        <h3>Nível</h3><select name="Niv">
        	<option name="Ensino Fundamental">Ensino Fundamental</option>
        	<option name="Ensino Médio">Ensino Médio</option>
        	<option name="Ensino Superior">Ensino Superior</option>
        	<option name="Mestrado">Mestrado</option>
        	<option name="Pós Graduação">Pós Graduação</option>
        </select>
        <h3>Instituição</h3><input type="text" name="Inst">
        <h3>Ano de Conclusão:</h3><input type="text" name="Ano">
        <br>
    </fieldset>
    <br>
    <input class="Env"  type="submit" name="Enviar">
    </form>
</div>
</body>
</html>