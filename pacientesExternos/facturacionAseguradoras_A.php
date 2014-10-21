<?php require("/Constantes.php");
//*****************CONEXION  A SIMA***************
require(CONSTANT_PATH_CONFIGURACION.'/baseDatos.php');require(CONSTANT_PATH_CONFIGURACION.'/funciones.php');
$base=new MYSQL();
$basedatos=$base->basedatos();
$conexionManual=new MYSQL();
$conexionManual->conecta();
//**************************************************

$basedatos=$_GET['basedatos'];
$_POST['seguro']=$_GET['seguro'];
$_POST['fechaInicial']=$_GET['fechaInicial'];
$_POST['fechaFinal']=$_GET['fechaFinal'];
$entidad=$_GET['entidad'];
$_POST['tipoPaciente']=$_GET['tipoPaciente'];
?>





    <script>
    $(document).ready(function() {
    $('#selecctall').click(function(event) {  //on click
        if(this.checked) { // check select status
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"              
            });
        }else{
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                      
            });        
        }
    });
   
});
    </script>
 
     



 
    
                  
    
    
            <table   class="table table-condensed table-hover" >
      <tr >
        <th>
            
         #
       </th>

         <th >FV
       </th>


        <th >Fecha
        </th>
        <th >Paciente
        </th>
   
           <th >Status
        </th>
        
               <th><input type="checkbox" id="selecctall"/> Todos
                   
     </th> 
          
          
     
    </tr>
    
    
    
    
    
    
    

<?php	


 if($_POST['tipoPaciente']=='ambos'){
$sql5d= "
SELECT *
FROM
cargosCuentaPaciente,clientesInternos
WHERE
cargosCuentaPaciente.entidad='".$entidad."'
    and

cargosCuentaPaciente.clientePrincipal='".$_POST['seguro']."'
    and

 (cargosCuentaPaciente.fechaCierre>='".$_POST['fechaInicial']."' and cargosCuentaPaciente.fechaCierre<='".$_POST['fechaFinal']."')
and
    cargosCuentaPaciente.tipoTransaccion='taseg'
and
clientesInternos.folioVenta=cargosCuentaPaciente.folioVenta
and
clientesInternos.statusDevolucion!='si'
    
group by cargosCuentaPaciente.folioVenta
order by cargosCuentaPaciente.fechaCierre ASC
";
 }elseif($_POST['tipoPaciente']=='externo'){
$sql5d= "
SELECT *
FROM
cargosCuentaPaciente,clientesInternos
WHERE
cargosCuentaPaciente.entidad='".$entidad."'
    and

cargosCuentaPaciente.clientePrincipal='".$_POST['seguro']."'
    and
   cargosCuentaPaciente.tipoPaciente='externo' 
and

 (cargosCuentaPaciente.fechaCierre>='".$_POST['fechaInicial']."' and cargosCuentaPaciente.fechaCierre<='".$_POST['fechaFinal']."')
and
    cargosCuentaPaciente.tipoTransaccion='taseg'
and
clientesInternos.folioVenta=cargosCuentaPaciente.folioVenta
and
clientesInternos.statusDevolucion!='si'
group by cargosCuentaPaciente.folioVenta
order by cargosCuentaPaciente.fechaCierre ASC
";  
 }elseif($_POST['tipoPaciente']=='interno'){
$sql5d= "
SELECT *
FROM
cargosCuentaPaciente,clientesInternos
WHERE
cargosCuentaPaciente.entidad='".$entidad."'
    and

cargosCuentaPaciente.clientePrincipal='".$_POST['seguro']."'
    and
  ( cargosCuentaPaciente.tipoPaciente='interno' or cargosCuentaPaciente.tipoPaciente='urgencias') 
and
    cargosCuentaPaciente.tipoTransaccion='taseg'
 and
 (cargosCuentaPaciente.fechaCierre>='".$_POST['fechaInicial']."' and cargosCuentaPaciente.fechaCierre<='".$_POST['fechaFinal']."')
and
clientesInternos.folioVenta=cargosCuentaPaciente.folioVenta
and
clientesInternos.statusDevolucion!='si'
group by cargosCuentaPaciente.folioVenta
order by cargosCuentaPaciente.fechaCierre ASC
";    
 }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$result5d=mysql_db_query($basedatos,$sql5d);
while($myrow= mysql_fetch_array($result5d)){

    
    
    
    
 //EXISTE EN INVOICES MAIN ESE FOLIO?
$sql5da2= "
SELECT *
FROM
facturasAplicadas
WHERE
entidad='".$entidad."'
    and
    folioVenta='".$myrow['folioVenta']."'
    and
clientePrincipal='".$_POST['seguro']."'
    and
    status='facturado'
 group by folioVenta

";
$result5da2=mysql_db_query($basedatos,$sql5da2);
$myrow5da2= mysql_fetch_array($result5da2);    
    
    
/*
$sSQL23= "Select * From clientesInternos WHERE entidad='".$entidad."' and folioVenta ='".$myrow['folioVenta']."' ";
$result23=mysql_db_query($basedatos,$sSQL23);
$rNombre23 = mysql_fetch_array($result23); */


  
//echo $rNombre23['statusDevolucion'].'  '.$myrow5da2['status'];

if(!$myrow5da2['status'] or $myrow5da2['statusDevolucion']=='si' ){
$bandera+=1;  
    
    
    
    
    
$sql5= "
SELECT *
FROM
clientes
WHERE
entidad='".$entidad."' 
    AND
folioVenta='".$_POST['folioVenta']."' 
    ";
//$result5=mysql_db_query($basedatos,$sql5);
//$myrow5= mysql_fetch_array($result5);

//	1 	keyIM 	int(11) 			No 	None 		Change Change 	Drop Drop 	More Show more actions
//	2 	numSolicitud 	int(11) 			No 	None 		Change Change 	Drop Drop 	More Show more actions
//	3 	folioVenta 	varchar(50) 	utf8_spanish2_ci 		No 	None 		Change Change 	Drop Drop 	More Show more actions
//	4 	status 	varchar(10) 	utf8_spanish2_ci 		No 	None 		Change Change 	Drop Drop 	More Show more actions
//	5 	statusDevolucion 	char(2) 	utf8_spanish2_ci 		No 	None 		Change Change 	Drop Drop 	More Show more actions
//	6 	entidad 	char(2) 	utf8_spanish2_ci 		No 	None 		Change Change 	Drop Drop 	More Show more actions


    
//EXISTE EN INVOICES MAIN ESE FOLIO?
##ESTA ES PARA VER SI ESTA FACTURADO
$sql5da= "
SELECT *
FROM
facturaGrupos
WHERE
entidad='".$entidad."'
    and
    folioVenta='".$myrow['folioVenta']."'
    and

clientePrincipal='".$_POST['seguro']."'
 

";
$result5da=mysql_db_query($basedatos,$sql5da);
$myrow5da= mysql_fetch_array($result5da);    
    

##ESTA ES TEMPORAL CON EL NUM SOOLICITUD
$sql5da1= "
SELECT *
FROM
facturasAplicadas
WHERE
entidad='".$entidad."'
    and
    folioVenta='".$myrow['folioVenta']."'
and
numSolicitud='".$_GET['numSolicitud']."'
     and

clientePrincipal='".$_POST['seguro']."'

";
$result5da1=mysql_db_query($basedatos,$sql5da1);
$myrow5da1= mysql_fetch_array($result5da1); 





/*
$sqldescas= "
SELECT sum(precioVenta*cantidad) as totalDescuentos
FROM
cargosCuentaPaciente
WHERE
entidad =  '".$entidad."'
    and
    folioVenta='".$myrow['folioVenta']."'
        and
(tipoTransaccion='DESCAS' or tipoTransaccion='DESCXCCIAS')
";
$resultdescas=mysql_db_query($basedatos,$sqldescas);
$myrowdescas= mysql_fetch_array($resultdescas);
$descuentos=$myrowdescas['totalDescuentos'];

$sql5c= "
SELECT sum(cantidadAseguradora*cantidad) as p,sum(ivaAseguradora*cantidad) as i
FROM
cargosCuentaPaciente
WHERE
entidad =  '".$entidad."'
    and
    folioVenta='".$myrow['folioVenta']."'
        and
        gpoProducto!=''
and
naturaleza='C'

";
$result5c=mysql_db_query($basedatos,$sql5c);
$myrow5c= mysql_fetch_array($result5c);

$sql5a= "
SELECT sum(cantidadAseguradora*cantidad) as pd,sum(ivaAseguradora*cantidad) as id
FROM
cargosCuentaPaciente
WHERE
entidad =  '".$entidad."'
    and
    folioVenta='".$myrow['folioVenta']."'
        and
        gpoProducto!=''
and
naturaleza='A'

";
$result5a=mysql_db_query($basedatos,$sql5a);
$myrow5a= mysql_fetch_array($result5a);

$importe1=$myrow5c['p']-$myrow5a['pd'];
$iva1=$myrow5c['i']-$myrow5a['id'];




//if($myrow5da['status']!='facturado' or $myrow5da['status']=='cancelada'){

  $sSQL7="SELECT 
  SUM(importe*cantidad) as acumulado,sum(iva*cantidad) as ivaa
  FROM
  facturasAplicadas
  WHERE
  entidad='".$entidad."'
  and
  numSolicitud='".$_GET['numSolicitud']."'
  and
  folioVenta='".$myrow['folioVenta']."'
  and
  naturaleza='C'
      and
  seguro!=''
  and
  statusDevolucion!='si'
  and 
  tipoTransaccion=''
  ";
 
  $result7=mysql_db_query($basedatos,$sSQL7);
  $myrow7 = mysql_fetch_array($result7);




  $sSQL7d="SELECT 
  SUM(importe*cantidad) as acumulado,sum(iva*cantidad) as ivaa
  FROM
  facturasAplicadas
  WHERE
  entidad='".$entidad."'
  and
  numSolicitud='".$_GET['numSolicitud']."'
  and
  folioVenta='".$myrow['folioVenta']."'
  and
  naturaleza='A' 
      and
  seguro!=''
  and
  statusDevolucion!='si'
  and 
  tipoTransaccion=''
  ";
 
  $result7d=mysql_db_query($basedatos,$sSQL7d);
  $myrow7d = mysql_fetch_array($result7d);
   $importeA=($myrow7['acumulado']-$myrow7d['acumulado'])+($myrow7['ivaa']-$myrow7d['ivaa']);
   
   
   
   
   
   
  
  $sSQL7f="SELECT 
  SUM((importe*cantidad) +(iva*cantidad)) as fac
  FROM
  facturasAplicadas
  WHERE
  entidad='".$entidad."'
  and
  folioVenta='".$myrow['folioVenta']."'
  and
  naturaleza='C'
  and
  status='facturado'
      and
  seguro!=''
  and
  statusDevolucion!='si'
  and 
  tipoTransaccion=''
  ";
 
  $result7f=mysql_db_query($basedatos,$sSQL7f);
  $myrow7f = mysql_fetch_array($result7f);




 $sSQL7fd="SELECT 
 SUM((importe*cantidad) +(iva*cantidad)) as dev
  FROM
facturasAplicadas
  WHERE
entidad='".$entidad."'
and
  folioVenta='".$myrow['folioVenta']."'
and
  
  naturaleza='A'
  and
  status='facturado'
      and
  seguro!=''
  and
  statusDevolucion!='si'
  and 
  tipoTransaccion=''
  ";
 
  $result7fd=mysql_db_query($basedatos,$sSQL7fd);
  $myrow7fd = mysql_fetch_array($result7fd);
  
  $facturado=$myrow7f['fac']-$myrow7fd['dev'];
  
  

  */








?>
  <tr  >

        <td  >
         
            <?php echo $bandera;?>
       <input name="flag1[]" type="hidden" value="<?php echo $bandera; ?>"  />   
      </td>


                <td  >
  
        
              <a href="javascript:ventanaSecundaria4('../cargos/despliegaCargos.php?folioVenta=<?php echo $myrow['folioVenta'];?>');">
            <?php echo $myrow['folioVenta'];?>
              </a>
      
        
      </td>



        <td >
     
      <?php echo cambia_a_normal($myrow['fechaCierre']);?>

   
        </td>


        
        <td >
               
                  <?php  

echo ucfirst(strtolower(utf8_decode($myrow['paciente'])));

                  echo '<br>';
                  //echo $myrow['clientePrincipal'];
                  //echo '<br>';
                  //echo $myrow5da['status'];
                  
                  
                  if($myrow5da['status']=='facturado' and $myrow5da['statusDevolucion']!='si'){
                  echo '<span class="label label-info">Facturado '.$myrow5da['numFactura'].'</span>';
                  }elseif($myrow5da['statusDevolucion']=='si' ){
                   echo '<span class="label label-warning">Devolucion de factura: '.$myrow5da['numFactura'].'</span>';   
                  }
                  
                  //if($myrow5da['status']!='' ){ echo '<br><span class="label label-success">Agregado! <span class="glyphicon glyphicon-ok-sign"></span></span>';
                  //}
		?>
               
        </td>
    
     

      
      <td>
      <?php if($myrow5da['status']=='facturado'){?>    
      <span class="label label-success">    
      <?php echo $myrow5da['status'];?>
      </span>
          
      <?php } ?>    
      </td>    
      
      
      
      
        
        
          <td >
          
            
            <!--<input name="keyIM[]" type="checkbox"  value="<?php echo $myrow['keyNFac']; ?>" <?php echo $mensaje;?> />-->
          
         <?php if($myrow5da['status']!='facturado' and $myrow5da['statusDevolucion']!='si'){ ?>     
              <input name="folioVenta1[]" class="checkbox1" type="checkbox" value="<?php echo $myrow['folioVenta']; ?>" <?php if($myrow5da1['status']=='request'){ echo 'checked=""';}?> />
     
                  <?php } ?>
         </td>
        
        

    </tr>


<input name="importe[]" type="hidden" value="<?php echo $importe1+$iva1; ?>"  />

      <?php  

  //}
  
}}  //cierra while
	  ?>
  </table>
   

