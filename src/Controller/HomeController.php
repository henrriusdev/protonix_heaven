<?php

namespace ProtonixHeaven\Controller;
use ProtonixHeaven\Repository\UserRepository;

class HomeController
{
    public function index()
    {
        // Lógica para la página de inicio
        require __DIR__ . '/../pages/home.php';
    }

    public function about()
    {
        // Lógica para la página "About"
        require __DIR__ . '/../pages/about.php';
    }
}