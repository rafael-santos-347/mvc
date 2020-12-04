<?php

// Usando PDO para conexão

class Conexao 
{
    public static function buscarDb()
    {
        $link = new PDO(
            "mysql:host=localhost; dbname=dados;charset=utf8",
            "root",
            ""
        );

        if (!$link) {
            echo "Falha na conexão com o BD";
        } else {
            return $link;
        }
    }
}
