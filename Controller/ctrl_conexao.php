<?php

    function conectar() {
        $databaseHost = 'localhost';
        $databaseName = 'questoesweb1.4';
        $databaseUsername = 'root';
        $databasePassword = '';

        $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
        return $mysqli;
    }

?>
