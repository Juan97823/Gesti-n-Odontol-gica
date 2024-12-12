<?php
class Controlador
{
    public function verPagina($ruta)
    {
        require_once $ruta;
        require_once 'Controlador/Controlador.php';
        require_once 'Models/GestorCita.php';
        require_once 'Models/Cita.php';
        require_once 'Models/Paciente.php';
        require_once 'Models/Conexion.php';
        $controlador = new Controlador();
    }
    public function consultarCitas($doc)
    {
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarCitasPorDocumento($doc);
        require_once 'Vista/html/consultarCitas.php';
    }
    public function agregarCita($doc,$med,$fec,$hor,$con){
        $cita = new Cita(null, $fec, $hor, $doc, $med, $con, "Solicitada",
       "Ninguna");
        $gestorCita = new GestorCita();
        $gestorCita->agregarCita($cita);
        }
}
