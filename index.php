<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="js/jquery-1.11.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<script src="js/bootstrap.js"></script><link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<?php session_start();
$_SESSION["Carrito"]="";

?>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   <div class="navbar-brand"><a href=""> <img src="imagen/brand.png" alt=""></a></div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
       
   
    
    <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#"><span class="fa fa-shopping-cart "></span><span class="badge"></span></a></li>
        <li class="active"><a href="#"><span class="fa fa-user "></span></a></li>
        </ul>
  </div>
   </div>
</nav>
<?php  include('/php/conexion.php');
$a=new conectionSQl;


if($a->conectar()){

echo 'hola';


}else{


 // header('location:php/instalador.php');}

 ?>



<main>
  <section  class="container" id="home"> <header style="">
  
  <nav class="row">
 <div class="col-md 12">
 <div class="text-center">
 <br><br>
   <img  id="logo" src="imagen/logo.png"  alt=""/></div>
   <div class="row">
    <div class="col-md-3 col-sm-2 col-xs-1" ></div>	
   <div class="col-md-6 col-sm-8 col-xs-10">
   <div class="input-group" >
      <input type="text" class="form-control" placeholder="buscar">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Buscar  <span class="fa fa-search"></span></button>
      </span>
    </div>
   </div>
    <div class="col-md-3 col-sm-2 col-xs-1" ></div>	
   </div>
  </div>
   <div class="hidden-xs">
   <div class="row" style="">
      <div class="col-md-3 col-sm-1"></div>
      <div class="col-md-8 col-sm-10">
      <div class="nav nav-pills text-center">
     
    
           <li class="h1 "><a href="" style="color:rgba(0,0,0,1.00)"><span class="fa fa-laptop "></span><p class="h4">Portatiles</p> </a></li>
      <li class="h1 ">&nbsp;</li>
      <li class="h1"><a href="" style="color:rgba(0,0,0,1.00)"><span class="fa fa-tablet "></span><p class="h4">Tablets/Ipads</p></a></li>
      <li class="h1 ">&nbsp;</li>
      <li class="h1"><a href="" style="color:rgba(0,0,0,1.00)"><span class="fa fa-mobile "></span><p class="h4">Celulares</p></a></li>
     <li class="h1 ">&nbsp;</li> 
            <li class="h1 "><a href="" style="color:rgba(0,0,0,1.00)"><span class="glyphicon glyphicon-headphones"></span><p class="h4">Accesorios</p></a></li>
     <li class="h1 ">&nbsp;</li> 
      
      <li class=" h1"><a href="" style="color:rgba(0,0,0,1.00)"><span class="fa fa-gamepad "></span><p class="h4">Consolas</p></a></li</div>
      </div><div class="col-md-1 col-sm-1" ></div>		
       </div>
    </nav>
  
</div>
   
   </section > 
   <section id="seccion2" >
   <br><br>
   <div class="h1 text-center " style="   text-shadow:rgba(0,0,0,1.00) 4px 2px 4px 2px; text-transform:capitalize;"><span class="font">OFERTAS </span></div>
  
  <div class="container" >
  <div class="col-md-1"></div>
  <div class="col-md-10" style="">
   <br><br>
   <div class="container-fluid">	
   <br> <div class="row"  >
  <div class="col-md-4">   
  <br>
   <a href="#"><img class=" img-circle img-responsive"  src="imagen/iphonecs5.jpg" width="150px" height="180px"></a>
    
    <div class="">
   
    <b>Nombre:</b>Iphone <br> <br>
    <b>especificaciones:</b> Iphone  <br> <br>
   <b>precio:</b>2000000 COP <br> <br>
 <button class="btn btn-default">Agregar al carrito <span class="fa fa-shopping-cart"></span></button></div>
   </div>
    <div class="col-md-4">  
     <br>
   
   <a href="#"><img class=" img-circle img-responsive"  src="imagen/iphonecs5.jpg" width="150px" height="180px"></a>
    
    <div class="">
    
    <b>Nombre:</b>Iphone <br> <br>
    <b>especificaciones:</b> Iphone  <br> <br>
   <b>precio:</b>2000000 COP <br> <br>
 <button class="btn btn-default">Agregar al carrito <span class="fa fa-shopping-cart"></span></button></div>
   </div>
    <div class="col-md-4"> 
    <br>
   <a href="#"><img class=" img-circle img-responsive"  src="imagen/iphonecs5.jpg" width="150px" height="180px"></a>
    
    <div class="">

    <b>Nombre:</b>Iphone <br> <br>
    <b>especificaciones:</b> Iphone  <br> <br>
   <b>precio:</b>2000000 COP <br> <br>
 <button class="btn btn-default">Agregar al carrito <span class="fa fa-shopping-cart"></span></button></div>
   </div>
   <br><br>
   <div class="row"  >
    <div class="col-md-4"> 
      <br>
   <a href="#"><img class=" img-circle img-responsive"  src="imagen/iphonecs5.jpg" width="150px" height="180px"></a>
    
    <div class="">
  
    <b>Nombre:</b>Iphone <br> <br>
    <b>especificaciones:</b> Iphone  <br> <br>
   <b>precio:</b>2000000 COP <br> <br>
 <button class="btn btn-default">Agregar al carrito <span class="fa fa-shopping-cart"></span></button>
 </div>
  
 
 </div>
 
 <div class="col-md-4">  
  <br>
   <a href="#"><img class=" img-circle img-responsive"  src="imagen/iphonecs5.jpg" width="150px" height="180px"></a>
    
    <div class="">
     <b>Nombre:</b>Iphone <br> <br>
    <b>especificaciones:</b> Iphone  <br> <br>
   <b>precio:</b>2000000 COP <br> <br>
 <button class="btn btn-default">Agregar al carrito <span class="fa fa-shopping-cart"></span></button>
 </div>
   </div>
   
   
   <div class="col-md-4"> 
     <br>
   <a href="#"><img class=" img-circle img-responsive"  src="imagen/iphonecs5.jpg" width="150px" height="180px"></a>
    
    <div class="">
      <b>Nombre:</b>Iphone <br> <br>
    <b>especificaciones:</b> Iphone  <br> <br>
   <b>precio:</b>2000000 COP <br> <br>
 <button class="btn btn-default">Agregar al carrito <span class="fa fa-shopping-cart"></span></button>
 </div>
  </div>
  <div class="row"  >
    <div class="col-md-4">  
     <br>
   <a href="#"><img class=" img-circle img-responsive"  src="imagen/iphonecs5.jpg" width="150px" height="180px"></a>
    
    <div class="">
     <b>Nombre:</b>Iphone <br> <br>
    <b>especificaciones:</b> Iphone  <br> <br>
   <b>precio:</b>2000000 COP <br> <br>
 <button class="btn btn-default">Agregar al carrito <span class="fa fa-shopping-cart"></span></button>
 </div>
  
 
 </div>
 
 <div class="col-md-4">  
  <br>
   <a href="#"><img class=" img-circle img-responsive"  src="imagen/iphonecs5.jpg" width="150px" height="180px"></a>
    
    <div class="">
     <b>Nombre:</b>Iphone <br> <br>
    <b>especificaciones:</b> Iphone  <br> <br>
   <b>precio:</b>2000000 COP <br> <br>
 <button class="btn btn-default">Agregar al carrito <span class="fa fa-shopping-cart"></span></button>
 </div>
   </div>
   
   
   <div class="col-md-4">  
    <br>
   <a href="#"><img class=" img-circle img-responsive"  src="imagen/iphonecs5.jpg" width="150px" height="180px"></a>
    
    <div class="">

    <b>Nombre:</b>Iphone <br> <br>
    <b>especificaciones:</b> Iphone  <br> <br>
   <b>precio:</b>2000000 COP <br> <br>
 <button class="btn btn-default">Agregar al carrito <span class="fa fa-shopping-cart"></span></button><br><br><br><br> 
 </div>
     
     
  </div>

  </div>
   <nav>
    <ul class="pager">
    <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Anterior</a></li>
    <li class="next"><a href="#">Siguiente <span aria-hidden="true">&rarr;</span></a></li>
  </ul>
</nav>
  </div>
</div>
   </div>
   </div>
   </section>
</main>
</body>
</html>