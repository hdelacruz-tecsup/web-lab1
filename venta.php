<!DOCTYPE html>
<html>
<head>
	<title>Formulario JavaScript</title>
	<script type="text/javascript">
		  var sumar = function(){
		  var venta = parseFloat(document.getElementById('Vent').value);
		  if(venta <= 150){
             var total = 0;
		  }else if(venta <= 400){
             var total = venta*0.1;
		  }else{
		  	 var total = 50 + venta*0.09;
		  }
		  document.getElementById('resultado').value = total;
		};
	</script>
</head>
<body>
      <form>
      	  <p>Monto : <input type="text" id="Vent" size="20"></p>
      	  <p><input type="button" value="Calcular Comision" onclick="sumar()"></p>
      	  <p>La comision a pagar es: <input type="text" id="resultado" disabled="disabled"></p>
      </form>
</body>
</html>