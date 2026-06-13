<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\KategoriArtikel;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $kategoriId = $request->get('kategori');

        $query = Artikel::with('penulis', 'kategori')
            ->orderBy('id', 'desc');

        if ($kategoriId) {
            $query->where('id_kategori', $kategoriId);
        }

        $artikel = $query->take(5)->get();

        $semuaKategori = KategoriArtikel::withCount('artikel')->get();
        $totalArtikel  = Artikel::count();

        return view('blog.index', compact('artikel', 'semuaKategori', 'kategoriId', 'totalArtikel'));
    }

    public function detail($id)
    {
        $artikel = Artikel::with('penulis', 'kategori')->findOrFail($id);

        $artikelTerkait = Artikel::with('penulis', 'kategori')
            ->where('id_kategori', $artikel->id_kategori)
            ->where('id', '!=', $id)
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();

        return view('blog.detail', compact('artikel', 'artikelTerkait'));
    }
}