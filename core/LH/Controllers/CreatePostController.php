<?php
namespace LH\Controllers;

require_once __DIR__.'/../Models/Blog.php';
require_once __DIR__.'/../RequestHandler.php';

use LH\Models\Blog;
use LH\RequestHandler;

class CreatePostController {
    private Blog $blog;
    private RequestHandler $requestHandler;

    public function __construct() {
        $this->blog = new Blog();
        $this->requestHandler = new RequestHandler();
    }

    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = trim($this->requestHandler->postRequest('title'));
            $description = trim($this->requestHandler->postRequest('description'));
            $imageName = '';

            if ($title === '' || $description === '') {
                return "Title and description are required.";
            }

            if (!empty($_FILES['featured-image']['name'])) {
                $uploadedImage = $_FILES['featured-image'];

                $imageName = $this->requestHandler->uploadImage($uploadedImage);
                if ($imageName === false) {
                    return "Invalid file type. Only JPG, JPEG, and PNG allowed.";
                }
            }

            if ($this->blog->createPost($title, $description, $imageName)) {
                header('Location: dashboard.php');
                exit;
            }
            return "Failed to create post.";
        }
        return null;
    }
}
?>
