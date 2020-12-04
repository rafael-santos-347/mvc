<?php

// Model do meu BD

require('Conexao.php');

class Estudante 
{
    public $id;
    public $nome;
    public $telefone;

    public static function getALL()
    {
        //-- select * from estudantes;
        /*$link = new Conexao;
        $con = $link->buscarDb();*/
        $con = Conexao::buscarDb();
        $stmt = $con->query("select * from estudantes;");
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
        // para outros metodos fetch acessar https://www.php.net/manual/pt_BR/book.pdo.php
           
    }

    public static function getCount()
    {
        $con = Conexao::buscarDb();
        $stmt = $con->query("select count(*) as contador from estudantes;");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

  /*  public function registroEstudantes()
    {
        //-- insert into estudantes (nome, telefone) values ("Rafa", 11999999999);
    }

    public function deletarEstudantes()
    {
       null //-- delete from estudantes where
    }

    public function atualizarEstudantes()
    {
       null //-- update estudantes set coluna1 = valor, coluna2 = valor, where
    }*/
}
