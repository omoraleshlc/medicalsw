<!DOCTYPE html>
<html>
<head>
    <?php require("../css/loadlibraries.php");?>

    <title>Bienvenido al sistema</title>    
</head>
<body class="metro" style="background-color: #efeae3">    
    <?php require("../encabezado.php");?>


<div id="contenedor" class="container">
    
    
    
<div id="body">
    
 
    
<?php require("encabezado_ingresos.php");?>
    
<!-- lista de clientes externos para pagar-->


 <?php 
$sSQLC= "Select * From statusCaja where entidad='".$entidad."' and usuario='".$usuario."' order by keySTC DESC ";
$resultC=mysql_db_query($basedatos,$sSQLC);
$myrowC = mysql_fetch_array($resultC);


if(!$ALMACEN){
$ALMACEN=$_GET['almacen'];
}

if($myrowC['status']=='abierta' ){ //*******************Comienzo la validaci�n*****************
$descripcionTransaccion="externos";
?>
<script>
 $(document).ready(function() {     
        var $j = jQuery.noConflict();
 	 $j("#lista").load("listaExternosA.php?numCorte=<?php echo $myrowC['numCorte'];?>&almacenDestino1=<?php echo $_GET['almacenDestino1'];?>&fecha2=<?php echo $fecha2;?>&fecha1=<?php echo $date;?>&almacen=<?php echo $ALMACEN;?>&tipoOrden=<?php echo $_GET['tipoOrden'];?>&descripcionTransaccion=<?php echo $descripcionTransaccion;?>&warehouse=<?php echo $_GET['warehouse'];?>&entidad=<?php echo $entidad;?>&basedatos=<?php echo $basedatos;?>");
   var refreshId = setInterval(function() {
      $j("#lista").load("listaExternosA.php?numCorte=<?php echo $myrowC['numCorte'];?>&almacenDestino1=<?php echo $_GET['almacenDestino1'];?>&fecha2=<?php echo $fecha2;?>&fecha1=<?php echo $date;?>&almacen=<?php echo $ALMACEN;?>&tipoOrden=<?php echo $_GET['tipoOrden'];?>&descripcionTransaccion=<?php echo $descripcionTransaccion;?>&warehouse=<?php echo $_GET['warehouse'];?>&entidad=<?php echo $entidad;?>&basedatos=<?php echo $basedatos;?>");
   }, 9000);
   $j.ajaxSetup({ cache: false });
});
</script>








<div id="lista">
</div>


<?php } else {?>
        <div class="lista">
            <div class="grid fluid">
                <div class="row">
<div class="panel-header bg-darkRed fg-white">
                <div align="center">
                    <i class="icon-info on-left"></i>
                    CAJA CERRADA
                    <small></small>
                </div>
</div>    

<?php } ?>
</div>  
            </div>
        </div>

</div>
<?php require("../footer.php");?>
</div>
   
</body>
</html>