<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog Kami')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', sans-serif; }

        .navbar-blog {
            background-color: #2C3E50;
            padding: 14px 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .navbar-brand-title { font-size: 17px; font-weight: 700; color: #fff; margin: 0; }
        .navbar-brand-sub   { font-size: 11px; color: #aaa; margin: 0; }
        .nav-link-pub       { color: #ccc; font-size: 13px; text-decoration: none; margin-left: 24px; }
        .nav-link-pub:hover { color: #fff; }

        .category-badge {
            background-color: #e8f5e9; color: #2e7d32;
            font-size: 11px; padding: 3px 12px;
            border-radius: 20px; font-weight: 600;
            display: inline-block;
        }
        .article-card {
            background: #fff; border-radius: 10px;
            overflow: hidden; margin-bottom: 28px;
            border: 1px solid #f0f0f0;
            box-shadow: 0 1px 4px rgba(0,0,0,.04);
        }
        .article-img { width: 100%; height: 240px; object-fit: cover; }
        .author-avatar {
            width: 28px; height: 28px; border-radius: 50%;
            background-color: #4CAF50; color: #fff;
            font-size: 12px; font-weight: 700;
            display: inline-flex; align-items: center; justify-content: center;
        }
        .btn-read-more {
            background-color: #4CAF50; color: #fff;
            font-size: 12px; padding: 7px 18px;
            border-radius: 20px; text-decoration: none;
            display: inline-block;
        }
        .btn-read-more:hover { background-color: #388E3C; color: #fff; }

        .sidebar-card {
            background: #fff; border-radius: 10px;
            padding: 20px; border: 1px solid #f0f0f0;
            box-shadow: 0 1px 4px rgba(0,0,0,.04);
        }
        .sidebar-title { font-size: 14px; font-weight: 700; color: #212529; margin-bottom: 14px; }
        .cat-item {
            display: flex; align-items: center;
            justify-content: space-between;
            padding: 8px 10px; border-radius: 6px;
            font-size: 13px; color: #555;
            text-decoration: none; margin-bottom: 4px;
        }
        .cat-item:hover { background-color: #f4f4f9; color: #333; }
        .cat-item.active { background-color: #e8f5e9; color: #2e7d32; font-weight: 600; }
        .cat-count {
            background-color: #f0f0f0; color: #666;
            font-size: 11px; padding: 1px 8px; border-radius: 10px;
        }
        .cat-item.active .cat-count { background-color: #4CAF50; color: #fff; }

        .footer-blog {
            background-color: #2C3E50; color: #aaa;
            font-size: 12px; padding: 20px; text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <div class="navbar-blog">
        <div>
            <p class="navbar-brand-title">Blog Kami</p>
            <p class="navbar-brand-sub">Artikel terbaru seputar teknologi dan pemrograman</p>
        </div>
        <div>
            <a href="{{ route('blog.index') }}" class="nav-link-pub">Beranda</a>
            <a href="{{ route('blog.index') }}" class="nav-link-pub">Artikel</a>
            <a href="{{ route('blog.index') }}" class="nav-link-pub">Kategori</a>
            <a href="#" class="nav-link-pub">Tentang</a>
        </div>
    </div>

    <div class="container py-4">
        @yield('content')
    </div>

    <footer class="footer-blog">
        © 2026 Blog Kami. Seluruh hak cipta dilindungi.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>