<?php 

namespace Controllers;

use MVC\Router;

class CitaController {
    public static function index(Router $router) {
        
        session_start();
        // Valida que esté iniciada la sesión
        isAuth();

        $nombre = $_SESSION['nombre'];
        
        $router->render('cita/index',[
            'nombre' => $nombre,
            'id' => $_SESSION['id']

        ]);
    }
}