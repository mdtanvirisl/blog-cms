<?php
require_once __DIR__.'/core/LH/RequestHandler.php';
require_once __DIR__.'/core/LH/Models/Blog.php';

use LH\RequestHandler;
use LH\Models\Blog;

$request = new RequestHandler();
$blog = new Blog();

// Get blog ID from URL
$blogId = $request->getRequest('id');

if (!$blogId || !is_numeric($blogId)) {
    echo "Invalid blog ID.";
    exit;
}

$post = $blog->getPostById($blogId);

if (!$post) {
    echo "Blog post not found.";
    exit;
}
?>

<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Blog Article
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link crossorigin="" rel="preconnect" href="https://fonts.gstatic.com"/>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Manrope', sans-serif;
    }
  </style>
 </head>
 <body class="bg-[#F9FAFB] text-[#111827]">
  <div class="max-w-[900px] mx-auto px-4 py-6">
   <?php include 'header.php'; ?>

   <a href="index.php" class="flex items-center space-x-2 text-xs text-[#6B7280] mb-4 hover:text-[#111827]">
    <i class="fas fa-arrow-left">
    </i>
    <span>
     Back to blog list
    </span>
   </a>

    <img alt="<?= htmlspecialchars($post['title']) ?>" class="w-full rounded-md mb-6 object-cover" height="100" src="uploads/<?= htmlspecialchars($post['image']) ?>" width="900"/>

   <h1 class="text-base font-normal text-[#111827] mb-1 leading-tight">
    <?= htmlspecialchars($post['title']) ?>
   </h1>

   <p class="text-[9px] text-[#6B7280] mb-6 font-normal">
    Written by Admin | <?= date("F j, Y", strtotime($post['created_at'])) ?>
   </p>

   <article class="prose prose-sm max-w-none text-[#374151]">
    <p>
     <?= nl2br(htmlspecialchars($post['description'])) ?>
    </p>
   </article>

    <?php include 'footer.php'; ?>
  </div>
 </body>
</html>
