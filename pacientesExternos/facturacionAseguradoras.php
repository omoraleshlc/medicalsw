<!DOCTYPE html>
<html>
<head>
    <?php require("../css/loadlibraries.php");?>


</head>
<body class="metro" style="background-color: #efeae3">    
    <?php require("../encabezado.php");?>


<div id="contenedor" class="container">
    
    
    
<div id="body">
    
 
    
<?php require("encabezado_facturacion.php");?>
    
<!-- lista de clientes externos para pagar-->

<!--
	<script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/js/scripts/autocomplete.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/js/stylesheets/autocomplete.css" type="text/css" />
-->

<?php 
$fecha2=date("d-m-Y");
?>

<form method="post">

<div class="lista">
    <div align="center">
      
    
    
    <table class="table bordered"> 
    
    <th><span class="icon-calendar on-left"></span> Fecha Inicial <input type="text" maxlength="10" name="fechaInicial" class="input-sm datepicker"   id="fechaInicial2" value="<?php
		 if($_POST['fechaInicial']){
		 echo $_POST['fechaInicial'];
		 } else {
		 echo $fecha2;
		 }
                 ?>" /></th>    
    <th><span class="icon-calendar on-left"></span>  Fecha Final <input type="text" maxlength="" name="fechaFinal" class="datepicker" id="fechaFinal2" value="<?php
		 if($_POST['fechaFinal']){
		 echo $_POST['fechaFinal'];
		 } else {
		 echo $fecha2;
		 }
		 ?>" /></th>
    
    <tr >    	
        <td ><span class="icon-address-book on-left"></span>  Aseguradora</td>
        <td >
     
   
       <input name="seguro" type="hidden"  id="seguro"   readonly=""
		value="<?php if($_POST['seguro'] and !$_POST['nuevo']){ echo $_POST['seguro'];} else { echo "0";}?>" 
		onchange="javascript:this.form.submit();" />
		<input name="nomSeguro" type="text"  class="form-control small" id="nomSeguro" value="<?php echo $_POST['nomSeguro'];?>">
	
        </td>        
    	</tr>
    
     <tr>
         <td><span class="icon-type on-left"></span>  Tipo Paciente</td>   
         <td><select class="form-control btn-xs" name="tipoPaciente">
                 <option <?php if($_POST['tipoPaciente']=='externo'){ echo 'selected=""';}?> value="externo">Ambulatorio</option>
                 <option <?php if($_POST['tipoPaciente']=='interno'){ echo 'selected=""';}?> value="interno">Interno</option>
                 <option <?php if($_POST['tipoPaciente']=='ambos'){ echo 'selected=""';}?> value="ambos">Ambos</option>
             </select></td>
     </tr>
    
     <tr>
         <th>
     <div align="right">
                    <button name="generarReporte" class="image-button bg-green fg-white image-left">
                    Generar Reporte
                    <i class="icon-enter bg-green fg-white"></i>
                </button>
     </div>
    </th>
    <td>
                    <button name="agregar" class="image-button bg-blue fg-white image-left">
                    Agregar
                    <i class="icon-enter bg-blue fg-white"></i>
                </button>
    </td>
     </tr>
    
    
     
</table>   
   <script>  
        $('.datepicker').datepicker({
            numberOfMonths: 3,
            showButtonPanel: true,
            dateFormat: "yy-mm-dd"      
        });
    </script> 
    
    
    <script>
		new Autocomplete("razonSocial", function() {
			this.setValue = function( id ) {
				document.getElementsByName("rfc")[0].value = id;
			}

			// If the user modified the text but doesn't select any new item, then clean the hidden value.
			if ( this.isModified )
				this.setValue("");

			// return ; will abort current request, mainly used for validation.
			// For example: require at least 1 char if this request is not fired by search icon click
			if ( this.value.length < 4 && this.isNotClick )
				return ;

			// Replace .html to .php to get dynamic results.
			// .html is just a sample for you
			return "<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/ajax_files/rfcx.php?entidad=<?php echo $entidad;?>&almacen=<?php echo $ALMACEN;?>&q=" + this.value;
			// return "completeEmpName.php?q=" + this.value;
		});
	</script>
	
	
	  <script>
		new Autocomplete("nomSeguro", function() { 
			this.setValue = function( id ) {
				document.getElementsByName("seguro")[0].value = id;
			}
			
			// If the user modified the text but doesn't select any new item, then clean the hidden value.
			if ( this.isModified )
				this.setValue("");
			
			// return ; will abort current request, mainly used for validation.
			// For example: require at least 1 char if this request is not fired by search icon click
			if ( this.value.length < 4 && this.isNotClick ) 
				return ;
			
			// Replace .html to .php to get dynamic results.
			// .html is just a sample for you
			return "<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/ajax_files/clientesPrincipalesx.php?entidad=<?php echo $entidad;?>&q=" + this.value;
			// return "completeEmpName.php?q=" + this.value;
		});	
	</script>
    
    
    

            
</div>








<script>
 $(document).ready(function() {     
        var $j = jQuery.noConflict();
 	 $j("#lista").load("facturacionAseguradoras_A.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&fechaFinal=<?php echo $_POST['fechaFinal'];?>&seguro=<?php echo $_POST['seguro'];?>&tipoPaciente=<?php echo $_POST['tipoPaciente'];?>&entidad=<?php echo $entidad;?>&basedatos=<?php echo $basedatos;?>");
   /*var refreshId = setInterval(function() {
      $j("#lista").load("facturacionAseguradoras_A.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&fechaFinal=<?php echo $_POST['fechaFinal'];?>&seguro=<?php echo $_POST['seguro'];?>&tipoPaciente=<?php echo $_POST['tipoPaciente'];?>&entidad=<?php echo $entidad;?>&basedatos=<?php echo $basedatos;?>");
   }, 9000);*/
   $j.ajaxSetup({ cache: false });
});
</script>








<div id="lista">
</div>


</form>

</div>  
            </div>
    


<?php //require("../footer.php");?>

   
</body>
</html>