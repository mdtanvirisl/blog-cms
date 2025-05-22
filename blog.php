<?php
// blog.php
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
   <!-- Back link -->
   <div class="flex items-center space-x-2 text-xs text-[#6B7280] mb-4 cursor-pointer select-none">
    <i class="fas fa-arrow-left">
    </i>
    <span>
     Back to blog list
    </span>
   </div>
   <!-- Hero Image -->
   <img alt="Futuristic image of a person with digital interface overlays representing AI in website design" class="w-full rounded-md mb-6 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/ce5d11e8-5a1b-443c-27f0-96da0988674b.jpg" width="900"/>
   <!-- Title -->
   <h1 class="text-base font-normal text-[#111827] mb-1 leading-tight">
    How AI Is Transforming Website Design And User Experience (UX)
   </h1>
   <!-- Author and date -->
   <p class="text-[9px] text-[#6B7280] mb-6 font-normal">
    Written by John doe | May 14, 2025
   </p>
   <!-- Article content -->
   <article class="prose prose-sm max-w-none text-[#374151]">
    <p>
     Artificial Intelligence (AI) is rapidly transforming how websites are
        designed. Today, businesses rely on AI in websites and UX design to
        precisely target users, understand their behavior, and boost
        engagement. AI in UX is the norm today to come up with website designs
        that precisely target a specific audience.
    </p>
   </article>
   <!-- Footer -->
    <?php include 'footer.php'; ?>
  </div>
 </body>
</html>
