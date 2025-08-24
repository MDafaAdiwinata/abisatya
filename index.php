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

    <!-- CSS Eksternal -->
    <link rel="stylesheet" href="css/index.css">

</head>

<body>

    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg navbar-dark p-3 fixed-top bg-nav" data-aos="fade-down" data-aos-duration="1500"
        data-aos-delay="3000">
        <div class="container">
            <img src="./assets/img/logo-abisatya.jpg" class="me-3" alt="Bootstrap" width="50">
            <a class="navbar-brand d-lg-inline d-md-inline d-sm-inline d-none fw-bold fs-4" href="#">Abisatya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto fs-5 gap-lg-4 fw-light me-5">
                    <li class="nav-item">
                        <a class="nav-link mt-3 mt-lg-0" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kepsek">Kepala Sekolah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#guru">Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galeri">Galeri</a>
                    </li>
                </ul>
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

    <!-- Hero Section Start -->

    <section id="home" class="d-flex align-items-center position-relative justify-content-center" style="min-height: 100vh;">

        <!-- BACKGROUND -->
        <div class="position-absolute top-0 start-0 w-100 h-100 z-n1 bg-pattern">
            <div class="position-absolute top-0 end-0 bg-radial-right"></div>
            <div class="position-absolute bottom-0 start-0 bg-radial-left"></div>
        </div>

        <div class="container position-relative text-center">
            <div class="mx-auto" style="max-width: 600px;">
                <img class="img-thumbnail rounded-circle shadow mb-4" src="assets/img/logo-abisatya.jpg"
                    alt="Logo Abisatya" width="300" data-aos="fade-down" data-aos-duration="1000" />
                <h1 class="display-5 fw-bold mb-3" id="head-tittle" data-aos="zoom-in" data-aos-duration="1000"
                    data-aos-delay="1500">
                    IX ABISATYA
                </h1>
                <p class="fw-light text-center head-description" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="2500">
                    Kami alumni angkatan ke-2 SMPIT Ar Ruhama. <br>
                    Di sinilah kami tumbuh, belajar, dan saling menguatkan. <br>
                    Semoga silaturahmi ini tetap terjaga dalam kebaikan.
                </p>

                <!-- For Desktop -->
                <div class="d-none d-lg-flex gap-3 d-flex justify-content-center align-items-center">
                    <a class="btn btn-galeri text-white fw-medium fs-5 shadow-sm mt-3" href="#galeri"
                        data-aos="flip-left" data-aos-duration="2000" data-aos-delay="2500">💾 Lihat Galeri</a>
                    <a class="btn btn-tentang fw-medium fs-5 shadow-sm mt-3" href="#tentang" data-aos="flip-right"
                        data-aos-duration="2500" data-aos-delay="3000">😮 Kenali Kami</a>
                </div>

                <!-- For Mobile -->
                <div class="d-flex d-lg-none flex-column gap-3 mt-3">
                    <a class="btn btn-galeri fw-medium fs-5 shadow-sm mt-3 text-white" href="#galeri" data-aos="flip-left"
                        data-aos-duration="2000" data-aos-delay="2500">💾 Lihat Galeri</a>
                    <a class="btn btn-tentang fw-medium fs-5 shadow-sm" href="#tentang" data-aos="flip-right"
                        data-aos-duration="2500" data-aos-delay="3000">😮 Kenali Kami</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Section End -->

    <!-- Tentang Section Start -->

    <section id="tentang" class="position-relative">

        <!-- Background grid -->
        <div class="position-absolute top-0 start-0 end-0 bottom-0 bg-grid-mask">
            <div class="position-absolute top-0 start-0 bg-radial-top-left"></div>
        </div>

        <!-- Radial gradient circle biru atas kiri -->
        
        <!-- Konten -->
        <div class="container py-5 position-relative z-1">
            <div class="row">
                <div class="col-12">
                    <img src="assets/img/tentang-img.png" class="img-fluid" alt="Gambar Tentang - Abisatya"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <p class="fw-light">- gambar by: faaza</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="500">
                    <p class="text-center text-tentang fw-light my-0">
                        Abisatya diambil dari Bahasa Sansekerta yang artinya,
                    </p>
                    <p class="text-center text-tentang fw-bold my-0">
                        “Teman setia atau sahabat karib”.
                    </p>
                    <p class="text-center text-tentang fw-light my-0">
                        Teman setia dalam konteks ini dapat dikatakan juga sebagai keluarga.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Section End -->

    <!-- Profil Kepala Sekolah Section Start -->

    <section id="kepsek" class="position-relative">

        <!-- Background -->
        <div class="position-absolute top-0 start-0 end-0 bottom-0 bg-dotted-mask"></div>

        <div class="container py-5 position-relative">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="fw-bold head-profil-kepsek" data-aos="fade-down" data-aos-duration="500"
                        data-aos-delay="500">Profil Kepala Sekolah</h1>
                </div>
            </div>
            <div class="row mt-4 justify-content-center gap-4">
                <div class="col-10 col-lg-5" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
                    <div class="card card-kepsek border-0">
                        <img src="assets/img/kepala sekolah.png" class="card-img-top" alt="Profil Kepala Sekolah">
                        <div class="card-body">
                            <h5 class="card-title fs-3 fw-bold mt-3 text-center">Hima Amania S.Psi</h5>
                            <button type="button"
                                class="btn btn-primary w-100 mt-3 fs-5 text-white fw-medium text-center"
                                data-bs-toggle="modal" data-bs-target="#modalKepalaSekolah1">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal - Kepala Sekolah 1 -->
                <div class="modal fade" id="modalKepalaSekolah1" tabindex="-1"
                    aria-labelledby="modalLabelKepalaSekolah1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content modal-kepsek">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modalLabelKepalaSekolah1">Detail Profil
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-start">
                                <div class="text-center">
                                    <img src="assets/img/kepala sekolah.png" class="img-thumbnail" alt="gambar guru"
                                        width="500">
                                </div>
                                <h1 class="mt-5 fs-5 ms-2 fw-light">
                                    Nama Lengkap:
                                    <span class="fw-bold">
                                        Hima Amania S.Psi
                                    </span>
                                </h1>
                                <h1 class="fs-5 ms-2 fw-light">
                                    Usia:
                                    <span class="fw-bold">
                                        30 Tahun
                                    </span>
                                    <h1 class="fs-5 ms-2 fw-light">
                                        Hobi:
                                        <span class="fw-bold">
                                            Menyanyi
                                        </span>
                                    </h1>
                                    <p class="fs-5 text-center mt-3 fst-italic fw-light px-2">
                                        "Tidak ada yang perlu ditakutkan ketika Allah swt. selalu dihadirkan didalam
                                        hati"
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-10 col-lg-5" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="1000">
                    <div class="card card-kepsek border-0">
                        <img src="assets/img/pak kurniawan.png" class="card-img-top" alt="Profil Kepala Sekolah">
                        <div class="card-body">
                            <h5 class="card-title fs-3 fw-bold mt-3 text-center">Kurniawan S.Hum</h5>
                            <button type="button"
                                class="btn btn-primary w-100 mt-3 fs-5 text-white fw-medium text-center"
                                data-bs-toggle="modal" data-bs-target="#modalKepalaSekolah2">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal - Kepala Sekolah 2 -->
                <div class="modal fade" id="modalKepalaSekolah2" tabindex="-1"
                    aria-labelledby="modalLabelKepalaSekolah2" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content modal-kepsek">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modalLabelKepalaSekolah2">Detail Profil
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-start">
                                <div class="text-center">
                                    <img src="assets/img/pak kurniawan.png" class="img-thumbnail" alt="gambar guru"
                                        width="500">
                                </div>
                                <h1 class="mt-5 fs-5 ms-2 fw-light">
                                    Nama Lengkap:
                                    <span class="fw-bold">
                                        Kurniawan S.Hum
                                    </span>
                                </h1>
                                <h1 class="fs-5 ms-2 fw-light">
                                    Usia:
                                    <span class="fw-bold">
                                        30 Tahun
                                    </span>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Profil Kepala Sekolah Section End -->

    <!-- Profil Guru Section Start -->

    <section id="guru">
        <div class="container py-5">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="fw-bold head-profil-guru" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="400">Profil Guru</h1>
                </div>
            </div>
            <div class="row mt-4 justify-content-center gap-4">

                <!-- Perulangan Data -->

                <?php
                    while ( $tampildataguru = mysqli_fetch_array($ambildataguru) ) {
                ?>

                <div class="col-10 col-md-5 col-lg-3" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="400">
                    <div class="card border-0 card-guru h-100 d-flex flex-column">
                        <img src="assets/img/<?= $tampildataguru['foto']; ?>" class="card-img-top"
                            alt="Profil Kepala Sekolah">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <h5 class="card-title fs-4 fw-bold mt-3  text-center">
                                <?= $tampildataguru['nama']; ?>
                            </h5>
                            <button type="button"
                                class="btn btn-info w-100 mt-auto fs-6 text-white fw-medium text-center"
                                data-bs-toggle="modal" data-bs-target="#modal<?= $tampildataguru['id_guru']; ?>"
                                data-aos="flip-up" data-aos-duration="1000" data-aos-delay="800">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="modal<?= $tampildataguru['id_guru']; ?>" tabindex="-1"
                    aria-labelledby="modalLabel<?= $tampildataguru['id_guru']; ?>" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content modal-guru">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modalLabel<?= $tampildataguru['id_guru']; ?>">Detail
                                    Guru
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-start">
                                <div class="text-center">
                                    <img src="assets/img/<?= $tampildataguru['foto']; ?>" class="img-thumbnail"
                                        alt="gambar guru" width="350">
                                </div>
                                <h1 class="mt-5 fs-5 ms-2 fw-light">
                                    Nama Lengkap:
                                    <span class="fw-bold">
                                        <?= $tampildataguru['nama']; ?>
                                    </span>
                                </h1>
                                <h1 class="fs-5 ms-2 fw-light">
                                    Usia:
                                    <span class="fw-bold">
                                        <?= $tampildataguru['usia']; ?> Tahun
                                    </span>
                                </h1>
                                <h1 class="fs-5 ms-2 fw-light">
                                    Mata Pelajaran:
                                    <span class="fw-bold">
                                        <?= $tampildataguru['mapel']; ?>
                                    </span>
                                </h1>
                                <h1 class="fs-5 ms-2 fw-light">
                                    Mengajar Sejak:
                                    <span class="fw-bold">
                                        <?= $tampildataguru['mengajar']; ?>
                                    </span>
                                </h1>
                                <h1 class="fs-5 ms-2 fw-light">
                                    Hobi:
                                    <span class="fw-bold">
                                        <?= $tampildataguru['hobi']; ?>
                                    </span>
                                </h1>
                                <p class="fs-5 text-center mt-3 fst-italic fw-light px-2">"
                                    <?= $tampildataguru['motto']; ?>"
                                </p>
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

    <!-- Profil Guru Section End -->

    <!-- Galeri Section Start -->

    <section id="galeri" class="position-relative">
        <div class="container py-5">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="fw-bold head-profil-galeri" data-aos="fade-up" data-aos-duration="500"
                        data-aos-delay="600">Galeri Kami</h1>
                </div>
            </div>
            <div class="row mt justify-content-center">

                <!-- Perulangan -->
                <?php
                    $ambildata = mysqli_query($koneksi, "SELECT * FROM tb_galery ORDER BY RAND() LIMIT 5");
                    while($tampildata = mysqli_fetch_assoc($ambildata)) {
                ?>

                <div class="col-10 col-md-6 col-lg-4" data-aos="zoom-out-down" data-aos-duration="500"
                    data-aos-delay="800">
                    <img src="assets/img/galeri/<?= $tampildata['galery_name']; ?>" alt="Image Galeri"
                        class="img-fuild galeri rounded-4 w-100 mt-4">
                </div>

                <?php

                    }
            
                ?>

                <div class="row text-center">
                    <div class="mt-5 mx-auto">
                        <a href="galeri.php" class="btn btn-semua-galeri fw-normal shadow" data-aos="zoom-in"
                            data-aos-duration="500" data-aos-delay="400">🤓 Lihat Semua Galery</a>
                    </div>
                </div>

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