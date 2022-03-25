<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <title>Forma B</title>
  </head>
  <body class="p-3 mb-2 bg-dark text-white" style="text-align:center;">
    <header>
      <h1>
        Forma B
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
            <input type="submit" class="btn btn-light" value="Ver"/>
            <br><br><br><br><br>
        </form>        
      </div>          
    <?php
      if($_POST){
        $Alumnos = array(
          "Ingles" => array(
            "Avanzado"=>10,
            "Intermedio"=>15,
            "Basico"=> 25
          ),
          "Frances" => array(
            "Avanzado"=>2,
            "Intermedio"=>5,
            "Basico"=> 10
          ),
          "Mandarin" => array(
            "Avanzado"=>1,
            "Intermedio"=>4,
            "Basico"=> 8
          ),
          "Ruso" => array(
            "Avanzado"=>4,
            "Intermedio"=>8,
            "Basico"=> 12
          ),
          "Portugues" => array(
            "Avanzado"=>10,
            "Intermedio"=>15,
            "Basico"=> 30
          ),
          "Japones" => array(
            "Avanzado"=>67,
            "Intermedio"=>25,
            "Basico"=> 90
          ),          
        );

        $Idioma = $_POST['idioma'];
        echo "<div id=\"col\">";
        switch ($Idioma) {
          case 'Ingles':
            echo "<table class=\"table table-primary table-striped\">";
            echo "<tr>";
            echo "<th colspan=\"2\" style=\"text-align:center;\">Inglés</th>";
            foreach($Alumnos["$Idioma"] as $key => $value){
              echo "<tr>";
              echo "<td> $key </td>";
              echo "<td> $value </td>";
              echo "</td>";
            }
          break;
          case 'Frances':
            echo "<table class=\"table table-secondary table-striped\">";
            echo "<tr>";
            echo "<th colspan=\"2\" style=\"text-align:center;\">Frances</th>";
            foreach($Alumnos["$Idioma"] as $key => $value){
              echo "<tr>";
              echo "<td> $key </td>";
              echo "<td> $value </td>";
              echo "</td>";
            }
          break;
          case 'Mandarin':
            echo "<table class=\"table table-success table-striped\">";
            echo "<tr>";
            echo "<th colspan=\"2\" style=\"text-align:center;\">Mandarin</th>";
            foreach($Alumnos["$Idioma"] as $key => $value){
              echo "<tr>";
              echo "<td> $key </td>";
              echo "<td> $value </td>";
              echo "</td>";
            }
          break;
          case 'Ruso':
            echo "<table class=\"table table-danger table-striped\">";
            echo "<tr>";
            echo "<th colspan=\"2\" style=\"text-align:center;\">Ruso</th>";
            foreach($Alumnos["$Idioma"] as $key => $value){
              echo "<tr>";
              echo "<td> $key </td>";
              echo "<td> $value </td>";
              echo "</td>";
            }
          break;
          case 'Portugues':
            echo "<table class=\"table table-info table-striped\">";
            echo "<tr>";
            echo "<th colspan=\"2\" style=\"text-align:center;\">Portugues</th>";
            foreach($Alumnos["$Idioma"] as $key => $value){
              echo "<tr>";
              echo "<td> $key </td>";
              echo "<td> $value </td>";
              echo "</td>";
            }
          break;
          case 'Japones':
            echo "<table class=\"table table-light table-striped\">";
            echo "<tr>";
            echo "<th colspan=\"2\" style=\"text-align:center;\">Japones</th>";
            foreach($Alumnos["$Idioma"] as $key => $value){
              echo "<tr>";
              echo "<td> $key </td>";
              echo "<td> $value </td>";
              echo "</td>";
            }
          break;
        }
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