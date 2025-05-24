<?php
namespace LH\Controllers;

require_once __DIR__ . '/../RequestHandler.php';

use LH\RequestHandler;

class SettingsController {
    private $requestHandler;
    private $settingsFile;

    public function __construct() {
        $this->requestHandler = new RequestHandler();
        $this->settingsFile = __DIR__ . '/../assets/settings.txt';
    }

    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->updatePostsPerPage();
        }
    }

    private function updatePostsPerPage() {
        $postsPerPage = isset($_POST['postsPerPage']) ? (int)$_POST['postsPerPage'] : 0;

        if ($postsPerPage > 0) {
            if (file_put_contents($this->settingsFile, $postsPerPage) !== false) {
                header('Location: ../../../admin/settings.php?success=1');
                exit;
            } else {
                header('Location: ../../../admin/settings.php?error=2'); 
                exit;
            }
        } else {
            header('Location: ../../../admin/settings.php?error=1');
            exit;
        }
    }
}

$settingsController = new SettingsController();
$settingsController->handleRequest();
