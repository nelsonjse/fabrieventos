<?php
require_once './config/database.php'; // Incluye la conexión a la base de datos
require_once './app/models/Card.php'; // Incluye el modelo

class HomeController {
    private $cardModel;

    public function __construct($db) {
        $this->cardModel = new Card($db); // Pasa la conexión $db al modelo
    }

    public function index() {
        $cards = $this->cardModel->getAllCards(); // Obtiene los datos del modelo

        
        // Incluye la vista y pasa los datos
        include './app/views/home.php';
    }
}
?>
