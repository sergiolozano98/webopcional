<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css.css">
    <title></title>
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
        <div class=’centerTable’>
        <table border="1px">


            <p><h1>Clasificacion</h1></p>
            <table>
              <tr>
            <th>Posicion</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Asistencias</th>
          </tr>
    <?php
    $maxa = $pl->maxAsistencias();
    while ($maximoA = $maxa->fetch_assoc()) {
      echo "<tr>";
      echo "<td>";
      echo $maximoA["Posicion"];
      echo "</td>";
      echo "<td>";
      echo $maximoA["Nombre"];
      echo "</td>";
      echo "<td>";
      echo $maximoA["Apellidos"];
      echo "</td>";
      echo "<td>";
      echo $maximoA["Asistencias"];
      echo "</td>";
      echo "</tr>";
      }
echo "</table>";
echo "</div>";
   }
   ?>
  </body>
</html>
