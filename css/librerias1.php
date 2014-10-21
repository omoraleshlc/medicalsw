<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<?php 
//define("CONSTANT_PATH_SIMA", "/var/www/simaVT");
define("CONSTANT_PATH_SIMA_RAIZ", "/medicalsw");
//define("CONSTANT_PATH_CONFIGURACION", "/var/www/simaVT/configuracion");
$usuario="root";
$passwd="";
$servidor="localhost";
$basedatos="sima";   


$entidad='01';


##CONNECT TO SIMA
mysql_connect($servidor,$usuario,$passwd); 
?>
    
    <link href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/css/metro-bootstrap.css" rel="stylesheet">
    <link href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/css/iconFont.css" rel="stylesheet">
    <link href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/css/docs.css" rel="stylesheet">
    <link href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/js/prettify/prettify.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/js/jquery/jquery.min.js"></script>
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/js/jquery/jquery.widget.min.js"></script>
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/js/jquery/jquery.mousewheel.js"></script>
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/js/prettify/prettify.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/js/load-metro.js"></script>
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/js/metro.min.js"></script>

    <!-- Local JavaScript -->
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/js/docs.js"></script>
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/js/github.info.js"></script>
    
     <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/js/hitua.js"></script>
    
    
    
    
    
    
    
    
    
    
    <style>
  html,
body {
   margin:0;
   padding:0;
   height:100%;
}
#container {
   min-height:100%;
   position:relative;
}
#header {
   background:#ff0;
   padding:10px;
}
#body {
   padding:10px;
   padding-bottom:60px;   /* Height of the footer */
   
}
#footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:60px;   /* Height of the footer */
 }
    </style>