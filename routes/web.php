<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/kontak-kami', fn() => view('kontak-kami'));
Route::get('/kosmetik', fn() => view('kosmetik'));
Route::get('/materi-fkhp-2025', fn() => view('materi-fkhp-2025'));
Route::get('/obat-tradisional', fn() => view('obat-tradisional'));
Route::get('/obat', fn() => view('obat'));
Route::get('/pangan', fn() => view('pangan'));
Route::get('/suplamen-kesehatan', fn() => view('suplamen-kesehatan'));
Route::get('/single', fn() => view('single'));