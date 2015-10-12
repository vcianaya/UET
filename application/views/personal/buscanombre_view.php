<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
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
			$('#frmpersonal').validate
			(
			 	{
					rules:
					{
					'nombre': {required: true},
					},
					messages: 
					{
					'nombre':{required:'<label class="letra">Debe ingresar el nombre</label>'},
					},
					debug: true,
					submitHandler: function(form)
					{
						document.getElementById("frmpersonal").submit();
					}
			 	}
			);
		}
	);
</script>
</head>
<body background="<?= base_url('templates/img/fondo.gif');?>">
<div class="titulo"><label class="glyphicon glyphicon-question-sign">&nbsp</label><label>Consulta por nombre</label></div>
<center>
<div class="colordiv">
<center>
<form name="frmpersonal" id="frmpersonal" action="<?= base_url();?>personaldos/busca_nombre" method="post">

	<table>
	<tr>
	        <td rowspan="5">
	        	<img src="<?= base_url('templates/img/iconofrm/busquedafolder.png');?>">
	        </td>
	</tr>
	<tr>
	        <td></td>
	        <td></td>
	</tr>
	<tr>
	        <td height="30px"><label class="textolbl">Ingrese nombre:</label></td>
	        <td><input type="text" name="nombre" id="nombre" onkeypress="return validar_texto(event);" class="campos" placeholder="Nombre(s)" onkeypress="return validar_texto(event);" style="width:200px" > &nbsp<span class="glyphicon glyphicon-user"></span></td>
	</td>   
	</tr>
	<tr>
	 	        <td height="40px" colspan="2" style="padding-left:25px">
	        	<label class="textolbl"><span class="glyphicon glyphicon-search"></span></label><input type="submit" class="btn btn-default" value="Buscar por nombre"  />
				&nbsp<label class="textolbl"><span class="glyphicon glyphicon-erase"></span></label><input type="reset" class="btn btn-default" value="Limpiar campo" />
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