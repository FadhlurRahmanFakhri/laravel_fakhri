<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Web Pelaminan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans:wght@400;500;600&family=Petit+Formal+Script&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target="#navBar" id="weddingHome">

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid sticky-top px-0">
        <div class="container-fluid">
            <div class="container px-0">
                <nav class="navbar navbar-light navbar-expand-xl" id="navBar">
                    <a href="index.html" class="navbar-brand">
                        <h4 class="text-primary display-6 fw-bold mb-0">Yasnur<strong class="text-secondary"> </strong>Pelaminan</h4>
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse py-3" id="navbarCollapse">
                        <div class="navbar-nav mx-auto border-top">
                            <a href="#weddingHome" class="nav-item nav-link active">Beranda</a>
                            <a href="#weddingAbout" class="nav-item nav-link">Tentang Kami</a>
                            <a href="#weddingStory" class="nav-item nav-link">Kata Customer</a>
                            <a href="#weddingTimeline" class="nav-item nav-link">Waktu Pemesanan</a>
                            <a href="#weddingGallery" class="nav-item nav-link">Galeri</a>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                            <a href="#weddingRsvp" class="btn btn-primary btn-primary-outline-0 py-2 px-4 ms-4">Pemesanan</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->



    <!-- Carousel Start -->
    <div class="container-fluid carousel-header px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/Beranda.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3 mx-auto animated zoomIn" style="max-width: 900px;">
                            <div class="d-inline-block border-end-0 border-start-0 border-secondary p-2 mb-4" style="border-style: double;">
                                <h4 class="text-white text-uppercase fw-bold mb-0" style="letter-spacing: 3px;">Pelaminan Minimalis, Kenangan Maksimalis</h4>
                            </div>
                            <h1 class="display-1 text-capitalize text-white mb-3">Yasnur <i class=" "></i>Pelaminan</h1>
                            <div class="d-inline-block border-end-0 border-start-0 border-secondary p-2 mb-5" style="border-style: double;">
                                <h4 class="text-white text-uppercase fw-bold mb-0" style="letter-spacing: 3px;">Sejak 1997</h4>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-primary btn-primary-outline-0 py-3 px-5" href="#">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/Gambar4.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3 mx-auto animated zoomIn" style="max-width: 900px;">
                            <div class="d-inline-block border-end-0 border-start-0 border-secondary p-2 mb-5" style="border-style: double;">
                                <h4 class="text-white text-uppercase fw-bold mb-0" style="letter-spacing: 3px;">Pelaminan Minimalis, Kenangan Maksimalis</h4>
                            </div>
                            <h1 class="display-1 text-capitalize text-white mb-3">Yasnur <i class=" "></i>Pelaminan</h1>
                            <div class="d-inline-block border-end-0 border-start-0 border-secondary p-2 mb-5" style="border-style: double;">
                                <h4 class="text-white text-uppercase fw-bold mb-0" style="letter-spacing: 3px;">Sejak 1997</h4>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-primary btn-primary-outline-0 py-3 px-5" href="#">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/Beranda2.jpg" class="img-fluid bg-secondary" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3 mx-auto animated zoomIn" style="max-width: 900px;">
                            <div class="d-inline-block border-end-0 border-start-0 border-secondary p-2 mb-4" style="border-style: double;">
                                <h4 class="text-white text-uppercase fw-bold mb-0" style="letter-spacing: 3px;">Pelaminan Minimalis, Kenangan Maksimalis</h4>
                            </div>
                            <h1 class="display-1 text-capitalize text-white mb-3">Yasnur <i class=" "></i>Pelaminan</h1>
                            <div class="d-inline-block border-end-0 border-start-0 border-secondary p-2 mb-5" style="border-style: double;">
                                <h4 class="text-white text-uppercase fw-bold mb-0" style="letter-spacing: 3px;">Sejak 1997</h4>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-primary btn-primary-outline-0 py-3 px-5" href="#">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Hello! Start -->
    <div class="container-fluid position-relative py-5" id="weddingAbout">
        <div class="position-absolute" style="top: -35px; right: 0;">
            <img src="img/tamp-bg-1.png" class="img-fluid" alt="">
        </div>
        <div class="position-absolute" style="top: -10px; left: 0; transform: rotate(150deg);">
            <img src="img/tamp-bg-1.png" class="img-fluid" alt="">
        </div>
        <div class="container position-relative py-5">
            <div class="mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800;">
                <h1 class="text-primary display-1">Selamat Datang</h1>
                <h4 class="text-dark mb-0">Ciptakan Momen Anda Bersama Kami</h4>
            </div>
        </div>
    </div>
    <!-- Hello! End -->


    <!-- About Start -->
    <div class="container-fluid position-relative overflow-hidden bg-secondary py-5">
        <img src="img/bg-flower.png" class="img-fluid position-absolute top-0" style="right: -15px; transform: rotate(270deg); opacity: 0.5;" alt="">
        <img src="img/bg-flower.png" class="img-fluid position-absolute" style="bottom: 10px; left: -15px; transform: rotate(90deg); opacity: 0.5;" alt="">
        <div class="container py-5 position-relative">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="border-white bg-primary" style="border-style: double;">
                        <img src="img/TentangKami.jpg" class="img-fluid w-100" alt="">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <h5 class="text-uppercase text-primary fw-bold mb-4">Tentang Kami</h5>
                        <h1 class="display-5 text-white mb-4">Kami Menciptakan Setiap Momen Anda</h1>
                        <p class="text-white fs-5 mb-4">Selamat datang di Yasnur Pelaminan, di mana impian pernikahan Anda menjadi kenyataan.
                            Kami adalah sebuah usaha pelaminan yang didirikan oleh keluarga sejak tahun 1997 dengan cinta dan dedikasi untuk membantu Anda merayakan momen istimewa dalam hidup Anda dengan kemewahan dan keindahan.
                            Yasnur Pelaminan tidak hanya sebuah usaha, tetapi juga merupakan bagian dari warisan keluarga kami. Dengan keahlian yang telah diturunkan dari generasi ke generasi, kami bangga menjadi bagian dari setiap perjalanan cinta yang dihormati oleh keluarga kami.
                            Kami memahami bahwa setiap pasangan memiliki visi unik mereka sendiri untuk pernikahan mereka, dan kami berkomitmen untuk menghadirkan konsep pelaminan yang sesuai dengan impian Anda. Dengan sentuhan seni dan detail yang cermat, kami menciptakan pelaminan yang mencerminkan keindahan dan keanggunan, menciptakan latar belakang sempurna untuk hari yang penuh makna ini.
                        </p>
                        <div class="d-flex mt-5">
                            <div class="d-flex align-items-center">
                                <div class="d-inline-block ms-4 me-3">
                                    <i class="fa fa-phone fa-2x text-success border border-2 border-white p-2"></i>
                                </div>
                                <div class="d-flex flex-column flex-nowrap">
                                    <h5 class="text-dark fw-bold mb-2">Hubungi Kami</h5>
                                    <h4 class="text-primary mb-0">085272237521</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Ulasan -->
    <div class="container-fluid story position-relative py-5" id="weddingStory">
        <div class="position-absolute" style="top: -35px; right: 0;">
            <img src="img/tamp-bg-1.png" class="img-fluid" alt="">
        </div>
        <div class="position-absolute" style="top: -15px; left: 0; transform: rotate(150deg);">
            <img src="img/tamp-bg-1.png" class="img-fluid" alt="">
        </div>
        <div class="container position-relative py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="text-uppercase text-primary fw-bold mb-4">Ulasan</h5>
                <h1 class="display-4">Kata Customer</h1>
            </div>
            <div class="story-timeline">
                <div class="row wow fadeInUp" data-wow-delay="0.2s">
                    <div class="col-md-6 text-end border-0 border-top border-end border-secondary p-4">
                        <div class="d-inline-flex align-items-center h-100">
                            <img src="img/Customer1.jpg" class="img-fluid w-100 img-border" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 border-start border-top border-secondary p-4 pe-0">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                            <h4 class="mb-2 text-dark">Ilhamdi dan Cici</h4>
                            <p class="text-uppercase text-primary mb-2" style="letter-spacing: 3px;">20 Feb 2017</p>
                            <p class="m-0 fs-5">"Kami sangat bersyukur telah memilih Yasnur Pelaminan untuk pernikahan kami. Dekorasi pelaminan mereka sangat memukau dan sesuai dengan tema yang kami impikan. 
                                Tim Yasnur Pelaminan sangat profesional dan perhatian terhadap setiap detail. Semua tamu kami terkesan dengan keindahan pelaminan kami. 
                                Terima kasih Yasnur Pelaminan atas kontribusi indah untuk hari spesial kami!"</p>
                        </div>
                    </div>
                </div>
                <div class="row flex-column-reverse flex-md-row wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-md-6 text-end border-end border-top border-secondary p-4 ps-0">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                            <h4 class="text-dark mb-2">Oky dan Winda</h4>
                            <p class="text-uppercase text-primary mb-2" style="letter-spacing: 3px;">14 Jul 2019</p>
                            <p class="m-0 fs-5">"Yasnur Pelaminan adalah pilihan yang sangat bijak untuk pernikahan kami. Tim mereka sangat profesional, terampil, dan penuh perhatian. 
                                Kami merasa sangat dihargai sebagai klien. Pelaminan mereka tidak hanya cantik, tetapi juga mencerminkan kepribadian dan cerita cinta kami. 
                                Kami sangat senang dengan hasilnya dan akan selalu menyimpan kenangan indah ini."</p>
                        </div>
                    </div>
                    <div class="col-md-6 border-start border-top border-secondary p-4">
                        <div class="d-inline-flex align-items-center h-100">
                            <img src="img/Mempelai5.jpg" class="img-fluid w-100 img-border" alt="">
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay="0.4s">
                    <div class="col-md-6 text-end border-end border-top border-secondary p-4 ps-0">
                        <div class="d-inline-flex align-items-center h-100">
                            <img src="img/Mempelai9.jpg" class="img-fluid w-100 img-border" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 border-start border-top border-secondary p-4 pe-0">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                            <h4 class="text-dark mb-2">Ade dan Rhida</h4>
                            <p class="text-uppercase text-primary mb-2" style="letter-spacing: 3px;">29 Okt 2021</p>
                            <p class="m-0 fs-5">"Pelaminan kita dari Yasnur Pelaminan, bener-bener gak mengecewakan. 
                                Bagus banget, gak cuman di foto, tapi pas kita lihat langsung, wah, keren banget! 
                                Timnya juga ramah-ramah, bantu banget, jadi gak repot mikirin detail-detailnya."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ulasan End -->


    <!-- Lokasi -->
    <div class="container-fluid wedding-timeline bg-secondary position-relative overflow-hidden py-5" id="weddingTimeline">
        <div class="position-absolute" style="top: 50%; left: -100px; transform: translateY(-50%); opacity: 0.5;">
            <img src="img/wedding-bg.png" class="img-fluid" alt="">
        </div>
        <div class="position-absolute" style="top: 50%; right: -160px; transform: translateY(-50%); opacity: 0.5; rotate: 335deg;">
            <img src="img/wedding-bg.png" class="img-fluid" alt="">
        </div>
        <div class="container py-5">
            <div class="text-center mb-5">
                <h1 class="display-4 text-white">Waktu Pemesanan</h1>
            </div>
            <div class="position-relative wedding-content">
                <div class="row g-4">
                    <div class="col-6 col-md-6 col-xl-3 border border-bottom-0">
                        <div class="text-center p-3 wow fadeIn" data-wow-delay="0.1s">
                            <div class="mb-4 p-3 d-inline-flex">
                                <i class="fas fa-menorah text-primary fa-3x"></i>
                            </div>
                            <p class="text-primary">{{$lokasi[0]->jam}}</p>
                            <h3 class="text-dark">Senin-Selasa</h3>
                            <p class="text-dark">{{$lokasi[0]->isi}}</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-xl-3 border border-top-0 border-start-0">
                        <div class="text-center p-3 wow fadeIn" data-wow-delay="0.3s">
                            <div class="mb-4 p-3 d-inline-flex">
                                <i class="fas fa-photo-video text-primary fa-3x"></i>
                            </div>
                            <p class="text-primary">{{$lokasi[1]->jam}}</p>
                            <h3 class="text-dark">Rabu-Kamis</h3>
                            <p class="text-dark">{{$lokasi[1]->isi}}</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-xl-3 border border-bottom-0 border-end-0">
                        <div class="text-center p-3 wow fadeIn" data-wow-delay="0.5s">
                            <div class="mb-4 p-3 d-inline-flex">
                                <i class="fas fa-dungeon text-primary fa-3x"></i>
                            </div>
                            <p class="text-primary">{{$lokasi[2]->jam}}</p>
                            <h3 class="text-dark">Jumat</h3>
                            <p class="text-dark">{{$lokasi[2]->isi}}</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-xl-3 border border-top-0">
                        <div class="text-center p-3 wow fadeIn" data-wow-delay="0.7s">
                            <div class="mb-4 p-3 d-inline-flex">
                                <i class="fas fa-ring text-primary fa-3x"></i>
                            </div>
                            <p class="text-primary">{{$lokasi[3]->jam}}</p>
                            <h3 class="text-dark">Sabtu-Minggu</h3>
                            <p class="text-dark">{{$lokasi[3]->isi}}</p>
                        </div>
                    </div>
                </div>
                <div class="position-absolute heart-circle " style="bottom: 0; left: -18px;">
                    <div class="border border-2 border-primary rounded-circle p-1 bg-secondary"></div>
                </div>
                <div class="position-absolute heart-circle" style="top: 18px; right: -17px;">
                    <div class="border border-2 border-primary rounded-circle p-1 bg-secondary"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Lokasi End -->


<!-- Gallery Start -->
<div class="container-fluid gallery position-relative py-5" id="weddingGallery">
            <div class="position-absolute" style="top: -95px; right: 0;">
                <img src="img/tamp-bg-1.png" class="img-fluid" alt="">
            </div>
            <div class="position-absolute" style="top: -80px; left: 0; transform: rotate(150deg);">
                <img src="img/tamp-bg-1.png" class="img-fluid" alt="">
            </div>
            <div class="container position-relative py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-2 text-dark">Galeri Pernikahan</h1>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img class="img-fluid w-100" src="img/Mempelai1.jpg" alt="">
                                <div class="hover-style"></div>
                                <div class="search-icon">
                                    <a href="img/Mempelai1.jpg" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-plus btn-primary btn-primary-outline-0 p-3"></i></a>
                                </div>
                            </div>
                            <div class="gallery-overlay bg-light border-secondary border-top-0 p-4" style="border-style: double;">
                                <h5>Wedding at home</h5>
                                <p class="text-dark mb-0">7 Juli 2019</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img class="img-fluid w-100" src="img/Mempelai5.jpg" alt="">
                                <div class="hover-style"></div>
                                <div class="search-icon">
                                    <a href="img/Mempelai5.jpg" data-lightbox="Gallery-2" class="my-auto"><i class="fas fa-plus btn-primary btn-primary-outline-0 p-3"></i></a>
                                </div>
                            </div>
                            <div class="gallery-overlay bg-light border-secondary border-top-0 p-4" style="border-style: double;">
                                <h5>Wedding at home</h5>
                                <p class="text-dark mb-0">14 Juli 2019</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img class="img-fluid w-100" src="img/Mempelai3.jpg" alt="">
                                <div class="hover-style"></div>
                                <div class="search-icon">
                                    <a href="img/Mempelai3.jpg" data-lightbox="Gallery-3" class="my-auto"><i class="fas fa-plus btn-primary btn-primary-outline-0 p-3"></i></a>
                                </div>
                            </div>
                            <div class="gallery-overlay bg-light border-secondary border-top-0 p-4" style="border-style: double;">
                                <h5>Wedding at home</h5>
                                <p class="text-dark mb-0">7 Juli 2019</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img class="img-fluid w-100" src="img/Mempelai4.jpg" alt="">
                                <div class="hover-style"></div>
                                <div class="search-icon">
                                    <a href="img/Mempelai4.jpg" data-lightbox="Gallery-4" class="my-auto"><i class="fas fa-plus btn-primary btn-primary-outline-0 p-3"></i></a>
                                </div>
                            </div>
                            <div class="gallery-overlay bg-light border-secondary border-top-0 p-4" style="border-style: double;">
                                <h5>Wedding at home</h5>
                                <p class="text-dark mb-0">7 Juli 2019</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img class="img-fluid w-100" src="img/Mempelai6.jpg" alt="">
                                <div class="hover-style"></div>
                                <div class="search-icon">
                                    <a href="img/Mempelai6.jpg" data-lightbox="Gallery-5" class="my-auto"><i class="fas fa-plus btn-primary btn-primary-outline-0 p-3"></i></a>
                                </div>
                            </div>
                            <div class="gallery-overlay bg-light border-secondary border-top-0 p-4" style="border-style: double;">
                                <h5>Wedding on the mosque</h5>
                                <p class="text-dark mb-0">10 Juli 2019</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img class="img-fluid w-100" src="img/Mempelai7.jpg" alt="">
                                <div class="hover-style"></div>
                                <div class="search-icon">
                                    <a href="img/Mempelai7.jpg" data-lightbox="Gallery-6" class="my-auto"><i class="fas fa-plus btn-primary btn-primary-outline-0 p-3"></i></a>
                                </div>
                            </div>
                            <div class="gallery-overlay bg-light border-secondary border-top-0 p-4" style="border-style: double;">
                                <h5>Wedding on the mosque</h5>
                                <p class="text-dark mb-0">26 Oktober 2021</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img class="img-fluid w-100" src="img/Mempelai8.jpg" alt="">
                                <div class="hover-style"></div>
                                <div class="search-icon">
                                    <a href="img/Mempelai8.jpg" data-lightbox="Gallery-7" class="my-auto"><i class="fas fa-plus btn-primary btn-primary-outline-0 p-3"></i></a>
                                </div>
                            </div>
                            <div class="gallery-overlay bg-light border-secondary border-top-0 p-4" style="border-style: double;">
                                <h5>Wedding on the mosque</h5>
                                <p class="text-dark mb-0">26 Oktober 2021</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img class="img-fluid w-100" src="img/Mempelai9.jpg" alt="">
                                <div class="hover-style"></div>
                                <div class="search-icon">
                                    <a href="img/Mempelai9.jpg" data-lightbox="Gallery-8" class="my-auto"><i class="fas fa-plus btn-primary btn-primary-outline-0 p-3"></i></a>
                                </div>
                            </div>
                            <div class="gallery-overlay bg-light border-secondary border-top-0 p-4" style="border-style: double;">
                                <h5>Wedding on the mosque</h5>
                                <p class="text-dark mb-0">26 Oktober 2021</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeIn" data-wow-delay="0.2s">
                        <a class="btn btn-primary btn-primary-outline-0 py-3 px-5 me-2" href="#">View All <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery end -->



    <!-- Form Start -->
    <div class="container-fluid RSVP-form py-5" id="weddingRsvp">
        <div class="container py-5">
            <div class="mb-5 text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-2 text-primary">Pemesanan</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="p-5 border-secondary position-relative" style="border-style: double;">
                        <div class="fw-bold text-primary bg-white d-flex align-items-center justify-content-center position-absolute border-secondary p-2 wow fadeIn" data-wow-delay="0.1s" style="width: 75%; border-style: double; top: 0; left: 50%; transform: translate(-50%, -50%);">
                            Ayo Pesan Sekarang,Kami Menunggu Pemesanan Anda!
                        </div>
                                <div class="col-12 text-center wow fadeIn" data-wow-delay="0.1s">
                                    <button class="btn btn-primary btn-primary-outline-0 py-3 px-5"><a href="https://wa.link/njre5k" class="nav-item nav-link">Pesan sekarang</a></button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="row g-5 justify-content-center text-center">
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="p-4 border-secondary" style="border-style: double;">
                            <h4>Hubungi Kami</h4>
                            <a href="#" class="text-dark">085272237521</a>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="p-4 border-secondary" style="border-style: double;">
                            <h4>Alamat</h4>
                            <p class="mb-0 text-dark">
                                Jl. By Pass, Koto Panjang Ikua Koto, Kec. Koto Tangah, Kota Padang, Sumatera Barat
                            </p>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.2s">
                        <div class="border-secondary" style="border-style: double;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.381475021558!2d100.36144677448043!3d-0.8478692353030848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4c792cc6748b5%3A0x7089f6571c8dd7c4!2syasnur%20pelaminan!5e0!3m2!1sid!2sid!4v1704707474245!5m2!1sid!2sid" width="1280" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->


    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5 justify-content-center">
                <div class="col-lg-4 text-start">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Terima Kasih</h4>
                        <a href="#" class="btn-link"> Tentang Kami</a>
                        <a href="#" class="btn-link"> Galeri</a>
                        <a href="#" class="btn-link"> Kata Customer</a>
                        <a href="#" class="btn-link"> Waktu Pemesanan</a>
                        <a href="#" class="btn-link"> Pemesanan</a>
                        <a href="#" class="btn-link"> Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="footer-item">
                        <h4 class="mb-4 text-white">Yasnur <strong class="text-primary"> </strong>Pelaminan</h4>
                        <p class="text-white">Terima kasih telah memilih Yasnur Pelaminan sebagai bagian dari perjalanan pernikahan Anda.
                            Kami sangat bersemangat untuk berbagi kebahagiaan Anda dan menciptakan momen-momen abadi yang akan dikenang sepanjang masa.
                            Selamat datang di Yasnur Pelaminan, di mana impian pernikahan menjadi kenyataan.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 text-end">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="my-4 text-white">Hubungi Kami</h4>
                        <a href="#" class="btn-link"><i class="fas fa-phone text-secondary me-2"></i> 085272237521</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->




    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Yasnur Pelaminan</a>, All right reserved.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>