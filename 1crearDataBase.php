<?php

        $servername = "localhost";
        $username   = "root";
        $password   = "";

    $conn = new mysqli($servername, $username, $password);

            if ($conn->connect_error) {
                die("ERROR DE CONEXION!!!" . $conn->connect_error);
        }

        $sql = "CREATE DATABASE UNIVERSIDAD";


            if ($conn->query($sql) === TRUE) {
                echo " ...BASE DE DATOS CREADA... ";
            }

            else {
                echo "ERROR BASE DE DATOS NO SE PUDO CREAR!!! ". $conn->error;
            }

    $conn->close();
?>