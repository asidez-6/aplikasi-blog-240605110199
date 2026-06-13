@extends('layouts.public')

@section('title', $artikel->judul . ' - Blog Kami')

@section('content')
<div class="row">

    {{-- Konten Artikel --}}
    <div class="col-md-8">

        {{-- Breadcrumb --}}
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb" style="font-size: 13px; background: none; padding: 0;">
                <li class="breadcrumb-item">
                    <a href="{{ route('blog.index') }}" style="color: #4CAF50; text-decoration: none;">Beranda</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('blog.index', ['kategori' => $artikel->id_kategori]) }}"
                       style="color: #4CAF50; text-decoration: none;">
                        {{ $artikel->kategori->nama_kategori }}
                    </a>
                </li>
                <li class="breadcrumb-item active" style="color: #666;">
                    {{ \Illuminate\Support\Str::limit($artikel->judul, 35) }}
                </li>
            </ol>
        </nav>

        <div style="background: #fff; border-radius: 10px; overflow: hidden;
                    border: 1px solid #f0f0f0; box-shadow: 0 1px 4px rgba(0,0,0,.04);">
            <img src="{{ asset('storage/gambar/' . $artikel->gambar) }}"
                 alt="{{ $artikel->judul }}"
                 class="article-img">
            <div class="p-4">
                <span class="category-badge">{{ $artikel->kategori->nama_kategori }}</span>
                <h1 style="font-size: 22px; font-weight: 700; color: #212529; margin: 12px 0 12px;">
                    {{ $artikel->judul }}
                </h1>

                <div class="d-flex align-items-center gap-2 mb-4">
                    <span class="author-avatar">
                        {{ strtoupper(substr($artikel->penulis->nama_depan, 0, 1)) }}
                    </span>
                    <div>
                        <div style="font-size: 13px; font-weight: 600; color: #212529;">
                            {{ $artikel->penulis->nama_depan }} {{ $artikel->penulis->nama_belakang }}
                        </div>
                        <div style="font-size: 11px; color: #999;">{{ $artikel->hari_tanggal }}</div>
                    </div>
                </div>

                <div style="font-size: 14px; color: #333; line-height: 1.9;">
                    {!! nl2br(e($artikel->isi)) !!}
                </div>

                <div class="mt-4 pt-3" style="border-top: 1px solid #f0f0f0;">
                    <a href="{{ route('blog.index') }}"
                       style="font-size: 13px; color: #4CAF50; text-decoration: none;">
                        ← Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>

    </div>

    {{-- Sidebar Artikel Terkait --}}
    <div class="col-md-4">
        <div class="sidebar-card">
            <div class="sidebar-title">Artikel Terkait</div>

            @forelse($artikelTerkait as $terkait)
            <a href="{{ route('blog.detail', $terkait->id) }}"
               style="text-decoration: none; color: inherit;">
                <div class="d-flex gap-2 mb-3 pb-3" style="border-bottom: 1px solid #f5f5f5;">
                    <img src="{{ asset('storage/gambar/' . $terkait->gambar) }}"
                         alt="{{ $terkait->judul }}"
                         style="width: 56px; height: 48px; object-fit: cover;
                                border-radius: 6px; flex-shrink: 0;">
                    <div>
                        <div style="font-size: 12px; font-weight: 600; color: #212529; line-height: 1.4;">
                            {{ \Illuminate\Support\Str::limit($terkait->judul, 50) }}
                        </div>
                        <div style="font-size: 11px; color: #999; margin-top: 4px;">
                            {{ $terkait->hari_tanggal }}
                        </div>
                    </div>
                </div>
            </a>
            @empty
            <p style="font-size: 13px; color: #999; font-style: italic;">
                Tidak ada artikel terkait.
            </p>
            @endforelse
        </div>
    </div>

</div>
@endsection