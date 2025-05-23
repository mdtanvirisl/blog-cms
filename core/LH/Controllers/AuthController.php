<?php
namespace LH\Controllers;

session_start();

class AuthController {
    private string $username = 'lemon';
    private string $password = 'lemon';

    public function login(string $inputUsername, string $inputPassword): bool {
        if ($inputUsername === $this->username && $inputPassword === $this->password) {
            $_SESSION['logged_in'] = true;
            return true;
        }
        return false;
    }

    public function isLoggedIn(): bool {
        return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
    }

    // public function logout(): void {
    //     session_destroy();
    //     header('Location: login.php');
    //     exit;
    // }
}

