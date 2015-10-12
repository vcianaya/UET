<html lang="es">
<head>
    <meta charset="utf-8" />
    	<link rel="stylesheet" href="<?= base_url('templates/css/ico_menu.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>templates/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>templates/css/shCore.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>templates/css/demo.css">
	<style type="text/css" class="init">
	</style>
	<script type="text/javascript" language="javascript" src="<?= base_url();?>templates/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="<?= base_url();?>templates/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="<?= base_url();?>templates/js/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="<?= base_url();?>templates/js/demo.js"></script>
	<script type="text/javascript" language="javascript" class="init">
		$(document).ready(function() {
			$('#example').DataTable();
		} );
	</script>
</head>
<body>
<center>
<div>
	<!--TITULO-->
	<table id="example" class="display" cellspacing="5" width="100%" style="border-radius:4px 4px 4px 4px;-moz-border-radius:4px 4px 4px 4px;-webkit-border-radius:4px 4px 4px 4px;border:1px #036 solid;font-family:Verdana, Geneva, sans-serif;">
		<thead style="font-size:11px;color:#FFF;background-color:#036;heigth=40px;">
			<tr>
				<th>NRO.</th>
	            <th>NRO. DOCUMENTO CI</th>
				<th>NOMBRE COMPLETO</th>
				<th>ESTADO CVIL</th>
				<th>FECHA DE NACIMIENTO</th>
				<th>FECHA DE REGISTRO</th>
				<th>DEPARTAMENTO</th>
				<th>PROFESIÓN</th>
				<th>CARGO</th>
				<th>NRO. CEL-TEL</th>
				<th>CORREO</th>
				<th>ESTADO</th>
				<th>ACCIÓN</th>
			</tr>
		</thead>
		<tfoot style="font-size:11px;color:#FFF;background-color:#036;heigth=40px;">
			<tr>
				<th>NRO.</th>
	            <th>NRO. DOCUMENTO CI</th>
				<th>NOMBRE COMPLETO</th>
				<th>ESTADO CVIL</th>
				<th>FECHA DE NACIMIENTO</th>
				<th>FECHA DE REGISTRO</th>
				<th>DEPARTAMENTO</th>
				<th>PROFESIÓN</th>
				<th>CARGO</th>
				<th>NRO. CEL-TEL</th>
				<th>CORREO</th>
				<th>ESTADO</th>
				<th>ACCIÓN</th>
			</tr>
		</tfoot>
		<tbody style="font-size:11px;">		
			<?php
				include_once ('../uet/application/views/funciones/funciones.php');
				if ($result)
				{
					foreach ($result->result() as $row) 
					{
						echo "<tr>";
						echo "<td align='center'>".$row->ID_PERSONAL."</td>";
						echo "<td>".$row->CARNET." ".$row->EXPEDIDO."</td>";
						echo "<td>".$row->NOMBRE." ".$row->APELLIDO_PAT." ".$row->APELLIDO_MAT."</td>";
						echo "<td>".$row->ESTADO_CIVIL."</td>";					
						echo "<td>".formatearfecha($row->FECHA_NAC)."</td>";
						echo "<td>".formatearfecha($row->FECHA_REGISTRO)."</td>";
						echo "<td>".$row->DEPARTAMENTO."</td>";
						echo "<td>".$row->PROFESION."</td>";					
						echo "<td>".$row->CARGO."</td>";
						echo "<td>".$row->TELEFONO." - ".$row->CELULAR."</td>";
						echo "<td>".$row->CORREO."</td>";
						echo "<td>".$row->ESTADO."</td>";
						echo "<td><button type='submit' value='' class='glyphicon glyphicon-file'>";
						echo "</tr>";
					}
				}
			?>
		</tbody>
	</table>
</center>

<?php		
	echo anchor('personaldos/exportarFpdf', 'Reporte pdf en fpdf', ' target="_blank" class=""'); 
?><br/>
</div>
	<div style="clear: both;"></div>	
</body>
</html>