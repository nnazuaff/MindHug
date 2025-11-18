<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MindHug</title>
  <link rel="icon" href="logo/favicon.png" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2&family=Poppins:wght@400;600&display=swap"
    rel="stylesheet">
  <style>

    body::-webkit-scrollbar {
      display: none;
    }
    body {
      font-family: "Poppins", sans-serif;
    }

    .baloo {
      font-family: "Baloo 2", cursive
    }

    
  </style>
</head>

<body class="bg-[#fffafc]">
<x-header></x-header>

  <main class="text-center py-16 px-4 bg-linear-to-b from-[#fff6f9] to-white text-[#393737]">
    <section class="hero max-w-[1100px] mx-auto">
      <h1 class="text-3xl font-bold text-[#c19a6b] mb-3">Selamat datang di MindHug</h1>
      <p class="italic text-[#555] text-lg mb-8" id="motivationalQuote"> “You are stronger than yesterday.” </p>
    </section>
    <section class="why-section max-w-[1100px] mx-auto mt-10">
      <h2 class="text-2xl font-semibold text-[#c19a6b] mb-4">Kenapa MindHug?</h2>
      <p class="text-[#555]">
        Terkadang, Kamu tidak butuh nasihat. Kamu hanya butuh pelukan virtual, squishy lucu, atau tempat yang tenang
        untuk mencurahkan isi hati. MindHug adalah ruang dukungan emosionalmu yang ramah. Bebas penilaian. Ramah
        dompet. Selalu ada.
      </p>
    </section>
  </main>

<x-footer></x-footer>
</body>
</html>