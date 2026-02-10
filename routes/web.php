<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('shop', function () {
    $products = [
        [
            'name' => 'Squishy “Panda Calm”',
            'category' => 'Squishy / Plush',
            'price' => 39000,
            'stock' => 18,
            'badge' => 'Best Seller',
            'desc' => 'Buat diremas pelan saat overthinking. Empuk, wangi ringan, nyaman di tangan.',
        ],
        [
            'name' => 'Lilin Aroma Lavender “Sleep Better”',
            'category' => 'Aromatherapy',
            'price' => 59000,
            'stock' => 12,
            'badge' => 'New',
            'desc' => 'Aroma lavender lembut untuk bantu relaks sebelum tidur (prototype item).',
        ],
        [
            'name' => 'Journal “Self-Check In” (A5)',
            'category' => 'Journaling',
            'price' => 49000,
            'stock' => 25,
            'badge' => 'Limited',
            'desc' => 'Halaman prompt harian: mood, gratitude, dan rencana kecil untuk diri sendiri.',
        ],
        [
            'name' => 'Teh Herbal “Calm Blend” (10 sachet)',
            'category' => 'Tea',
            'price' => 45000,
            'stock' => 30,
            'badge' => 'Restock',
            'desc' => 'Rasa hangat untuk jeda sebentar. Cocok diminum sore/malam hari.',
        ],
        [
            'name' => 'Stress Ball “Cloud Squeeze”',
            'category' => 'Relief Tools',
            'price' => 29000,
            'stock' => 40,
            'badge' => 'Value',
            'desc' => 'Alat kecil untuk grounding: remas 30 detik, tarik napas, ulang 3x.',
        ],
        [
            'name' => 'Paket “Me-Time Starter Kit”',
            'category' => 'Bundle',
            'price' => 129000,
            'stock' => 8,
            'badge' => 'Bundle',
            'desc' => 'Isi: journal mini, teh calm blend, dan stress ball. Cocok buat hadiah.',
        ],
    ];

    return view('shop', [
        'title' => 'Shop',
        'products' => $products,
    ]);
});
Route::get('curhat', function () {
    return view('curhat', ['title' => 'Shop']);
});
Route::get('login', function () {
    if (session()->has('auth_user')) {
        return redirect('/shop');
    }

    return view('login', [
        'title' => 'Login',
        // Prototype credentials (tanpa DB)
        'demoUsername' => 'mindhug',
        'demoPassword' => 'admin123',
    ]);
});

Route::post('login', function (Request $request) {
    $credentials = $request->validate([
        'username' => ['required', 'string'],
        'password' => ['required', 'string'],
    ]);

    $demoUsername = 'mindhug';
    $demoPassword = 'peluk123';

    if ($credentials['username'] !== $demoUsername || $credentials['password'] !== $demoPassword) {
        return back()
            ->withInput($request->only('username'))
            ->with('error', 'Username / password salah. (Prototype)');
    }

    $request->session()->regenerate();
    $request->session()->put('auth_user', [
        'username' => $demoUsername,
        'name' => 'Demo User',
        'logged_in_at' => now()->toDateTimeString(),
    ]);

    return redirect('/shop')->with('success', 'Berhasil login (prototype).');
});

Route::post('logout', function (Request $request) {
    $request->session()->forget('auth_user');
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/')->with('success', 'Kamu sudah logout.');
});
