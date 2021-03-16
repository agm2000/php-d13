
<!doctype html>

<?php include("conexion.php"); ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> PHP Intro</title>
</head>
<body>
	<h1>Into PHP</h1>
    <form action="store.php" method='POST'>
        <label for="tarea">Nombre de Tarea</label><br>
        <input type="text" name="tarea"><br>

        <label for="descripcion">descripcion</label><br>
        <textarea name="descripcion" cols="30" rows="3"></textarea><br>
        
        <label for="prioridad">Prioridad</label><br>
        <select name="prioridad">
            <option value="Alta">Alta</option>
            <option value="Media">Media</option>
            <option value="Baja">Baja</option>
        </select><br>

        <input type="checkbox" name="urgente" value="1">
        <label for="urgente">Urgente</label><br>

        <input type="radio" name="tipo" value="escuela">
        <label for="urgente">Escuela</label><br>

        <input type="radio" name="tipo" value="trabajo">
        <label for="urgente">Trabajo</label><br>
        <input type="submit" value="Enviar">
        <hr>

        <?php
            $sql = "SELECT * FROM tareas";
            $stnt = $conn->prepare($sql);
            $stnt->execute();

            $stnt->setFetchMode(PDO::FETCH_ASSOC);
            echo "<table border=1>";
            echo "<tr><th>ID</th> <th>Nombre</th><th>Descripcion</th><th>Prioridad</th><th>Urgente</th><th>Tipo</th>";
            foreach ($stnt->fetchAll() as $tarea){
                echo "<tr>
                        <td>" . $tarea['id']."</td>
                        <td>" . $tarea['tarea'] . "</td>
                        <td>" . $tarea['descripcion'] . "</td>
                        <td>" . $tarea['prioridad'] . "</td>
                        <td>" . $tarea['urgente'] . "</td>
                        <td>" . $tarea['tipo'] . "</td>
                    </tr>";
                }
                echo "</table>";
        ?>
    </form>
</body>
</html>