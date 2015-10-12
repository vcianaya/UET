<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?= base_url('templates/css/ico_menu.css');?>">
	<link rel="stylesheet" href="<?= base_url('templates/css/style_frm.css');?>">
	<link href="<?= base_url('templates/css/cssbotones.css');?>" rel="stylesheet" type="text/css" />



	<script type="text/javascript" src="<?= base_url();?>/templates/js/jquery_1.4.js"></script>
	<script type="text/javascript" src="<?= base_url();?>/templates/js/jquery_validate.js"></script>

	<script type="text/javascript">
$(
   function()
   {
		$('#frmbuscadeprofesion').validate
		(
		 	{
				rules:
				{
				'profesion':'required',
				},
				messages: 
				{
				'profesion':'<label class="letra">Debe elegir una profesión</label>',
				},
				debug: true,
				submitHandler: function(form)
				{
					document.getElementById("frmbuscadeprofesion").submit();
				}
		 	}
		);
	}
);
</script>
</head>
<body background="<?= base_url('templates/img/fondo.gif');?>">
<div class="titulo"><label class="glyphicon glyphicon-question-sign">&nbsp</label><label>Consulta por profesión</label></div>
<center>
<div class="colordiv">

<center>
<form name="frmbuscadeprofesion" id="frmbuscadeprofesion" action="<?= base_url();?>personaldos/busca_profesion" method="post">

	<table>
	<tr>
	        <td rowspan="5"><img src="<?= base_url('templates/img/iconofrm/busquedafolder.png');?>"></td>
	</tr>
	<tr>
	        <td></td>
	        <td></td>
	</tr>
	<tr>
	        <td height="20"><label class="textolbl">Profesión:</label></td>
	        <td style="padding-left:15px">
				<select name="profesion" id="profesion" class="campos">
					<option value="" style="text-size: 12px;">Seleccione una profesión</option>
					<option value="ABOGADO" style="text-size: 12px;">ABOGADO</option>
					<option value="ARQUITECTO"style="text-size: 12px;">ARQUITECTO</option>
					<option value="DOCTOR" style="text-size: 12px;">DOCTOR</option>
					<option value="CONTADOR" style="text-size: 12px;">CONTADOR</option>
					<option value="INGENIERO DE SISTEMAS" style="text-size: 12px;">INGENIERO DE SISTEMAS</option>
					<option value="INFORMATICO" style="text-size: 12px;">INFORMATICO</option>
					<option value="INGENIERO COMERCIAL" style="text-size: 12px;">INGENIERO COMERCIAL</option>
					<option value="LICENCIADO" style="text-size: 12px;">LICENCIADO</option>
					<option value="TECNICO" style="text-size: 12px;">TECNICO</option>										
				</select>
				<label class="textolbl"><span class="glyphicon glyphicon-tasks"></span></label>
	        </td>   
	</tr>
	<tr>
	        <td>
	        </td>
	        <td height="40px">
	            <label class="textolbl"><span class="glyphicon glyphicon-search"></span></label><input type="submit" class="btn btn-default" value="Buscar por profesión" />
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