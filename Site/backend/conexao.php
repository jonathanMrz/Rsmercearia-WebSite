<?php


//0-[CONEXÃO]-----------------------------------------------------------------------------------------------------------


try {
//para fazer a conexão basta escrever: $pdo = new PDO("mysql:dbname='nome do banco de dados';host=localhost","nome do usuario","senha");
$pdo = new PDO("mysql:dbname=rsmercearia;host=localhost","root","");
} catch (PDOException $e) {
echo 'erro de conexao com banco de dados: '.$e -> getMessage();
} catch (Exception $e) {
echo 'erro de conexao generio: '.$e -> getMessage();
}


//1-[INSERT]-------------------------------------------------------------------------------------------------


//forma 1 (usando 'prepare')
$res = $pdo -> prepare("INSERT INTO usuario(nome,email,telefone,cpf,senha)
VALUES (:n,:e,:t,:c,:s)");
//'bindValues aceita valores diretos sem ter de que passar por uma variavel antes'
$res -> bindValue(":n","Miriam");
$res -> bindValue(":e","miriam@gmail.com");
$res -> bindValue(":t","231231231321231");
$res -> bindValue(":c","634.555.122-03");
$res -> bindValue(":s","321");
$res -> execute();
//'bindparam só aceita valores se eles estiverem dentro de variaveis'
//$res -> bindparam();
//forma 2 (usando 'query')
//$pdo ->query("INSERT INTO usuario(nome,email,telefone,cpf,senha) VALUES ('Mariam','mariam@gmail.com','3123212313212','221.232.111-03','321')");


//2-[DELETAR E UPDATE]------------------------------------------------------------------------------------------------


//deletar 1 metodo (usando 'prepare')
$cmd = $pdo -> prepare("DELETE from usuario WHERE id_user= :iduser");
$iduser = 2;
$cmd -> bindValue(":iduser",$iduser);
$cmd -> execute();
//deletar 2 metodo (usando 'query')
//$cmd = $pdo -> prepare("DELETE from usuario WHERE id_user= '3'");
//atualizar 1 metodo (usando 'prepare')
$cmd = $pdo -> prepare("UPDATE usuario SET email = :e WHERE Id_user=:iduser");
$cmd -> bindValue(":e","Jonathan2@gmail.com");
$cmd -> bindValue(":iduser","6");
$cmd -> execute();
//atualizar 2 metodo (usando 'query')
//$res = $pdo -> prepare("UPDATE usuario SET email = 'asas@gmail.com' WHERE Id_user=:'3'");


//3-[Select]---------------------------------------------------------------------------------------------------


//Serve para mostrar os valores dentro de uma tabela
$cmd = $pdo -> prepare("SELECT *from usuario WHERE Id_user = :iduser");
$cmd -> bindValue(":iduser","4");
$cmd -> execute();
$resultado = $cmd -> fetch(PDO::FETCH_ASSOC);
foreach ($resultado as $key => $value) {
    echo $key.':'.$value.'<br>';
}

