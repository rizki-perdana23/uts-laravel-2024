<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('produk', function () {
    $kode = ['BRG001', 'BRG002', 'BRG003', 'BRG004', 'BRG005'];
    $nama = ['Pena', 'Buku Tulis', 'Penggaris', 'Pensil', 'Penghapus'];
    $jumlah = count($kode);
    return view('produk', compact('kode', 'jumlah', 'nama'));
});
