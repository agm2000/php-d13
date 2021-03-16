    <?php
       include ("conexion.php");
            if(!empty($_POST['tarea'])){
                //Recibir datos
                $tarea = $_POST['tarea'];
                $descripcion = $_POST['descripcion'];
                $prioridad = $_POST['prioridad'];
                $urgente = $_POST['urgente'];
                $tipo = $_POST['tipo'];
               
                //validar(luego)

                //Guardar en base de datos
                $sql = "INSERT INTO tareas (tarea,descripcion, prioridad,urgente,tipo) VALUES ('$tarea','$descripcion', '$prioridad','$urgente','$tipo')";
                
                //usar exec () no datos
                $conn->exec($sql);

                header('location:index.php');
             
            }else{
                 echo "No hay datos enviados";
                }
     ?>      