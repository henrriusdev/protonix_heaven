<?php
require __DIR__ . '/../vendor/autoload.php';

use Bramus\Router\Router;
use Dotenv\Dotenv; // <-- Importa la clase
use ProtonixHeaven\Controller\HomeController;
use ProtonixHeaven\Controller\LoginController; // Import the LoginController

$dotenv = Dotenv::createImmutable(__DIR__ . '/../'); 
$dotenv->load();

// Start the session for user authentication
session_start();

$router = new Router();
$homeController = new HomeController();
$loginController = new LoginController();

// 3. Definición de rutas
$router->get('/', [$homeController, 'index']);
$router->get('/about', [$homeController, 'about']);
$router->get('/login', [$loginController, 'loginForm']);
$router->post('/login', [$loginController, 'login']);

// 4. Ruta para 404 (Página no encontrada)
$router->set404(function () {
  header('HTTP/1.1 404 Not Found');
  require __DIR__ . '/../src/pages/404.php';
});

// 5. ¡Ejecuta el enrutador!
$router->run();
