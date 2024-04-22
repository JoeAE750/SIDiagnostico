<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $rawData = file_get_contents('php://input');


        $data = json_decode($rawData, true);

        $S1 = $data['reinicioContinuo'];
        $S2 = $data['pantallazosAzules'];
        $S3 = $data['errorAlGuardarInformacion'];
        $S4 = $data['lento'];
        $S5 = $data['malRendimiento'];
        $S6 = $data['temperaturaAltaProcesador'];
        $S7 = $data['pitidoLargoAlArrancar'];
        $S8 = $data['sobrecalentamiento'];
        $S9 = $data['noArranca'];
        $S10 = $data['cortocircuitos'];



        if ($S1 == "si" && $S2 == "si" && $S3 == "no" && $S4 == "si" && $S5 == "no" && $S6 == "no" && $S7 == "si" && $S8 == "no" && $S9 == "si" && $S10 == "no") {
            $rp = "Problema de Ram detectado";
        } elseif ($S1 == "si" && $S2 == "si" && $S3 == "no" && $S4 == "si" && $S5 == "no" && $S6 == "no" && $S7 == "si" && $S8 == "no" && $S9 == "no" && $S10 == "no") {
            $rp = "Problema de Ram detectado";
        } elseif ($S1 == "si" && $S2 == "no" && $S3 == "no" && $S4 == "si" && $S5 == "no" && $S6 == "no" && $S7 == "si" && $S8 == "no" && $S9 == "si" && $S10 == "no") {
            $rp = "Problema de Ram detectado";
        } elseif ($S1 == "no" && $S2 == "si" && $S3 == "no" && $S4 == "si" && $S5 == "no" && $S6 == "no" && $S7 == "si" && $S8 == "no" && $S9 == "si" && $S10 == "no") {
            $rp = "Problema de Ram detectado";
        } elseif ($S1 == "si" && $S2 == "si" && $S3 == "no" && $S4 == "si" && $S5 == "no" && $S6 == "no" && $S7 == "no" && $S8 == "no" && $S9 == "no" && $S10 == "no") {
            $rp = "Problema de Ram detectado";
        } elseif ($S1 == "no" && $S2 == "si" && $S3 == "no" && $S4 == "si" && $S5 == "no" && $S6 == "no" && $S7 == "si" && $S8 == "no" && $S9 == "no" && $S10 == "no") {
            $rp = "Problema de Ram detectado";
        } elseif ($S1 == "no" && $S2 == "no" && $S3 == "no" && $S4 == "si" && $S5 == "no" && $S6 == "no" && $S7 == "si" && $S8 == "no" && $S9 == "si" && $S10 == "no") {
            $rp = "Problema de Ram detectado";
        } elseif ($S1 == "si" && $S2 == "no" && $S3 == "no" && $S4 == "no" && $S5 == "no" && $S6 == "no" && $S7 == "no" && $S8 == "no" && $S9 == "si" && $S10 == "si") {
            $rp = "Problema de Placa Madre";
        } elseif ($S1 == "no" && $S2 == "no" && $S3 == "no" && $S4 == "no" && $S5 == "no" && $S6 == "no" && $S7 == "no" && $S8 == "no" && $S9 == "si" && $S10 == "si") {
            $rp = "Problema de Placa Madre";
        } elseif ($S1 == "si" && $S2 == "no" && $S3 == "no" && $S4 == "no" && $S5 == "no" && $S6 == "no" && $S7 == "no" && $S8 == "no" && $S9 == "no" && $S10 == "si") {
            $rp = "Problema de Placa Madre";
        } elseif ($S1 == "no" && $S2 == "no" && $S3 == "no" && $S4 == "no" && $S5 == "no" && $S6 == "no" && $S7 == "no" && $S8 == "no" && $S9 == "si" && $S10 == "no") {
            $rp = "Problema de Fuente de Alimentacion";
        } elseif ($S1 == "no" && $S2 == "si" && $S3 == "no" && $S4 == "no" && $S5 == "no" && $S6 == "no" && $S7 == "no" && $S8 == "no" && $S9 == "no" && $S10 == "no") {
            $rp = "Problema de Controladores";
        } elseif ($S1 == "no" && $S2 == "si" && $S3 == "si" && $S4 == "si" && $S5 == "no" && $S6 == "no" && $S7 == "no" && $S8 == "no" && $S9 == "no" && $S10 == "no") {
            $rp = "Problema de Disco duro";
        } elseif ($S1 == "no" && $S2 == "no" && $S3 == "si" && $S4 == "si" && $S5 == "no" && $S6 == "no" && $S7 == "no" && $S8 == "no" && $S9 == "no" && $S10 == "no") {
            $rp = "Problema de Disco duro";
        } elseif ($S1 == "no" && $S2 == "si" && $S3 == "si" && $S4 == "no" && $S5 == "no" && $S6 == "no" && $S7 == "no" && $S8 == "no" && $S9 == "no" && $S10 == "no") {
            $rp = "Problema de Disco duro";
        } elseif ($S1 == "no" && $S2 == "no" && $S3 == "no" && $S4 == "si" && $S5 == "no" && $S6 == "no" && $S7 == "no" && $S8 == "no" && $S9 == "no" && $S10 == "no") {
            $rp = "Problema de Malware";
        } elseif ($S1 == "no" && $S2 == "no" && $S3 == "no" && $S4 == "no" && $S5 == "no" && $S6 == "si" && $S7 == "no" && $S8 == "no" && $S9 == "si" && $S10 == "no") {
            $rp = "Problema de Refrigeracion";
        } elseif ($S1 == "no" && $S2 == "no" && $S3 == "no" && $S4 == "no" && $S5 == "si" && $S6 == "no" && $S7 == "si" && $S8 == "no" && $S9 == "no" && $S10 == "no") {
            $rp = "Problema de Tarjeta Grafica";
        } elseif ($S1 == "no" && $S2 == "no" && $S3 == "no" && $S4 == "no" && $S5 == "no" && $S6 == "no" && $S7 == "no" && $S8 == "si" && $S9 == "no" && $S10 == "no") {
            $rp = "Problema de Ventiladores";
        } elseif ($S1 == "no" && $S2 == "no" && $S3 == "no" && $S4 == "no" && $S5 == "si" && $S6 == "no" && $S7 == "no" && $S8 == "no" && $S9 == "no" && $S10 == "no") {
            $rp = "Problema de CPU";
        }  else{
            $rp = "Requiere mas informacion";
        }

        

        $response = [
            'diagnosis' => $rp,

        ];


        header('Content-Type: application/json');
        echo json_encode($response);
    }
?>
