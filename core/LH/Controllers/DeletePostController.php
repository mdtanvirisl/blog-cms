<?php
require_once __DIR__ . '/../core/LH/Database.php';
require_once __DIR__ . '/../core/LH/Models/Blog.php';

use LH\Models\Blog;

$blog = new Blog();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = (int)$_POST['id'];
    if ($blog->deletePost($id)) {
        // Redirect back to the dashboard
        header("Location: dashboard.php");
        exit;
    } else {
        // Handle delete failure (Error Message)
        echo "Failed to delete the post.";
    }
}
