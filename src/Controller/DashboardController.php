<?php

namespace ProtonixHeaven\Controller;

use ProtonixHeaven\Repository\UserRepository;

/**
 * Controller for handling user login functionality.
 * This class manages the authentication process, including validating user credentials
 * and managing user sessions.
 */
class DashboardController
{
    public function index()
    {
        // Render the dashboard view
        require __DIR__ . '/../pages/dashboard.php';
    }
}