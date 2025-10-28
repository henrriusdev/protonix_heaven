<?php
require __DIR__ . '/../vendor/autoload.php';

use Bramus\Router\Router;
use Dotenv\Dotenv; // <-- Importa la clase

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$router = new Router();

// 3. Definición de rutas
$router->get('/', function () {
  require __DIR__ . '/../src/pages/home.php';
});

$router->get('/about', function () {
  require __DIR__ . '/../src/pages/about.php';
});

// 4. Ruta para 404 (Página no encontrada)
$router->set404(function () {
  header('HTTP/1.1 404 Not Found');
  require __DIR__ . '/../src/pages/404.php';
});

// 5. ¡Ejecuta el enrutador!
$router->run();
