<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?= base_url('templates/css/ico_menu.css');?>">
	<link rel="stylesheet" href="<?= base_url('templates/css/style_frm.css');?>">
	<link href="<?= base_url('templates/css/cssbotones.css');?>" rel="stylesheet" type="text/css" />


	<script src="<?= base_url();?>/templates/js/validacion.js"></script>

	<script type="text/javascript" src="<?= base_url();?>/templates/js/jquery_1.4.js"></script>
	<script type="text/javascript" src="<?= base_url();?>/templates/js/jquery_validate.js"></script>

	<script type="text/javascript">
$(
   function()
   {
		$('#frmbuscaestado').validate
		(
		 	{
				rules:
				{
				'estado':'required',
				},
				messages: 
				{
				'estado':'<label class="letra">Debe elegir un estado</label>',
				},
				debug: true,
				submitHandler: function(form)
				{
					document.getElementById("frmbuscaestado").submit();
				}
		 	}
		);
	}
);
</script>
</head>
<body background="<?= base_url('templates/img/fondo.gif');?>">
<div class="titulo"><label class="glyphicon glyphicon-question-sign">&nbsp</label><label>Consulta por estado</label></div>
<center>
<div class="colordiv">
<center>
<form name="frmbuscaestado" id="frmbuscaestado" action="<?= base_url();?>personaldos/busca_estado" method="post">
<table>
<tr>
        <td rowspan="5"><img src="<?= base_url('templates/img/iconofrm/busquedafolder.png');?>"></td>
</tr>
<tr>
        <td></td>
        <td></td>
</tr>
<tr>
        <td height="10"><label class="textolbl">Estado:</label></td>
        <td style="padding-left:15px">
	        <select name="estado" id="estado" class="campos">
			<option value="">Selelccione un estado</option>
			<option value="ACTIVO">ACTIVO</option>
			<option value="INACTIVO">INACTIVO</option>
			</select>
			<label class="textolbl"><span class="glyphicon glyphicon-tasks"></span></label>
        </td>   
</tr>
<tr>
        <td>
        </td>
        <td height="40px">
            <label class="textolbl"><span class="glyphicon glyphicon-search"></span></label><input type="submit" class="btn btn-default" value="Buscar estado" />
        </td>
        
</tr>
<tr><td></td><td></td></tr>
</table>
</form>
</center>
</div>
</center>
</div>
</body>
</html>