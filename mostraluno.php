<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mostra.css">
    <title>Document</title>
</head>
<body>

    <div id="titulomostraprova">
    <h1>Dados do cadastrado</h1>

<table>

    <tr>

    <th>Nome completo:</th>
    <td>
        <?php echo $_POST ['nomecompleto'];?>
    </td>

    </tr>

    <tr>
    <th>CPF:</th>
    <td><?php echo $_POST ['cpf'];?>
</td>
    </tr>

    <tr>
    <th>Email:</th>
    <td><?php echo $_POST ['email'];?>
</td>
    </tr>

    <tr>
    <th>Telefone:</th>
    <td><?php echo $_POST ['telefone'];?>
</td>
    </tr>

    <tr>
    <th>Endereço:</th>
    <td><?php echo $_POST ['endereco'];?>
</td>
    </tr>

    <tr>
    <th>Número:</th>
    <td><?php echo $_POST ['numero'];?>
</td>
    </tr>

    <tr>
    <th>Bairro:</th>
    <td><?php echo $_POST ['bairro'];?>
</td>
    </tr>

    <tr>
    <th>CEP:</th>
    <td><?php echo $_POST ['cep'];?>
</td>
    </tr>

    <tr>
    <th>Cidade:</th>
    <td><?php echo $_POST ['cidade'];?>
</td>
    </tr>

    <tr>
    <th>Estado:</th>
    <td><?php echo $_POST ['estado'];?>
</td>
    </tr>

    <tr>
    <th>Cursos disponíveis:</th>
    <td><?php echo $_POST ['cursos'];?>
</td>
    </tr>

    <tr>
    <th>Carga horária diária máxima disponibilizada para cada estudante:</th>
    <td><?php echo $_POST ['cargahoraria'];?>
</td>
    </tr>
</table>

</div>

<form action="editar.php" method="post">

<input type="hidden" name="nome" value=<?php echo $_POST ['nomecompleto']?>>
<input type="hidden" name="cpf" value=<?php echo $_POST ['cpf']?>>
<input type="hidden" name="email" value=<?php echo $_POST ['email']?>>
<input type="hidden" name="telefone" value=<?php echo $_POST ['telefone']?>>
<input type="hidden" name="endereco" value=<?php echo $_POST ['endereco']?>>
<input type="hidden" name="numero" value=<?php echo $_POST ['numero']?>>
<input type="hidden" name="bairro" value=<?php echo $_POST ['bairro']?>>
<input type="hidden" name="cep" value=<?php echo $_POST ['cep']?>>
<input type="hidden" name="cidade" value=<?php echo $_POST ['cidade']?>>
<input type="hidden" name="estado" value=<?php echo $_POST ['estado']?>>
<input type="hidden" name="curso" value=<?php echo $_POST ['cursos']?>>
<input type="hidden" name="cargahoraria" value=<?php echo $_POST ['cargahoraria']?>>

<div id="botaoeditar">
<input type="submit" value="Editar" id="botao">
</div>

</form>

</body>
</html>