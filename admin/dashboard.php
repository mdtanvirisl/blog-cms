<?php
// admin dashboard
?>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Dashboard
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
 <body class="bg-white text-gray-900 min-h-screen flex flex-col">
  <?php include __DIR__. '/../header.php'; ?>
  <main class="flex-grow max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">
   <div class="flex items-center space-x-2 text-sm text-gray-700 mb-6 cursor-pointer select-none">
    <a href="../index.php" >
    <i class="fas fa-arrow-left">
    </i>
    <span>
     Back to blog list
    </span>
   </a>
   </div>
   <h1 class="text-gray-900 font-semibold text-lg mb-6">
    Published Blog List
   </h1>
   <div class="overflow-x-auto rounded-md border border-gray-100">
    <table class="min-w-full divide-y divide-gray-100">
     <thead class="bg-white">
      <tr>
       <th class="px-6 py-3 text-left text-purple-600 text-sm font-medium select-none" scope="col">
        Title
       </th>
       <th class="px-6 py-3 text-right text-purple-600 text-sm font-medium select-none" scope="col">
        Edit
       </th>
       <th class="px-6 py-3 text-right text-purple-600 text-sm font-medium select-none" scope="col">
        Delete
       </th>
      </tr>
     </thead>
     <tbody class="bg-white divide-y divide-gray-100 text-gray-900 text-sm">
      <tr>
       <td class="px-6 py-4 whitespace-nowrap">
        Caring is the new marketing
       </td>
       <td class="px-6 py-4 whitespace-nowrap text-right">
        <button aria-label="Edit Caring is the new marketing" class="text-gray-600 hover:text-gray-900">
         <i class="fas fa-edit">
         </i>
        </button>
       </td>
       <td class="px-6 py-4 whitespace-nowrap text-right">
        <button aria-label="Delete Caring is the new marketing" class="text-red-600 hover:text-red-700">
         <i class="fas fa-trash-alt">
         </i>
        </button>
       </td>
      </tr>
      <tr>
       <td class="px-6 py-4 whitespace-nowrap">
        How to optimize images in WordPress for faster loading (complete guide)
       </td>
       <td class="px-6 py-4 whitespace-nowrap text-right">
        <button aria-label="Edit How to optimize images in WordPress for faster loading (complete guide)" class="text-gray-600 hover:text-gray-900">
         <i class="fas fa-edit">
         </i>
        </button>
       </td>
       <td class="px-6 py-4 whitespace-nowrap text-right">
        <button aria-label="Delete How to optimize images in WordPress for faster loading (complete guide)" class="text-red-600 hover:text-red-700">
         <i class="fas fa-trash-alt">
         </i>
        </button>
       </td>
      </tr>
      <tr>
       <td class="px-6 py-4 whitespace-nowrap">
        How to choose the right colors when creating a website?
       </td>
       <td class="px-6 py-4 whitespace-nowrap text-right">
        <button aria-label="Edit How to choose the right colors when creating a website?" class="text-gray-600 hover:text-gray-900">
         <i class="fas fa-edit">
         </i>
        </button>
       </td>
       <td class="px-6 py-4 whitespace-nowrap text-right">
        <button aria-label="Delete How to choose the right colors when creating a website?" class="text-red-600 hover:text-red-700">
         <i class="fas fa-trash-alt">
         </i>
        </button>
       </td>
      </tr>
      <tr>
       <td class="px-6 py-4 whitespace-nowrap">
        How to write content about your photographs
       </td>
       <td class="px-6 py-4 whitespace-nowrap text-right">
        <button aria-label="Edit How to write content about your photographs" class="text-gray-600 hover:text-gray-900">
         <i class="fas fa-edit">
         </i>
        </button>
       </td>
       <td class="px-6 py-4 whitespace-nowrap text-right">
        <button aria-label="Delete How to write content about your photographs" class="text-red-600 hover:text-red-700">
         <i class="fas fa-trash-alt">
         </i>
        </button>
       </td>
      </tr>
      <tr>
       <td class="px-6 py-4 whitespace-nowrap">
        Effective Approaches to Nurturing a Committed Community in Both Online Spaces and Offline Gatherings
       </td>
       <td class="px-6 py-4 whitespace-nowrap text-right">
        <button aria-label="Edit Effective Approaches to Nurturing a Committed Community in Both Online Spaces and Offline Gatherings" class="text-gray-600 hover:text-gray-900">
         <i class="fas fa-edit">
         </i>
        </button>
       </td>
       <td class="px-6 py-4 whitespace-nowrap text-right">
        <button aria-label="Delete Effective Approaches to Nurturing a Committed Community in Both Online Spaces and Offline Gatherings" class="text-red-600 hover:text-red-700">
         <i class="fas fa-trash-alt">
         </i>
        </button>
       </td>
      </tr>
      <tr>
       <td class="px-6 py-4 whitespace-nowrap">
        Start a blog to reach your creative peak
       </td>
       <td class="px-6 py-4 whitespace-nowrap text-right">
        <button aria-label="Edit Start a blog to reach your creative peak" class="text-gray-600 hover:text-gray-900">
         <i class="fas fa-edit">
         </i>
        </button>
       </td>
       <td class="px-6 py-4 whitespace-nowrap text-right">
        <button aria-label="Delete Start a blog to reach your creative peak" class="text-red-600 hover:text-red-700">
         <i class="fas fa-trash-alt">
         </i>
        </button>
       </td>
      </tr>
      <tr>
       <td class="px-6 py-4 whitespace-nowrap">
        How does writing influence your personal brand?
       </td>
       <td class="px-6 py-4 whitespace-nowrap text-right">
        <button aria-label="Edit How does writing influence your personal brand?" class="text-gray-600 hover:text-gray-900">
         <i class="fas fa-edit">
         </i>
        </button>
       </td>
       <td class="px-6 py-4 whitespace-nowrap text-right">
        <button aria-label="Delete How does writing influence your personal brand?" class="text-red-600 hover:text-red-700">
         <i class="fas fa-trash-alt">
         </i>
        </button>
       </td>
      </tr>
      <tr>
       <td class="px-6 py-4 whitespace-nowrap">
        Strategies for Cultivating a Devoted Community Both in the Digital Realm and in Real Life
       </td>
       <td class="px-6 py-4 whitespace-nowrap text-right">
        <button aria-label="Edit Strategies for Cultivating a Devoted Community Both in the Digital Realm and in Real Life" class="text-gray-600 hover:text-gray-900">
         <i class="fas fa-edit">
         </i>
        </button>
       </td>
       <td class="px-6 py-4 whitespace-nowrap text-right">
        <button aria-label="Delete Strategies for Cultivating a Devoted Community Both in the Digital Realm and in Real Life" class="text-red-600 hover:text-red-700">
         <i class="fas fa-trash-alt">
         </i>
        </button>
       </td>
      </tr>
      <tr>
       <td class="px-6 py-4 whitespace-nowrap">
        Building an Engaging Narrative to Enhance Your Brand’s Storytelling
       </td>
       <td class="px-6 py-4 whitespace-nowrap text-right">
        <button aria-label="Edit Building an Engaging Narrative to Enhance Your Brand’s Storytelling" class="text-gray-600 hover:text-gray-900">
         <i class="fas fa-edit">
         </i>
        </button>
       </td>
       <td class="px-6 py-4 whitespace-nowrap text-right">
        <button aria-label="Delete Building an Engaging Narrative to Enhance Your Brand’s Storytelling" class="text-red-600 hover:text-red-700">
         <i class="fas fa-trash-alt">
         </i>
        </button>
       </td>
      </tr>
      <tr>
       <td class="px-6 py-4 whitespace-nowrap">
        Maximizing the Power of Social Media for Brand Awareness and Community Engagement
       </td>
       <td class="px-6 py-4 whitespace-nowrap text-right">
        <button aria-label="Edit Maximizing the Power of Social Media for Brand Awareness and Community Engagement" class="text-gray-600 hover:text-gray-900">
         <i class="fas fa-edit">
         </i>
        </button>
       </td>
       <td class="px-6 py-4 whitespace-nowrap text-right">
        <button aria-label="Delete Maximizing the Power of Social Media for Brand Awareness and Community Engagement" class="text-red-600 hover:text-red-700">
         <i class="fas fa-trash-alt">
         </i>
        </button>
       </td>
      </tr>
     </tbody>
    </table>
   </div>
   <nav aria-label="Pagination" class="mt-8 flex justify-center items-center space-x-1 text-gray-700 text-sm select-none">
    <button class="flex items-center space-x-1 rounded border border-gray-300 px-3 py-1 hover:bg-gray-100 transition" type="button">
     <i class="fas fa-arrow-left">
     </i>
     <span>
      Previous
     </span>
    </button>
    <button class="px-3 py-1 rounded text-purple-600 font-medium hover:bg-purple-50 transition" type="button">
     1
    </button>
    <button class="px-3 py-1 rounded hover:bg-gray-100 transition" type="button">
     2
    </button>
    <span class="px-2 py-1">
     ...
    </span>
    <button class="px-3 py-1 rounded hover:bg-gray-100 transition" type="button">
     9
    </button>
    <button class="px-3 py-1 rounded hover:bg-gray-100 transition" type="button">
     10
    </button>
    <button class="flex items-center space-x-1 rounded border border-gray-300 px-3 py-1 hover:bg-gray-100 transition" type="button">
     <span>
      Next
     </span>
     <i class="fas fa-arrow-right">
     </i>
    </button>
   </nav>
  </main>
  <div class="fixed top-0 right-0 m-6">
  </div>
  <div class="absolute top-24 right-12 flex space-x-2">
   <button class="bg-purple-600 text-white text-sm font-medium rounded-md px-4 py-2 hover:bg-purple-700 transition" type="button">
    + Create new post
   </button>
   <button class="border border-gray-300 text-gray-700 text-sm font-normal rounded-md px-3 py-2 hover:bg-gray-100 transition flex items-center space-x-1" type="button">
    <i class="fas fa-cog">
    </i>
    <span>
     Settings
    </span>
   </button>
  </div>
 </body>
</html>
