<?php

namespace Controllers;

use MVC\Router;

class VendedorController {
    public static function crear( Router $router) {

        $router->render('')
    }

    public static function actualizar() {
        echo " Actualizar vendedor";
    }

    public static function eliminar() {
        echo "Eliminar vendedor";
    }
}