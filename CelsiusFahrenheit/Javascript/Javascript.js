function validaform(){

          var valorminimo = document.getElementById('valorminimo').value;
          var valormaximo = document.getElementById('valormaximo').value;
          var incremento  = document.getElementById('incremento').value;


          if (valorminimo >= 0){
            alert("valor minimo inválido");
            return false;

          }

          if (valormaximo <= 0 ){
            alert("valor maximo inválido");
            return false;

          }

          if (incremento <5 || incremento>10 ){
            alert("incremento inválido");
            return false;

          }

          //PopulateTable(valorminimo, valormaximo, incremento);
          return true;
}

/*function populateTable(valorMinimo, valorMaximo, valorIncremento){


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

}*/
