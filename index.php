<?php
include './admin/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Masjid Baitul Hikmah</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/baitulbulat.png" rel="icon" />


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <h1 class="text-light">
                    <a href="index.html"><span>BAITUL HIKMAH</span></a>
                </h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Sejarah</a></li>
                    <li><a class="nav-link scrollto" href="#services">Berita</a></li>
                    <li>
                        <a class="nav-link scrollto" href="#portfolio">Galeri</a>
                    </li>
                    <li><a class="nav-link scrollto" href="#team">Anggota</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li>
                        <a class="getstarted scrollto" href="#about">Mulai</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Masjid Baitul Hikmah</h1>
                    <h2>
                        Gamping Kidul RT 01/RW 16 Ambarketawang, Gamping, Sleman,
                        Yogyakarta
                    </h2>
                    <div>
                        <a href="#about" class="btn-get-started scrollto">Mulai</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">

                    <img src="assets/img/masjid.jpg" class="img-fluid animated" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                        <img src="assets/img/baitulbulat.png" class="img-fluid" alt="" data-aos="zoom-in" />
                    </div>
                    <div class="col-lg-6 pt-5 pt-lg-0">
                        <h3 data-aos="fade-up">Sejarah Singkat</h3>
                        <p data-aos="fade-up" data-aos-delay="100">
                            Masjid Baitul Hikmah berada di Gamping Kidul RT 01 RW 16 Ambarketawang Gamping Sleman
                            Yogyakarta
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt iure non ipsa animi. Iure,
                            modi
                            eum obcaecati rerum maxime illum vero amet repudiandae! Esse dicta natus minus autem tenetur
                            quos.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod maxime, similique eum rem
                            consequatur
                            ab culpa ipsa quia hic ipsam. Repellat possimus aut hic autem saepe facilis laudantium eaque
                            quisquam.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium dignissimos deserunt
                            sapiente iure?
                            Suscipit consectetur quae dolorem asperiores quia distinctio debitis mollitia quidem
                            praesentium possimus
                            beatae, ipsam magni nihil repellat.
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>BERITA</h2>
                    <p>Berita Terbaru Masjid Baitul Hikmah</p>
                </div>

                <div class="row">
                    <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id LIMIT 4");
                  while($rw = mysqli_fetch_array($query)){
                  ?>
                    <div class="col-md-12 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div><img class="img-fluid" src="./admin/assets/upload_gambar/berita/<?= $rw['gambar']?>"
                                    alt="" style="width: 400px; height: 250px;"></div>
                            <br>
                            <h4 class="title"><a href=""><?= $rw['judul']?></a></h4>
                            <p class="description">
                                <?= $rw['uraian']?>
                            </p>
                            <br>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#exampleModal<?php echo $rw['id']?>">Read More</button>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $rw['id']?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Read More</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <?php 
                                            $id = $rw['id'];
                                            $query1 = mysqli_query($koneksi, "SELECT * FROM berita WHERE id=$id");
                                            while($row = mysqli_fetch_array($query1)){
                                            ?>
                                <div class="modal-body">
                                    <center>
                                        <img src="./admin/assets/upload_gambar/berita/<?= $row['gambar'] ?>"
                                            style="height:250px;" class="img-fluid rounded-start" alt="...">
                                        <h5 class="card-title"><?= $row['judul']?></h5>
                                        <p class="card-text"><?= $row['uraian']?></p>
                                    </center>
                                    <?php }?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-warning" href="berita.php" role="button">Lihat Selengkapnya....</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>GALERI</h2>
                    <p>Galeri Kegiatan Masjid Baitul Hikmah</p>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM galeri ORDER BY id LIMIT 6");
                  while($rw = mysqli_fetch_array($query)){
                  ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="./admin/assets/upload_gambar/galeri/<?= $rw['gambar']?>" class="img-fluid"
                                style="width: 500px; height: 300px;">
                            <div class="portfolio-links">
                                <a href="./admin/assets/upload_gambar/galeri/<?= $rw['gambar']?>"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                        class=" bi bi-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-warning" href="galeri.php" role="button">Lihat Selengkapnya....</a>
                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>F.A.Q</h2>
                    <p>Frequently Asked Questions</p>
                </div>

                <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">
                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">
                            Dimanakah Alamat Masjid Baitul Hikmah?
                            <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Gamping Kidul RT01 RW16 Ambarketawang Gamping Sleman Yogyakarta.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">
                            Apakah Masjid Biatul Hikmah Menerima Sumbangan Uang Atau Barang? <i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Masjid Biatul Hikmah Selalu Menerima Bantuan Dari Jamaahnya Dalam Bentuk Apapun Dan
                                Dengan Jumlah Berapapun.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">
                            Dengan Cara Seperti Apa Kita Dapat Memberi Bantuan Ke Masjid Baitul Hikmah? <i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dengan Cara Menghubungi Pengurus Takmir Masjid Baitul Hikmah
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">
                            Siapakah Takmir Masjid Baitul Hikmah?
                            <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Bapak Supariyanto.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">
                            Siapakah Bendahara Masjid Baitul Hikmah <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Bapak Harsono
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">
                            Apa Nama Organisasi Remaja Masjid Baitul Hikmah
                            <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Nama Organisasi Remaja Masjid Baitul Hikmah Adalah ARIMBHI
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End F.A.Q Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Pengurus Takmir</h2>
                    <p>Pengurus Takmir Masjid Baitul Hikmah</p>
                </div>

                <div class="row">
                    <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM kepengurusan ORDER BY id LIMIT 4");
                  while($rw = mysqli_fetch_array($query)){
                  ?>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="member">
                            <img src="./admin/assets/upload_gambar/kepengurusan/<?= $rw['gambar']?>" class="img-fluid"
                                style="width: 310px; height: 400px" alt="" />
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?= $rw['nama']?></h4>
                                    <span><?= $rw['jabatan']?></span>
                                    <span><?= $rw['keterangan']?></span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-warning" href="kepengurusan.php" role="button">Lihat Selengkapnya....</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team Section -->

        <!-- ======= Contact Us Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Contact Us</h2>
                    <p>Contact us the get started</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Gg. Ps, RT. 01 RW. 016, Gamping Kidul, Ambarketawang, Kec. Gamping, Kabupaten Sleman,
                                    Daerah Istimewa Yogyakarta 55294</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>baitulhikmah@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>0891234567890</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.8894723204967!2d110.32191667440222!3d-7.801524877442286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af803dbb3b92f%3A0x1ad0e9e683100005!2sMasjid%20Baitul%20Hikmah!5e0!3m2!1sid!2sid!4v1702664222428!5m2!1sid!2sid"
                                frameborder="0" style="border: 0; width: 100%; height: 290px" allowfullscreen></iframe>
                            <br><br><br>
                            <idiv>
                                <h2 style="text-align: center;">KONTAK KAMI</h2>
                                <a href=""><img src="assets/img/wa-button.png" alt=""
                                        style="display: block; margin-left: auto; margin-right: auto; width: 400px;"></a>
                            </idiv>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Us Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>MASJID BAITUL HIKMAH</h3>
                        <p>
                            Gg. Ps, RT. 01 RW. 016 <br />
                            Gamping Kidul, Ambarketawang<br />
                            Kec. Gamping, Kabupaten Sleman,
                            Daerah Istimewa Yogyakarta 55294 <br /><br />
                            <strong>Phone:</strong> 08912345533<br />
                            <strong>Email:</strong> baitul.com<br />
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Navbar Link</h4>
                        <ul>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#hero">Home</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#about">Sejarah</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#services">Berita</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#portofolio">Galeri</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#team">Anggota</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#contact">Kontak</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Pihak Yang Terlibat</h4>
                        <ul>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Takmir Masjid</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">ARIMBHI</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Jamaah Masjid</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Madia Sosial Masjid</h4>
                        <p>
                            Madia Sosial Masjid Baitul Hikmah Yang Dapat Di Hubungi
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Yoga Aditya Prabowo</span></strong> 2023-2024
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>