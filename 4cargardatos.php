<?php

        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $dbname = "UNIVERSIDAD";
        

    $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("ERROR en la Conexión, reintente nuevamente." . $conn->connect_error);
            }     



        if(!empty($_POST['nombre']) && !empty($_POST['apellidopaterno']) && !empty($_POST['apellidomaterno']) && !empty($_POST['telefono'])) {

            $nombre   = $_POST['nombre'];
            $apellido_p = $_POST['apellidopaterno'];
            $apellido_m    = $_POST['apellidomaterno'];
            $telefono = $_POST['telefono'];

            $sql = "INSERT INTO DATOS_PERSONALES (nombre, apellidopaterno, apellidomaterno, telefono) VALUES ('".$nombre."', '".$apellido_p."', '".$apellido_m."','".$telefono."')";



            if ($conn->query($sql) === TRUE) {
                header('location: formulario.html');

            } 

            else {
                echo "NO SE PUDO CARGAR LOS DATOS ERROR!!! " . $sql . "<br>" . $conn->error;
            }
        }
        
        else {
            echo "NO hay DATOS";
        }


    $conn->close();
?>