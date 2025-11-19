<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
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

<x-header :title="$title"></x-header>

<body class="bg-[#fffafc] text-[#2b2b2b]">
    {{ $slot }}
</body>
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

</html>
