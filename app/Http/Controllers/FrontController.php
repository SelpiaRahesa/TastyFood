<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class FrontController extends Controller
{
    public function tentang() {
        return view('tentang');
    }
    public function berita() {
        return view('berita');
    }
    public function galery() {
        return view('galery');
    }
    public function kontak() {
        return view('kontak');
    }
public function index()
{
    $berita = Berita::orderBy('id', 'asc')->paginate(8); // 8 berita per halaman
    return view('berita', compact('berita'));
}
public function show($id){
    $berita = Berita::findOrFail($id);
    return view('detailBerita',compact('berita'));
}
}

