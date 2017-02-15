<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css.css">
    <title>Premier</title>
  </head>
  <body>
    <?php
    include 'Premierbd.php';
    $pl=new premier();
      if ($pl->geterror()==false) {
        //echo "Funciona";

        ?>
  <ul>
    <li><a href="index.php">Indice</a></li>
    <li><a href="clasificacion.php">Clasificacion</a></li>
    <li><a href="maximogoles.php">Maximos Goleadores</a></li>
    <li><a href="maximoasistente.php">Maximos Asistentes</a></li>
  </ul>

    <table>
      <tr>
    <th>Local</th>
    <th>Goles</th>
    <th>Visitantes</th>
    <th>Goles</th>
  </tr>
      <?php
     $partidos = $pl->partido();
     while ($jornada20 = $partidos->fetch_assoc()) {

       echo "<tr>";
       echo "<td>";
       echo $jornada20["equipo1"];
       echo "</td>";
       echo "<td>";
       echo $jornada20["goles1"];
       echo "</td>";
       echo "<td>";
       echo $jornada20["equipo2"];
       echo "</td>";
       echo "<td>";
       echo $jornada20["goles1"];
       echo "</td>";
       echo "</tr>";
     }
     echo "</table>";
    }
   ?>



  </body>
</html>
