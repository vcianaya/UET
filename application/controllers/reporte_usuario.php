<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Reporte_usuario extends CI_Controller 
{

    function __construct()
    {
        parent::__construct();
    }
 
    public function index()
    {
        // Se carga el modelo alumno
        $this->load->model('usuario_model');
        // Se carga la libreria fpdf
        $this->load->library('Pdf');
 
        // Se obtienen los alumnos de la base de datos
        $usuarios = $this->usuario_model->obtenerListaUsuarios();
 
        // Creacion del PDF
 
        /*
         * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
         * heredó todos las variables y métodos de fpdf
         */
        $this->pdf = new Pdf();
        // Agregamos una página
        $this->pdf->AddPage();
        // Define el alias para el número de página que se imprimirá en el pie
        $this->pdf->AliasNbPages();
 
        /* Se define el titulo, márgenes izquierdo, derecho y
         * el color de relleno predeterminado
         */
        /*$this->pdf->SetTitle("Lista de Usuarios");
        $this->pdf->SetLeftMargin(15);
        $this->pdf->SetRightMargin(15);
        $this->pdf->SetFillColor(200,200,200);
 */
        // Se define el formato de fuente: Arial, negritas, tamaño 9
        $this->pdf->SetFont('Arial', 'B', 9);
        /*
         * TITULOS DE COLUMNAS
         *
         * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
         */
 
        $this->pdf->Cell(15,7,'NUM',0,'C',0);
        $this->pdf->Cell(25,7,'PATERNO',0,'C',0);
        $this->pdf->Cell(25,7,'MATERNO',0,'C',0);
        $this->pdf->Cell(25,7,'NOMBRE',0,'C',0);
        $this->pdf->Cell(40,7,'FECHA DE NACIMIENTO',0,'C',0);
        $this->pdf->Ln(7);
        // La variable $x se utiliza para mostrar un número consecutivo
        $x = 1;
        foreach ($usuarios as $usu) {
            // se imprime el numero actual y despues se incrementa el valor de $x en uno
            $this->pdf->Cell(15,5,$x++,0,'C',0);
            // Se imprimen los datos de cada alumno
            $this->pdf->Cell(25,5,$usu->apellido_pat,0,'L',0);
            $this->pdf->Cell(25,5,$usu->apellido_mat,0,'L',0);
            $this->pdf->Cell(25,5,$usu->nombre,0,'L',0);
            $this->pdf->Cell(40,5,$usu->fecha_nac,0,'C',0);
            //Se agrega un salto de linea
            $this->pdf->Ln(5);
        }
        /*
         * Se manda el pdf al navegador
         *
         * $this->pdf->Output(nombredelarchivo, destino);
         *
         * I = Muestra el pdf en el navegador
         * D = Envia el pdf para descarga
         *
         */
        echo $this->pdf->Output('usuarios.pdf');
    }
}