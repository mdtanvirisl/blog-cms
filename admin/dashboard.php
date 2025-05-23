<?php
require_once __DIR__ . '/../core/LH/Database.php';
require_once __DIR__ . '/../core/LH/Models/Blog.php';

use LH\Models\Blog;

$blog = new Blog();

$postsPerPage = 8;
$totalPosts = $blog->countPosts();
$totalPages = ceil($totalPosts / $postsPerPage);
$currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$offset = ($currentPage - 1) * $postsPerPage;
$posts = $blog->getAllPosts($postsPerPage, $offset);
?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Manrope', sans-serif;
        }

        #delete-toggle:checked~div {
            opacity: 1;
            pointer-events: auto;
        }
    </style>
</head>

<body class="bg-white text-gray-900 min-h-screen flex flex-col">
    <?php include __DIR__ . '/../header.php'; ?>
    <main class="flex-grow max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex items-center space-x-2 text-sm text-gray-700 mb-6 cursor-pointer select-none">
            <a href="../index.php">
                <i class="fas fa-arrow-left"></i>
                <span>Back to blog list</span>
            </a>
        </div>
        <div class="flex justify-end space-x-2 mb-6">
            <a href="create.php" aria-label="Create new post"
                class="bg-purple-600 text-white text-sm font-medium rounded-md px-4 py-2 hover:bg-purple-700 transition sm:flex hidden"
                role="button">
                + Create new post
            </a>
            <a href="create.php" aria-label="Create new post"
                class="bg-purple-600 text-white text-sm font-medium rounded-md p-2 hover:bg-purple-700 transition flex sm:hidden"
                role="button">
                <i class="fas fa-plus"></i>
            </a>
            <a href="settings.php" aria-label="Settings"
                class="border border-gray-300 text-gray-700 text-sm font-normal rounded-md px-3 py-2 hover:bg-gray-100 transition flex items-center space-x-1 sm:flex hidden"
                type="button">
                <i class="fas fa-cog"></i>
                <span>
                    Settings
                </span>
            </a>
            <a href="settings.php" aria-label="Settings"
                class="border border-gray-300 text-gray-700 text-sm font-normal rounded-md p-2 hover:bg-gray-100 transition flex items-center justify-center sm:hidden"
                type="button">
                <i class="fas fa-cog"></i>
            </a>
        </div>
        <h1 class="text-gray-900 font-semibold text-lg mb-6">Published Blog List</h1>
        <div class="overflow-x-auto rounded-md border border-gray-100">
            <table class="min-w-full divide-y divide-gray-100">
                <thead class="bg-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-purple-600 text-sm font-medium select-none" scope="col">
                            Title</th>
                        <th class="px-6 py-3 text-right text-purple-600 text-sm font-medium select-none" scope="col">
                            Edit</th>
                        <th class="px-6 py-3 text-right text-purple-600 text-sm font-medium select-none" scope="col">
                            Delete</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100 text-gray-900 text-sm">
                    <?php foreach ($posts as $post): ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap"><?= htmlspecialchars($post['title']) ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <button aria-label="Edit <?= htmlspecialchars($post['title']) ?>"
                                    class="text-gray-600 hover:text-gray-900 edit-btn"
                                    data-title="<?= htmlspecialchars($post['title']) ?>"
                                    data-description="<?= htmlspecialchars($post['description']) ?>"
                                    data-image="<?= htmlspecialchars($post['image']) ?>">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <input type="checkbox" id="delete-toggle" class="hidden" />
                                <label for="delete-toggle" aria-label="Delete <?= htmlspecialchars($post['title']) ?>"
                                    class="text-red-600 hover:text-red-700">
                                    <i class="fas fa-trash-alt"></i>
                                </label>
                                <div
                                    class="fixed inset-0 bg-black bg-opacity-30 flex items-center justify-center z-50 opacity-0 pointer-events-none transition-opacity duration-200">
                                    <label for="delete-toggle" class="absolute inset-0 cursor-pointer"
                                        aria-hidden="true"></label>
                                    <div class="bg-white rounded-lg shadow-md px-6 py-4 max-w-xs w-full relative z-10">
                                        <p class="text-sm text-gray-800 mb-4 leading-snug">
                                            Are you sure you want to delete this post?
                                        </p>
                                        <div class="flex space-x-3">
                                            <form action="/core/LH/Controllers/DeletePostController.php" method="POST">
                                            </form>
                                            <input type="hidden" name="id" value="<?= $post['id'] ?>" />
                                            <!-- Cancel button label -->
                                            <label for="delete-toggle"
                                                class="flex-1 text-gray-600 text-sm font-normal py-2 rounded-md border border-gray-300 text-center cursor-pointer hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300">
                                                Cancel
                                            </label>
                                            <!-- Confirm delete button (can be a form submit or just a button here) -->
                                            <button type="button"
                                                class="flex-1 bg-purple-600 text-white text-sm font-normal py-2 rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-400 flex items-center justify-center space-x-2">
                                                <span>Delete</span>
                                            </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <nav aria-label="Pagination"
            class="mt-8 flex justify-center items-center space-x-1 text-gray-700 text-sm select-none">
            <?php if ($currentPage > 1): ?>
                <a href="?page=<?= $currentPage - 1 ?>"
                    class="flex items-center space-x-1 rounded border border-gray-300 px-3 py-1 hover:bg-gray-100 transition">
                    <i class="fas fa-arrow-left"></i>
                    <span>Previous</span>
                </a>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <a href="?page=<?= $i ?>"
                    class="px-3 py-1 rounded <?= $i === $currentPage ? 'text-purple-600 font-medium hover:bg-purple-50 transition' : 'hover:bg-gray-100 transition' ?>">
                    <?= $i ?>
                </a>
            <?php endfor; ?>
            <?php if ($currentPage < $totalPages): ?>
                <a href="?page=<?= $currentPage + 1 ?>"
                    class="flex items-center space-x-1 rounded border border-gray-300 px-3 py-1 hover:bg-gray-100 transition">
                    <span>Next</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            <?php endif; ?>
        </nav>
    </main>

    <!--Edit Modal backdrop -->
    <div class="fixed inset-0 bg-black bg-opacity-30 hidden" id="modalBackdrop" tabindex="-1"></div>
    <!-- Modal -->
    <div aria-labelledby="editPostTitle" aria-modal="true"
        class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white rounded-md shadow-lg w-[320px] p-6 z-20 hidden"
        id="editModal" role="dialog">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-[#5c4a9e] font-semibold text-sm" id="editPostTitle">
                Edit Post
            </h3>
            <button aria-label="Close edit post modal" class="text-gray-400 hover:text-gray-600" id="closeModalBtn"
                type="button">
                <i class="fas fa-times">
                </i>
            </button>
        </div>
        <form id="editForm">
            <label class="block text-[10px] font-normal text-[#3a3a3a] mb-1" for="titleInput">
                Title
            </label>
            <input
                class="w-full rounded border border-[#bfbfbf] text-[11px] text-[#3a3a3a] px-2 py-1 mb-3 focus:outline-none focus:ring-1 focus:ring-[#5c4a9e]"
                id="titleInput" name="title" type="text" value="" />
            <label class="block text-[10px] font-normal text-[#3a3a3a] mb-1" for="descriptionInput">
                Description
            </label>
            <textarea
                class="w-full rounded border border-[#bfbfbf] text-[11px] text-[#3a3a3a] px-2 py-1 mb-3 resize-none focus:outline-none focus:ring-1 focus:ring-[#5c4a9e]"
                id="descriptionInput" name="description" rows="3"></textarea>
            <label class="block text-[10px] font-normal text-[#3a3a3a] mb-1" for="featuredImage">
                Featured Image
            </label>
            <div class="border border-[#bfbfbf] rounded-md overflow-hidden mb-4 relative" style="max-width: 100%;">
                <img alt="Featured image preview" class="w-full h-auto" height="140" id="featuredImage" src=""
                    width="280" />
                <div
                    class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-90 flex justify-between items-center px-2 py-1 border-t border-[#bfbfbf]">
                    <button aria-label="Edit featured image" class="text-[#5c4a9e] hover:text-[#3a3a3a]" type="button">
                        <i class="fas fa-edit">
                        </i>
                    </button>
                    <button aria-label="Delete featured image" class="text-[#b02a2a] hover:text-[#7a1a1a]"
                        type="button">
                        <i class="fas fa-trash-alt">
                        </i>
                    </button>
                </div>
            </div>
            <button class="w-full bg-[#5c4a9e] text-white text-[12px] font-normal rounded-md py-2" type="submit">
                Submit
            </button>
        </form>
    </div>
    </div>

<script src="../assets/JS/edit.js"></script>

</body>

</html>