<?php require("/Constantes.php");
//*****************CONEXION  A SIMA***************
require(CONSTANT_PATH_CONFIGURACION.'/baseDatos.php');require(CONSTANT_PATH_CONFIGURACION.'/funciones.php');
$base=new MYSQL();
$basedatos=$base->basedatos();
$conexionManual=new MYSQL();
$conexionManual->conecta();
//**************************************************
$date='2014-10-20';
$entidad='01';
$_GET['tipoOrden']='ordenesPendientes';
$basedatos=$_GET['basedatos'];
?>




<div class="lista">
    
 
     
        
 
    
                  
    
    
            <table class="table table-stripe table-hover">
                <thead>
                <tr>
                    <th class="text-left">Nombre</th>
                    <th class="text-left">Departamento</th>
                    
                    <th class="text-left">Hora</th>
                    <th class="text-left">Usuario</th>
                    <th class="text-left"><div align="right"><?php echo $date;?></div></th>
                </tr>
                </thead>

                <tr > 
                     
                
<?php	




if($_GET['tipoOrden']=='ordenesPendientes'){
$sSQL= "SELECT *
FROM
clientesInternos
where
(entidad='".$entidad."'
and
status not like '%cancel%'
and
statusCaja!='pagado'
and
tipoPaciente='externo'

AND
(fechaSolicitud='".$date."' or fecha='".$date."')
and
folioVenta!='')
or

(entidad='".$entidad."'
and
status not like '%cancel%'
and
statusCaja!='pagado'
and
tipoPaciente='externo'
AND
statusDevolucion='si'
and
folioVenta!='')

order by keyClientesInternos desc
limit 0,100
 ";
}elseif($_GET['tipoOrden']=='ordenesTodas'){
$sSQL= "SELECT *
FROM
clientesInternos
where
entidad='".$entidad."'
and
status not like '%cancel%' 
and
statusCaja='pagado'
and
tipoPaciente='externo'

AND
folioVenta!=''
order by keyClientesInternos desc
 ";
}elseif($_GET['tipoOrden']=='ordenesPagadas'){

$sSQL= "SELECT *
FROM
clientesInternos
where
entidad='".$entidad."'
and
fechaCierre='".$date."'
and

tipoPaciente='externo'


order by keyClientesInternos desc
 ";    
    
}


$result=mysql_db_query($basedatos,$sSQL);
while($myrow = mysql_fetch_array($result)){ 
$numeroE=$myrow['numeroE'];
$nCuenta=$myrow['nCuenta'];
$r+=1;

$nT=$myrow['keyClientesInternos'];


/*
$sSQL17d= "
SELECT 
*
FROM
clientesInternos
WHERE 
entidad='".$entidad."'
and
folioDevolucion = '".$myrow['folioVenta']."'
";
$result17d=mysql_db_query($basedatos,$sSQL17d);
$myrow17d = mysql_fetch_array($result17d);
*/

	  ?>
                
                
                
   
                

    
        
        


      <td <?php if($myrow['statusDevolucion']=='si'){ echo 'class="warning"';}?>>
                <?php if($myrow['statusDevolucion']=='si'){
      echo '<span class="label warning"  >D</span> ';
      $file="estadoCuentaEMovilDevolucion";
                }elseif($myrow['paquete']=='si'){
                    echo '<span class="label info" >P</span>';  
       $file="estadoCuentaEMovil";
      }else{
       echo '<span class="label success" >N</span>';  
       $file="estadoCuentaEMovil";
      }
      ?>  
          
      <?php if($myrow['statusCuenta']!='cerrada'){?>
      

     <?php   echo '<small>'. ucwords(strtolower($myrow['paciente'])).'</small>';?> 
        
      <?php } else{ ?>
        <?php echo   '<small>'. ucwords(strtolower($myrow['paciente'])).'</small>';?>   
          
      <?php } ?>    
        
          

      </td>
      
      <td <?php if($myrow['statusDevolucion']=='si'){ echo 'class="warning"';}?>>
       <?php
      $al = $myrow['almacen'];
                  $sSQL17 = "
	SELECT 
            descripcion
            FROM
            almacenes
            WHERE 
            entidad='" . $entidad . "'
            and
            almacen = '" . $al . "'
            ";
                  $result17 = mysql_db_query($basedatos, $sSQL17);
                  $myrow17 = mysql_fetch_array($result17);
                  echo '<small>'. ucwords(strtolower($myrow17['descripcion'])).'</small>';
?>  
      </td>
      
   
      
      <td <?php if($myrow['statusDevolucion']=='si'){ echo 'class="warning"';}?>>
          <small><?php echo $myrow['hora'];?></small>    
      </td>
       <td <?php if($myrow['statusDevolucion']=='si'){ echo 'class="warning"';}?>>
        <small><?php echo $myrow['usuario'];?></small>      
      </td>
      
    <td <?php if($myrow['statusDevolucion']=='si'){ echo 'class="warning"';}?>>   
        <div align="right" >
            <small>     
       <span class="icon-arrow-right-5 on-left"></span>     
      

             
           
    <a href="javascript:nueva('estadoCuentaE.php?px=<?php echo  $myrow['paciente'];?>&numeroE=<?php echo $myrow['keyClientesInternos']; ?>
    &amp;nCuenta=<?php echo $myrow['keyClientesInternos']; ?>&amp;almacenSolicitante=<?php echo $ALMACEN; ?>&amp;nT=<?php echo $nT; ?>&amp;folioVenta=<?php echo $myrow['folioVenta'];?>&amp;tipoVenta=<?php echo 'externo';?>
    &devolucion=<?php echo $myrow['statusDevolucion'];?>&descripcionTransaccion=<?php echo $_GET['descripcionTransaccion'];?>&warehouse=<?php echo $_GET['warehouse'];?>#final','ventana1','1024','1000','yes')">    
    Pagar <span class="glyphicon glyphicon-play"></span>
    </a>
       
       
       
                
            </small>
        </div>
    </td>

      
    </tr>                
                
                
                        
<?php 
}
?>
                
                <!-- 
                <tbody>
                <tr class=""><td>Bing</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                <tr class=""><td>Bing</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                <tr class=""><td>Bing</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                <tr class=""><td>Bing</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                <tr class=""><td>Bing</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                <tr class="error"><td>Bing</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                <tr class="success"><td>Internet Explorer</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                <tr class="warning"><td>Chrome</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                <tr class="info"><td>News</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                <tr class="selected"><td>Music</td><td class="right">0:00:01</td><td class="right">0,1 Mb</td><td class="right">0 Mb</td><td class="right">0,1 Mb</td></tr>
                </tbody>
                -->
            </table>
        </div>