<?php

        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $dbname = "UNIVERSIDAD";
        
    $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("ERROR INTENTE NUEVAMENTE." . $conn->connect_error);
            }     


        if(!empty($_POST['id']) && !empty($_POST['nombre']) && !empty($_POST['apellidopaterno']) && !empty($_POST['apellidomaterno']) && !empty($_POST['telefono'])) {

             $id   = $_POST['id'];

             $nombre   = $_POST['nombre'];
             $apellidom = $_POST['apellidopaterno'];
             $apellidop    = $_POST['apellidomaterno'];
             $telefono = $_POST['telefono'];


            $sql = "SELECT * FROM DATOS_PERSONALES ";

            if ($result=mysqli_query($conn,$sql)) {
    
                while ($row=mysqli_fetch_row($result)) {
    
                    if($id === $row[0] ){
                        $sql = mysqli_query($conn, "UPDATE DATOS_PERSONALES SET nombre='$nombre', apellidopaterno='$apellidom', apellidomaterno='$apellidop', telefono='$telefono' WHERE id='$id'");
    
                        header('location: 5muestradatos.php');
                    }    
                }
    
            mysqli_free_result($result);
    
            }
    
            if ($conn->query($sql) === TRUE) {
                
                header('location: register.html');

            } 

            else {
                echo "NO SE CARGARON LOS DATOS ERROR!!!" . $sql . "<br>" . $conn->error;
            }
         }
        
        else {
            echo "NO HAY DSTOS " . $conn->error;
        }


    $conn->close();
?>
