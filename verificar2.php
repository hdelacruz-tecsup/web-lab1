<!DOCTYPE html>
<html>
<head> 
	<script>
	function parImpar()
	{
		var valor=parseInt(document.getElementById("valor").value);
		var tipo=(valor%2)?"Impar":"Par";
		document.getElementById("resultado").innerHTML="El numero "+valor+" es "+tipo;
		return false;
	}
	</script>
</head>
<body>
 
<p>Determinar si un valor es par o impar</p>
 
<form>
	<input type="text" id="valor">
	<input type="submit" onclick="return parImpar()" value="Determinar">
</form>
 
<div id="resultado"></div>
 
</body>
</html>