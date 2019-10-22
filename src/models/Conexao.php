<?php

namespace Src\Models;

class Conexao {
    
    private static $instance;

    public static function getConexao(){

        if (!isset(self::$instance)){
            self::$instance = new \PDO("mysql:host=localhost; dbname=agenda",'root','');
        }

        return self::$instance;
    }


}