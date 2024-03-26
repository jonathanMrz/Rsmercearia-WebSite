<?php
include('conexao.php');
if isset($_POST['email']) || isset($_POST['senha']){
    if (strlen($_POST['email'])==0){
        echo 'Preencha seu email!';
    } else if (strlen($_POST['senha'])==0){
        echo 'Preencha sua senha';
    } else{
        $email = $mysqli-> real_scape_string($_POST['$email']);
        $senha = $mysqli-> real_scape_string($_POST['$senha']);
        $sql_code = "SELECT * FROM conta WHERE 'email' = $email AND 'senha' = $senha";
        $sql_query = mysqli->query($sql_code) or die("Falha na execusão do código SQL".$mysqli->error);
        $quantidade = $sql_query->num_rows;
        if($quantidade==1){
            $conta= $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $conta['id'];
            $_SESSION['nome'] = $conta['nome'];
            header('Location: home/');
        }else{
            echo "Falha ao logar!";
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Acesse sua conta</h1>
    <form action="" method="POST">
    <p>
        <label>Email</label>
        <input type="text" name="email">
    </p>
    <p>
        <label>Senha</label>
        <input type="password" name="senha">
    </p>
    <p>
        <button type="submit">Entrar</button>
    </p>
    </form>
</body>
</html>