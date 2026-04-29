<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Utama - Tugas PWEB</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: #0f172a;
            color: white;
            min-height: 100vh;
            padding: 40px 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 50px;
        }

        .header h1 {
            font-size: 4rem;
            background: linear-gradient(135deg, #6366f1, #a855f7);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        .header p {
            color: #94a3b8;
            font-size: 1.5rem;
        }

        .section-title {
            font-size: 1.5rem;
            color: #f533ff;
            margin-bottom: 16px;
            padding-left: 10px;
            border-left: 4px solid #f533ff;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 16px;
            margin-bottom: 40px;
        }

        .card {
            background: #1e293b;
            border: 1px solid #334155;
            border-radius: 12px;
            padding: 24px;
            text-decoration: none;
            color: white;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .card:hover {
            background: #6366f1;
            border-color: #6366f1;
            transform: translateY(-4px);
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.3);
        }

        .card .icon {
            font-size: 2rem;
        }

        .card .title {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .card .desc {
            font-size: 0.9rem;
            color: #94a3b8;
        }

        .card:hover .desc {
            color: #e2e8f0;
        }

        .footer {
            text-align: center;
            color: #475569;
            font-size: 1rem;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Tugas PWEB</h1>
        <p>Kumpulan file HTML pertemuan 1–6 | 5026241163</p>
    </div>

    {{-- Folder FE5026241163 --}}
    <p class="section-title">📁 FE5026241163</p>
    <div class="grid">
        <a href="/intro" class="card">
            <span class="icon">🌐</span>
            <span class="title">Intro</span>
            <span class="desc">Perkenalan HTML dasar</span>
        </a>
        <a href="/contoh" class="card">
            <span class="icon">📄</span>
            <span class="title">Contoh</span>
            <span class="desc">Contoh halaman HTML</span>
        </a>
        <a href="/news" class="card">
            <span class="icon">📰</span>
            <span class="title">News</span>
            <span class="desc">Halaman berita</span>
        </a>
        <a href="/news1" class="card">
            <span class="icon">📰</span>
            <span class="title">News 1</span>
            <span class="desc">Halaman berita versi 2</span>
        </a>
        <a href="/pertemuan4" class="card">
            <span class="icon">🎨</span>
            <span class="title">Pertemuan 4</span>
            <span class="desc">Materi pertemuan 4</span>
        </a>
        <a href="/responsive" class="card">
            <span class="icon">📱</span>
            <span class="title">Responsive</span>
            <span class="desc">Layout responsive</span>
        </a>
        <a href="/template" class="card">
            <span class="icon">🗂️</span>
            <span class="title">Template</span>
            <span class="desc">Template HTML</span>
        </a>
    </div>

    {{-- Folder Milawati2004.github.io --}}
    <p class="section-title">📁 Milawati2004.github.io</p>
    <div class="grid">
        <a href="/ind" class="card">
            <span class="icon">🏠</span>
            <span class="title">Index</span>
            <span class="desc">Halaman utama github.io</span>
        </a>
        <a href="/linktree" class="card">
            <span class="icon">🔗</span>
            <span class="title">Linktree</span>
            <span class="desc">Halaman link sosial media</span>
        </a>
        <a href="/pert5" class="card">
            <span class="icon">💻</span>
            <span class="title">Pertemuan 5</span>
            <span class="desc">Materi pertemuan 5</span>
        </a>
    </div>

    <div class="footer">
        <p>Milawati — 5026241163</p>
    </div>

</body>
</html>
