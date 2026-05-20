<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWEB — Milawati 5026241163</title>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

        :root {
            --bg: #fa0d88;
            --neon-pink: #ff7ec1;
            --neon-cyan: #00f5ff;
            --neon-yellow: #ffe600;
            --neon-purple: #bf5fff;
            --neon-green: #00ff88;
            --neon-orange: #ff6b2b;
            --text: #fff;
            --muted: rgba(255,255,255,0.55);
        }

        body {
            font-family: 'Space Grotesk', sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: fixed; inset: 0;
            background-image:
                linear-gradient(rgba(0,0,0,0.08) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0,0,0,0.08) 1px, transparent 1px);
            background-size: 60px 60px;
            animation: gridMove 20s linear infinite;
            pointer-events: none; z-index: 0;
        }
        @keyframes gridMove {
            from { background-position: 0 0; }
            to   { background-position: 60px 60px; }
        }

        .blob { position: fixed; border-radius: 50%; filter: blur(100px); pointer-events: none; z-index: 0; }
        .b1 { width: 700px; height: 700px; background: #ff69b4; opacity: 0.35; top: -300px; left: -200px; animation: drift1 12s ease-in-out infinite; }
        .b2 { width: 600px; height: 600px; background: #8b0000; opacity: 0.3; bottom: -200px; right: -150px; animation: drift2 15s ease-in-out infinite; }
        .b3 { width: 400px; height: 400px; background: #ff1493; opacity: 0.2; top: 40%; left: 40%; animation: drift3 18s ease-in-out infinite; }
        @keyframes drift1 { 0%,100%{transform:translate(0,0)} 50%{transform:translate(60px,40px)} }
        @keyframes drift2 { 0%,100%{transform:translate(0,0)} 50%{transform:translate(-50px,30px)} }
        @keyframes drift3 { 0%,100%{transform:translate(-50%,-50%)} 50%{transform:translate(calc(-50% + 40px),calc(-50% - 30px))} }

        .wrapper {
            position: relative; z-index: 1;
            max-width: 1080px;
            margin: 0 auto;
            padding: 60px 24px 80px;
        }

        /* HEADER */
        .header { text-align: center; margin-bottom: 72px; }

        .header-badge {
            display: inline-flex; align-items: center; gap: 8px;
            border: 1px solid rgba(0,0,0,0.25);
            background: rgba(0,0,0,0.25);
            color: #fff;
            padding: 6px 16px; border-radius: 100px;
            font-size: 11px; letter-spacing: 0.15em; text-transform: uppercase;
            margin-bottom: 24px;
        }
        .live-dot {
            width: 6px; height: 6px; border-radius: 50%;
            background: #fff; box-shadow: 0 0 8px #fff;
            animation: blink 1.5s ease infinite;
        }
        @keyframes blink { 0%,100%{opacity:1} 50%{opacity:0.2} }

        .main-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(5rem, 14vw, 11rem);
            line-height: 0.9; letter-spacing: 0.02em;
            color: #fff; display: inline-block;
        }
        .t-pink { color: var(--neon-pink); text-shadow: 0 0 40px rgba(141,3,74,0.6), 0 0 80px rgba(255,45,155,0.3); }
        .t-cyan { color: var(--neon-cyan); text-shadow: 0 0 40px rgba(2,226,234,0.6), 0 0 80px rgba(0,245,255,0.3); }

        .subtitle-row {
            display: flex; align-items: center; justify-content: center;
            gap: 10px; margin-top: 20px; flex-wrap: wrap;
        }
        .pill { padding: 4px 14px; border-radius: 100px; font-size: 12px; font-weight: 600; }
        .pill-pink   { background: rgba(255,45,155,0.15);  color: var(--neon-pink);   border: 1px solid rgba(255,45,155,0.3); }
        .pill-cyan   { background: rgba(0,245,255,0.10);   color: var(--neon-cyan);   border: 1px solid rgba(0,245,255,0.25); }
        .pill-yellow { background: rgba(255,230,0,0.10);   color: var(--neon-yellow); border: 1px solid rgba(255,230,0,0.25); }
        .subtitle-sep { color: var(--muted); }

        .stats-bar {
            display: flex; justify-content: center;
            border: 1px solid rgba(0,0,0,0.25);
            border-radius: 14px; overflow: hidden;
            background: rgba(10,0,20,0.4);
            margin: 36px auto 0; max-width: 440px;
        }
        .stat { flex: 1; text-align: center; padding: 18px 12px; border-right: 1px solid rgba(0,0,0,0.2); }
        .stat:last-child { border-right: none; }
        .stat-num { font-family: 'Bebas Neue', sans-serif; font-size: 2.4rem; line-height: 1; }
        .stat-num.pink   { color: var(--neon-pink);   text-shadow: 0 0 20px rgba(255,45,155,0.5); }
        .stat-num.cyan   { color: var(--neon-cyan);   text-shadow: 0 0 20px rgba(0,245,255,0.5); }
        .stat-num.yellow { color: var(--neon-yellow); text-shadow: 0 0 20px rgba(255,230,0,0.5); }
        .stat-label { font-size: 11px; color: var(--muted); margin-top: 4px; text-transform: uppercase; letter-spacing: 0.08em; }

        /* SECTION */
        .section { margin-bottom: 56px; }
        .section-label { display: flex; align-items: center; gap: 12px; margin-bottom: 20px; }
        .section-line { flex: 1; height: 1px; }
        .section-line.pink-line  { background: linear-gradient(90deg, var(--neon-pink), transparent); }
        .section-line.green-line { background: linear-gradient(90deg, var(--neon-green), transparent); }
        .section-tag {
            font-size: 11px; font-weight: 700;
            letter-spacing: 0.2em; text-transform: uppercase;
            padding: 5px 14px; border-radius: 6px;
        }
        .section-tag.pink  { color: var(--neon-pink);  background: rgba(255,45,155,0.1);  border: 1px solid rgba(255,45,155,0.3); }
        .section-tag.green { color: var(--neon-green); background: rgba(0,255,136,0.08); border: 1px solid rgba(0,255,136,0.25); }
        .folder-name { font-family: 'Bebas Neue', sans-serif; font-size: 1.6rem; letter-spacing: 0.05em; color: #fff; }
        .folder-count {
            margin-left: auto; font-size: 12px; color: rgba(255,255,255,0.6);
            border: 1px solid rgba(0,0,0,0.2); padding: 3px 12px; border-radius: 100px;
            background: rgba(0,0,0,0.15);
        }

        /* GRID & CARD */
        .grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(195px, 1fr)); gap: 14px; }

        .card {
            position: relative; display: flex; flex-direction: column; gap: 10px;
            padding: 22px 18px; border-radius: 14px;
            background: rgba(10,0,20,0.55); border: 1px solid rgba(0,0,0,0.3);
            text-decoration: none; color: var(--text); overflow: hidden;
            transition: transform 0.25s, border-color 0.25s, box-shadow 0.3s;
            animation: fadeUp 0.5s ease both;
        }
        .card::before {
            content: ''; position: absolute; inset: 0;
            opacity: 0; transition: opacity 0.3s; border-radius: 14px;
        }
        .card.c-pink::before   { background: radial-gradient(circle at 50% 0%, rgba(255,45,155,0.18), transparent 70%); }
        .card.c-cyan::before   { background: radial-gradient(circle at 50% 0%, rgba(0,245,255,0.14), transparent 70%); }
        .card.c-yellow::before { background: radial-gradient(circle at 50% 0%, rgba(255,230,0,0.14), transparent 70%); }
        .card.c-purple::before { background: radial-gradient(circle at 50% 0%, rgba(191,95,255,0.16), transparent 70%); }
        .card.c-orange::before { background: radial-gradient(circle at 50% 0%, rgba(255,107,43,0.16), transparent 70%); }
        .card.c-green::before  { background: radial-gradient(circle at 50% 0%, rgba(0,255,136,0.14), transparent 70%); }
        .card:hover { transform: translateY(-5px) scale(1.01); }
        .card:hover::before { opacity: 1; }
        .card.c-pink:hover   { border-color: rgba(255,45,155,0.5);  box-shadow: 0 12px 40px rgba(255,45,155,0.2); }
        .card.c-cyan:hover   { border-color: rgba(0,245,255,0.5);   box-shadow: 0 12px 40px rgba(0,245,255,0.2); }
        .card.c-yellow:hover { border-color: rgba(255,230,0,0.5);   box-shadow: 0 12px 40px rgba(255,230,0,0.2); }
        .card.c-purple:hover { border-color: rgba(191,95,255,0.5);  box-shadow: 0 12px 40px rgba(191,95,255,0.2); }
        .card.c-orange:hover { border-color: rgba(255,107,43,0.5);  box-shadow: 0 12px 40px rgba(255,107,43,0.2); }
        .card.c-green:hover  { border-color: rgba(0,255,136,0.5);   box-shadow: 0 12px 40px rgba(0,255,136,0.2); }

        .card-top { display: flex; align-items: center; justify-content: space-between; position: relative; }
        .card-icon {
            width: 42px; height: 42px; border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 20px; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.3);
        }
        .card-arrow { font-size: 18px; font-weight: 700; transition: transform 0.2s; position: relative; z-index: 1; }
        .card.c-pink   .card-arrow { color: var(--neon-pink); }
        .card.c-cyan   .card-arrow { color: var(--neon-cyan); }
        .card.c-yellow .card-arrow { color: var(--neon-yellow); }
        .card.c-purple .card-arrow { color: var(--neon-purple); }
        .card.c-orange .card-arrow { color: var(--neon-orange); }
        .card.c-green  .card-arrow { color: var(--neon-green); }
        .card:hover .card-arrow { transform: translate(3px, -3px); }

        .card-name { font-weight: 700; font-size: 1.05rem; color: #fff; position: relative; }
        .card-desc { font-size: 0.78rem; color: var(--muted); line-height: 1.5; position: relative; }

        .card-chip {
            align-self: flex-start; font-size: 10px; font-weight: 700;
            letter-spacing: 0.08em; text-transform: uppercase;
            padding: 3px 10px; border-radius: 6px; position: relative;
        }
        .chip-pink   { background: rgba(255,45,155,0.12);  color: var(--neon-pink);   border: 1px solid rgba(255,45,155,0.25); }
        .chip-cyan   { background: rgba(0,245,255,0.08);   color: var(--neon-cyan);   border: 1px solid rgba(0,245,255,0.2); }
        .chip-yellow { background: rgba(255,230,0,0.08);   color: var(--neon-yellow); border: 1px solid rgba(255,230,0,0.2); }
        .chip-purple { background: rgba(191,95,255,0.1);   color: var(--neon-purple); border: 1px solid rgba(191,95,255,0.25); }
        .chip-orange { background: rgba(255,107,43,0.1);   color: var(--neon-orange); border: 1px solid rgba(255,107,43,0.25); }
        .chip-green  { background: rgba(0,255,136,0.07);   color: var(--neon-green);  border: 1px solid rgba(0,255,136,0.2); }

        .divider { display: flex; align-items: center; gap: 16px; margin: 16px 0 52px; }
        .divider-line { flex: 1; height: 1px; background: rgba(0,0,0,0.2); }
        .divider-dot { width: 5px; height: 5px; border-radius: 50%; background: var(--neon-purple); box-shadow: 0 0 10px var(--neon-purple); }

        footer {
            border-top: 1px solid rgba(0,0,0,0.2); padding-top: 30px; margin-top: 20px;
            display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;
        }
        .footer-name {
            font-family: 'Bebas Neue', sans-serif; font-size: 1.6rem;
            background: linear-gradient(90deg, var(--neon-pink), var(--neon-cyan));
            -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
        }
        .footer-sub { font-size: 12px; color: var(--muted); margin-top: 2px; }
        .footer-right { font-size: 12px; color: var(--muted); text-align: right; }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .section:nth-child(1) .card:nth-child(1){animation-delay:.05s}
        .section:nth-child(1) .card:nth-child(2){animation-delay:.10s}
        .section:nth-child(1) .card:nth-child(3){animation-delay:.15s}
        .section:nth-child(1) .card:nth-child(4){animation-delay:.20s}
        .section:nth-child(1) .card:nth-child(5){animation-delay:.25s}
        .section:nth-child(1) .card:nth-child(6){animation-delay:.30s}
        .section:nth-child(1) .card:nth-child(7){animation-delay:.35s}
        .section:nth-child(3) .card:nth-child(1){animation-delay:.40s}
        .section:nth-child(3) .card:nth-child(2){animation-delay:.45s}
        .section:nth-child(3) .card:nth-child(3){animation-delay:.50s}
    </style>
</head>
<body>

<div class="blob b1"></div>
<div class="blob b2"></div>
<div class="blob b3"></div>

<div class="wrapper">

    <!-- HEADER -->
    <div class="header">
        <div class="header-badge">
            <span class="live-dot"></span>
            Pemrograman Web · 2025/2026 · ITS
        </div>
        <div class="main-title">
            <span class="t-pink">TU</span><span class="t-cyan">GAS</span><br>PWEB
        </div>
        <div class="subtitle-row">
            <span class="pill pill-pink">5026241163</span>
            <span class="subtitle-sep">·</span>
            <span class="pill pill-cyan">Milawati</span>
            <span class="subtitle-sep">·</span>
            <span class="pill pill-yellow">Sistem Informasi · ITS</span>
        </div>
        <div class="stats-bar">
            <div class="stat">
                <div class="stat-num pink">10</div>
                <div class="stat-label">Halaman</div>
            </div>
            <div class="stat">
                <div class="stat-num cyan">2</div>
                <div class="stat-label">Folder</div>
            </div>
            <div class="stat">
                <div class="stat-num yellow">6</div>
                <div class="stat-label">Pertemuan</div>
            </div>
        </div>
    </div>

    <!-- FOLDER 1 -->
    <div class="section">
        <div class="section-label">
            <span class="section-tag pink">📁 Folder 1</span>
            <div class="folder-name">FE5026241163</div>
            <span class="folder-count">7 file</span>
            <div class="section-line pink-line"></div>
        </div>
        <div class="grid">
            <a href="/intro" class="card c-cyan">
                <div class="card-top"><div class="card-icon">🌐</div><span class="card-arrow">↗</span></div>
                <div class="card-name">Intro</div>
                <div class="card-desc">Perkenalan struktur HTML dasar</div>
                <span class="card-chip chip-cyan">HTML Dasar</span>
            </a>
            <a href="/contoh" class="card c-pink">
                <div class="card-top"><div class="card-icon">📄</div><span class="card-arrow">↗</span></div>
                <div class="card-name">Contoh</div>
                <div class="card-desc">Contoh elemen & layout HTML</div>
                <span class="card-chip chip-pink">HTML</span>
            </a>
            <a href="/news" class="card c-yellow">
                <div class="card-top"><div class="card-icon">📰</div><span class="card-arrow">↗</span></div>
                <div class="card-name">News</div>
                <div class="card-desc">Halaman artikel berita</div>
                <span class="card-chip chip-yellow">Layout</span>
            </a>
            <a href="/news1" class="card c-orange">
                <div class="card-top"><div class="card-icon">📰</div><span class="card-arrow">↗</span></div>
                <div class="card-name">News 1</div>
                <div class="card-desc">Versi lanjut halaman berita</div>
                <span class="card-chip chip-orange">Layout</span>
            </a>
            <a href="/pertemuan4" class="card c-purple">
                <div class="card-top"><div class="card-icon">🎨</div><span class="card-arrow">↗</span></div>
                <div class="card-name">Pertemuan 4</div>
                <div class="card-desc">Styling dengan CSS lanjutan</div>
                <span class="card-chip chip-purple">CSS</span>
            </a>
            <a href="/responsive" class="card c-cyan">
                <div class="card-top"><div class="card-icon">📱</div><span class="card-arrow">↗</span></div>
                <div class="card-name">Responsive</div>
                <div class="card-desc">Desain layout responsif</div>
                <span class="card-chip chip-cyan">Responsive</span>
            </a>
            <a href="/template" class="card c-pink">
                <div class="card-top"><div class="card-icon">🗂️</div><span class="card-arrow">↗</span></div>
                <div class="card-name">Template</div>
                <div class="card-desc">Template Bootstrap 4</div>
                <span class="card-chip chip-pink">Bootstrap</span>
            </a>
        </div>
    </div>

    <div class="divider">
        <div class="divider-line"></div>
        <div class="divider-dot"></div>
        <div class="divider-line"></div>
    </div>

    <!-- FOLDER 2 -->
    <div class="section">
        <div class="section-label">
            <span class="section-tag green">📁 Folder 2</span>
            <div class="folder-name">Milawati2004.github.io</div>
            <span class="folder-count">3 file</span>
            <div class="section-line green-line"></div>
        </div>
        <div class="grid">
            <a href="/ind" class="card c-green">
                <div class="card-top"><div class="card-icon">🏠</div><span class="card-arrow">↗</span></div>
                <div class="card-name">Index</div>
                <div class="card-desc">Halaman utama github.io</div>
                <span class="card-chip chip-green">Portfolio</span>
            </a>
            <a href="/linktree" class="card c-yellow">
                <div class="card-top"><div class="card-icon">🔗</div><span class="card-arrow">↗</span></div>
                <div class="card-name">Linktree</div>
                <div class="card-desc">Halaman kumpulan link sosmed</div>
                <span class="card-chip chip-yellow">Social</span>
            </a>
            <a href="/pert5" class="card c-purple">
                <div class="card-top"><div class="card-icon">💻</div><span class="card-arrow">↗</span></div>
                <div class="card-name">Pertemuan 5</div>
                <div class="card-desc">Materi dan praktikum pert. 5</div>
                <span class="card-chip chip-purple">Praktikum</span>
            </a>
        </div>
    </div>

    <footer>
        <div>
            <div class="footer-name">Milawati</div>
            <div class="footer-sub">5026241163 · Sistem Informasi · ITS Surabaya</div>
        </div>
        <div class="footer-right">
            Mata Kuliah Pemrograman Web<br>
            <span style="color: var(--neon-pink);">★</span> Pertemuan 1–6
        </div>
    </footer>

</div>
</body>
</html> 
