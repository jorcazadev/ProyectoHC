<?php  require_once("Conexion/Conec.php"); ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>




<script type="text/javascript" src="menu flotante/js/jquery.js"></script>
<script type="text/javascript" src="menu flotante/js/interface.js"></script>

<script type="text/javascript" language="javascript" src="Funciones/Funcion.js"> </script>

<!--[if lt IE 7]>
 <style type="text/css">
 div, img { behavior: url(iepngfix.htc) }
 </style>
<![endif]-->

<link href="menu flotante/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
textarea {
	resize: none;
	size: landscape;
	}
.Estilo1{font-family:Arial, Helvetica, sans-serif; font-size:25px; text-align:center; color:#00F }
.Estilo3{font-family:Arial, Helvetica, sans-serif; font-size:36px; text-align:center; color:#2C31FE }
.Estilo2{ font-family:Arial, Helvetica, sans-serif; font-size:20px; text-align:right}
.Estilo4{ font-family:Arial, Helvetica, sans-serif; font-size:25px; color:#A70737;}

</style>
<script type="text/javascript" src="acciones.js"></script>
<link rel="stylesheet" type="text/css" href="estilos.css"/>
<script language="JavaScript"> 

</script> 

<SCRIPT LANGUAGE="JavaScript">
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=950,height=500,left = 200,top = 200');");
}
</script>
<SCRIPT LANGUAGE="JavaScript">
function popUp1(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=900,height=500,left = 300,top = 200');");
}
</script>
<SCRIPT LANGUAGE="JavaScript">
function popUp2(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=900,height=500,left = 300,top = 200');");
}
</script>
<SCRIPT LANGUAGE="JavaScript">
function popUp3(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=900,height=500,left = 300,top = 200');");
}
</script>

<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:961px;
	top:290px;
	width:401px;
	height:243px;
	z-index:1;
}
-->
</style>
</head>

<body onload="Comenzar();princi();" >


<div class="dock" id="dock">
  <div class="dock-container">
  <a class="dock-item" href="#"><img src="menu flotante/images/home.png" alt="home" /><span>Usuarios</span></a> 
  <a class="dock-item" href="javascript:popUp1('IngresoClien.php')"><img src="menu flotante/images/email.png" alt="contact" /><span>Cliente</span></a> 
  <a class="dock-item" href="javascript:popUp3('Informes.php')"><img src="menu flotante/images/portfolio.png" alt="portfolio" /><span>Informes</span></a> 
  <a class="dock-item" href="javascript:popUp2('Configura.php')"><img src="menu flotante/images/music.png" alt="music" /><span>Configuracion</span></a> 
  <a class="dock-item" href="#"><img src="menu flotante/images/video.png" alt="video" /><span>Imprimir</span></a> 
  <a class="dock-item" href="javascript:popUp('pagmensual.php')"><img src="menu flotante/images/history.png" alt="history" /><span>Mensualidad</span></a> 
  <!--<a class="dock-item" href="#"><img src="menu flotante/images/calendar.png" alt="calendar" /><span>Calendar</span></a> 
  <a class="dock-item" href="#"><img src="menu flotante/images/rss.png" alt="rss" /><span>RSS</span></a> -->
</div>
</div>
<script type="text/javascript">
	
	$(document).ready(
		function()
		{
			$('#dock').Fisheye(
				{
					maxWidth: 50,
					items: 'a',
					itemsText: 'span',
					container: '.dock-container',
					itemWidth: 40,
					proximity: 90,
					halign : 'center'
				}
			)
		}
	);

</script>
<table width="375" border="0">
  <tr>
    <td width="163" class="Estilo2" >HORA INICIAL:</td>
    <td width="202" ><div id="txt"></div></td>
  </tr>
  <tr>
    <td class="Estilo2">FECHA ACTUAL:</td>
    <td><div id="txt1"><?php echo date("d/m/Y")  ?></div></td>
  </tr>
</table>

<br />
<hr />

<table width="1097" height="497" border="0" align="center">
  <tr>
    <td width="1070">
<fieldset style="border:double; ">
<legend class="Estilo4" >Parking</legend>
<form name="princi" method="" action="">
<table width="1065" height="281" border="0" >
  <tr>
    <td width="64" height="43">&nbsp;</td>
    <td width="245" class="Estilo3">Placa</td>
    <td width="125">&nbsp;</td>
    <td width="203">&nbsp;</td>
    <td width="234">&nbsp;</td>
    <td width="168" rowspan="2"><table width="168" height="74" border="1" align="right" cellpadding="1" cellspacing="0" rules="all">
      <tr>
        <?php $sqll="select * from tipvehiculo where idvehiculo='2'"; 
	  $ver=mysql_query($sqll,conectar::con());
	  if($res=mysql_fetch_array($ver)){ $cupos=$res['cupos'];}
	  ?>
        <td width="105" align="center">Cupos Total:
          <div align="center">
            <input type="text" value="<?php echo $cupos; ?>" style="text-align:center" size="3" disabled="disabled" />
          </div></td>
        <td width="47" rowspan="2" >Cant Motos
          <input type="text" value="" size="3" disabled="disabled" /></td>
      </tr>
      <tr>
        <td align="center">Cupos Disponibles
          <div align="center">
            <input type="text" value="" size="3" disabled="disabled" />
          </div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="93">&nbsp;</td>
    <td><input type="text" size="5" name="placa" style="font-family:Arial, Helvetica, sans-serif; font-size:70px" onkeyup="this.value=this.value.toUpperCase()" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td height="0"></td>
    <td class="Estilo1"></td>
    <td class="Estilo1"></td>
    <td class="Estilo1"></td>
    <td class="Estilo1"></td>
    <td class="Estilo1"></td>
  </tr>
  <tr>
    <td ></td>
    <td class="Estilo1"></td>
    <td class="Estilo1"></td>
    <td class="Estilo1"></td>
    <td class="Estilo1"></td>
    <td class="Estilo1"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center"><?php $sql="select * from tipvehiculo";
	$res=mysql_query($sql,conectar::con()) ?>
      <span class="Estilo1">Tipo Vehiculo</span>
      <select name="select" style="font-family:Arial, Helvetica, sans-serif; font-size:20px; text-align:center">
        <option value="">Seleccione Vehiculo....</option>
        <?php while($resp=mysql_fetch_array($res)){?>
        <option value="<?php echo $resp['idvehiculo']; ?>"><?php echo $resp['NomVehic']; ?></option>
        <?php } ?>
      </select></td>
    <td align="center"><?php $sqln="select * from tipo_pago"; 
	$consul=mysql_query($sqln,conectar::con());
	?>
      <span class="Estilo1">Tipo Pago</span>
      <select name="select2" style="font-family:Arial, Helvetica, sans-serif; font-size:20px; text-align:center;">
        <option value=""></option>
        <?php while($resn=mysql_fetch_array($consul)){  ?>
        <option value="<?php echo $resn['idpago']; ?>"><?php echo $resn['nompago']; ?></option>
        <?php } ?>
    </select></td>
    <td align="center"><span class="Estilo1">Marca</span>
    <?php $marc="select * from marca"; 
	$resmar=mysql_query($marc,conectar::con());?>
    <select name="" style="font-family:Arial, Helvetica, sans-serif; font-size:20px; text-align:center;">
    <option value="">Seleccione..</option>
    <?php while($ver=mysql_fetch_array($resmar)){ ?>
    <option value="<?php echo $ver['idmar']; ?>"><?php echo $ver['marca']; ?></option>
    
    <?php } ?>
    </select>
    </td>
    <td align="center"><span class="Estilo1">Color</span>
        <?php $color="select * from color"; 
	$rescolo=mysql_query($color,conectar::con());?>
    <select name="" style="font-family:Arial, Helvetica, sans-serif; font-size:20px; text-align:center;">
    <option value="">Seleccione..</option>
    <?php while($colv=mysql_fetch_array($rescolo)){ ?>
    
    <option value="<?php echo $colv['idcol']; ?>"><?php echo $colv['nomcol']; ?></option>
    <?php } ?>
    </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><span class="Estilo1">Tipo Entrada</span>
      <select name="select3" style="font-family:Arial, Helvetica, sans-serif; font-size:20px; text-align:center;" >
        <option value=""></option>
        <option value="1">Entrada </option>
        <option value="0">Salida</option>
      </select></td>
    <td align="center"><span class="Estilo1">Tipo Cancelaciòn</span>
      <select name="select4" style="font-family:Arial, Helvetica, sans-serif; font-size:20px; text-align:center;" >
        <option value=""></option>
        <option value="1">Pagado</option>
        <option value="0">No Pagado</option>
        <option value="0">Abono</option>
      </select></td>
    <td>&nbsp;</td>
  </tr>
</table>

  <p>&nbsp;</p>
  <div align="center">
    <p>
      <input type="submit" value="Aceptar" size="70" style="font-size:50px" />
    </p>
    <p>&nbsp; </p>
  </div>
</form>

</fieldset>

</td>
  </tr>
</table>



</body>

</html>