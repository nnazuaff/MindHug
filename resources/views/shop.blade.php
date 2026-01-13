<x-layout :title="$title">
    <main class="pt-0">
        <section class="relative overflow-hidden">
            <div class="absolute inset-0 bg-linear-to-b from-[#f5ebe1] via-[#fffaf6] to-white"></div>
            <div class="relative max-w-[1100px] mx-auto px-4 py-10 md:py-14">
                <div class="reveal flex flex-col md:flex-row md:items-end md:justify-between gap-4">
                    <div>
                        <span
                            class="inline-block text-xs tracking-widest uppercase text-[#836c5a]/80 bg-[#c19a6b]/10 px-3 py-1 rounded-full mb-4">MindHug
                            Shop</span>
                        <h1 class="text-2xl md:text-4xl font-semibold text-[#1f1f1f]">Produk self-care untuk hari yang
                            berat</h1>
                        <p class="mt-3 text-[#4b4b4b] max-w-2xl">Ini masih prototype. Produk dibuat random tapi jelas:
                            ada nama,
                            kategori, harga, stok, dan deskripsi singkat.</p>
                    </div>

                    <div class="flex gap-3">
                        @if (session('auth_user'))
                            <div class="text-sm text-[#5b5b5b]">
                                <div class="font-medium text-[#2b2b2b]">Hai, {{ session('auth_user.username') }}</div>
                                <div class="text-xs">Kamu sudah login (demo)</div>
                            </div>
                        @else
                            <a href="/login"
                                class="inline-flex items-center justify-center rounded-lg bg-[#a47551] text-white px-4 py-2 shadow-sm hover:bg-[#8f6243] transition focus:outline-none focus:ring-2 focus:ring-[#a47551]/40">Login
                                untuk
                                checkout</a>
                        @endif
                    </div>
                </div>

                @if (session('success'))
                    <div
                        class="reveal mt-6 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="reveal mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @php
                        $items = $products ?? [];
                        $badgeStyles = [
                            'Best Seller' => 'bg-[#a47551]/15 text-[#6b3f27] border-[#a47551]/20',
                            'New' => 'bg-blue-50 text-blue-700 border-blue-200',
                            'Limited' => 'bg-amber-50 text-amber-800 border-amber-200',
                            'Restock' => 'bg-emerald-50 text-emerald-800 border-emerald-200',
                            'Value' => 'bg-violet-50 text-violet-800 border-violet-200',
                            'Bundle' => 'bg-rose-50 text-rose-800 border-rose-200',
                        ];
                    @endphp

                    @foreach ($items as $p)
                        @php
                            $badge = $p['badge'] ?? null;
                            $badgeClass =
                                $badge && isset($badgeStyles[$badge])
                                    ? $badgeStyles[$badge]
                                    : 'bg-[#c19a6b]/10 text-[#6a5a4f] border-[#c19a6b]/20';
                            $price = 'Rp ' . number_format((int) ($p['price'] ?? 0), 0, ',', '.');
                            $stock = (int) ($p['stock'] ?? 0);
                            $stockLabel = $stock > 0 ? 'Stok: ' . $stock : 'Habis';
                        @endphp

                        <article
                            class="rounded-3xl border border-[#c19a6b]/25 bg-white/85 backdrop-blur p-6 hover:shadow-md hover:-translate-y-0.5 transition">
                            <div class="flex items-start justify-between gap-3">
                                <div>
                                    <div class="text-xs uppercase tracking-widest text-[#6a5a4f]">
                                        {{ $p['category'] ?? 'Produk' }}</div>
                                    <h3 class="mt-2 text-lg font-semibold text-[#1f1f1f]">{{ $p['name'] ?? 'Item' }}
                                    </h3>
                                </div>
                                @if ($badge)
                                    <span
                                        class="shrink-0 inline-flex items-center rounded-full border px-3 py-1 text-xs font-medium {{ $badgeClass }}">
                                        {{ $badge }}
                                    </span>
                                @endif
                            </div>

                            <p class="mt-3 text-sm text-[#595959]">{{ $p['desc'] ?? 'Deskripsi singkat produk.' }}</p>

                            <div class="mt-5 flex items-center justify-between gap-4">
                                <div>
                                    <div class="text-lg font-semibold text-[#a47551]">{{ $price }}</div>
                                    <div class="text-xs text-[#6a5a4f]">{{ $stockLabel }}</div>
                                </div>

                                @if ($stock <= 0)
                                    <button disabled
                                        class="inline-flex items-center justify-center rounded-xl border border-[#c19a6b]/30 bg-[#f7f2ed] text-[#7a6a60] px-4 py-2 text-sm cursor-not-allowed">
                                        Habis
                                    </button>
                                @else
                                    @if (session('auth_user'))
                                        <button
                                            class="inline-flex items-center justify-center rounded-xl bg-[#a47551] text-white px-4 py-2 text-sm shadow-sm hover:bg-[#8f6243] active:scale-[0.99] transition focus:outline-none focus:ring-2 focus:ring-[#a47551]/40">
                                            Beli (Prototype)
                                        </button>
                                    @else
                                        <a href="/login"
                                            class="inline-flex items-center justify-center rounded-xl border border-[#a47551]/40 text-[#2b2b2b] px-4 py-2 text-sm hover:border-[#a47551] hover:bg-[#a47551]/10 transition focus:outline-none focus:ring-2 focus:ring-[#a47551]/20">
                                            Login untuk beli
                                        </a>
                                    @endif
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="reveal mt-10 rounded-3xl border border-[#c19a6b]/25 bg-white/70 backdrop-blur p-6">
                    <h2 class="text-lg font-semibold text-[#1f1f1f]">Catatan Prototype</h2>
                    <p class="mt-2 text-sm text-[#595959]">Tombol “Beli” belum memproses pembayaran / database. Kalau
                        kamu mau,
                        next step kita bisa bikin keranjang (session) dan halaman checkout sederhana.</p>
                </div>
            </div>
        </section>
    </main>
</x-layout>
