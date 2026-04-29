<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Google Accounts</title>
    <style>
        /* Reset dasar agar tampilan konsisten di semua browser */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f1f3f4; /* Background abu-abu muda agar efek 3D kontras */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container dengan Efek 3D Kuat */
        .login-card {
            background-color: #ffffff;
            width: 450px;
            padding: 48px 40px 36px;
            border: 1px solid #dadce0;
            border-radius: 12px;
            text-align: center;

            /* Box Shadow Berlapis untuk Efek Kedalaman 3D */
            box-shadow:
                0 1px 2px 0 rgba(60,64,67,0.3),
                0 4px 8px 3px rgba(60,64,67,0.15),
                0 12px 20px rgba(0,0,0,0.1);

            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        /* Efek sedikit terangkat saat hover */
        .login-card:hover {
            transform: translateY(-2px);
            box-shadow:
                0 8px 15px rgba(0,0,0,0.1),
                0 20px 30px rgba(0,0,0,0.15);
        }

        .google-logo {
            width: 75px;
            height: 24px;
            margin-bottom: 12px;
        }

        h1 {
            font-size: 24px;
            font-weight: 400;
            color: #202124;
            margin-bottom: 8px;
        }

        p {
            font-size: 16px;
            color: #202124;
            margin-bottom: 40px;
        }

        .input-wrapper {
            position: relative;
            margin-bottom: 10px;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 13px 15px;
            font-size: 16px;
            border: 1px solid #dadce0;
            border-radius: 4px;
            outline: none;
            transition: border 0.2s;
        }

        input:focus {
            border: 2px solid #1a73e8;
            padding: 12px 14px; /* Kompensasi ketebalan border */
        }

        .forgot-link {
            display: block;
            text-align: left;
            color: #1a73e8;
            font-weight: 500;
            font-size: 14px;
            text-decoration: none;
            margin-bottom: 40px;
        }

        .footer-action {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .create-btn {
            color: #1a73e8;
            font-weight: 500;
            font-size: 14px;
            text-decoration: none;
        }

        .next-btn {
            background-color: #1a73e8;
            color: white;
            padding: 10px 24px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .next-btn:hover {
            background-color: #1765cc;
            box-shadow: 0 1px 3px 1px rgba(66,133,244,0.15);
        }
    </style>
</head>
<body>

    <div class="login-card">
        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" class="google-logo">

        <h1>Login</h1>
        <p>Gunakan Akun Google Anda</p>

        <div class="input-wrapper">
            <input type="email" id="userEmail" placeholder="Email atau ponsel" spellcheck="false">
        </div>

        <a href="#" class="forgot-link">Lupa email?</a>

        <div class="footer-action">
            <a href="#" class="create-btn">Buat akun</a>
            <button class="next-btn" onclick="jalankanValidasi()">Berikutnya</button>
        </div>
    </div>

    <script>
        function jalankanValidasi() {
            // Ambil data dari input
            var emailInput = document.getElementById("userEmail").value;

            // Logika JS Alert yang implementatif
            if (emailInput === "") {
                alert("Masukkan email atau nomor ponsel terlebih dahulu.");
            } else if (!emailInput.includes("@")) {
                alert("Alamat email tidak valid. Pastikan menyertakan tanda '@'.");
            } else {
                alert("Berhasil! Menuju halaman verifikasi sandi untuk: " + emailInput);
            }
        }
    </script>

</body>
</html>
