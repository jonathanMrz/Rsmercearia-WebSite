<?php
Class Produto{
    private $pdo;
    public function _construct($dbname, $host, $user, $senha){
        try {
            $this -> pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);
        } catch (PDOException $e) {
            echo "erro no banco de dados".$e->
            getMessage();
            exit();
        }catch (Exception $e){
            echo "erro generico".$e->
            getMessage();
            exit();
        }
    }
    #ESSA FUNÇÃO É PARA BUSCAR OS DADOS E COLOCAR NA TABELA
    public function buscarDados(){
        $res = array();
        $cmd = $this->pdo->query("SELECT *FROM produto ORDER BY id_prod desc");
        $res = $cmd -> fetchALL(PDO::FETCH_ASSOC);
        return $res;
    }
}