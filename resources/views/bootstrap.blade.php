<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klon Bootstrap - Modifikasi</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.6.0/font/bootstrap-icons.css">
    @vite('resources/sass/app.scss')
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg bg-primary" data-bstheme="dark">
        <div class="container py-2 px-4">
            <a href="#" class="navbar-brand mb-0 h1">
                <img class="img-fluid" src="{{ Vite::asset('resources/images/logo-white.svg') }}" alt="logo" style="width: 40px;">
            </a>
            <button type="button" class="navbar-toggler" data-bstoggle="offcanvas" data-bs-target="#offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end bg-primary" id="offcanvasNavbar">
                <div class="offcanvas-header pb-0 px-4">
                    <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Bootstrap</h5>
                    <button type="button" class="btn-close" data-bsdismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pt-0 px-4">
                    <hr class="d-md-none text-white-50">
                    <ul class="navbar-nav flex-row flex-wrap">
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link active">Dokumentasi</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link">Contoh</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link">Ikon</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link">Tema</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link">Blog</a></li>
                    </ul>
                    <hr class="d-md-none text-white-50">
                    <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link active"><i
                                    class="bi-github"></i><small class="ms-2 d-mdnone">Github</small></a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link active"><i
                                    class="bi-twitter"></i><small class="ms-2 d-mdnone">Twitter</small></a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link active"><i
                                    class="bi-slack"></i><small class="ms-2 d-mdnone">Slack</small></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main -->
    <div class="bg-light mt-5" id="main">
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-md-5 order-md-2">
                    <img class="img-fluid" src={{ Vite::asset('resources/images/main.svg') }} alt="logo utama">
                </div>
                <div class="col-md-7 order-md-1">
                    <h1 class="mt-4 display-3 text-danger">Bangun situs
                        responsif dengan Bootstrap</h1>
                    <p class="fs-5 mt-3">Desain dan sesuaikan situs mobilefirst yang responsif dengan Bootstrap, toolkit
                        sumber terbuka paling populer
                        di dunia, dilengkapi dengan variabel dan mixins Sass, sistem grid responsif,
                        komponen prebuilt yang lengkap, dan plugin JavaScript yang kuat.</p>
                    <div class="row">
                        <div class="d-flex flex-column flex-md-row">
                            <button type="button" class="btn bg-success textwhite btn-lg mb-3 me-md-3 px-4 py-3">Mulai
                                Sekarang</button>
                            <button type="button" class="btn btn-outline-dark btn-lg mb-3 px-4 py-3">Unduh</button></div>
                    </div>
                    <div class="text-muted">
                        Saat ini <strong>v5.3.0-alpha2.</strong> · <a href="#">Dokumentasi v4.6.x</a> · <a
                            href="#">Semua rilis</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap Icons -->
    <div id="bs-icons">
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <i class="bi bi-subtract fs-2 bg-warning py-2 px-3 rounded-3 text-white"></i>
                    </div>
                    <h2 class="display-5 mb-3">Personalisasi dengan <br />Bootstrap Icons</h2>
                    <p class="fs-5"><a href="#">Bootstrap Icons</a> adalah
                        pustaka ikon SVG sumber terbuka dengan lebih dari 1.800 glyph, yang terus
                        bertambah setiap rilis. Mereka dirancang untuk bekerja di proyek apa pun, baik
                        Anda menggunakan Bootstrap atau tidak. Gunakan sebagai SVG atau font ikon—
                        keduanya memberikan skala vektor dan kustomisasi yang mudah melalui CSS.</p>
                    <a class="icon-link icon-link-hover lead fw-semibold mb-5" href="#">
                        Dapatkan Bootstrap Icons
                        <i class="bi bi-arrow-right mb-2"></i>
                    </a>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ Vite::asset('resources/images/bs-icons.png') }}" alt="Bootstrap Icons">
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div id="footer" class="bg-light py-5">
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-lg-3 mb-5">
                    <a href="#" class="logo text-decoration-none">
                        <div class="d-flex"><img class="img-fluid" src={{ Vite::asset('resources/images/bs-themes.png') }} alt="Logo Bootstrap" style="width: 40px;">
                            <div class="fs-5 ms-2 text-black">Bootstrap</div>
                        </div>
                    </a>
                    <div class="mt-2 text-muted">
                        <small>Dibuat dengan cinta oleh tim <a href="#" class="text-black">Bootstrap</a> dengan bantuan
                            <a href="#" class="textblack">kontributor kami</a>.</small>
                    </div>
                    <div class="mt-2 text-muted">
                        <small>Lisensi kode <a href="#" class="textblack">MIT</a>, dokumentasi <a href="#"
                                class="text-black">CC BY
                                3.0</a>.</small>
                    </div>
                    <div class="mt-2 text-muted">
                        <small>Saat ini v5.3.0-alpha2.</small>
                    </div>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-5">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Beranda</a></li>
                        <li class="mb-2"><a href="#">Dokumentasi</a></li>
                        <li class="mb-2"><a href="#">Contoh</a></li>
                        <li class="mb-2"><a href="#">Ikon</a></li>
                        <li class="mb-2"><a href="#">Tema</a></li>
                        <li class="mb-2"><a href="#">Blog</a></li>
                        <li class="mb-2"><a href="#">Toko Swag</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-5">
                    <h5>Panduan</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Memulai</a></li>
                        <li class="mb-2"><a href="#">Template pemula</a></li>
                        <li class="mb-2"><a href="#">Webpack</a></li>
                        <li class="mb-2"><a href="#">Parcel</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html
