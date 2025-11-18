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
  <header class="bg-[#c19a6b] border-b-4 border-[#836c5a] shadow">
    <div class="max-w-[1100px] mx-auto px-4 py-3 flex items-center justify-between flex-wrap">
      <a href="/index.php" class="flex items-center text-white text-2xl baloo font-semibold">
        <img src="logo/favicon.png" class="h-10 mr-3 rounded-xl" />
        MindHug
      </a>

      <nav>
        <ul class="flex gap-6 text-white">
          <li><a class="hover:text-[#836c5a] transition" href="/home">Home</a></li>
          <li><a class="hover:text-[#836c5a] transition" href="/about">About</a></li>
          <li><a class="hover:text-[#836c5a] transition" href="/curhat">Curhat</a></li>
          <li><a class="hover:text-[#836c5a] transition" href="/shop">Shop</a></li>
        </ul>
      </nav>
    </div>
  </header>

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

  <footer class="bg-[#ece2d0] text-[#6b4c3b] border-t-2 border-[#c19a6b] py-10">
    <div class="max-w-[1100px] mx-auto px-4 flex flex-wrap gap-10 justify-between">
      <div>
        <img src="logo/favicon.png" class="w-12 mb-2 rounded-xl" />
        <h2 class="baloo text-xl text-[#a47551]">MindHug</h2>
        <p class="italic text-sm text-[#5d4037] mt-1">Gak harus ngobrol, kadang cukup peluk yang lembut 💛</p>
      </div>

      <div>
        <h4 class="text-[#5d4037] text-lg mb-2">Explore</h4>
        <ul class="space-y-1">
          <li><a href="/shop.php" class="hover:text-[#a47551]">Shop</a></li>
          <li><a href="/vent.php" class="hover:text-[#a47551]">Vent Zone</a></li>
          <li><a href="/stress-test.php" class="hover:text-[#a47551]">Stress Test</a></li>
          <li><a href="/affirmations.php" class="hover:text-[#a47551]">Affirmations</a></li>
        </ul>
      </div>
      <div>
        <h4 class="text-[#5d4037] text-lg mb-2">Connect</h4>
        <p class="text-sm mb-2">Follow us on our cozy corner of the internet ✨</p>
        <ul class="space-y-1">
          <li><a href="#" class="hover:text-[#a47551]">Instagram</a></li>
          <li><a href="#" class="hover:text-[#a47551]">Twitter</a></li>
          <li><a href="#" class="hover:text-[#a47551]">Email</a></li>
        </ul>
      </div>
    </div>
    <div class="text-center text-sm text-[#8b6c5c] mt-10">
      <p>&copy; 2025 MindHug. Created with 💖 for your mental peace.</p>
    </div>
  </footer>
</body>
</html>