<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <title>Forma A</title>
  </head>
  <body class="p-3 mb-2 bg-dark text-white" style="text-align:center;">
    <header>
      <h1>
        Forma A
      </h1>
    </header>
    <div class="container" style="margin-top: 50px">
      <div class="col">
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">        
        <select  name="idioma" class="form-select" aria-label="Default select example" style="width:100%; align-self: center;" >
        <option selected >Elija el Idioma</option>
        <option value="Ingles">Ingles</option>
        <option value="Frances">Frances</option>
        <option value="Mandarin">Mandarin</option>
        <option value="Ruso">Ruso</option>
        <option value="Portugues">Portugues</option>
        <option value="Japones">Japones</option>
        </select>
        <br>
        <input type="submit" class="btn btn-light" href="php/a.php" value="Ver"/>
        </form>        
      </div>
      <br><br><br><br><br>
      
    <?php      
      if($_POST){
        echo "<div id=\"col\">";
        $Ingles["Avanzado"] = 10;
        $Ingles["Intermedio"] = 15;
        $Ingles["Basico"] = 25;

        $Frances["Avanzado"] = 2;
        $Frances["Intermedio"] = 5;
        $Frances["Basico"] = 10;

        $Mandarin["Avanzado"] = 1;
        $Mandarin["Intermedio"] = 4;
        $Mandarin["Basico"] = 8;

        $Ruso["Avanzado"] = 4;
        $Ruso["Intermedio"] = 8;
        $Ruso["Basico"] = 12;

        $Portugues["Avanzado"] = 10;
        $Portugues["Intermedio"] = 15;
        $Portugues["Basico"] = 30;

        $Japones["Avanzado"] = 67;
        $Japones["Intermedio"] = 25;
        $Japones["Basico"] = 90;

        $Idioma = $_POST['idioma'];

        switch ($Idioma) {
          case 'Ingles':
            echo "<table class=\"table table-primary table-striped\">";
            echo "<tr>";
            echo "<th colspan=\"2\" style=\"text-align:center;\">Inglés</th>";
            foreach($Ingles as $key => $value){
              echo "<tr>";
              echo "<td> $key </td>";
              echo "<td> $value </td>";
              echo "</td>";
            }
            echo "</table>";
          break;
          case 'Frances':
            echo "<table class=\"table table-secondary table-striped\">";
            echo "<tr>";
            echo "<th colspan=\"2\" style=\"text-align:center;\">Francés</th>";
            foreach($Frances as $key => $value){
              echo "<tr>";
              echo "<td> $key </td>";
              echo "<td> $value </td>";
              echo "</td>";
            }
            echo "</table>";
          break;
          case 'Mandarin':
            echo "<table class=\"table table-success table-striped\">";
            echo "<tr>";
            echo "<th colspan=\"2\" style=\"text-align:center;\">Mandarin</th>";
            foreach($Mandarin as $key => $value){
              echo "<tr>";
              echo "<td> $key </td>";
              echo "<td> $value </td>";
              echo "</td>";
            }
            echo "</table>";
          break;
          case 'Ruso':
            echo "<table class=\"table table-danger table-striped\">";
            echo "<tr>";
            echo "<th colspan=\"2\" style=\"text-align:center;\">Ruso</th>";
            foreach($Ruso as $key => $value){
              echo "<tr>";
              echo "<td> $key </td>";
              echo "<td> $value </td>";
              echo "</td>";
            }
            echo "</table>";
          break;
          case 'Portugues':
            echo "<table class=\"table table-info table-striped\">";
            echo "<tr>";
            echo "<th colspan=\"2\" style=\"text-align:center;\">Portugues</th>";
            foreach($Portugues as $key => $value){
              echo "<tr>";
              echo "<td> $key </td>";
              echo "<td> $value </td>";
              echo "</td>";
            }
            echo "</table>";
          break;
          case 'Japones':
            echo "<table class=\"table table-light table-striped\">";
            echo "<tr>";
            echo "<th colspan=\"2\" style=\"text-align:center;\">Japones</th>";
            foreach($Japones as $key => $value){
              echo "<tr>";
              echo "<td> $key </td>";
              echo "<td> $value </td>";
              echo "</td>";
            }
            echo "</table>";
          break;
        };
        echo "</div>";    
      }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
    <div style="position: absolute; left:0px; right:0px; bottom:0px; height:50px; z-index:0">
      <a type="button" class="btn btn-light" href="../index.html">Volver al Menú</a>
    </div>
  </body>
</html>