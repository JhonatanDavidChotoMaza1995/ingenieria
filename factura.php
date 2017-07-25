<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FACTURA ELECTRONICA</title>
</head>
<body>
   <?php
echo "<strong><center>DATOS DE SU RESERVA <br><br></center></strong>";
    
    $nombre=$_POST['nombre'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $fecha=$_POST['fecha'];
    
    $ctpersonal=$_POST['ctpersonal'];
    $ctmediana=$_POST['ctmediana'];
    $ctfamiliar=$_POST['ctfamiliar'];
    $total;
    $totalp=0;
    $totalm=0;
    $totalf=0;
    $n_pizzas=$ctpersonal+$ctmediana+$ctfamiliar;
    
    echo "<strong>Su factura se emitirá con los siguientes datos <br></strong>";
    echo "<strong>Fecha de Pedido:</strong> $fecha<br>";
    echo "<strong>Cliente:</strong> $nombre<br>";
    echo "<strong>Dirección:</strong> $direccion<br>";
    echo "<strong>Teléfono:</strong> $telefono<br>";
    
    if(isset($_REQUEST['personal']))
    {
        $totalp=$totalp+$ctpersonal*5;
    }
    
    if(isset($_REQUEST['mediana']))
    {
        $totalm=$totalm+$ctmediana*10;
    }
    
    if(isset($_REQUEST['familiar']))
    {
        $totalf=$totalf+$ctfamiliar*20;
    }
    
    $total=$totalm+$totalp+$totalf;
    echo "<br>";
    
    
     echo "<strong>Usted pidió:</strong> $n_pizzas pizzas  <br>";
    echo "<strong>Pizza Personal:</strong> $ctpersonal <br>";
    echo "<strong>Pizza Mediana:</strong> $ctmediana <br>";
    echo "<strong>Pizza Familiar:</strong> $ctfamiliar <br>";
     echo "<strong>Subtotal a pagar:</strong> $total dolares  <br>";
    
    if($_REQUEST['pago']=="efectivo")
	{ echo "Su pago fue en efectivo y recibirá un descuento del 10% <br>";	
    $total=$total-(($total*10)/100);
    }
	
	if($_REQUEST['pago']=="tarjeta")
	{ echo "Su pago fue en tarjeta y recibirá un impuesto por la transaccion de 15% <br>";	
    $total=$total+(($total*15)/100);}
	
    
    echo "<strong>Total a pagar: $total dolares  </strong><br>";
    
?>    
</body>
</html>