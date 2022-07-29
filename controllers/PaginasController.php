<?php

namespace Controllers;

use MVC\Router;
use Model\Propiedad;
use PHPMailer\PHPMailer\PHPMailer;

class PaginasController {
    public static function index(Router $router ) {

        $propiedades = Propiedad::get(3);
        $inicio = true;

        $router->render('paginas/index', [
            'propiedades' => $propiedades,
            'inicio' => $inicio
        ]);
    }

    public static function nosotros(Router $router) {

       $router->render('paginas/nosotros');
    }

    public static function propiedades( Router $router) {

        $propiedades = Propiedad::all();

        $router->render('paginas/propiedades', [
            'propiedades' => $propiedades
        ]);
    }

    public static function propiedad(Router $router ) {

        $id = validarORedireccionar('/propiedades');
        
        // Buscar la propiedad por su id
        $propiedad = Propiedad::find($id);

        $router->render('paginas/propiedad', [
            'propiedad' => $propiedad
        ]);
    }

    public static function blog( Router $router) {

        $router->render('paginas/blog');
    }

    public static function entrada( Router $router) {
        $router->render('paginas/entrada');
    }

    public static function contacto( Router $router) {

        $mensaje = null;

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $respuestas = $_POST['contacto'];


            // Crear una instancia de PHPMAILER
            $mail = new PHPMailer();

            // Configurar SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = 'fd9d164244d21a';
            $mail->Password = '67156597824c81';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 2525;


            // Configurar contenido del mail
            $mail->setFrom('deromrealestate@gmail.com');
            $mail->addAddress('deromrealestate@gmail.com', 'deromerealestate.com');
            $mail->Subject = 'Tienes un Nuevo Mensaje';

            // Habilitar HTML
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            // Definir el contenido
            $contenido =  '<html>';
            $contenido .= '<p>Tienes un Nuevo Mensaje</p>';
            $contenido .= '<p>Nombre: ' . $respuestas['nombre']   . ' </p>';
            $contenido .= '<p>E-mail: ' . $respuestas['email']   . ' </p>';

            // Enviar formulario de forma condicional algunos campos de email o telefono
            if($respuestas['contacto'] === 'telefono') {
                $contenido .= '<p>Choose to be contacted via telephone</p>';
                $contenido .= '<p>Telefono: ' . $respuestas['telefono']   . ' </p>';
                $contenido .= '<p>Fecha de contacto: ' . $respuestas['fecha']   . ' </p>';
                $contenido .= '<p>Hora de contacto: ' . $respuestas['hora']   . ' </p>';

            } else {
                // Es email, entonces agregamos el campo
                $contenido .= '<p>Choose to be contacted via email</p>';
                $contenido .= "<p>Su Email  es: " .  $respuestas['email'] ." </p>";
            }

            $contenido .= '<p>Mensaje: ' . $respuestas['mensaje']   . ' </p>';
            $contenido .= '<p>Vender, Comprar o Rentar: ' . $respuestas['tipo']   . ' </p>';
            $contenido .= '<p>Presupuesto: $' . $respuestas['precio']   . ' </p>';
            $contenido .= '<p>Prefiere ser contactado por: ' . $respuestas['contacto']   . ' </p>';
            $contenido .= '</html>';

            $mail->Body = $contenido;
            $mail->AltBody = 'Texto alternativo sin HTML';

            // Enviar el mail
            if($mail->send()) {
                $mensaje = "Mensaje enviado Correctamente";
            } else {
                $mensaje = "Mensaje no enviado...";
            }
        }

        $router->render('paginas/contacto', [
            'mensaje' => $mensaje
        ]);
    }
}