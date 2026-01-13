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

<body class="bg-[#fffafc] text-[#2b2b2b]" style="padding-bottom: var(--footer-h, 220px);">
    <x-header :title="$title"></x-header>

    {{ $slot }}

    <x-footer></x-footer>

    <script>
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

    <script>
        (function() {
            function applyFooterSpace() {
                var footer = document.getElementById('siteFooter');
                if (!footer) return;
                var h = Math.ceil(footer.getBoundingClientRect().height || footer.offsetHeight || 0);
                if (h > 0) {
                    document.documentElement.style.setProperty('--footer-h', h + 'px');
                }
            }
            applyFooterSpace();
            window.addEventListener('resize', applyFooterSpace);
        })();
    </script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        softBrown: '#d7c6b8',
                        darkBrown: '#8b6f5c'
                    }
                }
            }
        }
    </script>
</body>

</html>
