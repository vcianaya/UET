<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>http://codigoweblibre.comli.com/ Y http://codigoweblibre.wordpress.com/</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #FFC;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
		font-size:18px;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>REPORTES EN PDF DESDE CODEIGNITER</h1>

	<div id="body">
		Generar Reportes en Pdf con las librerias fpdf y tcpdf<br/>
        Generar reportes en pdf de datos registrados en una base de datos MySql<br/><br/>
        <?php		
			echo anchor('pdf/exportarFpdf', 'Reporte pdf en fpdf', ' target="_blank" class=""'); 
		?><br/>
        <?php		
			echo anchor('pdf/exportarTcpdf', 'Reporte pdf en tcpdf', ' target="_blank" class=""'); 
		?>
        <br/><br/>
        <div>
        C&oacute;digo fuente por : <br/>
        <a href="http://codigoweblibre.wordpress.com/">http://codigoweblibre.wordpress.com/</a><br/>
        <a href="http://codigoweblibre.comli.com/">http://codigoweblibre.comli.com/</a>        
        </div>
        <br/>
	</div>
</div>

</body>
</html>