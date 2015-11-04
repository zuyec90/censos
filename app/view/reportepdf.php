
<?php

require_once('../lib/pdf/fpdf.php');

require_once ('../controller/CensosController.php');

    /*Calse para generar las columnas */
    class PDF extends FPDF
    {

        function TablaBasica($header,$data,$ver,$total  )
       {
        //Cabecera
        //var_dump($ver);
        $this->Cell(40,7," Tabla general ",1);
        $i = 0;   
        foreach ($data as $key => $value) {
            
            if ($key == "union" ) {
                
           
            foreach ($value as $value2) {
                
                $this->Ln();    
                $this->Cell(120,6,$header[$i] ,1);
                $this->Cell(40,6, $value2,1);
                 $i++;
                }
             }else{
                foreach ($value as $key3 => $value3) {

                   if( $key3 > 14) {
                    $this->Ln();    
                    $this->Cell(120,6,$header[$i] ,1);
                    $this->Cell(40,6, $value3,1);
                    $i++;
                    }
                }
             }       
        }
                $this->Ln();    
                $this->Cell(120,6, "Total de Habitantes",1);
                $this->Cell(40,6, $ver,1);
                $this->Ln();    
                $this->Cell(120,6,"Total de Familias" ,1);
                $this->Cell(40,6, $total,1);
       }
    }
    /*Calse para generar las columnas */


    /* se  creea el objetos del censo */
        $censo = new censo;
        $data = $censo->GeneralReporte();
        $ver =  $censo->totalcenso();
        $total = $censo->totalfamilia();

    /* se  creea el objetos del pdf */   
        $pdf = new PDF();
       
    // Títulos de las columnas en un arreglo 

        $header = array('Sexo Femenino', 
                        'Sexo Masculino',  
                        'Trabaja Si',
                        'Trabaja No ',
                        'Discapacitado Si ',
                        'Discapacitado  No ',
                        'Pensionado Si ',
                        'Pensionado No ',
                        'Inscritos en el Si ',
                        'Inscritos en el No ',
                        'Estado Civil: Solteros ',
                        'Estado Civil: Casados  ',
                        'Estado Civil: Divorciados ',
                        'Estado Civil: Viudos ',
                        'Estado Civil: En concubinato ',
                        'Estado Civil: Sin instruccion ',
                        'Nivel de Instruccion: Sin instruccion ',
                        'Nivel de Instruccion: Basica  ',
                        'Nivel de Instruccion: Bachiller ',
                        'Nivel de Instruccion: Tecnico Medio  ',
                        'Nivel de Instruccion: Tecnico Superior ',
                        'Nivel de Instruccion: Universitarios ',
                        'Nivel de Instruccion: Postgrado '
                         );
      

        // usas los metods de pdf 

        $pdf->SetFont('Arial','',14);
        $pdf->AddPage();
        $pdf->TablaBasica($header,$data,$ver,$total);
        $pdf->Output();

        // fin 

?>