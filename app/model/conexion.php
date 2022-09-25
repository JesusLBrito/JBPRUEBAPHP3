<?php
//conexion a base de datos parametrizacion
class Conexion{
    public  static function conectar(){
        $link = new PDO("mysql:host=localhost; dbname=prueba_biblioteca", "root", "1130266003");
        return $link;
    }
}