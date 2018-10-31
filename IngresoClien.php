<?php  require_once("Conexion/Conec.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::INGRESAR CLIENTE::.</title>
<script type="text/javascript" language="javascript" src="Funciones/Funcion.js"> </script>

</head>

<body onload="limpiar()">
<br /><br />
<fieldset style="border:double; ">
<legend class="Estilo4" >Ingreso Clientes</legend>
<form name="Clie" action="" method="post">
<table width="652" height="231" border="0" align="center">
  <tr>
    <td width="11" height="23" align="center">&nbsp;</td>
    <td width="144" align="center">&nbsp;</td>
    <td width="155" align="center">&nbsp;</td>
    <td width="154" align="center">&nbsp;</td>
    <td width="154" align="center">&nbsp;</td>
    <td width="8" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="26" colspan="2" align="center">Cedula
      <input type="text" name="cedu" /></td>
    <td align="center">Nombre
      <input type="text" name="nom" /></td>
    <td align="center">Apellido
      <input type="text" name="apell" /></td>
    <td colspan="2" align="center">Telefono
      <input type="text" name="tele" /></td>
    </tr>
  <tr>
    <td height="21" align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="21" align="center">&nbsp;</td>
    <td align="center">Empresa </td>
    <td colspan="2" align="center">Direccion</td>
    <td align="center">Tipo Cliente </td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="26" align="center">&nbsp;</td>
    <td align="center"><input type="text" name="empr" /></td>
    <td colspan="2" align="center"><input type="text" name="dire" /></td>
    <td align="center"><select name="tip">
        <option value="">Selecciones....</option>
        <option value="1">Preferencial</option>
        <option value="2">Normal</option>
      </select></td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6" align="center">
      <input type="hidden" name="graba" value="si" />
      <input type="button" value="Ingresar" style="font-size:24px" onclick="validar12();" /></td>
    
  </tr>
</table>
</form>
</fieldset >

<?php
if(isset($_POST['graba']) and $_POST['graba']=='si'){
$ced=$_POST['cedu'];
$nom=$_POST['nom'];
$ape=$_POST['apell'];
$telf=$_POST['tele'];
$emp=$_POST['empr'];
$dir=$_POST['dire'];	
$ticli=$_POST['tip'];	

echo $ins="INSERT INTO cliente (idcliente, cedcliente, nomcliente, apellcliente, telef, empresa, direccion, Tipocliente) VALUES (null, $ced, '$nom', '$ape', $telf, '$emp', '$dir', $ticli)";
$reali=mysql_query($ins,conectar::con());

if(!$reali){
echo "<script type='text/javascript'>
alert('Ocurrio un error');
window.location='IngresoClien.php';
</script>";
	
}

echo "<script type='text/javascript'>
alert('El cliente se ingreso correctamente');
window.location='IngresoClien.php';
</script>";	
	


}

?>


</body>
</html>
