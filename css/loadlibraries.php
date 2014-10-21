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
    
    
    
    
    <link href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/css/prettify.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/imagenes/LOGOHLC.png">   
          <!-- Le styles -->


  
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/js/jquery.js"></script>
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/js/bootstrap.js"></script>
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/js/bootstrap-transition.js"></script>
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/js/bootstrap-alert.js"></script>
    <!--<script src="../bt/assets/js/bootstrap-modal.js"></script>-->
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/js/bootstrap-tab.js"></script>
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/js/bootstrap-popover.js"></script>
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/js/bootstrap-button.js"></script>
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/js/bootstrap-collapse.js"></script>
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/js/bootstrap-carousel.js"></script>
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/js/bootstrap-typeahead.js"></script>
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/js/bootstrap-affix.js"></script>






    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/js/holder/holder.js"></script>
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/js/prettify.js"></script>
    <link href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/css/login-box.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/js/application.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/css/styles3.css"></link>
    

<link href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/css/armazon.css" media="screen" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/m4a.js"></script>   
<link href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/css/bootstrap-editable.css" media="screen" rel="stylesheet" type="text/css"></link>

<!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/js/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/assets/ico/favicon.png">
  

    
<!--barra separadora -->
<link href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/docs.css" rel="stylesheet"></link>

 <link rel="stylesheet" href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/css/jquery-ui.css" />

<script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/js/jquery-ui.js"></script>
<script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/js/jquery.popupWindow.js"></script>
<!--<script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/bootstrap-paginator/src/bootstrap-paginator.min.js"></script>--!>
<link href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/css/estilosPropios.css" rel="stylesheet">

<!--TECLADO-->
    <script type="text/javascript" src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/js/keyboard.js" charset="UTF-8"></script>
<link rel="stylesheet" type="text/css" href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/bt/css/keyboard.css">



    
    
    
    
    
    
    
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