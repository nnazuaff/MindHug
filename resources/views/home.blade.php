<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MindHug</title>
    <link rel="icon" href="logo/favicon.png" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&family=Poppins:wght@400;500;600;700&display=swap"
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

        /* Soft reveal animation */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(16px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .reveal {
            opacity: 0;
            transform: translateY(16px);
        }

        .reveal.show {
            animation: fadeUp 700ms ease-out forwards;
        }
    </style>
</head>

<body class="bg-[#fffafc] text-[#2b2b2b]">
    <x-header></x-header>

    <main class="pt-0">
        <!-- Hero -->
        <section class="relative overflow-hidden">
            <div class="absolute inset-0 bg-linear-to-b from-[#f5ebe1] via-[#fffaf6] to-white"></div>
            <div class="relative max-w-[1100px] mx-auto px-4 py-14 md:py-20 grid md:grid-cols-2 gap-10 items-center">
                <div class="reveal">
                    <span
                        class="inline-block text-xs tracking-widest uppercase text-[#836c5a]/80 bg-[#c19a6b]/10 px-3 py-1 rounded-full mb-4">Ruang
                        aman untuk hatimu</span>
                    <h1 class="text-3xl md:text-5xl font-semibold leading-tight text-[#1f1f1f]">
                        Peluk Emosi, Tenangkan Hati,<br class="hidden md:block" /> Bersama <span
                            class="text-[#a47551]">MindHug</span>
                    </h1>
                    <p class="mt-4 md:mt-6 text-[#4b4b4b] md:text-lg">
                        Curhat tanpa penilaian, dukungan yang hangat, dan produk self-care yang menenangkan. Satu
                        langkah kecil untuk dirimu hari ini.
                    </p>
                    <div class="mt-8 flex flex-col sm:flex-row gap-3">
                        <a href="/curhat"
                            class="inline-flex items-center justify-center rounded-lg bg-[#a47551] text-white px-5 py-3 shadow-sm hover:bg-[#8f6243] transition focus:outline-none focus:ring-2 focus:ring-[#a47551]/40">
                            Mulai Curhat
                        </a>
                        <a href="/shop"
                            class="inline-flex items-center justify-center rounded-lg border border-[#a47551]/40 text-[#2b2b2b] px-5 py-3 hover:border-[#a47551] hover:bg-[#a47551]/10 transition focus:outline-none focus:ring-2 focus:ring-[#a47551]/20">
                            Jelajahi Shop
                        </a>
                    </div>
                    <p class="italic text-sm text-[#5b5b5b] mt-6" id="motivationalQuote">“You are stronger than
                        yesterday.”</p>
                </div>
                <div class="relative reveal">
                    <div
                        class="w-full h-64 md:h-80 rounded-3xl bg-linear-to-br from-[#a47551]/10 via-[#c19a6b]/10 to-transparent border border-[#c19a6b]/20">
                    </div>
                </div>
            </div>
        </section>

        <!-- Why MindHug / Features -->
        <section class="max-w-[1100px] mx-auto px-4 py-14 md:py-20">
            <div class="text-center reveal">
                <h2 class="text-2xl md:text-3xl font-semibold text-[#1f1f1f]">Kenapa MindHug?</h2>
                <p class="mt-3 text-[#525252] max-w-2xl mx-auto">Terkadang kamu tidak butuh nasihat. Kamu hanya butuh
                    pelukan yang lembut, tempat yang tenang, dan teman yang mau mendengar.</p>
            </div>

            <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    class="reveal rounded-2xl bg-white/80 border border-[#c19a6b]/20 p-6 hover:shadow-md hover:-translate-y-0.5 transition">
                    <div class="text-3xl">🤎</div>
                    <h3 class="mt-3 font-semibold text-[#2b2b2b]">Hangat & Tanpa Penilaian</h3>
                    <p class="mt-2 text-[#595959] text-sm">Curhat bebas, aman, dan diterima. Kami ada untuk
                        mendengarkan—bukan menghakimi.</p>
                </div>
                <div
                    class="reveal rounded-2xl bg-white/80 border border-[#c19a6b]/20 p-6 hover:shadow-md hover:-translate-y-0.5 transition">
                    <div class="text-3xl">🧸</div>
                    <h3 class="mt-3 font-semibold text-[#2b2b2b]">Teman Nyaman</h3>
                    <p class="mt-2 text-[#595959] text-sm">Squishy lucu & produk self-care untuk menenangkan
                        hari-harimu.</p>
                </div>
                <div
                    class="reveal rounded-2xl bg-white/80 border border-[#c19a6b]/20 p-6 hover:shadow-md hover:-translate-y-0.5 transition">
                    <div class="text-3xl">🕊️</div>
                    <h3 class="mt-3 font-semibold text-[#2b2b2b]">Ringan di Hati & Dompet</h3>
                    <p class="mt-2 text-[#595959] text-sm">Solusi yang lembut, aksesibel, dan ramah untuk semua.</p>
                </div>
            </div>
        </section>

        <!-- Gentle CTA -->
        <section class="relative">
            <div class="absolute inset-0 bg-linear-to-t from-[#f5ebe1] to-transparent"></div>
            <div class="relative max-w-[1100px] mx-auto px-4 py-12 md:py-16">
                <div
                    class="reveal rounded-3xl border border-[#c19a6b]/20 bg-white/70 backdrop-blur px-6 py-8 md:px-10 md:py-12 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                    <div>
                        <h3 class="text-xl md:text-2xl font-semibold text-[#1f1f1f]">Ingin curhat sekarang?</h3>
                        <p class="mt-2 text-[#545454]">Ambil jeda, tarik napas, dan izinkan kami menemanimu.</p>
                    </div>
                    <a href="/curhat"
                        class="inline-flex items-center justify-center rounded-lg bg-[#a47551] text-white px-5 py-3 shadow-sm hover:bg-[#8f6243] transition focus:outline-none focus:ring-2 focus:ring-[#a47551]/40">Mulai
                        Curhat</a>
                </div>
            </div>
        </section>
    </main>

    <x-footer></x-footer>

    <script>
        // Reveal on scroll
        (function() {
            const els = document.querySelectorAll('.reveal');
            if (!('IntersectionObserver' in window) || els.length === 0) {
                els.forEach(el => el.classList.add('show'));
                return;
            }
            const io = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                        io.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.15
            });
            els.forEach(el => io.observe(el));
        })();
    </script>

</body>

</html>
