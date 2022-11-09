<?php
        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $dbname = "UNIVERSIDAD";
        

    $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("ERROR en la Conexión, reintente nuevamente." . $conn->connect_error);
            }     
        
        $iD = $_GET['id'];
        
        if(empty($iD)){
            header('location: e_Show_Register_inTABLE_inDB.php');
           
        }
        else{
            echo "El ID es: ". $iD;
        }

        $sql = "SELECT * FROM DATOS_PERSONALES ";

        if ($result=mysqli_query($conn,$sql)) {

            while ($row=mysqli_fetch_row($result)) {

                if($iD ===$row[0] ){
                    $deleter = mysqli_query($conn, "DELETE FROM DATOS_PERSONALES  WHERE id=$iD");

                    header('location: 5muestradatos.php');
                }    
            }

        mysqli_free_result($result);

        }

    $conn->close();
?>




