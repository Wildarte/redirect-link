<?php

class Database{

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $tb_bank = "teste";
    private $dbh;
    private $stmt;

    public function __construct()
    {

        $dsn = 'mysql:host='.$this->host.';dbname='.$this->tb_bank;

        $opcoes = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        
        try {

            $this->dbh = new PDO($dsn, $this->user, $this->pass, $opcoes);
            
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    }
    
    public function query($sql){

        $this->stmt = $this->dbh->prepare($sql);

    }

    public function bind($param, $valor, $tipo = null){

        if(is_null($tipo)){

            switch(true){
                case is_int($valor):
                    $tipo = PDO::PARAM_INT;
                break;
                case is_bool($valor):
                    $tipo = PDO::PARAM_BOOL;
                break;
                case is_null($valor):
                    $tipo = PDO::PARAM_NULL;
                break;
                default:
                    $tipo = PDO::PARAM_STR;
            }

        }

        $this->stmt->bindValue($param, $valor, $tipo);

    }

    public function executa(){
        return $this->stmt->execute();
    }

    public function resultado(){
        $this->executa();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    public function resultados(){
        $this->executa();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function totalResultados(){
        return $this->stmt->rowCount();
    }

    public function ultimoIdInserido(){
        return $this->dbh->lastInsertId();
    }

}
