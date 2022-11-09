<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5">

    <title>Editar Datos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

   </head>

<body>
    <h2 >Editar DATOS </h2>

    <?php

        $servername = "localhost";
        $username   = "root";
        $password   = "";
        
        $dbname = "UNIVERSIDAD";
       

    $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("ERROR INTENTE NUEVAMENTE. " . $conn->connect_error);
            }     

      
        $iD = $_GET['id'];
        
        if(empty($iD)){
            header('location: 5muestradatos.php');
        }
        
        $sql = "SELECT * FROM DATOS_PERSONALES ";

        if ($result=mysqli_query($conn,$sql)) {

            while ($row=mysqli_fetch_row($result)) {

                if($iD ===$row[0] ){
    ?>

                    <form  name="formulario" method="POST" action="8actualizadatos.php">

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Código: </span>
                            <input type="text" class="form-control" type="text" name="id" value="<?php echo $iD; ?>" disabled>
                            <input type="hidden" class="form-control" type="number" name="id" value="<?php echo $iD; ?>">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre: </span>
                            <input type="text" class="form-control" type="text"    name="nombre"   value="<?php echo$row[1];?>" required="" >
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apellido paterno </span>
                            <input type="text" class="form-control" type="text"    name="apellidopaterno" value="<?php echo$row[2];?>" required="">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apellido materno: </span>
                            <input type="text" class="form-control" type="email"   name="apellidomaterno"   value="<?php echo$row[3];?>" required="">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teléfono: </span>
                            <input type="text" class="form-control" type="tel"     name="telefono"  value="<?php echo$row[4];?>" required="">
                        </div>

                        <div class="input-group mb-3">
                                <button type="submit" class="btn btn-success" >Actualizar</button>
                                
                        </div>
                    </form>
 

    <?php
                }    
            }

        mysqli_free_result($result);

        }
        
    $conn->close();
    ?>
</body>
</html>