<?php
require_once __DIR__ . '/core/LH/Database.php';
require_once __DIR__ . '/core/LH/Models/Blog.php';
use LH\Models\Blog;

$blog = new Blog();

$postsPerPage = 8;
if (file_exists(__DIR__ . '/admin/posts_per_page.txt')) {
    $postsPerPage = (int) file_get_contents(__DIR__ . '/admin/posts_per_page.txt');
}

$totalPosts = $blog->countPosts();
$totalPages = ceil($totalPosts / $postsPerPage);
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($currentPage - 1) * $postsPerPage;
$posts = $blog->getAllPosts($postsPerPage, $offset);
?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Blog
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
 <body class="bg-white text-slate-900">
    <?php include 'header.php'; ?>
    <main class="max-w-7xl mx-auto px-6 py-10">
        <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-8 gap-y-10">
            <?php foreach ($posts as $post): ?>
            <article class="max-w-xs">
                <img src="uploads/<?= htmlspecialchars($post['image']) ?>" alt="<?= htmlspecialchars($post['title']) ?>" class="rounded-lg w-full object-cover aspect-[16/10]" />
                <h3 class="mt-3 font-semibold text-slate-900 text-sm leading-tight hover:text-purple-700 cursor-pointer"></h3>
                <a href="blog.php?id=<?= $post['id'] ?>" class="mt-2 inline-block text-xs text-purple-600 font-semibold hover:underline">
                    <?= htmlspecialchars($post['title']) ?>
                    <i class="fas fa-arrow-up ml-1 text-xs rotate-45">
                    </i>
                </a>
                </h3>
                <p class="mt-1 text-xs text-slate-500 leading-snug">
                <?= htmlspecialchars(mb_strimwidth(strip_tags($post['description']), 0, 100, '...')) ?>
                </p>
                
            </article>
            <?php endforeach; ?>
        </section>

        <?php if ($totalPages > 1): ?>
        <nav aria-label="Pagination" class="mt-12 flex justify-center items-center space-x-2 text-xs text-slate-700 select-none">
        <?php if ($currentPage > 1): ?>
            <a href="?page=<?= $currentPage - 1 ?>" class="px-3 py-1 rounded border border-slate-300 hover:bg-slate-100">&laquo; Previous</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="?page=<?= $i ?>"
            class="px-2 py-1 rounded border border-slate-300 <?= $i == $currentPage ? 'bg-slate-100 font-semibold' : 'hover:bg-slate-100' ?>">
            <?= $i ?>
            </a>
        <?php endfor; ?>

        <?php if ($currentPage < $totalPages): ?>
            <a href="?page=<?= $currentPage + 1 ?>" class="px-3 py-1 rounded border border-slate-300 hover:bg-slate-100">Next &raquo;</a>
        <?php endif; ?>
        </nav>
    <?php endif; ?>
    </main>

 </body>
</html>