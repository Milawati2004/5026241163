<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>5026241163 | Sistem Informasi ITS</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <script>
        function showme() {
            //alert("Hello Selamat Siang");
            Swal.fire({
            title: "Hallo!",
            text: "Selamat Siang!",
            icon: "success"
          });
            console.log("Ini baris 18, sudah sampai disini");
            let a = 18 + 10;
            console.log("Hasil Penjumlahan : " + a);
            let c = 1 * 2 * 3;
            console.log("Hasil Perkalian : " + c);
        }

        function changeText() {
            const element = document.getElementById("intro");
            element.innerHTML = "Sistem Informasi ITS";
        }

        function changeStyle() {
            const element = document.getElementById("daftarBtn");
            element.style.color = "white";
            element.style.background = "black";
            alert("Style telah diubah!");
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            font-family: 'Inter', Arial, sans-serif;
            background: linear-gradient(to bottom, #4b6f44, #2f4f2f);
            min-height: 100vh;
            margin: 0;
        }

        .c-wrapper {
            max-width: 30rem;
            margin: 0 auto;
            padding: 2rem 1rem 2rem;
        }

        .c-card {
            background: linear-gradient(to bottom, #b6f28a, #7ed957);
            border-radius: 1.5rem;
            overflow: hidden;
        }

        .c-topbar {
            display: flex;
            justify-content: space-between;
            padding: 0.85rem 1rem 0.5rem;
            position: relative;
        }

        .c-topbar-btn {
            background: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            width: 2rem;
            height: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            text-decoration: none;
            color: black;
        }

        .c-avatar {
            width: 5.5rem;
            height: 5.5rem;
            border-radius: 50%;
            object-fit: cover;
            display: block;
            margin: 0 auto;
        }

        .c-title {
            font-size: 1.5rem;
            font-weight: 700;
            text-align: center;
            margin-top: 0.75rem;
            margin-bottom: 0.25rem;
            color: #ffffff;
        }

        .c-subtitle {
            font-size: 0.9rem;
            text-align: center;
            color: #183f16;
            margin-bottom: 1rem;
            opacity: 0.9;
        }

        /* Tombol Baru: Ayo Daftar Gess */
        .c-btn-daftar {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ffff00; /* Kuning */
            color: #ff0000;    /* Merah */
            border-radius: 2rem;
            text-decoration: none;
            font-weight: 800;
            padding: 0.7rem 1rem;
            margin-bottom: 1.5rem;
            min-height: 3.6rem;
            border: none;
            width: 100%;
            transition: 0.2s;
        }

        .c-btn-daftar:hover {
            transform: scale(1.02);
            opacity: 0.9;
        }

        .c-link {
            display: flex;
            align-items: center;
            background: #e6e6e6;
            border-radius: 2rem;
            text-decoration: none;
            color: black;
            padding: 0.7rem 1rem;
            margin-bottom: 0.7rem;
            min-height: 3.6rem;
            transition: 0.2s;
        }

        .c-link:hover {
            transform: translateY(-2px);
            background: #dcdcdc;
        }

        .c-link-body {
            flex: 1;
            text-align: center;
            font-size: 0.9rem;
            font-weight: 600;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .c-link-dots {
            color: #888;
        }

        .c-join-btn {
            display: block;
            width: fit-content;
            margin: 2rem auto 0.5rem;
            background: #fff;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 700;
            padding: 0.6rem 1.2rem;
            text-decoration: none;
            color: black;
        }

        .c-footer {
            text-align: center;
            font-size: 0.65rem;
            padding-top: 1rem;
            padding-bottom: 1.5rem;
        }

        .c-footer a {
            text-decoration: none;
            color: rgba(0, 0, 0, 0.6);
        }
    </style>
</head>

<body>
    <div class="c-wrapper">
        <div class="c-card">
            <div class="c-topbar">
                <a href="https://linktr.ee" target="_blank" class="c-topbar-btn">
                    <img src="assets/img/logo-linktree.png" width="16" alt="Linktree">
                </a>

                <button type="button" class="c-topbar-btn border-0" onclick="showme()">
                    <i class="bi bi-box-arrow-up"></i>
                </button>
            </div>

            <div class="px-3">
                <img class="c-avatar" src="assets/img/logo-gg.jpeg" alt="Sistem Informasi ITS" />
                <div class="c-title" id="intro">GG BERAKSI 2026</div>
                <div class="c-subtitle">Jangan lupa ikuti peraturan untuk join menjadi MEMBER</div>

                <!-- Tombol Request: AYO DAFTAR GESS -->
                <button id="daftarBtn" class="c-btn-daftar" onclick="changeStyle()">
                    AYO DAFTAR GESS
                </button>

                <div class="text-center mb-4">
                    <button class="btn btn-primary btn-sm" onclick="showme();">Show Me</button>
                    <button class="btn btn-primary btn-sm" onclick="changeText();">Change Text</button>
                    <button class="btn btn-primary btn-sm" onclick="changeStyle();">Change Style</button>
                </div>

                <!-- LINKS -->
                <a href="https://www.canva.com/design/DAG6zZinZU0/rFNFOtAEmPV4Qi-KwreDrg/edit" class="c-link" target="_blank">
                    <div class="c-link-body">GUIDEBOOK</div><span class="c-link-dots">⋮</span>
                </a>

                <a href="https://docs.google.com/forms/d/e/1FAIpQLScqqqmU1pEbWxIT30p0kt1BQiDR1udA_mfmj3TkOxuLAnqLVQ/closedform" class="c-link" target="_blank">
                    <div class="c-link-body">FORM PENDAFTARAN</div><span class="c-link-dots">⋮</span>
                </a>

                <a href="https://www.twibbonize.com/ggberaksi26" class="c-link" target="_blank">
                    <div class="c-link-body">TWIBBON</div><span class="c-link-dots">⋮</span>
                </a>

                <a href="https://drive.google.com/drive/folders/1-Hd7t0_GTznyr2XsVvIdHsYWY_qcUBaZ" class="c-link" target="_blank">
                    <div class="c-link-body">POSTER & CAPTION</div><span class="c-link-dots">⋮</span>
                </a>

                <a href="https://linktr.ee/ahmadzacky8" class="c-link" target="_blank">
                    <div class="c-link-body">CONTACT PERSON</div><span class="c-link-dots">⋮</span>
                </a>

                <a href="https://linktr.ee/" class="c-join-btn" target="_blank">
                    Bergabung dengan SI ITS di Linktree
                </a>

                <div class="c-footer">
                    <a href="https://linktr.ee/s/about/trust-center/report?field86145911=https%3A%2F%2Flinktr.ee%2FGGBeraksi2026">Cookie Preferences</a> ·
                    <a href="https://linktr.ee/s/about/trust-center/report?field86145911=https%3A%2F%2Flinktr.ee%2FGGBeraksi2026">Report</a> ·
                    <a href="https://linktr.ee/s/privacy">Privacy</a> ·
                    <a href="https://linktr.ee/s/about/trust-center/report?field86145911=https%3A%2F%2Flinktr.ee%2FGGBeraksi2026">Explore</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
