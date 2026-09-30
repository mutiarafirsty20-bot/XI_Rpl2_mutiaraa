<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CleanWash - Sistem Informasi Laundry</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #172033;
            background: #ffffff;
        }

        /* ================= NAVBAR ================= */

        .navbar-custom {
            background: #ffffff;
            padding: 17px 0;
            box-shadow: 0 3px 20px rgba(0, 0, 0, 0.06);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 999;
            border: none;
        }

        .logo {
            color: #1769ff !important;
            font-size: 26px;
            font-weight: 800;
            text-decoration: none !important;
        }

        .logo i {
            margin-right: 8px;
        }

        .navbar-nav > li > a {
            color: #333 !important;
            font-weight: 500;
            margin: 0 8px;
            transition: 0.3s;
        }

        .navbar-nav > li > a:hover {
            color: #1769ff !important;
            background: transparent !important;
        }

        .btn-login {
            background: #1769ff !important;
            color: white !important;
            border-radius: 25px;
            padding: 10px 24px !important;
        }

        .btn-login:hover {
            background: #0d55d6 !important;
        }

        /* ================= HERO ================= */

        .hero {
            min-height: 100vh;
            padding-top: 120px;
            display: flex;
            align-items: center;

            background:
                radial-gradient(
                    circle at 10% 20%,
                    rgba(23, 105, 255, 0.12),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 90% 80%,
                    rgba(61, 155, 255, 0.12),
                    transparent 30%
                ),
                #f7faff;
        }

        .hero-content {
            padding: 40px 0;
        }

        .hero-badge {
            display: inline-block;
            padding: 9px 18px;
            border-radius: 30px;
            background: #e8f1ff;
            color: #1769ff;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: 55px;
            line-height: 1.15;
            font-weight: 800;
            margin-bottom: 22px;
        }

        .hero h1 span {
            color: #1769ff;
        }

        .hero p {
            color: #667085;
            font-size: 17px;
            line-height: 1.8;
            max-width: 560px;
            margin-bottom: 30px;
        }

        .btn-primary-custom {
            display: inline-block;
            background: #1769ff;
            color: white;
            padding: 14px 28px;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            margin-right: 10px;
            transition: 0.3s;
        }

        .btn-primary-custom:hover {
            background: #0d55d6;
            color: white;
            transform: translateY(-2px);
        }

        .btn-outline-custom {
            display: inline-block;
            border: 2px solid #1769ff;
            color: #1769ff;
            padding: 12px 27px;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-outline-custom:hover {
            background: #1769ff;
            color: white;
        }

        /* ================= HERO CARD ================= */

        .hero-card-area {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 450px;
        }

        .hero-card {
            width: 370px;
            background: white;
            border-radius: 30px;
            padding: 35px;
            box-shadow: 0 25px 70px rgba(23, 105, 255, 0.15);
        }

        .hero-icon {
            width: 80px;
            height: 80px;
            border-radius: 22px;
            background: linear-gradient(135deg, #1769ff, #4da3ff);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 35px;
            margin-bottom: 25px;
        }

        .hero-card h3 {
            font-weight: 800;
            margin-bottom: 10px;
        }

        .hero-card > p {
            font-size: 14px;
            color: #777;
            margin-bottom: 20px;
        }

        .info-box {
            display: flex;
            align-items: center;
            padding: 14px;
            background: #f6f9ff;
            border-radius: 15px;
            margin-bottom: 12px;
        }

        .info-icon {
            width: 42px;
            height: 42px;
            background: #e4efff;
            color: #1769ff;
            border-radius: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 12px;
        }

        .info-box strong {
            font-size: 14px;
        }

        /* ================= STATISTIK ================= */

        .stats {
            padding: 35px 0;
            background: white;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.03);
        }

        .stat-item {
            text-align: center;
            border-right: 1px solid #eeeeee;
        }

        .stat-item:last-child {
            border-right: none;
        }

        .stat-item h3 {
            color: #1769ff;
            font-weight: 800;
            margin-bottom: 5px;
        }

        .stat-item p {
            color: #777;
            margin: 0;
            font-size: 13px;
        }

        /* ================= SECTION ================= */

        .section {
            padding: 100px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 55px;
        }

        .section-title span {
            color: #1769ff;
            font-size: 13px;
            font-weight: 700;
        }

        .section-title h2 {
            font-size: 38px;
            font-weight: 800;
            margin: 10px 0;
        }

        .section-title p {
            color: #777;
        }

        /* ================= LAYANAN ================= */

        .service-card {
            background: white;
            padding: 35px 25px;
            border-radius: 25px;
            text-align: center;
            height: 100%;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.06);
            transition: 0.3s;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 45px rgba(23, 105, 255, 0.12);
        }

        .service-icon {
            width: 70px;
            height: 70px;
            background: #eaf2ff;
            color: #1769ff;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 28px;
            margin: 0 auto 20px;
        }

        .service-card h4 {
            font-weight: 700;
            margin-bottom: 12px;
        }

        .service-card p {
            color: #777;
            font-size: 14px;
            line-height: 1.7;
        }

        /* ================= TENTANG ================= */

        .about-section {
            background: #eef5ff;
        }

        .about-box {
            background: white;
            border-radius: 30px;
            padding: 50px;
        }

        .about-box h2 {
            font-size: 36px;
            font-weight: 800;
            margin: 12px 0 20px;
        }

        .about-box p {
            color: #6c757d;
            line-height: 1.8;
        }

        .check-list {
            list-style: none;
            padding: 0;
            margin-top: 25px;
        }

        .check-list li {
            margin-bottom: 15px;
            color: #555;
        }

        .check-list i {
            color: #1769ff;
            margin-right: 10px;
        }

        .about-image {
            height: 300px;
            border-radius: 25px;
            background: linear-gradient(135deg, #1769ff, #58a9ff);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .about-image i {
            font-size: 75px;
            margin-bottom: 15px;
        }

        /* ================= CTA ================= */

        .cta {
            background: linear-gradient(135deg, #1769ff, #3d9bff);
            padding: 80px 0;
            text-align: center;
            color: white;
        }

        .cta h2 {
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .cta p {
            margin-bottom: 30px;
        }

        .btn-white {
            display: inline-block;
            background: white;
            color: #1769ff;
            padding: 14px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 700;
        }

        .btn-white:hover {
            color: #1769ff;
            text-decoration: none;
        }

        /* ================= FOOTER ================= */

        footer {
            background: #101828;
            color: white;
            padding: 30px 0;
            text-align: center;
        }

        footer p {
            color: #aab2c0;
            margin: 0;
            font-size: 14px;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 767px) {

            .hero {
                text-align: center;
            }

            .hero h1 {
                font-size: 40px;
            }

            .hero p {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-card-area {
                margin-top: 30px;
            }

            .hero-card {
                width: 310px;
            }

            .section {
                padding: 70px 0;
            }

            .section-title h2 {
                font-size: 30px;
            }

            .about-box {
                padding: 30px;
            }

            .about-image {
                margin-top: 30px;
            }
        }

    </style>

</head>

<body>

<!-- ================= NAVBAR ================= -->

<nav class="navbar navbar-custom">

    <div class="container">

        <div class="navbar-header">

            <a class="logo" href="landing.php">
                <i class="fa-solid fa-shirt"></i>
                CleanWash
            </a>

        </div>

        <ul class="nav navbar-nav navbar-right">

            <li>
                <a href="#home">
                    Home
                </a>
            </li>

            <li>
                <a href="#layanan">
                    Layanan
                </a>
            </li>

            <li>
                <a href="#tentang">
                    Tentang Kami
                </a>
            </li>

            <!-- LOGIN KE index.php -->
            <li>
                <a href="index.php" class="btn-login">
                    Login
                </a>
            </li>

        </ul>

    </div>

</nav>


<!-- ================= HERO ================= -->

<section class="hero" id="home">

    <div class="container">

        <div class="row">

            <div class="col-md-6">

                <div class="hero-content">

                    <div class="hero-badge">
                        <i class="fa-solid fa-sparkles"></i>
                        Sistem Informasi Laundry
                    </div>

                    <h1>
                        Laundry Jadi
                        <span>Lebih Mudah.</span>
                    </h1>

                    <p>
                        CleanWash membantu mengelola data laundry
                        dengan lebih mudah, cepat, dan terorganisir.
                        Kelola pelanggan, pakaian, harga, dan transaksi
                        dalam satu sistem.
                    </p>

                    <!-- LOGIN KE index.php -->
                    <a href="index.php"
                       class="btn-primary-custom">

                        <i class="fa-solid fa-right-to-bracket"></i>
                        Login Sekarang

                    </a>

                    <a href="#layanan"
                       class="btn-outline-custom">

                        Lihat Layanan

                    </a>

                </div>

            </div>


            <div class="col-md-6">

                <div class="hero-card-area">

                    <div class="hero-card">

                        <div class="hero-icon">

                            <i class="fa-solid fa-shirt"></i>

                        </div>

                        <h3>
                            CleanWash
                        </h3>

                        <p>
                            Sistem informasi laundry yang membantu
                            pengelolaan data menjadi lebih praktis.
                        </p>

                        <div class="info-box">

                            <div class="info-icon">
                                <i class="fa-solid fa-users"></i>
                            </div>

                            <strong>
                                Data Pelanggan
                            </strong>

                        </div>

                        <div class="info-box">

                            <div class="info-icon">
                                <i class="fa-solid fa-shirt"></i>
                            </div>

                            <strong>
                                Data Pakaian
                            </strong>

                        </div>

                        <div class="info-box">

                            <div class="info-icon">
                                <i class="fa-solid fa-receipt"></i>
                            </div>

                            <strong>
                                Data Transaksi
                            </strong>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= STATISTIK ================= -->

<section class="stats">

    <div class="container">

        <div class="row">

            <div class="col-md-3 col-xs-6">

                <div class="stat-item">

                    <h3>24/7</h3>
                    <p>Akses Sistem</p>

                </div>

            </div>

            <div class="col-md-3 col-xs-6">

                <div class="stat-item">

                    <h3>100%</h3>
                    <p>Data Terorganisir</p>

                </div>

            </div>

            <div class="col-md-3 col-xs-6">

                <div class="stat-item">

                    <h3>Fast</h3>
                    <p>Pengelolaan Data</p>

                </div>

            </div>

            <div class="col-md-3 col-xs-6">

                <div class="stat-item">

                    <h3>Easy</h3>
                    <p>Digunakan</p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= LAYANAN ================= -->

<section class="section" id="layanan">

    <div class="container">

        <div class="section-title">

            <span>OUR SERVICES</span>

            <h2>Layanan CleanWash</h2>

            <p>
                Semua kebutuhan pengelolaan laundry dalam satu sistem.
            </p>

        </div>

        <div class="row">

            <div class="col-md-3 col-sm-6"
                 style="margin-bottom:25px;">

                <div class="service-card">

                    <div class="service-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>

                    <h4>Pelanggan</h4>

                    <p>
                        Mengelola data pelanggan dengan lebih
                        mudah dan terorganisir.
                    </p>

                </div>

            </div>

            <div class="col-md-3 col-sm-6"
                 style="margin-bottom:25px;">

                <div class="service-card">

                    <div class="service-icon">
                        <i class="fa-solid fa-shirt"></i>
                    </div>

                    <h4>Pakaian</h4>

                    <p>
                        Mengelola informasi pakaian dan jenis
                        laundry dengan lebih praktis.
                    </p>

                </div>

            </div>

            <div class="col-md-3 col-sm-6"
                 style="margin-bottom:25px;">

                <div class="service-card">

                    <div class="service-icon">
                        <i class="fa-solid fa-tags"></i>
                    </div>

                    <h4>Harga</h4>

                    <p>
                        Mengatur data harga layanan laundry
                        dengan lebih rapi.
                    </p>

                </div>

            </div>

            <div class="col-md-3 col-sm-6"
                 style="margin-bottom:25px;">

                <div class="service-card">

                    <div class="service-icon">
                        <i class="fa-solid fa-receipt"></i>
                    </div>

                    <h4>Transaksi</h4>

                    <p>
                        Mencatat dan mengelola transaksi laundry
                        secara lebih terstruktur.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= TENTANG ================= -->

<section class="section about-section" id="tentang">

    <div class="container">

        <div class="about-box">

            <div class="row">

                <div class="col-md-7">

                    <span style="color:#1769ff;font-weight:700;">
                        TENTANG CLEANWASH
                    </span>

                    <h2>
                        Kelola Laundry Tanpa Ribet
                    </h2>

                    <p>
                        CleanWash merupakan sistem informasi laundry
                        yang dirancang untuk membantu proses pengelolaan
                        data menjadi lebih mudah dan terorganisir.
                    </p>

                    <ul class="check-list">

                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Data pelanggan lebih terorganisir
                        </li>

                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Pengelolaan data pakaian lebih mudah
                        </li>

                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Data harga dapat dikelola dengan rapi
                        </li>

                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Transaksi laundry lebih terstruktur
                        </li>

                    </ul>

                </div>

                <div class="col-md-5">

                    <div class="about-image">

                        <div>

                            <i class="fa-solid fa-soap"></i>

                            <h3>
                                Fresh & Clean
                            </h3>

                            <p style="color:white;">
                                Laundry lebih mudah
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= CTA ================= -->

<section class="cta">

    <div class="container">

        <h2>
            Siap Mengelola Laundry?
        </h2>

        <p>
            Masuk ke sistem CleanWash untuk mulai mengelola
            data laundry.
        </p>

        <!-- LOGIN KE index.php -->
        <a href="index.php" class="btn-white">

            <i class="fa-solid fa-right-to-bracket"></i>

            Masuk ke Sistem

        </a>

    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer>

    <div class="container">

        <p>
            © 2026 CleanWash -
            Sistem Informasi Laundry
        </p>

    </div>

</footer>

</body>

</html>