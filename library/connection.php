<?php
        function getdb(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "csvToDB";
        try {
            $conn = new mysqli($servername, $username, $password, $db);
        } catch(exception $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        return $conn;
    }
?>
