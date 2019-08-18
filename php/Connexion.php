<?php

class Connexion
{
    public static function connect()
    {
        $server = "localhost";
        $base = "project_rent_car";
        $username = "root";
        $password = "";
        $connexionUrl = "mysql:host=$server;dbname=$base";

        try {
            $conn = new PDO($connexionUrl, $username, $password);
            return $conn;
        } catch (PDOException $e) {
            die("Erreur : $e->getMessage()");
        }
    }
}
?>