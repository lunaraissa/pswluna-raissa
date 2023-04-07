<?php
 error_reporting(E_ALL);
 ini_set("display_errors", 1);
 include_once ("header.html");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header e footer</title>
    <link rel="stylesheet" href="cadaluno.css">
</head>

<body>
<form action="mostraluno.php" method="post">
    <h1>Formulário</h1>

    <div class="razaoecpf">
    <p>Nome completo:</p>
    <p>CPF:</p>
    </div>
    
    <div class="dados">
        <input type="text"  placeholder="Informe o seu nome completo" name="nomecompleto" class="confignome">
        <input type="text" placeholder="Informe o seu CPF"  name="cpf" class="configcpf">
</div>


<div class="emailetelefone">
    <p>Email:</p>
    <p>Telefone:</p>
</div>

<div class="dados">
<input type="text" placeholder="Email para contato" name="email" class="configemail">
<input type="text" placeholder="Informe o seu telefone" name="telefone" class="configtel">
</div>


<div class="enderecoenumero">
<div><p>Endereço:</p></div>
<div><p>Número:</p></div>
</div>

<div class="dados">
<input type="text" placeholder="Informe o seu endereço" name="endereco" class="configcaixastexto">
<input type="text" placeholder="Informe o seu número" name="numero" class="configcaixastexto">
</div>

<div class="bairroecep">
    <p>Bairro:</p>
    <p>CEP:</p>
    </div>
    
    <div class="dados">
        <input type="text"  placeholder="Informe o seu Bairro" name="bairro" class="configcaixastexto">
        <input type="text" placeholder="Informe o seu CEP" name="cep" class="configcaixastexto">
</div>


<div class="cidadeestado">
    <p>Cidade:</p>
    <p>Estado:</p>
    </div>
    
    <div class="dados">
        <input type="text"  placeholder="Informe sua cidade" name="cidade" class="configcaixastexto">
        <input type="text" placeholder="Informe o seu estado" name="estado" class="configcaixastexto">
</div>

<div class="cursosecarga">
    <p>Cursos disponíveis:</p>
    <p>Carga horária diária máxima disponibilizada para cada estudante:</p>
    </div>
    

    <div class="dados">

    <select  class="configcaixastexto" name="cursos">
    <option value="Veterinaria">Medicina Veterinária</option>
    <option value="Medicina">Medicina</option>
    <option value="Enfermagem">Enfermagem</option>
    <option value="Farmácia">Farmácia</option>
  </select>
     <input type="text" placeholder="Carga horária máxima disponibilizada para cada estudante " name="cargahoraria" class="configcaixastexto">

    </div>

<div id="botaolayout">
<input type="submit" value="Cadastrar" id="botao">
</div>
</form>

</body>
</html>

<?php
 include_once ("footer.html");
?>