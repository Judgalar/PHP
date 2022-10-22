<html>
<title>Calculadora</title>
<body>
  
<?
error_reporting(E_ERROR | E_WARNING | E_PARSE);
/* EJERCICIO CALCULADORA ANGELES CON SWITH
Este ejercicio muestra un formulario que pide dos datos y un menú desplegable para 
seleccionar una operación entre varias- 

En esta solución unimos formulario y procesamiento en el mismo archivo 
usando la función isset. 

Añadimos un hiperenlace que tras mostrar la operación seleccionada 
me permite volver al formulario */

	//Comprobar si he recibido datos de un formulario
$Enviar=$_REQUEST["Enviar"];
if (isset($Enviar))  //Si se han recibido datos del formulario
{
		//Recibo los datos del formulario
	$Operacion=$_REQUEST["Operacion"];
	$Dato1=$_REQUEST["Dato1"];
	$Dato2=$_REQUEST["Dato2"];

		//Proceso los datos en este caso con switch
	switch($Operacion)
	{
		case "Suma":
			$Resultado=$Dato1+$Dato2;
			echo"El resultado de sumar ".$Dato1." mas ".$Dato2." es ".$Resultado;
			break;
		case "Potencia":
			$Resultado=pow($Dato1,$Dato2);
			echo "El resultado de ".$Dato1." elevado a ".$Dato2;
			echo " es ".$Resultado;
			break;
	    case "Raiz":
			$Resultado1=sqrt($Dato1);
			$Resultado2=sqrt($Dato2);
			echo "La raiz de ".$Dato1." es ".$Resultado1;
			echo "<br>y la de ".$Dato2." es ".$Resultado2;
			break;
		case "paroimpar":
			if($Dato1%2==0)
				echo $Dato1." es par";
			else
				echo $Dato1." es impar";
			if($Dato2%2==0)
				echo "<br>".$Dato2." es par";
			else
				echo "<br>".$Dato2." es impar";
			break;
		default:  
		//Mensaje cuando la operación no coincide con ninguna 
			echo "La operación no es válida";
	}  //Cierro el switch
	 	//Hiperenlace para volver a mostrar el formulario
	echo "<br>Si quieres volver al formulario <a href=\"V5_SWITCH_CalculadoraUnicoArchivo.php\">PULSA AQUI</a>";

}
else		//Mostrar el formulario
{	
	//Salgo de php para escribir el formulario solo en html
	?>
	<table border=1>
	
	<form action="V5_SWITCH_CalculadoraUnicoArchivo.php" method="GET">
	<tr><th>
		<h1>Calculadora de Angeles</h1>
	</th></tr>
	<tr><td>
		<h3> Dato1: <input type="TEXT" name="Dato1"> <br>
		 Dato2: <input type="TEXT" name="Dato2"> <br>
		
		Selecciona la operación a realizar:
		<select name="Operacion">
			<option value="Suma"> Suma</option>
			<option value="Potencia"> Potencia</option>
			<option value="Raiz"> Raiz</option>
			<option value="Cuadrado">Cuadrado</option>
			<option value="paroimpar">Valores pares o impares</option>
		</select> <br>
	</td><tr>
	<tr><td>
		<input type="submit" name="Enviar" value="Enviar"> <br>
		<input type="reset" name="Borrar"value="Borrar">
	</td><tr>
	</form>
	</TABLE>

	<?  //De nuevo estoy en php para poder cerrar el else con la llave
}
?>
</body>
</html>