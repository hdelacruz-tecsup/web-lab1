<!DOCTYPE html>
<html>
<head>
	<title>Formulario JavaScript</title>
	<script type="text/javascript">
		var sumar = function(){
		  var valor1 = parseFloat(document.getElementById('T1').value);
		  var i = 0;
		  var sumapar =0;
		  var sumaimpar =0;
		  var tamaño = valor1.length;
		  for(var i; i<= valor1; i++){
		  	var tipo=(i%2)?"Impar":"Par";
		  	  if(tipo == "Par"){
		  	  	  var sumapar = sumapar + i;
		  	  }else{
		  	  	  var sumaimpar = sumaimpar + i;
		  	  }       
		  }
		  document.getElementById('resultado').value = tamaño;
		  document.getElementById('sumapar').value = sumapar;
		  document.getElementById('sumaimpar').value = sumaimpar;
		};
	</script>
</head>
<body>
      <form>
      	  <p>Valor 1 : <input type="text" id="T1" size="20"></p>
      	  <p><input type="button" value="Sumar" onclick="sumar()"></p>
      	  <p>tamaño : <input type="text" id="resultado" disabled="disabled"></p><br>
      	  <p>Suma digito par : <input type="text" id="sumapar" disabled="disabled"></p><br>
      	  <p>Suma digito impar : <input type="text" id="sumaimpar" disabled="disabled"></p>
      </form>
</body>
</html>