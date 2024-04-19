<?php
try {
//para fazer a conexão basta escrever: $pdo = new PDO("mysql:dbname='nome do banco de dados';host=localhost","nome do usuario","senha");
$pdo = new PDO("mysql:dbname=rsmercearia;host=localhost","root","");
} catch (PDOException $e) {
echo 'erro de conexao com banco de dados: '.$e -> getMessage();
} catch (Exception $e) {
echo 'erro de conexao generio: '.$e -> getMessage();
}
//-------------------------------------------------------------------------------------------------
//forma 1
$res = $pdo -> prepare("INSERT INTO usuario(nome,email,telefone,cpf,senha)
VALUES (:n,:e,:t,:c,:s)");

//bindValues aceita valores diretos sem ter de que passar por uma variavel antes 
$res -> bindValue(":n","Miriam");
$res -> bindValue(":e","miriam@gmail.com");
$res -> bindValue(":t","231231231321231");
$res -> bindValue(":c","634.555.122-03");
$res -> bindValue(":s","321");
$res -> execute();
//bindparam só aceita valores se eles estiverem dentro de variaveis
//$res -> bindparam();

//forma 2
//$pdo ->query("INSERT INTO usuario(nome,email,telefone,cpf,senha) VALUES ('Mariam','mariam@gmail.com','3123212313212','221.232.111-03','321')");

?>