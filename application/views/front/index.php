<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title ?></title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>front/img-sepeda/logo2.png" rel="icon">
    <link href="<?= base_url() ?>front/img-sepeda/logo2.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Vendor CSS Files -->

    <!-- <link rel="stylesheet" href="<?= base_url() ?>front/assets/dist/sweetalert2.min.css"> -->
    <link href="<?= base_url() ?>front/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>front/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>front/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>front/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>front/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>front/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">



    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>front/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart - v1.12.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="<?= base_url() ?>" class="logo d-flex align-items-center">
                <img src="<?= base_url() ?>front/img-sepeda/logodoang.png" alt="">
                <span>RENT.BIKE</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Product</a></li>
                   
                    <li><a class="nav-link scrollto" href="#contact">Contact </a></li>
                    <li style="margin-left: 2%;">

                        <!-- Basic Modal -->
                        <?php if ($this->session->userdata('email_pelanggan') == "") { ?>
                            <div class="d-grid gap-2 mt-3 my-3">
                                <button type="button" class="btn2"  data-bs-toggle="modal" data-bs-target="#basicModal">
                                      Login  
                                </button>
                            </div>
                    </li>
                <?php } else { ?>


                    <li class="dropdown"><a>Welcome,<b> <?= $this->session->userdata('nama_pelanggan') ?></b> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url('profile') ?>">Edit Profile</a></li>
                            <li><a href="<?= base_url('booking-pelanggan') ?>">Riwayat Booking</a></li>
                            <li><a href="<?= base_url('profile') ?>">Hapus Akun</a></li>
                            <li><a href="<?= base_url('home/logout') ?>"><i class="bi bi-arrow-right"></i> Keluar</a></li>
                        </ul>
                    </li>

                <?php } ?>
                <!-- End Basic Modal-->


                </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->




    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <?php
            echo validation_errors('<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>', '</div>');

            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-massage">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }

            if ($this->session->flashdata('error')) {
                echo '<div class="alert alert-danger alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('error');
                echo '</div>';
            } ?>
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
            
                    <h1 data-aos="fade-up"><?= $title ?></h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Sewa Sepeda Cukup dari rumah saja bersama RENT.BIKE</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>About</span>
                               <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="<?= base_url() ?>front/img-sepeda/sepeda1.png" style="width: 500px; height: 500px;" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            

            <div class="container" data-aos="fade-up">
              <header class="section-header">
               <p>About</p>
               </header>
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="400">
                        <div class="content">
                            <h3>Siapa Kami ?</h3>
                            <h2>Kami adalah salah satu rental sepeda terbaik, dan kami menawarkan jasa rental sepeda terpercaya di daerah Depok.</h2>
                            <p>
                                Setiap unit armada kami selalu mendapat perawatan rutin dan maksimal. Ketika anda menggunakan layanan kami, dipastikan bahwa sepeda dalam kondisi sudah bersih dan dalam performa yang prima.
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="#services" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Sewa Sekarang</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="<?= base_url() ?>front/img-sepeda/sepeda5.png" style="width: 500px; height: 500px; class="img-fluid" alt="">
                    </div>

                </div>
            </div>

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="<?= base_url() ?>front/img-sepeda/sepeda4.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="400">
                        <div class="content">
                            <h3>Sepeda Anda Jarang Digunakan?</h3>
                            <h2>Punya sepeda tapi nganggur? Saatnya serahkan semangatmu dan mulai berbisnis dari rumah.  </h2>
                            <p>
                            Sewakan sepeda Anda yang jarang digunakan kepada mereka yang ingin menggunakannya. Buka usaha sewa sepeda dari mana saja dan dapatkan pemasukan tambahan setiap hari. 
                            </p>
                            <div class="entry-content">
                                            <button type="button" class="btn2" data-toggle="modal" data-target="#loginDulu">Daftarkan Sepeda Anda</button>
                                        </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- End About Section -->
         <!-- Login Dulu -->
         <div class="modal fade" id="loginDulu" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <div class="text-center my-3">
                                        <img src="<?= base_url() ?>front/img-sepeda/logo2.png" style="width: 150px; height: 100;">
                                    </div>
                                    <h4 class="card-title text-center pb-0 fs-4">Login Ke Akun Anda</h4>
                                </div>


                                <?php echo form_open('home'); ?>


                                <div class="col-12">
                                    <label for="yourUsername" class="form-label">Email</label>
                                    <div class="input-group has-validation">
                                        <input type="email" name="email_pelanggan" class="form-control" id="yourUsername" placeholder="Masukan Email Anda" required>
                                        <div class="invalid-feedback">Please enter your Email.</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Masukan Password Anda" required>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                </div>

                                <br>
                                <div class="col-12">
                                    <button class="btn3 w-100" type="submit">Login sebagai Pemilik</button>
                                </div>

                                <?php echo form_close(); ?>
                                <br>
                                <br>
                                <div class="col-12">
                                    <p class="small mb-0">Belum punya akun ? <button type="button" class="btn2" data-bs-toggle="modal" data-bs-target="#tambahpelanggan">
                                            Daftar Akun Anda
                                        </button></p>
                                </div>
                                <!-- <div class="col-12">
                                    <p class="small mb-0">Belum punya akun ? <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahpelanggan">
                                            Daftar Akun Anda
                                        </button></p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======= Values Section ======= -->
        <section id="values" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">

                    <p>Apa yang kami Sediakan ?</p>
                </header>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <img src="<?= base_url() ?>front/img-sepeda/1.avif" style="width: 300px; height: 250px;"class="img-fluid" alt="">
                            <h3>Perental Terdekat</h3>
                            <p>Perental kami sangat beragam dan tersebar diseluruh wilayah. Sehingga Anda akan mudah untuk mendapatkan sepeda yang anda inginkan.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="box">
                            <img src="<?= base_url() ?>front/img-sepeda/invest.png" style="width: 300px; height: 250px;" class="img-fluid" alt="">
                            <h3>Harga Terjangkau</h3>
                            <p>Harga sewa yang terjangkau dan durasi sewa yang dapat disesuaikan dengan kebutuhan Anda.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <div class="box">
                            <img src="<?= base_url() ?>front/img-sepeda/bicycle.png" style="width: 300px; height: 250px;" class="img-fluid" alt="">
                            <h3>Armada Bermacam</h3>
                            <p>Armada kami merupakan armada bermacam-macam. Sepeda yang kami sewakan dilengkapi dengan fasilitas yang anda butuhkan.</p>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Values Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="offset-1 col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Pelanggan Kami</p>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Projects</p>
                            </div>
                        </div>
                    </div> -->

                    <div class="offset-1 col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-headset" style="color: #15be56;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Team Support</p>
                            </div>
                        </div>
                    </div>

                    <div class="offset-1 col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-people" style="color: #bb0852;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Pekerja</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Apa Kata Pelanggan ?</h2>
                    <p>99% PELANGGAN KAMI TERBUKTI PUAS</p>
                </header>

                <div class="row">

                    <div class="col-lg-6">
                        <img src="<?= base_url() ?>front/img-sepeda/Group 6.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Jasa Sewa Murah</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Fasilitas Kendaraan Terjamin</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pemilik Rental yang Dekat</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Persyaratan Mudah</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pelayanan Team Support-nya Ramah</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pembayaran Menggunakan Transfer Semua Bank</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div> <!-- / row -->



            </div>

        </section><!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Product Kami</h2>
                    <p>Sepeda yang kami sewakan</p>
                </header>
                <style>
                    .alert-merah {
                        background-color: #df1e1e;
                        color: white;
                    }
                </style>

                <div class="row gy-4">
                    <?php foreach ($sepeda as $key => $value) { ?>

                        <?php if ($value->status == 0) { ?>
                            <div class="alert alert-merah alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4 class="text-center">Anda Belum Mempunyai Product Rental</h4>
                            </div>
                        <?php } else { ?>
                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="service-box green">
                                    <img src="<?= base_url('back/uploads/' . $value->gambar) ?>" class="img-fluid" width="235px" alt="">
                                    <h3><?= $value->nama_kendaraan ?></h3>
                                    <p><?= $value->nama_kendaraan ?> Tahun <?= $value->tahun ?> .</p>
                                    <a href="<?= base_url('produk/' . $value->slug) ?>" class="read-more"><span>Detail</span> <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>

                </div>

            </div>

        </section><!-- End Services Section -->

        <!-- ======= Pricing Section ======= -->
        <!-- <section id="pricing" class="pricing">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Pricing</h2>
                    <p>Check our Pricing</p>
                </header>

                <div class="row gy-4" data-aos="fade-left">

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <h3 style="color: #07d5c0;">Free Plan</h3>
                            <div class="price"><sup>$</sup>0<span> / mo</span></div>
                            <img src="<?= base_url() ?>front/assets/img/pricing-free.png" class="img-fluid" alt="">
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <span class="featured">Featured</span>
                            <h3 style="color: #65c600;">Starter Plan</h3>
                            <div class="price"><sup>$</sup>19<span> / mo</span></div>
                            <img src="<?= base_url() ?>front/assets/img/pricing-starter.png" class="img-fluid" alt="">
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="box">
                            <h3 style="color: #ff901c;">Business Plan</h3>
                            <div class="price"><sup>$</sup>29<span> / mo</span></div>
                            <img src="<?= base_url() ?>front/assets/img/pricing-business.png" class="img-fluid" alt="">
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="box">
                            <h3 style="color: #ff0071;">Ultimate Plan</h3>
                            <div class="price"><sup>$</sup>49<span> / mo</span></div>
                            <img src="<?= base_url() ?>front/assets/img/pricing-ultimate.png" class="img-fluid" alt="">
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                </div>

            </div> -->

        <!-- </section> -->
        <!-- End Pricing Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>F.A.Q</h2>
                    <p>Jika Bingung Liat Pertanyaan yang kami sudah sediakan.</p>
                </header>

                <div class="row">
                    <div class="col-lg-6">
                        <!-- F.A.Q List 1-->
                        <div class="accordion accordion-flush" id="faqlist1">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                        Syarat Untuk Menyewa
                                    </button>
                                </h2>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        1. Harus Memiliki Akun
                                    </div>
                                </div>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        2. Input KTP dan masukkan no.telp
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">

                        <!-- F.A.Q List 2-->
                        <div class="accordion accordion-flush" id="faqlist2">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                        Syarat Untuk Merental Sepeda
                                    </button>
                                </h2>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        1. Harus Memiliki Akun
                                    </div>
                                </div>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        2. Input KTP dan masukkan no.telp
                                    </div>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        3. Input Data Sepeda pada Website RENT.BIKE
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End F.A.Q Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Kontak</h2>
                    <p>Kontak Pelayanan Kami</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Alamat</h3>
                                    <p>GG Pemancingan RT005/007,<br>Srengseng, Kembangan Jakarta Barat</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Telephone</h3>
                                    <p>+62 813-8818-9796</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Kami</h3>
                                    <p>re.bike.nt@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Jam Buka</h3>
                                    <p>Senin - Minggu<br>24/Jam</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <?php echo form_open('home/addKontak') ?>
                        <div class="row gy-4 info-box">
                            <div class="col-md-12">
                                <p><span class="badge bg-warning">Pesan Ini Langsung terkirim ke Customer Services Kami </span></p>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nama_kontak" class="form-control" placeholder="Masukan Nama Anda" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email_kontak" placeholder="Masukan Email Aktif Anda" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject_kontak" placeholder="Masukan Subject/Judul Pengaduan Anda" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="pesan_kontak" rows="6" placeholder="Masukan Pesan Anda" required></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn2"><i class="bi bi-telegram"></i> Kirim Pesan</button>
                        </div>
                        <?php echo form_close() ?>

                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">


        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="<?= base_url() ?>" class="logo d-flex align-items-center">
                            <img src="<?= base_url() ?>front/img-sepeda/logodoang.png" alt="">
                            <span>RENT.BIKE</span>
                        </a>
                        <p>Kami adalah jasa penyewaan sepeda yang menyediakan berbagai macam sepeda. kami juga menyediakan tempat bagi anda yang memiliki sepeda namun jarang digunakan untuk disewakan dan dipromosikan di website kami.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                       
                    </div>
                    <div class="col-lg-2 col-6 footer-links">
                       
                       </div>
                   

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            JL. Kalibaru Barat VII <br>
                            RT012/004<br>
                            Jakarta Utara <br><br>
                            <strong>Phone:</strong> 0813-8818-9796<br>
                            <strong>Email:</strong> re.bike.nt@gmail.com<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="basicModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <div class="text-center my-3">
                                        <img src="<?= base_url() ?>front/img-sepeda/logo4.png" style="width: 200px; height: 150;">
                                    </div>
                                    <h4 class="card-title text-center pb-0 fs-4">Login Ke Akun Anda</h4>
                                </div>


                                <?php echo form_open(); ?>


                                <div class="col-12">
                                    <label for="yourUsername" class="form-label">Email</label>
                                    <div class="input-group has-validation">
                                        <input type="email" name="email_pelanggan" class="form-control" id="yourUsername" placeholder="Masukan Email Anda" required>
                                        <div class="invalid-feedback">Please enter your Email.</div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Masukan Password Anda" required>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                </div>

                                <br>
                                <div class="col-12">
                                    <button class="btn2 w-100" type="submit">Login sebagai Penyewa</button>
                                </div>
                                <br>
                                <div class="col-12">
                                    <button class="btn3 w-100" type="submit">Login sebagai Pemilik</button>
                                </div>
                                <?php echo form_close(); ?>
                                <br>
                                <div class="col-12">
                                    <p class="small mb-0">Belum punya akun ? <button type="button" class="btn2" data-bs-toggle="modal" data-bs-target="#tambahpelanggan">
                                            Daftar Akun Anda
                                        </button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Registered -->
        <div class="modal fade" id="tambahpelanggan" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <div class="text-center my-3">
                                        <img src="<?= base_url() ?>front/img-sepeda/logo4.png" style="width: 200px; height: 150;">
                                    </div>
                                    <h4 class="card-title text-center pb-0 fs-4">Daftar Akun Anda</h4>
                                </div>

                                <?php echo form_open('home/register'); ?>

                                <div class="col-12">
                                    <label for="yourUsername" class="form-label">Nama</label>
                                    <div class="input-group has-validation">
                                        <input type="text" name="nama_pelanggan" class="form-control" id="yourUsername" placeholder="Masukan Nama Anda" required>
                                        <div class="invalid-feedback">Please enter your Name.</div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-12">
                                    <label for="yourUsername" class="form-label">Email</label>
                                    <div class="input-group has-validation">
                                        <input type="email" name="email_pelanggan" class="form-control" id="yourUsername" placeholder="Masukan Email Anda" required>
                                        <div class="invalid-feedback">Please enter your Email.</div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Masukan Password Anda" required>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                </div>
                                <br>
                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Ulangi Password</label>
                                    <input type="password" name="ulangi_password" class="form-control" id="yourPassword" placeholder="Masukan Password yang sama" required>
                                    <div class="invalid-feedback">Please enter your password matches</div>
                                </div>

                                <br>
                                <div class="col-12">
                                    <button class="btn2 w-100" type="submit">Daftar Sebagai Penyewa</button>
                                </div>
                                <br>
                                <div class="col-12">
                                    <button class="btn3 w-100" type="submit">Daftar Sebagai Pemilik</button>
                                </div>

                                <?php echo form_close(); ?>
                                <br>
                                <div class="col-12">
                                <p class="small mb-0">Sudah punya akun ? <button type="button" class="btn2" data-bs-toggle="modal" data-bs-target="#basicModal">
                                            Silahkan Login
                                        </button></p>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Registered -->

        <div class="container">
            <div class="copyright">
                <!-- <button onclick="Swal.fire('Any fool can use a computer')"></button> -->
                &copy; Copyright <strong><span>Rental Sepeda </span><?php echo date('Y') ?></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Designed by <a href="https://portfolio-arifin.000webhostapp.com/" target="_blank">Liza Nadia Lianza</a>
            </div>
        </div>
    </footer><!-- End Footer -->



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- <script src="<?= base_url() ?>front/assets/dist/sweetalert2.all.min.js"></script> -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>front/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url() ?>front/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>front/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>front/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>front/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>front/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>front/assets/js/main.js"></script>

    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->

</body>

</html>