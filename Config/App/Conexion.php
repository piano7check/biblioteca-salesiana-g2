<?php
class Conexion{
    private $conect;
    public function __construct()
    {
        $host = "localhost";
        $db = "biblioteca"; // Asegúrate que este sea el nombre correcto de tu base de datos
        $user = "root";
        $pass = "password_987"; // Deja vacío si tu MySQL no tiene contraseña

        $dsn = "mysql:host=$host;dbname=$db;charset=utf8";

        try {
            $this->conect = new PDO($dsn, $user, $pass);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error en la conexión: " . $e->getMessage();
        }
    }
    public function conect()
    {
        return $this->conect;
    }
}


?>