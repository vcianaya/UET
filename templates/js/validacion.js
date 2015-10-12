function validar_texto(e) 
{
	tecla = (document.all) ? e.keyCode : e.which;
	if (tecla==8) return true; 
	patron =/[a-zA-ZÑ-ñ\s]/; 
	tecla_final = String.fromCharCode(tecla);
	return patron.test(tecla_final); 
} 
function validar_numero(e) 
{
	tecla = (document.all) ? e.keyCode : e.which;
	if (tecla==8) return true; 
	patron =/[0123456789]/; 
	tecla_final = String.fromCharCode(tecla);
	return patron.test(tecla_final); 
} 
