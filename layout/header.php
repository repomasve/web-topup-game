<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Netve - Top Up Game & Pulsa</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f3f4f6; /* Tailwind bg-gray-100 */
    }
    .backdrop-blur {
      backdrop-filter: blur(5px); /* Gaussian blur effect */
      background-color: rgba(255, 255, 255, 0.75); /* semi-transparan */
    }
  </style>
</head>
<body class="flex justify-center">
  <!-- Wrapper max-width seperti HP -->
  <div class="w-full max-w-sm min-h-screen bg-white shadow-lg flex flex-col relative">

    <!-- Header Sticky dengan Blur -->
<header class="sticky top-0 z-50 backdrop-blur shadow p-4 flex justify-between items-center">
  <h1 class="text-lg font-bold text-blue-600">Demo Web</h1>
  <a href="login.php" class="text-blue-500">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A4.992 4.992 0 0112 15c1.657 0 3.156.672 4.243 1.757M12 7a4 4 0 110 8 4 4 0 010-8z" />
    </svg>
  </a>
</header>

