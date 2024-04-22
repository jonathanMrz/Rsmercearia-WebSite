<?php
require_once 'backend/admin/back_admin.php';
$pro = new produto("rsmercearia","localhost","root","");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="front/.myfront/admin/admin.css">
    <title>Document</title>
</head>
<body>
    <div class="produto">
        <h1>Produto</h1>
    <section id="formulario">
        <form>
            <h2>Cadastrar produto</h2>
            <label for="nome_prod">NOME</label>
            <input name="nome_prod" id="nome_prod" type="text">
            <label for="categoria_prod">CATEGORIA</label>
            <input name="categoria_prod" id="categoria_prod" type="text">
            <label for="preço_prod">PREÇO</label>
            <input name="preço_prod" id="preço_prod" type="text"> 
            <label for="estoque_prod">ESTOQUE</label>
            <input name="estoque_prod" id="estoque_prod" type="text"> 
            <input type="submit" value="Cadastrar produto">
        </form>
    </section>
    <section id="tabela">
    <table>
            <tr id="titulo">
                <td>ID_PRODUTO</td>
                <td>NOME</td>
                <td>CATEGORIA</td>
                <td>PREÇO</td>
                <td colspan="2">ESTOQUE</td>
            </tr>
        <?php
        $dados = $pro ->buscarDados();
        if(count($dados)>0){
            for ($i=0; $i < count($dados); $i++){
                echo "<tr id='valor'>";
                foreach($dados[i] as $k => $v){
                    echo "<td>".$v."</td>";
                }
                echo "</tr>";
            }
            ?><td><a href="">EDITAR</a><a href="">EXCLUIR</a> </td><?php
        }
        ?>
            </tr>
        </table>
    </section>
</div>

<div class="usuario">
    <h1>Usuario</h1>
    <section id="formulario">
        <form>
            <h2>Cadastrar produto</h2>
            <label for="nome_user">NOME</label>
            <input name="nome_user" id="nome_user" type="text">
            <label for="email_user">E-MAIL</label>
            <input name="email_user" id="email_user" type="text">
            <label for="telefone_user">TELEFONE</label>
            <input name="telefone_user" id="telefone_user" type="text"> 
            <label for="cpf_user">CPF</label>
            <input name="cpf_user" id="cpf_user" type="text"> 
            <label for="senha_user">SENHA</label>
            <input name="senha_user" id="senha_user" type="text"> 
            <input type="submit" value="Cadastrar usuario">
        </form>
    </section>
    <section id="tabela">
        <table>
            <tr id="titulo">
                <td>ID_USUARIO</td>
                <td>NOME</td>
                <td>E-MAIL</td>
                <td>TELEFONE</td>
                <td>CPF</td>
                <td colspan="2">SENHA</td>
            </tr>
            <tr id="valor">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="">EDITAR</a><a href="">EXCLUIR</a> </td>
            </tr>
        </table>
    </section>
</div>
</body>
</html>
