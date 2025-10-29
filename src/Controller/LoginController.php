<?php

namespace ProtonixHeaven\Controller;

use ProtonixHeaven\Repository\UserRepository;

/**
 * Controller for handling user login functionality.
 * This class manages the authentication process, including validating user credentials
 * and managing user sessions.
 */
class LoginController
{
    private UserRepository $userRepository;

    public function __construct()
    {
        // Initialize the UserRepository to interact with the user data in the database
        $this->userRepository = new UserRepository();
    }

    public function loginForm()
    {
        // Render the login form view
        require __DIR__ . '/../pages/login.php';
    }

    /**
     * Handles the login POST request.
     * Validates the email and password, authenticates the user, and starts a session if successful.
     * Redirects to the home page on success or back to login with an error on failure.
     */
    public function login()
    {
        // Check if the request method is POST
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            // If not POST, redirect to login page
            header('Location: /login');
            exit;
        }

        // Retrieve email and password from POST data
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        // Basic validation: ensure email and password are provided
        if (empty($email) || empty($password)) {
            // Set error message in session for flash display
            $_SESSION['error'] = 'Email and password are required.';
            header('Location: /login');
            exit;
        }

        // Find the user by email using the repository
        $user = $this->userRepository->findUserByEmail($email);
        if (!$user) {
            // User not found
            $_SESSION['error'] = 'Invalid email or password.';
            header('Location: /login');
            exit;
        }
        var_dump($user);

        // Verify the password using PHP's password_verify function
        if (!password_verify($password, $user->getPassword())) {
            // Password does not match
            $_SESSION['error'] = 'Invalid email or password.';
            header('Location: /login');
            exit;
        }

        // Authentication successful: start session and store user ID
        $_SESSION['user_id'] = $user->getId();
        $_SESSION['user_name'] = $user->getName(); // Optional: store name for display

        // Redirect to dashboard
        header('Location: /dashboard');
        exit;
    }
}