<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<script src="../js/jquery-1.11.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
<script src="../js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			
				<h2>instalando base de datos</h2>
    
     <div class=" progress " >  
<div id='progress' class="progress-bar progress-bar-striped active " role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:10%">
</div>
     </div>
    <a  id='btn' href="../index.php" class="btn btn-default disabled"> ir a la pagina</a>

<?php 
include('conexion.php');
$a=new conectionSQl;
$a->conectarbase();
$i;
 if(mysql_query('create database IF NOT EXISTS bogogeek')){

mysql_select_db('bogogeek');
?>
<script>
  

 
 setTimeout(function(){document.getElementById("progress").style.width='16%';},800);
  

</script>

<?php
if(mysql_query('CREATE TABLE IF NOT EXISTS `orden` (
  `Id_Orden` int(11) NOT NULL AUTO_INCREMENT,
  `Metodo_pago` text NOT NULL,
  `Codigo_orden` varchar(40) NOT NULL,
  `Cuotas` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  PRIMARY KEY (`Id_Orden`),
  KEY `Id_Usuario` (`Id_Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;'))
{
  ?>


<script>
  

 
 setTimeout(function(){document.getElementById("progress").style.width='32%';},800};
  

</script>


<?php
if(mysql_query('CREATE TABLE IF NOT EXISTS `orden-producto` (
  `Id_Orden-Producto` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Orden` int(11) NOT NULL,
  `Id_Producto` int(11) NOT NULL,
  PRIMARY KEY (`Id_Orden-Producto`),
  KEY `Id_Orden` (`Id_Orden`,`Id_Producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;'))
{
?>
<script>
  
 
 
 setTimeout(function(){document.getElementById("progress").style.width='48%';},800);
  

</script>


<?php


if(mysql_query('CREATE TABLE IF NOT EXISTS `producto` (
  `Id_Producto` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo_Produtco` varchar(30) NOT NULL,
  `Componentes` text NOT NULL,
  `Detalles` text NOT NULL,
  `Garantia` varchar(30) NOT NULL,
  `Id_Tipo` int(11) NOT NULL,
  PRIMARY KEY (`Id_Producto`),
  KEY `Id_Tipo` (`Id_Tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;'))
{

?>
<script>
  setTimeout(function(){document.getElementById("progress").style.width='64%';  }, 800);
 
 

  

</script>

<?php
if(mysql_query('

CREATE TABLE IF NOT EXISTS `tarjeta` (
  `Id_Tarjeta` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha_De_Vencimiento` date NOT NULL,
  `Clave` varchar(40) NOT NULL,
  `Numero` int(16) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  PRIMARY KEY (`Id_Tarjeta`),
  KEY `Id_Usuario` (`Id_Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;'))
{


  ?>
<script>
  
 
 
 setTimeout(function(){document.getElementById("progress").style.width='80%';},800);
  

</script>

<?php

if(mysql_query('

CREATE TABLE IF NOT EXISTS `tipo` (
  `Id_Tipo` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` text NOT NULL,
  PRIMARY KEY (`Id_Tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;'))
{

?>

<script>
  
 
 
 
setTimeout(function(){document.getElementById("progress").style.width='96%';},800);
  

</script>


<?php

if(mysql_query('
CREATE TABLE IF NOT EXISTS `usuario` (
  `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Usuario` varchar(30) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Correo_electronico` varchar(30) NOT NULL,
  `Direccion_residencia` varchar(30) NOT NULL,
  `Telefono_celular` int(11) NOT NULL,
  `Contraseña_usuario` varchar(40) NOT NULL,
  PRIMARY KEY (`Id_Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;')){

?>

<script>
  
setTimeout(function(){document.getElementById("progress").style.width='100%'; 
document.getElementById("btn").classList.remove("disabled");
},800);
  
  
 
</script>
<?php
}

 else {

echo 'no se creo la tabla usuario';

 }



}
else{ echo 'no se creo la tabla tipo';}
} else{

echo 'no se creo la tabla tarjeta';

}


}else{


echo 'no se creo la tabla producto';

}

} else{

 echo 'no se creo la tabla orden-producto';

}

  } else{

 echo 'no se creo la tabla orden';



    }?>




<?php

 }else {
   echo 'no se creo la base de datos';

    }

 ?>

 


</div>

			</div>
		</div>
	</div>
</div>
</body>
</html>