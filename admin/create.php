<?php
require_once __DIR__ . '/../core/LH/controllers/CreatePostController.php';

use LH\Controllers\CreatePostController;

$controller = new CreatePostController();
$error = $controller->handleRequest();
?>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Create New Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-[#F9FAFB] min-h-screen">
    <?php include __DIR__ . '/../header.php'; ?>
    <main class="max-w-4xl mx-auto px-6 py-8">
        <a class="inline-flex items-center text-xs text-gray-700 mb-4 hover:underline" href="dashboard.php">
            <i class="fas fa-arrow-left mr-2"></i>
            Back to dashboard
        </a>
        <h1 class="text-base font-semibold text-gray-900 mb-4">Create New Post</h1>
        <?php if ($error): ?>
            <div class="text-red-500 mb-4"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form class="space-y-6" method="POST" enctype="multipart/form-data">
            <div>
                <label class="block text-xs font-normal text-gray-700 mb-1" for="title">Title</label>
                <input
                    class="w-full border border-gray-200 rounded-md text-xs text-gray-500 placeholder-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-purple-600 focus:border-purple-600"
                    id="title" name="title" placeholder="Enter your title" type="text"  />
            </div>
            <div>
                <label class="block text-xs font-normal text-gray-700 mb-1" for="description">Description</label>
                <textarea
                    class="w-full border border-gray-200 rounded-md text-xs text-gray-500 placeholder-gray-300 px-3 py-2 resize-none focus:outline-none focus:ring-1 focus:ring-purple-600 focus:border-purple-600"
                    id="description" name="description" placeholder="• • • • • • •" rows="3" ></textarea>
            </div>
            <div>
                <label class="block text-xs font-normal text-gray-700 mb-1" for="featured-image">Featured Image</label>
                <label
                    class="w-full border border-gray-200 rounded-md h-14 flex flex-col justify-center items-center cursor-pointer text-gray-400 text-xs hover:text-purple-600 transition"
                    for="featured-image">
                    <i class="fas fa-cloud-upload-alt text-base mb-1"></i>
                    <span>
                        <span class="text-purple-600">Upload a photo</span> or paste URL
                    </span>
                    <input class="hidden" id="featured-image" name="featured-image" type="file"  />
                </label>
            </div>
            <button
                class="w-full bg-purple-600 text-white text-xs font-normal py-2 rounded-md hover:bg-purple-700 transition"
                type="submit">Submit</button>
        </form>
    </main>
</body>

</html>