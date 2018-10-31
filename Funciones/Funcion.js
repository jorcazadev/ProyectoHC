// JavaScript Document

function limpiar()
{
document.Clie.reset();
document.Clie.cedu.focus();
}


function validar12()
{
	var Clie=document.Clie;
	if(Clie.cedu.value==0)
	{
	alert("Ingrese la cedula del cliente");
	Clie.cedu.value="";
	Clie.cedu.focus();
	return false;
	}
	if(Clie.nom.value==0)
	{
	alert("Ingrese el nombre del cliente");
	Clie.nom.value="";
	Clie.nom.focus();
	return false;
	}
	if(Clie.apell.value==0)
	{
	alert("Ingrese el apellido del cliente");
	Clie.apell.value="";
	Clie.apell.focus();
	return false;
	}
	if(Clie.tele.value==0)
	{
	alert("Ingrese el numero telefonico");
	Clie.tele.value="";
	Clie.tele.focus();
	return false;
	}
		if(Clie.dire.value==0)
	{
	alert("Ingrese su apellido");
	Clie.dire.value="";
	Clie.dire.focus();
	return false;
	}
		if(Clie.tip.value==0)
	{
	alert("Ingrese la planta");
	Clie.tip.value="";
	Clie.tip.focus();
	return false;
	}
			
	Clie.submit();
}

function princi()
{
document.princi.reset();
document.princi.placa.focus();
}
