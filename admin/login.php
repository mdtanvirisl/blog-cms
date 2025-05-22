<?php
// admin login
?>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Login
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
 <body class="bg-white min-h-screen flex items-center justify-center">
  <main class="w-full max-w-xs" role="main" aria-label="Login form">
   <div class="flex items-center justify-center mb-6">
    <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.9504 17.1979C20.3971 14.5929 24.6597 10.1724 27.1067 4.64682C25.528 2.98913 23.4756 1.80507 21.2654 1.09464L20.0813 0.699951C20.0024 0.857826 19.9234 1.09465 19.9234 1.25252C18.0289 6.62026 14.161 10.9618 8.95118 13.4089C5.32007 15.1455 2.6362 18.303 1.3732 22.092L0.978516 23.276C1.13639 23.355 1.37321 23.4339 1.53108 23.4339C3.03089 23.9865 4.53069 24.6969 5.95156 25.5652C7.92499 22.013 11.0825 19.0134 14.9504 17.1979Z" fill="#7F56D9"/>
        <path d="M37.8423 17.5136C34.9217 21.9341 30.8959 25.4863 25.9228 27.8544C21.897 29.7489 18.8185 33.3011 17.3976 37.5637L17.0029 38.9056C18.5027 40.2476 20.3183 41.2738 22.2917 41.9053L23.4758 42.3C23.5547 42.1421 23.6336 41.9053 23.6336 41.7474C25.5281 36.3797 29.3961 32.0381 34.6059 29.591C38.237 27.8544 40.9998 24.6969 42.1839 20.9079L42.5786 19.7239C40.9209 19.2502 39.3421 18.4609 37.8423 17.5136Z" fill="#7F56D9"/>
        <path d="M13.8453 34.8009C15.8187 30.0647 19.4498 26.1967 24.1071 23.9865C28.3697 21.9341 31.9219 18.7766 34.369 14.9087C32.5534 13.1721 31.0536 11.1986 29.9485 8.83051C27.0278 14.1982 22.4494 18.5398 16.8449 21.2237C13.6085 22.7235 11.0035 25.3284 9.4248 28.4859C11.1614 30.1436 12.5823 32.196 13.6874 34.4852C13.6874 34.4852 13.7663 34.643 13.8453 34.8009Z" fill="#7F56D9"/>
    </svg>    
    <span class="text-[#0B1C3F] text-lg font-normal" id="blog-title">
     BLOG
    </span>
   </div>
   <form class="space-y-4" aria-labelledby="blog-title">
    <div>
     <label class="block text-xs text-[#0B1C3F] mb-1 font-normal" for="username">
      Username
     </label>
     <input aria-required="true" aria-describedby="username-desc" class="w-full border border-gray-200 rounded-md px-3 py-2 text-xs placeholder:text-gray-300 focus:outline-none focus:ring-1 focus:ring-purple-600 focus:border-purple-600" id="username" placeholder="Enter your username" type="text"/>
     <span class="sr-only" id="username-desc">Enter your username</span>
    </div>
    <div>
     <label class="block text-xs text-[#0B1C3F] mb-1 font-normal" for="password">
      Password
     </label>
     <input aria-required="true" class="w-full border border-gray-200 rounded-md px-3 py-2 text-xs placeholder:text-gray-300 focus:outline-none focus:ring-1 focus:ring-purple-600 focus:border-purple-600" id="password" type="password" value="........"/>
    </div>
    <button aria-label="Login to your account" class="w-full bg-purple-600 text-white text-xs rounded-md py-2" type="submit">
     Login
    </button>
   </form>
  </main>
 </body>
</html>