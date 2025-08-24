 <?php

include "koneksi.php";

// Data Profil Guru

$ambildataguru = mysqli_query($koneksi, "SELECT * FROM tb_profil_guru");

// Data Galeri

// Ambil nilai filter dari GET
$kategori = isset($_GET['kategori']) ? $_GET['kategori'] : '';
$urutkan = isset($_GET['urutkan']) ? $_GET['urutkan'] : '';

// Bangun query
$sql = "SELECT * FROM tb_galery WHERE 1=1";

if ($kategori != '') {
    $sql .= " AND kategori = '$kategori'";
}

if ($urutkan == 'asc') {
    $sql .= " ORDER BY id_galery ASC";
} elseif ($urutkan == 'desc') {
    $sql .= " ORDER BY id_galery DESC";
}

// Eksekusi query
$ambildata = mysqli_query($koneksi, $sql);


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IX - Abisatya</title>

    <!-- Website Abisatya icon -->
    <link rel="shortcut icon" href="assets/img/logo-abisatya.jpg" type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Poppins Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <!-- Bonheur Royale Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bonheur+Royale&display=swap" rel="stylesheet">

    <!-- CSS Eksternal -->
    <link rel="stylesheet" href="css/galeri.css">

</head>

<body>

    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg navbar-dark p-3 fixed-top bg-nav">
        <div class="container">
            <img src="./assets/img/logo-abisatya.jpg" class="me-3" alt="Bootstrap" width="50">
            <a class="navbar-brand d-lg-inline d-md-inline d-sm-inline d-none fw-bold fs-4" href="#">Abisatya <span
                    class="nav-tittle-galery fw-light">Gallery</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto fs-5 gap-lg-4 fw-light me-5">

                </ul>
                <div class="d-none d-lg-flex gap-3 me-5">
                    <a class="btn btn-outline-light py-2" href="index.php" data-bs-target="#staticBackdrop">Kembali ke
                        Beranda</a>
                </div>
                <div class="d-flex d-lg-none flex-column gap-3 mt-3">
                    <a class="btn btn-outline-light w-100 py-2" href="index.php"
                        data-bs-target="#staticBackdrop">Kembali ke Beranda</a>
                </div>
                <div class="d-none d-lg-flex gap-3">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="themeSwitchDesktop">
                        <label class="form-check-label text-white" for="themeSwitchDesktop"
                            id="themeSwitchLabelDesktop">🌙</label>
                    </div>
                </div>
                <div class="d-flex d-lg-none flex-column align-items-center gap-3 mt-3">
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" id="themeSwitchMobile">
                        <label class="form-check-label text-white" for="themeSwitchMobile"
                            id="themeSwitchLabelMobile">🌙</label>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->

    <!-- Galeri Section Start -->

    <section id="galeri">

        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="fw-bold head-profil-galeri">Galeri</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <form method="GET" action="#galeri" class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-4 mb-3">
                            <select name="urutkan" class="form-select fs-5 ps-3 border-secondary"
                                onchange="this.form.submit()" style="background-color: #ffffff00;">
                                <option value="" ><span class="option-text">Urutkan Galeri</span></option>
                                <option value="asc" <?=($urutkan=='asc' ) ? 'selected' : '' ?>>Terbaru</option>
                                <option value="desc" <?=($urutkan=='desc' ) ? 'selected' : '' ?>>Terlama</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-3">
                            <select name="kategori" class="form-select fs-5 ps-3  border-secondary"
                                onchange="this.form.submit()" style="background-color: #ffffff00;">
                                <option value="">Semua Kategori</option>
                                <option value="kelas 7" <?=($kategori=='kelas 7' ) ? 'selected' : '' ?>>Kelas 7
                                </option>
                                <option value="kelas 8" <?=($kategori=='kelas 8' ) ? 'selected' : '' ?>>Kelas 8
                                </option>
                                <option value="kelas 9" <?=($kategori=='kelas 9' ) ? 'selected' : '' ?>>Kelas 9
                                </option>
                                <option value="perpisahan" <?=($kategori=='perpisahan' ) ? 'selected' : '' ?>>Perpisahan
                                </option>
                                <option value="wisuda" <?=($kategori=='wisuda' ) ? 'selected' : '' ?>>Wisuda
                                </option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt justify-content-center">

                <!-- Perulangan -->
                <?php
                    while ( $tampildata = mysqli_fetch_array($ambildata) ) {
                ?>

                <div class="col-10 col-md-6 col-lg-4">
                    <button type="button" class="border-0 bg-transparent"
                        data-bs-toggle="modal" data-bs-target="#modalGaleri<?= $tampildata['id_galery'] ?>">
                        <img src="assets/img/galeri/<?= $tampildata['galery_name']; ?>" alt="Image Galeri"
                        class="img-fuild galeri rounded-4 w-100 mt-4">
                    </button>
                </div>

                <!-- Modal - Zoom Galeri -->
                <div class="modal fade" id="modalGaleri<?= $tampildata['id_galery'] ?>" tabindex="-1"
                    aria-labelledby="modalLabelGaleri<?= $tampildata['id_galery'] ?>" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content modal-galeri">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modalLabelGaleri<?= $tampildata['id_galery'] ?>">Galeri
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-2 p-lg-4 text-start">
                                <div class="text-center">
                                    <img src="assets/img/galeri/<?= $tampildata['galery_name']; ?>" alt="Image Galeri"
                                    class="img-fuild galeri-zoom rounded-4 w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php

                    }
            
                ?>

            </div>
        </div>
    </section>

    <!-- Galeri Section End -->

    <!-- Footer Start -->

    <footer class="text-center text-lg-start text-white" style="background-color: #0F828C;">
        <div class="container p-4">
            <div class="row my-4 justify-content-between">
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                    <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto"
                        style="width: 150px; height: 150px;">
                        <img src="assets/img/logo-abisatya.jpg" width="150" alt="" loading="lazy" />
                    </div>
                    <h1 class="fs-1 fw-bold text-center">Abisatya</h1>
                </div>
                <div class="text-center col-lg-6 col-md-12 mb-4 mb-md-3">
                    <h5 class="mb-4 fs-3 fw-bold">Follow Abisatya</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="https://www.instagram.com/abisa_tya2" target="_blank"
                                class="text-white text-decoration-none fs-5"><i
                                    class="bi bi-instagram me-2"></i>abisa_tya9</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 mb-4 mb-md-3">
                    <h5 class="mb-2 fs-3 fw-bold">Menu</h5>
                    <ul class="list-unstyled fw-normal">
                        <li>
                            <a href="#home" class="text-decoration-none text-white fs-5">Home</a>
                        </li>
                        <li>
                            <a href="#tentang" class="text-decoration-none text-white fs-5">Tentang</a>
                        </li>
                        <li>
                            <a href="#kepsek" class="text-decoration-none text-white fs-5">Kepala Sekolah</a>
                        </li>
                        <li>
                            <a href="#guru" class="text-decoration-none text-white fs-5">Guru</a>
                        </li>
                        <li>
                            <a href="#galeri" class="text-decoration-none text-white fs-5">Galeri</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2025 Copyright:
            <a class="text-white" href="https://www.instagram.com/abisa_tya2" target="_blank">Abisatya</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- End of .container -->
    
    <!-- Footer End -->
    
    <!-- Script Bootstrap -->
    <script src="js/bootstrap.js"></script>
    
    <!-- Script AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>

    <!-- Script Internal -->
    <script>
        // Navigation Management
        document.addEventListener("DOMContentLoaded", function () {
            const navbar = document.querySelector(".navbar");

            // Navbar scroll effect
            window.addEventListener("scroll", () => {
                if (window.scrollY > 10) {
                    navbar.classList.add("navbar-scroll");
                } else {
                    navbar.classList.remove("navbar-scroll");
                }
            });
        });
    </script>

    <script>
        const htmlTag = document.documentElement;
        const switchDesktop = document.getElementById('themeSwitchDesktop');
        const labelDesktop = document.getElementById('themeSwitchLabelDesktop');
        const switchMobile = document.getElementById('themeSwitchMobile');
        const labelMobile = document.getElementById('themeSwitchLabelMobile');

        function setTheme(theme) {
            if (theme === 'dark') {
                htmlTag.setAttribute('data-theme', 'dark');
                if (switchDesktop) switchDesktop.checked = true;
                if (labelDesktop) labelDesktop.textContent = '☀️';
                if (switchMobile) switchMobile.checked = true;
                if (labelMobile) labelMobile.textContent = '☀️';
            } else {
                htmlTag.removeAttribute('data-theme');
                if (switchDesktop) switchDesktop.checked = false;
                if (labelDesktop) labelDesktop.textContent = '🌙';
                if (switchMobile) switchMobile.checked = false;
                if (labelMobile) labelMobile.textContent = '🌙';
            }
            localStorage.setItem('theme', theme);
        }

        document.addEventListener('DOMContentLoaded', function () {
            const savedTheme = localStorage.getItem('theme');
            setTheme(savedTheme === 'dark' ? 'dark' : 'light');
        });

        if (switchDesktop) {
            switchDesktop.addEventListener('change', function () {
                setTheme(this.checked ? 'dark' : 'light');
            });
        }
        if (switchMobile) {
            switchMobile.addEventListener('change', function () {
                setTheme(this.checked ? 'dark' : 'light');
            });
        }
    </script>

</body>

</html