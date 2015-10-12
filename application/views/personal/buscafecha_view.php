<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?= base_url('templates/css/ico_menu.css');?>">
	<link rel="stylesheet" href="<?= base_url('templates/css/style_frm.css');?>">
	<link href="<?= base_url('templates/css/cssbotones.css');?>" rel="stylesheet" type="text/css" >

	<script type="text/javascript" src="<?= base_url();?>/templates/js/jquery_1.4.js"></script>
	<script type="text/javascript" src="<?= base_url();?>/templates/js/jquery_validate.js"></script>

	<link rel="stylesheet" href="<?= base_url('templates/js/datepicker/themes/base/ui.all.css');?>"/>
	<script type="text/javascript" src="<?= base_url();?>/jquery-1.3.2.js"></script>
	<script type="text/javascript" src="<?= base_url();?>/templates/js/datepicker/ui/ui.datepicker.js"></script>
	<link type="text/css" href="<?= base_url('templates/js/datepicker/demos/demos.css');?>" rel="stylesheet" />

	<script type="text/javascript">
	$(function() {
		$('#desdefecha').datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat:'yy/mm/dd'
		});
	});
	</script>
	<script type="text/javascript">
		$(function() {
			$('#hastafecha').datepicker({
				changeMonth: true,
				changeYear: true,
				dateFormat:'yy/mm/dd'
			});
		});
	</script>

<!--validacion-->
	<script type="text/javascript">
	$(
	   function()
	   {
			$('#frmbuscafecha').validate
			(
			 	{
					rules:
					{
					'desdefecha':{required:true},
					'hastafecha':{required:true},
					},
					messages: 
					{
					'desdefecha': { required: '<label class="letra">Debe elegir una fecha</label>'},
					'hastafecha': { required: '<label class="letra">Debe elegir una fecha</label>'},
					},
					debug: true,
					submitHandler: function(form)
					{
						document.getElementById("frmbuscafecha").submit();
					}
			 	}
			);
		}
	);
	</script>
</head>
<body>
<left>
	<div class="titulo">
		 	<label class="glyphicon glyphicon-question-sign">&nbsp</label><label>Consulta por fechas</label>
	</div>
	<div class="imagen">
		<form name="frmbuscafecha" id="frmbuscafecha" action="<?= base_url();?>personaldos/busca_fecha" method="post">
			<table>
				<tr> 
					<td rowspan="3">
						<img src="<?= base_url('templates/img/iconofrm/busquedafolder.png');?>">
					</td>
					<td >
						<label class="textolbl">Desde fecha:</label>
					</td>
					<td>
						<input type="text" name="desdefecha" id="desdefecha" class="caja" readonly=""/>&nbsp<label class="textolbl"><span class="glyphicon glyphicon-calendar"></span></label>
					</td>
				</tr>
				<tr>
					<td>
			    		<label class="textolbl">Hasta fecha:</label>
			    	</td>
			    	<td>
			    		<input type="text" name="hastafecha" id="hastafecha" class="caja" readonly=""/>&nbsp<label class="textolbl"><span class="glyphicon glyphicon-calendar"></span></label>
			    	</td>
			    </tr>
				<tr>
					<td colspan="2" style="padding-left: 73px;">
			    		<label class="textolbl"><span class="glyphicon glyphicon-search"></span></label><input type="submit" class="btn btn-default" value="BUSCAR"  />
			    		&nbsp<label class="textolbl"><span class="glyphicon glyphicon-erase"></span></label><input type="reset" class="btn btn-default" value="LIMPIAR" />
			    	</td>
				</tr>
			</table>
		</form>		
	</div>
	</left>
	</div>
	<div style="clear: both;"></div>	
</body>
