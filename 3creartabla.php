<?php

        $servername = "localhost";
        $username   = "root";
        $password   = "";
        
        $dbname = "UNIVERSIDAD";
        

    $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("INTENTE NUEVAMENTE ERROR!!!" . $conn->connect_error);
            }     


        $sql = "CREATE TABLE DATOS_PERSONALES   (
                                                id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                                nombre VARCHAR(40),
                                                apellidopaterno VARCHAR(40),
                                                apellidomaterno VARCHAR(40),
                                                telefono VARCHAR(30)
                                            )";


        if ($conn->query($sql) === TRUE) {
            echo "...LA TABLA HA SIDO CREADA... ";
        }

        else {
            echo "NO SE PUDO CREAR LA TABLA ERROR!!! ". $conn->error;
        }

    $conn->close();
?>