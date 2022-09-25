<?php

require_once "conexion.php";

class ClienteModelo
{
    static public function ListarPersona()
    {
        // $x = Conexion::conectar()->prepare("SELECT motivo, descripcion, notificacion FROM clientes WHERE notificacion = 'No Leido'");
        $x = Conexion::conectar()->prepare("SELECT * FROM clientes WHERE notificacion = 'No Leido'");
        $x->execute();
        return $x->fetchAll(PDO::FETCH_ASSOC);
    }
    static public function GuardarCliente($datos)
    {
        $x = Conexion::conectar()->prepare("INSERT INTO clientes(motivo, descripcion, notificacion) VALUES (:motivo,:descripcion,:notificacion)");
        $x->bindParam(":motivo", $datos['motivo'], PDO::PARAM_STR);
        $x->bindParam(":descripcion", $datos['descripcion'], PDO::PARAM_STR);
        $x->bindParam(":notificacion", $datos['notificacion'], PDO::PARAM_STR);
        if ($x->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
