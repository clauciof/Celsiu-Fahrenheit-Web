<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

  $valorminimo = $_POST["valorminimo"];
  $valormaximo = $_POST["valormaximo"];
  $incremento = $_POST["incremento"];
 ?>


<html>
    <head>
        <title>@clauceta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type='text/css' href="CSS/stylesheet.css" />
        <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\"/>
        <script src = "Javascript\Javascript.js" type = "text/javascript"></script>

    </head>
    <body onload="populateTable(<?php echo $valorminimo; ?>, <?php echo $valormaximo; ?>, <?php echo $incremento; ?>);">

        <div>
            <h1>Tabela CELSIUS -  FAHRENHEIT</h1>

        </div>
        <table name="tabela" id="table" class="mytable">
          <thead>
              <tr>
                 <th>Celsius</th>
                 <th>Fahrenheit</th>
              </tr>
          </thead>

          <tbody>
              <tr></tr>
          </tbody>


        </table>



        <script>
        function populateTable(valorMinimo, valorMaximo, valorIncremento){


          var i;
          var j = -1;
          var valorminimoCelsiu = valorMinimo;
          var valorMaximoCelsiu = valorMaximo;
          var valorFahrenheit;
          var incremento = valorIncremento;
          //  alert("minimo = "+valorMinimo+"maximo =  "+valorMaximo+"incremento = "+valorIncremento);
          //var table = document.getElementById('table')
          //alert("table valor = "+table);


          for(i=valorminimoCelsiu; i<valorMaximoCelsiu; i = i + incremento){
            var table = document.getElementById('table')

            var row = table.insertRow(-1);



            var celulaCelsiu = row.insertCell(0);
            var celulaFahrenheit = row.insertCell(1);

            valorFahrenheit = i*1.8 + 32;



            celulaCelsiu.innerHTML = i+" °C    ";
            celulaFahrenheit.innerHTML = valorFahrenheit+" °F";

          //  window.location.href = "Table.php";
          }

        }
        </script>



    </body>
</html>
