
<?php
require_once 'backend/admin/back_admin.php';
$pro = new Produto("rsmercearia","localhost","root","");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="front/myfront/admin/admin.css">
    <title>Document</title>
</head>
<body>
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
        var_dump($dados);
        if(count($dados)>0){
            for ($i=0; $i < count($dados); $i++){
                echo "<tr id='valor'>";
                foreach($dados[$i] as $k => $v){
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
</body>
</html>
