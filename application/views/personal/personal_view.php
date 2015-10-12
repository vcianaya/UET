<html>
<head>
	<title>PERSONAL</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('templates/css/style_campos.css');?>">
	<link href="<?= base_url('templates/css/cssbotones.css');?>" rel="stylesheet" type="text/css" >
	<link rel="stylesheet" href="<?= base_url('templates/css/ico_menu.css');?>"/>
	<link rel="stylesheet" href="<?= base_url('templates/css/style_head.css');?>"/>

	<script src="<?= base_url();?>/templates/js/validacion.js"></script>

	<script type="text/javascript" src="<?= base_url();?>/templates/js/jquery_1.4.js"></script>
	<script type="text/javascript" src="<?= base_url();?>/templates/js/jquery_validate.js"></script>

	<link rel="stylesheet" href="<?= base_url('templates/js/datepicker/themes/base/ui.all.css');?>"/>
	<script type="text/javascript" src="<?= base_url();?>/jquery-1.3.2.js"></script>
	<script type="text/javascript" src="<?= base_url();?>/templates/js/datepicker/ui/ui.datepicker.js"></script>
	<link type="text/css" href="<?= base_url('templates/js/datepicker/demos/demos.css');?>" rel="stylesheet" />

	<script type="text/javascript">
	$(function() {
		$('#fecha_nac').datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat:'yy/mm/dd'
		});
	});
	</script>


<script type="text/javascript">
$(
   function()
   {
		$('#frmpersonal').validate
		(
		 	{
				rules:
				{
				'ci':{required:true},
				'fecha_nac':{required:true},
				'nombre': {required: true, minlength:'3'},
				'paterno':{required:true},
				'direccion':{required:true},
				'email': { required: true, email: true },	
				'celular':{required:true,minlength:'8'},
				'expedido':'required',
				'genero':'required',
				'ecivil':'required',
				'estado':'required',
				},
				messages: 
				{
				'nombre':{required:'<label class="letras">Debe ingresar el nombre</label>', minlength: '<label style="font-size: 13px">porfabor un minimo 3 letras</label>'},
				'paterno': { required: '<label class="letras">Debe ingresar su 1er apellido</label>'},
				'ci': { required: '<label class="letras">Debe ingresar su CI</label>'},
				'email': { required: '<label class="letras">Debe ingresar un correo electrónico</label>', email: '<label class="letras">Debe ingresar el correo electrónico con el formato correcto. Por ejemplo: u@localhost.com</label>' },
				'direccion': { required: '<label class="letras">Debe ingresar su direccion</label>'},
				'fecha_nac': { required: '<label class="letras">Debe elegir una fecha</label>'},
				'celular': { required: '<label class="letras">Dbe igresar su numero de celular</label>', minlength:'<label style="font-size: 13px">porfabor un minimo 8 numeros</label>'},
				'expedido':'<label class="letras">Debe elegir un Departamento</label>',
				'genero':'<label class="letras">Debe elegir un genero</label>',
				'ecivil':'<label class="letras">Debe una elegir una opcion</label>',
				'estado':'<label class="letras">Debe elegir un estado</label>',

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
<body >
<!--poner titulo del registro-->
<form name="frmpersonal" id="frmpersonal" action="<?=base_url();?>personal/insertar" method="post" style="margin-bottom:30px;">
	<fieldset class="fldcuerpo" align="left" >
		<legend class="tamano">Datos Personales</legend>
		<center>
		<table width="540px">
			<tr>
				<td width="180px"><label class="lblname">Carnet de Identidad<label style="color:rgb(188,0,0); border-top:6px; text-size:3px;"><SPAN class="glyphicon glyphicon-asterisk"></SPAN></label></label></td>
				<td width="180px"><label class="lblname">Expedido en<label style="color:rgb(188,0,0); border-top:6px; text-size:3px;"><SPAN class="glyphicon glyphicon-asterisk"></SPAN></label></label></td>
				<td width="180px"><label class="lblname">Fecha de Nacimiento<label style="color:rgb(188,0,0); border-top:6px; text-size:3px;"><SPAN class="glyphicon glyphicon-asterisk"></SPAN></label></label></td>
			</tr>
			<tr>
				<td width="180px"><input type="text" name="ci" class="txtfields" placeholder="Nro. de Documento" ></td>
				<td width="180px">
					<select name="expedido" class="txtfields">
						<option value="">SLECCIONE</option>
						<option value="LP">LP</option>
						<option value="OR">OR</option>
						<option value="CBBA">CBBA</option>
						<option value="PT">PT</option>				
						<option value="TJ">TJ</option>
						<option value="BN">BN</option>
						<option value="CH">CH</option>
						<option value="SCZ">SCZ</option>
						<option value="PA">PA</option>
					</select>
				</td>
				<td width="180px"><input type="text" name="fecha_nac" id="fecha_nac" maxlength="10" readonly=""/></td>
			</tr>
			<tr>
				<td width="180px"><label class="lblname">Nombre(s)<label style="color:rgb(188,0,0); border-top:6px; text-size:3px;"><SPAN class="glyphicon glyphicon-asterisk"></SPAN></label></label></td>
				<td width="180px"><label class="lblname">Apellido Paterno<label style="color:rgb(188,0,0); border-top:6px; text-size:3px;"><SPAN class="glyphicon glyphicon-asterisk"></SPAN></label></label></td>
				<td width="180px"><label class="lblname">Apellido Materno</label></td>
			</tr>
			<tr>
				<td width="180px"><input type="text" name="nombre" class="txtfields" placeholder="Nombre(s)" onkeypress="return validar_texto(event);"></td>
				<td width="180px"><input type="text" name="paterno" class="txtfields" placeholder="Ap. Paterno" onkeypress="return validar_texto(event);"></td>
				<td width="180px"><input type="text" name="materno" class="txtfields" placeholder="Ap. Materno" onkeypress="return validar_texto(event);"></td>
			</tr>
			<tr>
				<td width="180px"><label class="lblname">Apellido Casada</label></td>
				<td width="180px"><label class="lblname">Género<label style="color:rgb(188,0,0); border-top:6px; text-size:3px;"><SPAN class="glyphicon glyphicon-asterisk"></SPAN></label></label></td>
				<td width="180px"><label class="lblname">Estado Civil<label style="color:rgb(188,0,0); border-top:6px; text-size:3px;"><SPAN class="glyphicon glyphicon-asterisk"></SPAN></label></label></td>
			</tr>
			<tr>
				<td width="180px"><input type="text" name="casada" class="txtfields" placeholder="Ap. Casada" onkeypress="return validar_texto(event);"></td>
				<td width="180px">
					<select name="genero" class="txtfields">
						<option value="">SELECCIONE</option>
						<option value="MASCULINO">MASCULINO</option>
						<option value="FEMENINO">FEMENINO</option>
						<option value="OTRO">OTRO</option>
					</select>
				</td>
				<td width="180px">
					<select name="ecivil" class="txtfields">
						<option value="">SELECCIONE</option>
						<option value="CASADO(A)">CASADO(A)</option>
						<option value="SOLTERO(A)">SOLTERO(A)</option>
						<option value="CONCUBINO(A)">CONCUBINO(A)</option>
						<option value="DIVORCIADOs(A)">DIVORCIADO(A)</option>
						<option value="VIUDO(A)">VIUDO(A)</option>
					</select>
				</td>
			</tr>
		</table>
		</center>
	</fieldset>
	<fieldset class="fldcuerpo" align="left">
		<legend align="left" class="tamano">Datos Generales</legend>
		<center>
		<table>
			<tr>
				<td><label width="180px" class="lblname">Profesión</label></td>
				<td><label width="180px" class="lblname">Cargo</label></td>
				<td><label width="180px" class="lblname">Estado<label style="color:rgb(188,0,0); border-top:6px; text-size:3px;"><SPAN class="glyphicon glyphicon-asterisk"></SPAN></label></label></td>
			</tr>
			<tr>
				<td width="180px">
				<select name="profesion" class="txtfields">
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
				</td>
				<td width="180px">
					<select name="cargo" class="txtfields">
						<option value="ABOGADO ADMINISTRATIVO">ABOGADO ADMINISTRATIVO</option>
						<option value="ADMINISTRADOR(A) FINANCIERO">ADMINISTRADOR(A) FINANCIERO</option>
						<option value="ENCARGADO(A) DE APORTES">ENCARGADO(A) DE APORTES</option>
						<option value="ENCARGADO(A) ENLACE JURIDICO">ENCARGADO(A) ENLACE JURIDICO</option>
						<option value="ENCARGADO(A) GENERAL">ENCARGADO(A) GENERAL</option>
						<option value="ENCARGADO(A) MINUTACION">ENCARGADO(A) MINUTACION</option>
						<option value="ENCARGADO(A) DE SISTEMAS">ENCARGADO(A) DE SISTEMAS</option>
						<option value="TECNICO ADMINISTRATIVO">TECNICO ADMINISTRATIVO</option>
						<option value="TECNICO APORTES">TECNICO APORTES</option>
						<option value="TECNICO JURIDICO">TECNICO JURIDICO</option>
						<option value="TECNICO MINUTACION">TECNICO MINUTACION</option>
						<option value="TECNICO PLATAFORMA">TECNICO PLATAFORMA</option>
						<option value="TECNICO REGISTRO">TECNICO REGISTRO</option>
						<option value="SECRETARIA">SECRETARIA</option>
						<option value="OTROS">OTROS</option>
					</select>
				</td>
				<td width="180px">
					<select name="estado" class="txtfields">
						<option value="">SELECCIONE</option>
						<option value="Activo">Activo</option>
						<option value="Inactivo">Inactivo</option>
					</select>
				</td>
			</tr>
			<tr >
				<td width="180px"><label for="email" class="lblname">Correo&nbsp;</label></td>
				<td width="180px"><label class="lblname">Telefono&nbsp;</label></td>
				<td width="180px"><label class="lblname">Celular&nbsp;<label style="color:rgb(188,0,0); border-top:6px; text-size:3px;"><SPAN class="glyphicon glyphicon-asterisk"></SPAN></label></label></td>
			</tr>
			<tr>
				<td width="180px"><input type="text" name="email" id="email" class="txtfield" placeholder="Correo electronico"></td>
				<td width="180px"><input type="text" name="telefono" class="txtfields"placeholder="Numero telefonico" onkeypress="return validar_numero(event);" maxlength="8"></td>
				<td width="180px"><input type="text" name="celular" class="txtfields" placeholder="Numero de celular" onkeypress="return validar_numero(event);" maxlength="8"></td>
			</tr>
			<tr>
				<td width="180px"><label class="lblname">Direccion&nbsp;<label style="color:rgb(188,0,0); border-top:6px; text-size:3px;"><SPAN class="glyphicon glyphicon-asterisk"></SPAN></label></label></td>

			</tr>
			<table>
			<tr>
				<td width="540px"><input type="text" name="direccion" class="txtfields large" placeholder="Escriba su direccion: Ej. ZONA, CALLE, NRO."/></td>
			</tr>
			<tr>
				<td width="180px"><label class="lblname">Observaciones&nbsp;</label></td>

			</tr>
			<tr>
				<td width="540px"><TEXTAREA name"obs" placeholder="Ingrese las observaciones" rows="6" cols="74" class="txtfields large2"></TEXTAREA></td>
			</tr>
			</table>
		</table>
		</center>
		</fieldset>
		<table style="margin-top:10px;">
		<center>
			<tr>
				<td><label style="color:rgb(10,0,37); border-top:6px;font-size: 15px; "><SPAN class="glyphicon glyphicon-saved"><input type="submit" class="btn btn-default" value="GUARDAR"  /></SPAN></label>
                 <label  style="color:rgb(10,0,37); border-top:6px;font-size: 15px;"> <SPAN class="glyphicon glyphicon-trash"><input type="reset" class="btn btn-default" value="LIMPIAR" /></SPAN></label></td>
				
			</tr>
		</center>
		</table>
</form>
	<div id="alert">
	 <?= validation_errors();?>

	
	</div>
</body>
</html>	