<?php

        $servername = "localhost";
        $username   = "root";
        $password   = "";

    $conn = new mysqli($servername, $username, $password);

            if ($conn->connect_error) {
                die("ERROR DE CONEXION!!!"  . $conn->connect_error);
            }


        $sql = "DROP DATABASE UNIVERSIDAD";


        if ($conn->query($sql) === TRUE) {
                echo "...SE ELIMINO BASE DE DATOS...";
            }

            else {
                echo "NO SE ELIMINO BASE DE DATOS!!! ". $conn->error;
            }

    $conn->close();
?>