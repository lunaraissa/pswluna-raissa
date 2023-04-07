<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="editar.css">
</head>
<body>
    <h1>Dados do cadastrado</h1>

    <h1>Formulário</h1>

<div class="razaoecpf">
<p>Nome completo:</p>
<p>CPF:</p>
</div>

<div class="dados">
<input type="text" name="nome" value=<?php echo $_POST ['nome']?>>
<input type="text" name="cpf" value=<?php echo $_POST ['cpf']?>>
</div>


<div class="emailetelefone">
<p>Email:</p>
<p>Telefone:</p>
</div>

<div class="dados">
<input type="text" name="email" value=<?php echo $_POST ['email']?>>
<input type="text" name="telefone" value=<?php echo $_POST ['telefone']?>>
</div>


<div class="enderecoenumero">
<div><p>Endereço:</p></div>
<div><p>Número:</p></div>
</div>

<div class="dados">
<input type="text" name="endereco" value=<?php echo $_POST ['endereco']?>>
<input type="text" name="numero" value=<?php echo $_POST ['numero']?>>
</div>

<div class="bairroecep">
<p>Bairro:</p>
<p>CEP:</p>
</div>

<div class="dados">
<input type="text" name="bairro" value=<?php echo $_POST ['bairro']?>>
<input type="text" name="cep" value=<?php echo $_POST ['cep']?>>
</div>


<div class="cidadeestado">
<p>Cidade:</p>
<p>Estado:</p>
</div>

<div class="dados">
<input type="text" name="cidade" value=<?php echo $_POST ['cidade']?>>
<input type="text" name="estado" value=<?php echo $_POST ['estado']?>>
</div>

<div class="curso">
<p>Cursos disponíveis:</p>
</div>

<div class="dados">
<input type="select" name="curso" value=<?php echo $_POST ['curso']?> class="configcaixastexto">
</div>

<div class="carga">
<p>Carga horária diária máxima disponibilizada para cada estudante:</p>
</div>

<div class="dados">
<input type="text" name="cargahoraria" value=<?php echo $_POST ['cargahoraria']?>>
</div>

</div>

