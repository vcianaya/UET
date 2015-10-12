<?php
	function formateardepartamento($departamento)
	{ 
		$dep = "";
		switch (strtoupper($departamento)) {
			case 'LA PAZ': 			$dep = "LP";break;
			case 'COCHABAMBA':		$dep = "CBBA";break;
			case 'ORURO': 			$dep = "OR";break;
			case 'TARIJA':			$dep = "TJ";break;
			case 'CHUQUISACA': 		$dep = "CH";break;
			case 'PANDO':			$dep = "PA";break;
			case 'BENI': 			$dep = "BE";break;
			case 'POTOSI':			$dep = "PT";break;
			case 'SANTA CRUZ': 		$dep = "SC";break;
			default: break;
		}
		return $dep;
	}
	function formatearfecha($fecha)
	{
		$mes = "";
		$cadenafecha = explode("-", $fecha);
		switch ($cadenafecha[1]) {
			case '01':$mes = "Ene";break;
			case '02':$mes = "Feb";break;
			case '03':$mes = "Mar";break;
			case '04':$mes = "Abr";break;
			case '05':$mes = "May";break;
			case '06':$mes = "Jun";break;
			case '07':$mes = "Jul";break;
			case '08':$mes = "Ago";break;
			case '09':$mes = "Sep";break;
			case '10':$mes = "Oct";break;
			case '11':$mes = "Nov";break;
			case '12':$mes = "Dic";break;
			default: break;
		}
		return ($cadenafecha[2]."/".$mes."/".$cadenafecha[0]);
	}
?>
