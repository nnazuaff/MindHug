<x-layout :title="$title">
    <main class="pt-0">
        <section class="relative overflow-hidden">
            <div class="absolute inset-0 bg-linear-to-b from-[#f5ebe1] via-[#fffaf6] to-white"></div>
            <div class="relative max-w-[1100px] mx-auto px-4 py-12 md:py-16">
                <div class="grid lg:grid-cols-2 gap-8 items-start">
                    <div class="reveal">
                        <span
                            class="inline-block text-xs tracking-widest uppercase text-[#836c5a]/80 bg-[#c19a6b]/10 px-3 py-1 rounded-full mb-4">Prototype</span>
                        <h1 class="text-2xl md:text-4xl font-semibold leading-tight text-[#1f1f1f]">Login ke Warung</h1>
                        <p class="mt-3 text-[#4b4b4b]">Belum pakai database. Login ini hanya untuk demo alur.</p>

                        <div class="mt-6 rounded-2xl border border-[#c19a6b]/25 bg-white/80 backdrop-blur p-5">
                            <p class="text-sm text-[#5b5b5b]">Akun demo:</p>
                            <div class="mt-2 grid sm:grid-cols-2 gap-3">
                                <div class="rounded-xl bg-[#a47551]/10 px-4 py-3 border border-[#a47551]/15">
                                    <div class="text-xs uppercase tracking-widest text-[#6a5a4f]">Username</div>
                                    <div class="mt-1 font-semibold text-[#2b2b2b]">{{ $demoUsername ?? 'mindhug' }}
                                    </div>
                                </div>
                                <div class="rounded-xl bg-[#a47551]/10 px-4 py-3 border border-[#a47551]/15">
                                    <div class="text-xs uppercase tracking-widest text-[#6a5a4f]">Password</div>
                                    <div class="mt-1 font-semibold text-[#2b2b2b]">{{ $demoPassword ?? 'peluk123' }}
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 text-xs text-[#6a5a4f]">Tip: setelah login, kamu akan diarahkan ke Shop.</p>
                        </div>
                    </div>

                    <div class="reveal">
                        <div
                            class="rounded-3xl border border-[#c19a6b]/25 bg-white/85 backdrop-blur p-6 md:p-8 shadow-sm">
                            <h2 class="text-lg font-semibold text-[#1f1f1f]">Masuk</h2>

                            @if (session('success'))
                                <div
                                    class="mt-4 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if (session('error'))
                                <div
                                    class="mt-4 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <form class="mt-6 space-y-4" method="POST" action="/login">
                                @csrf
                                <div>
                                    <label class="block text-sm font-medium text-[#4b4b4b]"
                                        for="username">Username</label>
                                    <input id="username" name="username" type="text" value="{{ old('username') }}"
                                        class="mt-2 w-full rounded-xl border border-[#c19a6b]/35 bg-white px-4 py-3 text-[#1f1f1f] placeholder:text-[#8b7a6f] focus:outline-none focus:ring-2 focus:ring-[#a47551]/30"
                                        placeholder="misal: mindhug" autocomplete="username" />
                                    @error('username')
                                        <p class="mt-2 text-sm text-red-700">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-[#4b4b4b]"
                                        for="password">Password</label>
                                    <input id="password" name="password" type="password"
                                        class="mt-2 w-full rounded-xl border border-[#c19a6b]/35 bg-white px-4 py-3 text-[#1f1f1f] placeholder:text-[#8b7a6f] focus:outline-none focus:ring-2 focus:ring-[#a47551]/30"
                                        placeholder="misal: peluk123" autocomplete="current-password" />
                                    @error('password')
                                        <p class="mt-2 text-sm text-red-700">{{ $message }}</p>
                                    @enderror
                                </div>

                                <button type="submit"
                                    class="w-full inline-flex items-center justify-center rounded-xl bg-[#a47551] text-white px-5 py-3 shadow-sm hover:bg-[#8f6243] active:scale-[0.99] transition focus:outline-none focus:ring-2 focus:ring-[#a47551]/40">
                                    Login
                                </button>

                                <p class="text-center text-sm text-[#6a5a4f]">Belum punya akun? <span
                                        class="font-medium">(Prototype)</span></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-layout>
