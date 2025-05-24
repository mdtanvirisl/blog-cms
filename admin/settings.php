<?php
// require_once __DIR__ . '/../core/LH/Controllers/SettingsController.php';
?>


<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Blog Admin Panel
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>

<body class="bg-[#F9FAFB] min-h-screen">
    <?php include __DIR__ . '/../header.php'; ?>
    <main class="px-6 py-8 max-w-4xl">
        <a class="inline-flex items-center text-xs font-semibold text-gray-700 mb-4" href="dashboard.php">
            <i class="fas fa-arrow-left mr-2">
            </i>
            Back to dashboard
        </a>
        
        <?php if (isset($_GET['success'])): ?>
            <div class="mb-4 text-green-600">Settings saved successfully!</div>
        <?php elseif (isset($_GET['error'])): ?>
            <div class="mb-4 text-red-600">
                <?php
                if ($_GET['error'] == 1) {
                    echo "Please enter a valid number of posts per page.";
                } elseif ($_GET['error'] == 2) {
                    echo "Error writing to the settings file.";
                }
                ?>
            </div>
        <?php endif; ?>

        <form action="../core/LH/Controllers/SettingsController.php" method="POST" class="flex flex-wrap items-center space-x-4">
            <div class="flex flex-col w-full max-w-[200px]">
                <label class="text-sm font-semibold text-gray-900 block w-full sm:w-auto mb-2 sm:mb-0"
                    for="postsPerPage">
                    Number Of Posts Per Page
                </label>
                <input autocomplete="off"
                    class="border border-gray-300 rounded-md px-3 py-2 text-xs text-gray-500 w-full max-w-[200px]"
                    id="postsPerPage" name="postsPerPage" placeholder="0" type="text" value="" />
            </div>
            <button class="bg-purple-600 text-white text-xs font-medium px-4 py-2 rounded-md self-end" type="submit">
                Save
            </button>
        </form>
    </main>
</body>

</html>