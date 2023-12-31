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
                <span>Rental Sepeda</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?= base_url() ?>">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('#about') ?>">About</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('#services') ?>">Product</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('#contact') ?>">Contact </a></li>
                    <li style="margin-left: 2%;">

                        <!-- Basic Modal -->
                        <?php if ($this->session->userdata('email_pelanggan') == "") { ?>
                            <div class="d-grid gap-2 mt-3 my-3">
                                <button type="button" class="btn2" data-bs-toggle="modal" data-bs-target="#basicModal">
                                    Login/Register
                                </button>
                            </div>
                    </li>
                <?php } else { ?>


                    <li class="dropdown"><a>Welcome,<b> <?= $this->session->userdata('nama_pelanggan') ?></b> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url('profile') ?>">Edit Profile</a></li>
                            <li><a href="<?= base_url('booking-pelanggan') ?>">Riwayat Booking</a></li>
                            <li><a href="<?= base_url('hapus-akun') ?>">Hapus Akun</a></li>
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
    <?php if ($sepedadetail->slug == true && $sepedadetail->status == 1) { ?>


        <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <section class="breadcrumbs">
                <div class="container">

                    <ol>
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li>Detail Product</li>
                        <li><?= $sepedadetail->nama_kendaraan ?></li>
                    </ol>
                </div>
            </section><!-- End Breadcrumbs -->

            <!-- ======= Blog Single Section ======= -->
            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up">

                    <div class="row">

                        <div class="col-lg-8 entries">

                            <article class="entry entry-single">

                                <div class="entry-img">
                                    <img src="<?= base_url('back/uploads/' . $sepedadetail->gambar) ?>" alt="" class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a href="<?= base_url('produk/' . $sepedadetail->slug) ?>"><?= $sepedadetail->nama_kendaraan ?></a>

                                    <?php if ($this->session->userdata('email_pelanggan') == '') { ?>

                                        <div class="entry-content">
                                            <button type="button" class="btn2" data-toggle="modal" data-target="#loginDulu">Pesan Sekarang</button>
                                        </div>
                                    <?php  } else { ?>
                                        <?php if ($pelanggan->upload_ktp == false) { ?>
                                            <div class="entry-content">

                                                <a href="<?= base_url('profile') ?>" class="btn btn-primary text-white">Pesan Sekarang</a>
                                                <?php if ($pelanggan->upload_ktp == false) {
                                                    $this->session->set_flashdata('error', '<b>Anda Harus Isi Lengkap Profile Anda dengan mengupload KTP</b>');
                                                    redirect('profile');
                                                } ?>
                                            </div>
                                        <?php } else { ?>
                                            <div class="entry-content">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pesanSekarang">Pesan Sekarang</button>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>

                                    <div class="entry-footer">
                                        <i class="bi bi-folder"></i>
                                        <ul class="cats">
                                            <li><a href="<?= base_url('kategori/' . strtolower($sepedadetail->kode_merek)) ?>"><?= $sepedadetail->nama_merek ?></a></li>
                                        </ul>

                                        <i class="bi bi-tags"></i>
                                        <ul class="tags">
                                            <li><a href="<?= base_url('produk/' . $sepedadetail->slug) ?>"><?= $sepedadetail->nama_type ?></a></li>
                                        </ul>
                                    </div>

                            </article><!-- End blog entry -->

                        </div><!-- End blog entries list -->

                        <div class="col-lg-4">

                            <div class="sidebar">
                                <h5 data-text="Kategori" data-aos="fade-up">
                                    Kategori
                                </h5>
                                <div class="sidebar-item tags">
                                    <ul>
                                        <?php foreach ($type_sepeda as $key => $value) { ?>
                                            <li><a href="<?= base_url('kategori/' . strtolower($value->kode_merek)) ?>" class="btn3 text-white"><?= $value->nama_merek ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div><!-- End sidebar categories-->
                                <br>
                                <h5 data-text="Produk" data-aos="fade-up"> Produk</h5>
                                
                                <div class="sidebar-item recent-posts">
                                    <?php foreach ($sepeda as $key => $value) { ?>
                                        <div class="post-item clearfix">
                                            <img src="<?= base_url('back/uploads/' . $value->gambar) ?>" alt="">
                                            <h4><a href="<?= base_url('produk/' . $value->slug) ?>"><?= $value->nama_kendaraan ?></a></h4>
                                            <time datetime="2020-01-01"><?= $value->nama_type ?></time>
                                        </div>
                                    <?php } ?>
                                </div><!-- End sidebar recent posts-->



                            </div><!-- End sidebar -->

                        </div><!-- End blog sidebar -->

                    </div>

                </div>
            </section><!-- End Blog Single Section -->

        </main><!-- End #main -->

    <?php } else {
        redirect('404_override');
    } ?>

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
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">About</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Product</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Contact</a></li>
                        </ul>
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
                                    <button class="btn2 w-100" type="submit">Login sebagai Penyewa</button>
                                </div>

                                <?php echo form_close(); ?>
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

        <!-- modal Pesan Sekarang -->
        <div class="modal fade" id="pesanSekarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Silahkan Isi Pesananan Anda</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <?= form_open('home/pesanPelangganAksi') ?>
                    <div class="modal-body">
                        <div class="col-12">
                            <div class="input-group has-validation">
                                <input type="hidden" name="id_pelanggan" class="form-control" id="yourUsername" value="<?= $this->session->userdata('id_pelanggan') ?>">
                                <input type="hidden" name="id_sepeda" class="form-control" id="yourUsername" value="<?= $sepedadetail->id_sepeda ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="yourUsername" class="form-label">Tanggal Rental</label>
                            <div class="input-group has-validation">
                                <input type="date" name="tanggal_rental" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="yourUsername" class="form-label">Tanggal Kembali</label>
                            <div class="input-group has-validation">
                                <input type="date" name="tanggal_kembali" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="yourUsername" class="form-label">Harga Sewa/Hari</label>
                            <div class="input-group has-validation">
                                <input type="text" name="harga" class="form-control" value="<?= $sepedadetail->harga ?>" readonly>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="yourUsername" class="form-label">Sewa Berapa Hari</label>
                            <div class="input-group has-validation">
                                <input type="number" name="berapa_hari" class="form-control" required>
                                <input type="hidden" name="status_pembayaran" class="form-control" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Pesan</button>
                    </div>
                    <?= form_close() ?>

                </div>
            </div>
        </div>
        <!-- end Modal Pesan sekarang -->


        <div class="modal fade" id="basicModal" tabindex="-1">
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
                                        <img src="<?= base_url() ?>front/img-sepeda/logo2.png" style="width: 150px; height: 100;">
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