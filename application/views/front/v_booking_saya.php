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

    <style>
        .custom {
            background-color: turquoise;
            color: black;
        }
    </style>

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
                    <li><a class="nav-link scrollto active" href="<?= base_url('#hero') ?>">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('#about') ?>">About</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('#services') ?>">Product</a></li>
              
                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> -->
                    <li><a class="nav-link scrollto" href="<?= base_url('#contact') ?>">Contact </a></li>
                    <li style="margin-left: 2%;">

                        <!-- Basic Modal -->
                        <?php if ($this->session->userdata('email_pelanggan') == "") { ?>
                            <div class="d-grid gap-2 mt-3 my-3">
                                <button type="button" class="btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#basicModal">
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
    <br><br><br><br><br><br><br><br>
    <div class="content" data-aos="fade-down">
        <div class="container-fluid">
            <style type="text/css">
                .abu {
                    background-color: #e4e4e4;
                }
            </style>
            <div class="row" style="margin-bottom: 275px;">
                <div class="col-sm-12">
                    <?php if ($this->session->flashdata('pesan')) {
                        echo '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                        <h4><i class="bi bi-check-lg"></i> Sukses!</h4>';
                        echo $this->session->flashdata('pesan');
                        echo '</div>';
                    }

                    if ($this->session->flashdata('error')) {
                        echo '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                        <h4><i class="bi bi-sign-stop"></i> Salah!</h4>';
                        echo $this->session->flashdata('error');
                        echo '</div>';
                    } ?>
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Pesanan Saya</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Diproses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Lunas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Selesai</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                    <!-- data pesanan order -->
                                    <div class="table table-bordered table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr style="background-color: dodgerblue; color: white;">
                                                    <th>No</th>
                                                    <th>Nama Pelanggan</th>
                                                    <th>Nama Kendaraan</th>
                                                    <th>Tanggal Rental</th>
                                                    <th>Tanggal Kembali</th>
                                                    <th>Harga/Jam</th>
                                                    <th>Berapa Hari</th>
                                                    <th>Sub Total</th>
                                                    <th>Status Pembayaran</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if ($transaksi == true) { ?>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($transaksi as $key => $value) { ?>
                                                        <tr class="text-center">
                                                            <th><?= $no++ ?></th>
                                                            <th><?= $value->nama_pelanggan ?></th>
                                                            <td><?= $value->nama_kendaraan ?></td>
                                                            <td><?= $value->tanggal_rental ?></td>
                                                            <td><?= $value->tanggal_kembali ?></td>
                                                            <th>Rp. <?= number_format($value->harga, 0) ?></th>
                                                            <td><?= $value->berapa_hari ?> Hari</td>
                                                            <td>Rp. <?= number_format($value->sub_total, 0) ?></td>
                                                            <td><?php if ($value->status_pembayaran == 0) {
                                                                    echo '<span class="badge badge-danger">Belum Bayar</span>';
                                                                } elseif ($value->status_pembayaran == 1) {
                                                                    echo '<span class="badge badge-warning">Pending</span>';
                                                                } elseif ($value->status_pembayaran == 2) {
                                                                    echo '<span class="badge badge-primary">Lunas</span>';
                                                                } else {
                                                                    echo '<span class="badge badge-success">Sewa Selesai</span>';
                                                                }  ?></td>
                                                            <td><a href="<?= base_url('home/bayarPesanan') ?>" class="btn btn-primary"><i class="bi bi-telegram"></i> Bayar</a></td>
                                                        </tr>
                                                    <?php }  ?>
                                                <?php } else { ?>
                                                    <div class="alert alert-success alert-massage">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <p>Anda Belum Ada Pesanan, Silahkan Pesan Kendaraan Anda ...</p>
                                                    </div>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                    <!-- data pesanan diproses -->
                                    <div class="table table-bordered table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr style="background-color: dodgerblue; color: white;">
                                                    <th>No</th>
                                                    <th>Nama Pelanggan</th>
                                                    <th>Nama Kendaraan</th>
                                                    <th>Tanggal Rental</th>
                                                    <th>Tanggal Kembali</th>
                                                    <th>Harga/Day</th>
                                                    <th>Berapa Hari</th>
                                                    <th>Sub Total</th>
                                                    <th>Bukti Pembayaran</th>
                                                    <th>Status Pembayaran</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if ($transaksi_pending == true) { ?>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($transaksi_pending as $key => $value) { ?>
                                                        <tr class="text-center">
                                                            <th><?= $no++ ?></th>
                                                            <th><?= $value->nama_pelanggan ?></th>
                                                            <td><?= $value->nama_kendaraan ?></td>
                                                            <td><?= $value->tanggal_rental ?></td>
                                                            <td><?= $value->tanggal_kembali ?></td>
                                                            <th>Rp. <?= number_format($value->harga, 0) ?></th>
                                                            <td><?= $value->berapa_hari ?> Hari</td>
                                                            <td>Rp. <?= number_format($value->sub_total, 0) ?></td>
                                                            <td style="vertical-align: middle;">
                                                                <a href="<?= base_url('front/pelanggan/bukti-pembayaran/' . $value->bukti_pembayaran) ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?= $value->nama_pelanggan ?>"><img src="<?= base_url('front/pelanggan/bukti-pembayaran/' . $value->bukti_pembayaran) ?>" class="img-fluid" width="100px" height="100px" alt=""></a>
                                                            </td>
                                                            <td><?php if ($value->status_pembayaran == 0) {
                                                                    echo '<span class="badge badge-danger">Belum Bayar</span>';
                                                                } elseif ($value->status_pembayaran == 1) {
                                                                    echo '<span class="badge badge-warning">Pending</span>';
                                                                } elseif ($value->status_pembayaran == 2) {
                                                                    echo '<span class="badge badge-primary">Lunas</span>';
                                                                } else {
                                                                    echo '<span class="badge badge-success">Sewa Selesai</span>';
                                                                }  ?></td>
                                                        </tr>
                                                    <?php }  ?>
                                                <?php } else { ?>
                                                    <div class="alert alert-success alert-massage">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <p>Anda Belum Ada Pesanan, Silahkan Pesan Kendaraan Anda ...</p>
                                                    </div>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                    <div class="table table-bordered table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr style="background-color: dodgerblue; color: white;">
                                                    <th>No</th>
                                                    <th>Nama Pelanggan</th>
                                                    <th>Nama Kendaraan</th>
                                                    <th>Tanggal Rental</th>
                                                    <th>Tanggal Kembali</th>
                                                    <th>Harga/Day</th>
                                                    <th>Berapa Hari</th>
                                                    <th>Status Pembayaran</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if ($transaksi_lunas == true) { ?>
                                                    <div class="alert alert-danger alert-massage">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <p>Perhatikan <span class="badge badge-danger" style="color: black;"><b>Tanggal Kembali</b></span> Nya Ya, Agar Tidak Kena Denda, Terima Kasih .</p>
                                                    </div>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($transaksi_lunas as $key => $value) { ?>
                                                        <tr class="text-center">
                                                            <th><?= $no++ ?></th>
                                                            <th><?= $value->nama_pelanggan ?></th>
                                                            <td><?= $value->nama_kendaraan ?></td>
                                                            <td><span class="badge badge-success"><b><?= $value->tanggal_rental ?></b></span></td>
                                                            <td><span class="badge badge-danger"><b><?= $value->tanggal_kembali ?></b></span></td>
                                                            <th>Rp. <?= number_format($value->harga, 0) ?></th>
                                                            <td><?= $value->berapa_hari ?> Hari</td>
                                                            <td><?php if ($value->status_pembayaran == 0) {
                                                                    echo '<span class="badge badge-danger">Belum Bayar</span>';
                                                                } elseif ($value->status_pembayaran == 1) {
                                                                    echo '<span class="badge badge-warning">Pending</span>';
                                                                } elseif ($value->status_pembayaran == 2) {
                                                                    echo '<span class="badge badge-primary">Lunas</span>';
                                                                } else {
                                                                    echo '<span class="badge badge-success">Sewa Selesai</span>';
                                                                }  ?></td>
                                                        </tr>
                                                    <?php }  ?>
                                                <?php } else { ?>
                                                    <div class="alert alert-success alert-massage">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <p>Anda Belum Ada Pesanan, Silahkan Pesan Kendaraan Anda ...</p>
                                                    </div>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                                    <div class="table table-bordered table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr style="background-color: dodgerblue; color: white;">
                                                    <th>No</th>
                                                    <th>Nama Pelanggan</th>
                                                    <th>Nama Kendaraan</th>
                                                    <th>Tanggal Rental</th>
                                                    <th>Tanggal Kembali</th>
                                                    <th>Tanggal Pengembalian Ke Rental</th>
                                                    <th>Status Pengembalian</th>
                                                    <th>Total Denda</th>
                                                    <th>Status Rental</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if ($transaksi_sewaselesai == true) { ?>
                                                    <div class="alert custom alert-massage">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <p style="color: white;">Terima Kasih, Anda Telah Percaya Kepada Kami Untuk Sewa Rental Di Kami..</p>
                                                    </div>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($transaksi_sewaselesai as $key => $value) { ?>
                                                        <tr class="text-center">
                                                            <th><?= $no++ ?></th>
                                                            <th><?= $value->nama_pelanggan ?></th>
                                                            <td><?= $value->nama_kendaraan ?></td>
                                                            <td><?= $value->tanggal_rental ?></td>
                                                            <td><?= $value->tanggal_kembali ?></td>
                                                            <td><?= $value->tanggal_pengembalian ?></td>
                                                            <td><?php if ($value->status_pengembalian == 0) {
                                                                    echo '<span class="badge badge-danger">Belum Kembali</span>';
                                                                } else {
                                                                    echo '<span class="badge badge-success">Sudah Kembali</span>';
                                                                }  ?></td>
                                                            <td>Rp. <?= number_format($value->total_denda, 0) ?></td>
                                                            <td><?php if ($value->status_rental == 0) {
                                                                    echo '<span class="badge badge-danger">Rental Belum Selesai</span>';
                                                                } else {
                                                                    echo '<span class="badge badge-success">Rental Sudah Selesai</span>';
                                                                }  ?></td>
                                                        </tr>
                                                    <?php }  ?>
                                                <?php } else { ?>
                                                    <div class="alert alert-success alert-massage">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <p>Anda Belum Ada Pesanan, Silahkan Pesan Kendaraan Anda ...</p>
                                                    </div>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>





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