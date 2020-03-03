<?php 


class conectionSQl{

var	$conect;
function conectar()
	{ 
	if ($this->conect=mysql_connect("localhost:3306",'root',""))
	{
		return mysql_select_db("bogogeek",$this->conect);
		
		
		}
	
	}
	
	
function conectarbase()
	{
	return $this->conect=mysql_connect("localhost:3306",'root',"");
	
	
	}
	

	function consultar($SQL)
{ 
try 
	{
  $query=mysql_query($SQL,$this->conect);

if($query){
return $query;
}
else
{
	?>
   
	  
	  <?php 
	  }
}
	catch(Exception $e){
		
	echo(	"error".$e->getMessage());
		}
	
	}	
	
	
	
	function buscarusuario($user){
	
		
	try 
	{
	$sql=" SELECT * FROM `usuario` WHERE `Usuario` LIKE '".$user."'";
	
	return ($this->consultar($sql));
	
	}
	catch(Exception $e){
		
	echo(	"error:".$e->getMessage());
		}
	
	
	}
	
	function buscarcontraseña($user){
	
	$sql=" SELECT * FROM `usuario` WHERE `Usuario` LIKE '".$user."'";
	
	return ($this->consultar($sql));
	
	
	
	
	}
	
	function auditoria($accion){
				$sql = "INSERT INTO auditorias ( `ID_usuario`, `fecha`, `accion`) VALUES ('".$id."', '".date('Y-m-d H:i:s')."', '$accion');";
		
	$this->consultar($sql);	
		
				
				
				}

	}
	?>