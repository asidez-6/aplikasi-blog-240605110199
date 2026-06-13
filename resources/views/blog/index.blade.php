@extends('layouts.public')

@section('title', 'Blog Kami - Beranda')

@section('content')
<div class="row">

    {{-- Daftar Artikel --}}
    <div class="col-md-8">
        @forelse($artikel as $item)
        <div class="article-card">
            <img src="{{ asset('storage/gambar/' . $item->gambar) }}"
                 alt="{{ $item->judul }}"
                 class="article-img">
            <div class="p-4">
                <span class="category-badge">{{ $item->kategori->nama_kategori }}</span>
                <h2 style="font-size: 18px; font-weight: 700; color: #212529; margin: 10px 0 8px;">
                    {{ $item->judul }}
                </h2>
                <div class="d-flex align-items-center gap-2 mb-2">
                    <span class="author-avatar">
                        {{ strtoupper(substr($item->penulis->nama_depan, 0, 1)) }}
                    </span>
                    <span style="font-size: 12px; color: #666;">
                        {{ $item->penulis->nama_depan }} {{ $item->penulis->nama_belakang }}
                        · {{ $item->hari_tanggal }}
                    </span>
                </div>
                <p style="font-size: 13px; color: #555; line-height: 1.7; margin-bottom: 16px;">
                    {{ \Illuminate\Support\Str::limit(strip_tags($item->isi), 200) }}
                </p>
                <a href="{{ route('blog.detail', $item->id) }}" class="btn-read-more">
                    Baca Selengkapnya →
                </a>
            </div>
        </div>
        @empty
        <div class="text-center py-5" style="color: #999; font-style: italic;">
            Belum ada artikel yang tersedia.
        </div>
        @endforelse
    </div>

    {{-- Sidebar Kategori --}}
    <div class="col-md-4">
        <div class="sidebar-card">
            <div class="sidebar-title">Kategori Artikel</div>

            <a href="{{ route('blog.index') }}"
               class="cat-item {{ !$kategoriId ? 'active' : '' }}">
                <span>Semua Artikel</span>
                <span class="cat-count">{{ $totalArtikel }}</span>
            </a>

            @foreach($semuaKategori as $kat)
            <a href="{{ route('blog.index', ['kategori' => $kat->id]) }}"
               class="cat-item {{ $kategoriId == $kat->id ? 'active' : '' }}">
                <span>{{ $kat->nama_kategori }}</span>
                <span class="cat-count">{{ $kat->artikel_count }}</span>
            </a>
            @endforeach
        </div>
    </div>

</div>
@endsection