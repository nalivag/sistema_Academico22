<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>



    <title>formulario universidad</title> 

</head>
<style type="text/css">
    h1,h2{text-align:center}
    </style>
<body>

    <h1 >UNIVERSIDAD</h1>
    <h2 >LISTA DE ALUMNOS </h2>

    <?php
    
            $servername = "localhost";
            $username   = "root";
            $password   = "";
            
            $dbname = "UNIVERSIDAD";
            

        $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("INTENTE NUEVAMENTE ERROR!!!" . $conn->connect_error);
                }  
    
        $sql = "SELECT * FROM DATOS_PERSONALES";
        if ($result=mysqli_query($conn,$sql)) {
            
            echo '<table class="table table-dark">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Nº</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido Paterno</th>
                            <th scope="col">Apellido Materno</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">EDITAR</th>
                            <th scope="col">ELIMINAR</th>
                            <tr>
                    </thead>
                    ';
                    
                    echo "<tbody>";
                    while ($row=mysqli_fetch_row($result)) {
                        echo "<tr>";
                            echo "<td>".$row[0]."</td>";
                            echo "<td>".$row[1]."</td>";
                            echo "<td>".$row[2]."</td>";
                            echo "<td>".$row[3]."</td>";
                            echo "<td>".$row[4]."</td>";
                            echo '<td> <a class="btn btn-success" href="7editaregistros.php?id='.$row[0]; echo'" role="button">Editar    </a> </td>';
                            echo '<td> <a class="btn btn-secondary"  href="6borraregistros.php?id='.$row[0]; echo'" role="button" >Eliminar </a> </td>';
                        echo "</tr>";
                    }
                    echo "</tbody>";
            echo "</table>";
    
        mysqli_free_result($result);

        }
    $conn->close();
    ?>
</body>
</html>

