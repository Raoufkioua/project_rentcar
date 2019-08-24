<?php


class Connexion
{
    public static function connect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project_rent_car";
    

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Erreur : $e->getMessage()");
        }
    }
}
?>