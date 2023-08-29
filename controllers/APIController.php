<?php 

namespace Controllers;

use Model\Cita;
use Model\CitaServicio;
use Model\Servicio;


class APIController {

    public static function index() {

        $servicios = Servicio::all();

        echo json_encode($servicios);
    }


    public static function guardar() {
        // Almacena la cita y devuelve el ID
        $cita = new Cita($_POST);
        $resultado = $cita->guardar();

        $id = $resultado['id'];
        // Almacena la o las citas y el servicio
        // Almacena los Servicios con el ID de la cita 
        $idServicios = explode(",", $_POST['servicios']); //Nota: explode es como split de JS(Sirve para separar)
        foreach($idServicios as $idServicio) {
            $args = [
                'citaId' => $id,
                'servicioId' => $idServicio
            ];

            $citaServicio = new CitaServicio($args);
            $citaServicio->guardar();
        }
        
        echo json_encode(['resultado' => $resultado]);
    }

    public static function eliminar() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            debuguear($_SESSION);
            $cita = Cita::find($id);
            $cita->eliminar();

            header('Location:' . $_SERVER["HTTP_REFERER"]);
        }
    }
}
?>
