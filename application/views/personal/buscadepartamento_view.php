<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?= base_url('templates/css/ico_menu.css');?>">
	<link rel="stylesheet" href="<?= base_url('templates/css/style_frm.css');?>">
	<link href="<?= base_url('templates/css/cssbotones.css');?>" rel="stylesheet" type="text/css" />


	<script type="text/javascript" src="<?= base_url();?>/templates/js/jquery_1.4.js"></script>
	<script type="text/javascript" src="<?= base_url();?>/templates/js/jquery_validate.js"></script>

	<script type="text/javascript">
$(
   function()
   {
		$('#frmbuscadepartamento').validate
		(
		 	{
				rules:
				{
				'expedido':'required',
				},
				messages: 
				{
				'expedido':'<label class="letra">Debe elegir un Departamento</label>',
				},
				debug: true,
				submitHandler: function(form)
				{
					document.getElementById("frmbuscadepartamento").submit();
				}
		 	}
		);
	}
);
</script>

</head>
<body background="<?= base_url('templates/img/fondo.gif');?>">
<div class="titulo"><label class="glyphicon glyphicon-question-sign">&nbsp</label><label>Consulta por departamento</label></div>
<center>
<div class="colordiv">
<center>
<form name="frmbuscadepartamento" id="frmbuscadepartamento" action="<?= base_url();?>personaldos/busca_departamento" method="post">
	<table>
	<tr>
	        <td rowspan="5"><img src="<?= base_url('templates/img/iconofrm/busquedafolder.png');?>"></td>
	</tr>
	<tr>
	        <td height="40"></td>
	        <td></td>
	</tr>
	<tr>
	        <td height="20"><label class="textolbl">Departamento:</label></td>
	        <td>
				<select name="expedido" id="expedido" class="campos">
					<option value="">Seleccione una departamento</option>
					<option value="LA PAZ">LP</option>
					<option value="ORURO">OR</option>
					<option value="COCHABAMBA">CBBA</option>
					<option value="POTOSI">PT</option>				
					<option value="TARIJA">TJ</option>
					<option value="BENI">BN</option>
					<option value="CHUQUISACA">CH</option>
					<option value="SANTA CRUZ">SCZ</option>
					<option value="PANDO">PA</option>
				</select>
				<label class="textolbl"><span class="glyphicon glyphicon-tasks"></span></label>
	        </td>   
	</tr>
	<tr>
	        <td height="40px" colspan="2" style="padding-left:85px">
	            <label class="textolbl"><span class="glyphicon glyphicon-search"></span></label><input type="submit" class="btn btn-default" value="Buscar por departamento" />
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