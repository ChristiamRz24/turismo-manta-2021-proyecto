<?php

class Database{
    //Variables
    private $host = "localhost";
    private $dbname = "turismo_manta";
    private $username = "openpg";
    private $password = "openpgpwd";
    private $charset = "utf8";

    function conectarDB(){        
        try{
            $conexion = "pgsql:host=" . $this->host . "; dbname=" . $this->dbname . "; client_encoding=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];

            $pdo = new PDO($conexion, $this->username, $this->password, $options);
            //echo "Conexión realizada a la base de datos!";
            return $pdo;
        } catch (PDOException $err) {
            echo 'Error de conexión! [  ' . $err->getMessage() . '  ]';
            exit;
        }
    }
}

?>