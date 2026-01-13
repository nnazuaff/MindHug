<header class="sticky top-0 z-50 bg-[#c19a6b]/95 backdrop-blur border-b border-[#836c5a]/70 shadow">
    <div class="max-w-[1100px] mx-auto px-4 py-3 flex items-center justify-between">
        <a href="/"
            class="flex items-center gap-2 text-white/95 text-xl md:text-2xl font-semibold tracking-tight select-none hover:text-white transition-colors">
            <img src="logo/favicon.png" alt="MindHug logo" class="h-9 md:h-10 rounded-md" />
            <span class="font-sans">MindHug</span>
        </a>

        <button id="navToggle" aria-label="Toggle navigation" aria-expanded="false"
            class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-white/90 hover:text-white hover:bg-[#836c5a]/30 focus:outline-none focus:ring-2 focus:ring-white/60">
            <span id="iconOpen" aria-hidden="true">
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12" />
                    <line x1="3" y1="6" x2="21" y2="6" />
                    <line x1="3" y1="18" x2="21" y2="18" />
                </svg>
            </span>
            <span id="iconClose" class="hidden" aria-hidden="true">
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18" />
                    <line x1="6" y1="6" x2="18" y2="18" />
                </svg>
            </span>
        </button>

        <nav id="navMenu" class="hidden md:block">
            <div class="md:flex md:items-center md:gap-6 text-white/95">
                <ul class="md:flex md:items-center md:gap-2 text-[15px]">
                    <li class="py-1 md:py-0">
                        <a href="/"
                            class="group inline-flex items-center gap-2 px-3 py-2 rounded-md transition-all duration-200 ease-out hover:text-white hover:bg-white/5 md:border-b-2 md:border-transparent {{ request()->is('/') ? 'text-white font-semibold' : 'text-white/90' }}"
                            @if (request()->is('/')) aria-current="page" @endif>
                            <svg class="h-5 w-5 opacity-90 group-hover:opacity-100" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                aria-hidden="true">
                                <path d="M3 10.5L12 3l9 7.5V20a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1v-9.5Z" />
                            </svg>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="py-1 md:py-0">
                        <a href="/about"
                            class="group inline-flex items-center gap-2 px-3 py-2 rounded-md transition-all duration-200 ease-out hover:text-white hover:bg-white/5 md:border-b-2 md:border-transparent {{ request()->is('about') ? 'text-white font-semibold' : 'text-white/90' }}"
                            @if (request()->is('about')) aria-current="page" @endif>
                            <svg class="h-5 w-5 opacity-90 group-hover:opacity-100" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                aria-hidden="true">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="8" x2="12" y2="8" />
                                <path d="M10.5 12H12v5h1.5" />
                            </svg>
                            <span>About</span>
                        </a>
                    </li>
                    <li class="py-1 md:py-0">
                        <a href="/curhat"
                            class="group inline-flex items-center gap-2 px-3 py-2 rounded-md transition-all duration-200 ease-out hover:text-white hover:bg-white/5 md:border-b-2 md:border-transparent {{ request()->is('curhat') ? 'text-white font-semibold' : 'text-white/90' }}"
                            @if (request()->is('curhat')) aria-current="page" @endif>
                            <svg class="h-5 w-5 opacity-90 group-hover:opacity-100" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                aria-hidden="true">
                                <path
                                    d="M21 15a4 4 0 0 1-4 4H8l-4 3v-3a4 4 0 0 1-4-4V7a4 4 0 0 1 4-4h13a4 4 0 0 1 4 4v8Z" />
                            </svg>
                            <span>Curhat</span>
                        </a>
                    </li>
                    <li class="py-1 md:py-0">
                        <a href="/shop"
                            class="group inline-flex items-center gap-2 px-3 py-2 rounded-md transition-all duration-200 ease-out hover:text-white hover:bg-white/5 md:border-b-2 md:border-transparent {{ request()->is('shop') ? 'text-white font-semibold' : 'text-white/90' }}"
                            @if (request()->is('shop')) aria-current="page" @endif>
                            <svg class="h-5 w-5 opacity-90 group-hover:opacity-100" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M6 2h12l2 6H4l2-6Z" />
                                <path d="M5 8h14l-1 11a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 8Z" />
                            </svg>
                            <span>Shop</span>
                        </a>
                    </li>
                </ul>
                @if (session('auth_user'))
                    <div class="hidden md:flex items-center gap-3">
                        <div class="text-right">
                            <div class="text-sm font-semibold text-white">{{ session('auth_user.username') }}</div>
                            <div class="text-[11px] text-white/80">Logged in (demo)</div>
                        </div>
                        <form method="POST" action="/logout">
                            @csrf
                            <button type="submit"
                                class="inline-flex items-center gap-2 rounded-lg bg-white/10 text-white px-4 py-2 border border-white/20 hover:bg-white/15 active:scale-[0.98] transition transform-gpu focus:outline-none focus:ring-2 focus:ring-white/50">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    aria-hidden="true">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                    <path d="M16 17l5-5-5-5" />
                                    <path d="M21 12H9" />
                                </svg>
                                <span>Logout</span>
                            </button>
                        </form>
                    </div>
                @else
                    <a href="/login"
                        class="hidden md:inline-flex items-center gap-2 rounded-lg bg-[#a47551] text-white px-4 py-2 shadow-sm hover:bg-[#8f6243] active:scale-[0.98] transition transform-gpu focus:outline-none focus:ring-2 focus:ring-white/50">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path
                                d="M21 15a4 4 0 0 1-4 4H8l-4 3v-3a4 4 0 0 1-4-4V7a4 4 0 0 1 4-4h13a4 4 0 0 1 4 4v8Z" />
                        </svg>
                        <span>Login</span>
                    </a>
                @endif
            </div>
        </nav>
    </div>

    <!-- Mobile Navbar -->
    <div id="navMenuMobile"
        class="md:hidden max-h-0 opacity-0 -translate-y-1 overflow-hidden transition-all duration-300 ease-out border-t border-[#836c5a]/40 bg-[#c19a6b]">
        <nav class="max-w-[1100px] mx-auto px-4 py-3">
            <ul class="flex flex-col gap-1 text-white">
                <li>
                    <a class="flex items-center gap-3 rounded-md px-3 py-2 transition-colors hover:bg-[#836c5a]/30 {{ request()->is('/') ? 'bg-[#836c5a]/25' : '' }}"
                        href="/">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M3 10.5L12 3l9 7.5V20a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1v-9.5Z" />
                        </svg>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3 rounded-md px-3 py-2 transition-colors hover:bg-[#836c5a]/30 {{ request()->is('about') ? 'bg-[#836c5a]/25' : '' }}"
                        href="/about">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="12" cy="12" r="10" />
                            <line x1="12" y1="8" x2="12" y2="8" />
                            <path d="M10.5 12H12v5h1.5" />
                        </svg>
                        <span>About</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3 rounded-md px-3 py-2 transition-colors hover:bg-[#836c5a]/30 {{ request()->is('curhat') ? 'bg-[#836c5a]/25' : '' }}"
                        href="/curhat">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path
                                d="M21 15a4 4 0 0 1-4 4H8l-4 3v-3a4 4 0 0 1-4-4V7a4 4 0 0 1 4-4h13a4 4 0 0 1 4 4v8Z" />
                        </svg>
                        <span>Curhat</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3 rounded-md px-3 py-2 transition-colors hover:bg-[#836c5a]/30 {{ request()->is('shop') ? 'bg-[#836c5a]/25' : '' }}"
                        href="/shop">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M6 2h12l2 6H4l2-6Z" />
                            <path d="M5 8h14l-1 11a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 8Z" />
                        </svg>
                        <span>Shop</span>
                    </a>
                </li>
            </ul>
            <div class="pt-3">
                @if (session('auth_user'))
                    <form method="POST" action="/logout" class="space-y-2">
                        @csrf
                        <div class="rounded-lg bg-white/10 border border-white/15 px-4 py-3 text-white">
                            <div class="text-sm font-semibold">{{ session('auth_user.username') }}</div>
                            <div class="text-[11px] text-white/80">Logged in (demo)</div>
                        </div>
                        <button type="submit"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-lg bg-white/10 text-white px-4 py-2 border border-white/20 hover:bg-white/15 active:scale-[0.98] transition transform-gpu focus:outline-none focus:ring-2 focus:ring-white/50">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                <path d="M16 17l5-5-5-5" />
                                <path d="M21 12H9" />
                            </svg>
                            <span>Logout</span>
                        </button>
                    </form>
                @else
                    <a href="/login"
                        class="inline-flex w-full items-center justify-center gap-2 rounded-lg bg-[#a47551] text-white px-4 py-2 shadow-sm hover:bg-[#8f6243] active:scale-[0.98] transition transform-gpu focus:outline-none focus:ring-2 focus:ring-white/50">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path
                                d="M21 15a4 4 0 0 1-4 4H8l-4 3v-3a4 4 0 0 1-4-4V7a4 4 0 0 1 4-4h13a4 4 0 0 1 4 4v8Z" />
                        </svg>
                        <span>Login</span>
                    </a>
                @endif

                <a href="/curhat"
                    class="mt-2 inline-flex w-full items-center justify-center gap-2 rounded-lg bg-[#836c5a]/30 text-white px-4 py-2 hover:bg-[#836c5a]/40 active:scale-[0.98] transition transform-gpu focus:outline-none focus:ring-2 focus:ring-white/50">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M21 15a4 4 0 0 1-4 4H8l-4 3v-3a4 4 0 0 1-4-4V7a4 4 0 0 1 4-4h13a4 4 0 0 1 4 4v8Z" />
                    </svg>
                    <span>Mulai Curhat</span>
                </a>
            </div>
        </nav>
    </div>

    <!-- Mobile Navbar Toggle Script -->
    <script>
        (function() {
            var btn = document.getElementById('navToggle');
            var mobile = document.getElementById('navMenuMobile');
            var iconOpen = document.getElementById('iconOpen');
            var iconClose = document.getElementById('iconClose');
            if (!btn || !mobile) return;
            btn.addEventListener('click', function() {
                var isOpen = mobile.classList.contains('open');
                if (isOpen) {
                    mobile.classList.remove('open');
                    mobile.classList.remove('max-h-[60vh]', 'opacity-100', 'translate-y-0');
                    mobile.classList.add('max-h-0', 'opacity-0', '-translate-y-1');
                } else {
                    mobile.classList.add('open');
                    mobile.classList.remove('max-h-0', 'opacity-0', '-translate-y-1');
                    mobile.classList.add('max-h-[60vh]', 'opacity-100', 'translate-y-0');
                }
                btn.setAttribute('aria-expanded', String(!isOpen));
                if (iconOpen && iconClose) {
                    iconOpen.classList.toggle('hidden');
                    iconClose.classList.toggle('hidden');
                }
            });
            // Close mobile menu on resize to md and above
            window.addEventListener('resize', function() {
                if (window.matchMedia('(min-width: 768px)').matches) {
                    mobile.classList.remove('open');
                    mobile.classList.remove('max-h-[60vh]', 'opacity-100', 'translate-y-0');
                    mobile.classList.add('max-h-0', 'opacity-0', '-translate-y-1');
                    btn.setAttribute('aria-expanded', 'false');
                    if (iconOpen && iconClose) {
                        iconOpen.classList.remove('hidden');
                        iconClose.classList.add('hidden');
                    }
                }
            });
        })();
    </script>
</header>
