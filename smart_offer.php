<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="style.css">

    <title>Landing Page SmartPSC</title>
</head>

<body>
    <!-- Section Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" style="font-size: 18px; color: orange" href="#">HARMONI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" aria-current="page" href="#">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#tentangkami">Tentang Harmoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#pelanggan">Pelanggan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Section  -->

    <!-- section pertama -->
    <section class="pertama">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2><strong>Bersama <span style="font-family: 'Poppins', sans-serif; font-weight: 600; color: red;"> Smart</span><span style="color: rgb(9, 104, 67);">PSC </span> </strong> menuju layanan <span style="font-style: italic;">emergency</span>yang
                        <strong>Unggul</strong> dan <strong>terintegrasi</strong>
                    </h2>
                    <p class="text-right"><span style="color: red;">Smart</span><span style="color: rgb(13, 112, 66);">PSC</span> telah berpengalaman mendampingi faskes/instansi yang ingin berkembang pesat,
                        didukung fleksibilitas role dan kedalaman fitur dengan teknologi yang canggih.</p> <br>
                    <a href="#hubungi-kami" class="btn btn-success rounded-pill px-4 py-2" data-target="#header-fourth"> Minta Demo atau Penjelasan <i class="fa fa-angle-right px-3 py-1 bg-white text-success rounded-pill"></i> </a>
                </div>
                <div class="col-md-6">
                    <img class="ms-2 gambar" src="<?php echo base_url('') ?>assets/images/offer/doctor.png" width="100%" style="opacity: 90%" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir section pertama -->
    <!-- ======= About Us Section ======= -->
    <section id="tentangkami" class="about mt-5">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 class="text-center mb-3" style="font-family: 'Poppins', sans-serif; font-weight: 600; color: red;"> <span style="font-family: sans-serif;font-weight: 300; color: black;">Apa Itu </span> Smart<span style="color: rgb(9, 104, 67);">PSC</span><span style="color: black;">?</span> </h2>
            </div>

            <div class="row content">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                    <p><span style="color: red;">Smart</span> <span style="color: rgb(13, 112, 66);">PSC</span> adalah sistem
                        pelayanan gawat darurat dan kebencanaan dengan dukungan teknologi informasi melalui “call center” –
                        “dispatching” – “ambulance/police/disaster/fire-fighter operation management”. Sistem ini mendukung layanan kegawatdaruratan baik medis maupun non medis, termasuk kecelakaan, darurat sakit, kriminalitas, keamanan, bencana alam, kebakaran dan situasi kegawatan lain kepada masyarakat yang membutuhkan bantuan dengan cara menghubungi Call Centre lewat emergency button, emergency number, WA dan channel lain..</p>
                </div>
                <div class="col-lg-6 pt-2 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <p>
                        <span style="color: red;">Smart</span><span style="color: rgb(13, 112, 66);">PSC</span>mampu
                        mengintegrasikan RSUD Prov./Kota/Kab., Rumah Sakit Swasta se-Prov./Kota/Kab., Ambulance Puskesmas se-
                        Prov./Kota/Kab., Kepolisian, Badan Penanggulangan Bencana Daerah, Pemadam Kebakaran, serta sektor/dinas lain
                        maupun fihak swasta terkait. Sistem ini mengutamakan kecepatan dan ketepatan pelayanan dan penanggulangan di
                        lokasi, termasuk penanganan korban mulai dari tempat kejadian sampai dengan rumah sakit.
                    </p>
                </div>
            </div>
            <div class="row content">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                    <p><span style="color: red;">Smart</span><span style="color: rgb(13, 112, 66);">PSC</span> juga memberikan
                        pelayanan telesupporting termasuk telemedicine. Apabila terjadi kegawatdaruratan di masyarakat langsung
                        telepon call center, pertolongan bisa dilakukan dengan instruksi dari telepon, dan jika diperlukan maka akan
                        datang bantuan dari instansi terkait yang telah terintegrasi..</p>
                </div>
                <div class="col-lg-6 pt-2 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <p> Dalam
                        <span style="color: red;">Smart</span><span style="color: rgb(13, 112, 66);">PSC</span> manajemen
                        operasional tim penanganan di lapangan, sudah dikelola dengan menggunakan teknologi digital. Sehingga
                        informasi bisa diperoleh dan dimanfaatkan secara langsung, akurat dan cepat, termasuk untuk keperluan
                        manajemen tingkat menengah, bahkan sampai ke eksekutif pemerintahan dan legislatif untuk pengambilan
                        keputusan jangka menengah panjang.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Section -->

    <section id="more-services" class="more-services mt-3 mb-5">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; font-weight: 600; color: red;"> <span style="font-family: sans-serif;font-weight: 300; color: black;">Implementasi</span> Smart<span style="color: rgb(9, 104, 67);">PSC</span><span style="color: black;"> 119</span> </h2>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card" style="background-image: url('<?php echo base_url('') ?>assets/images/offer/1.jpg')" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-body">
                            <h5 class="card-title">Launching Tulungagung</h5>
                            <p class="card-text">Launching PSC-119 Tulungagung (sekaligus sebagai Percontohan Nasional PSC) oleh Ibu
                                Menteri Kesehatan RI (2016)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="card" style="background-image: url('<?php echo base_url('') ?>assets/images/offer/2.jpg')" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-body">
                            <h5 class="card-title">Command Center</h5>
                            <p class="card-text">Suasana Command Center (Call Center) PSC-119, dengan 2 Call Taker dan 1 Dispatche</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4">
                    <div class="card" style="background-image: url('<?php echo base_url('') ?>assets/images/offer/3.jpg')" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-body">
                            <h5 class="card-title">Implementasi Lapangan</h5>
                            <p class="card-text">Tim PHC turun ke lapangan setelah ditugaskan Command Center PSC-119, terkoneksi
                                dengan menggunakan Aplikasi Mobile SmartPSC pada smartphone/tablet Driver/Perawat Tim PHC</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4">
                    <div class="card" style="background-image: url('<?php echo base_url('') ?>assets/images/offer/4.jpg')" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-body">
                            <h5 class="card-title">Implementasi Lapangan</h5>
                            <p class="card-text">Kelengkapan dan kecanggihan fasilitas medis dan ketrampilan para tenaga medis sangat
                                menentukan ketepatan, kecepatan & kualitas pelayanan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4">
                    <div class="card" style="background-image: url('<?php echo base_url('') ?>assets/images/offer/6.jpg')" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-body">
                            <h5 class="card-title">Event MotoGP Mandalika</h5>
                            <p class="card-text">Dala event Internasional SmartPSC mendukung penuh PCC NTB di RSUDP NTB (Province
                                Command Center)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4">
                    <div class="card" style="background-image: url('<?php echo base_url('') ?>assets/images/offer/5.jpg')" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-body">
                            <h5 class="card-title">Event MotoGP Mandalika</h5>
                            <p class="card-text">Bersama NTB Medical Leaders Bp.Sudarman (PSC Loteng) dan dr.Eko, SpEM (RSUDP NTB)
                                persiapan MotoGP Medical Team.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pelanggan">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; font-weight: 600; color: red;"> <span style="font-family: sans-serif;font-weight: 300; color: black;">Clients</span> Smart<span style="color: rgb(9, 104, 67);">PSC</span><span style="color: black;"></span> </h2>
            </div>
            <div class="row text-center">

                <div class="col-md-2 col-6 mb-4">
                    <div class="">
                        <img src="<?php echo base_url('') ?>assets/images/offer/logo1.png" class="card-img-top" alt="project1" />
                    </div>
                </div>

                <div class="col-md-2 col-6 mb-4">
                    <div class="">
                        <img src="<?php echo base_url('') ?>assets/images/offer/logo2.png" class="card-img-top" alt="project1" />
                    </div>
                </div>

                <div class="col-md-2 col-6 mb-4">
                    <div class="">
                        <img src="<?php echo base_url('') ?>assets/images/offer/logo3.png" class="card-img-top" alt="project1" />
                    </div>
                </div>

                <div class="col-md-2 col-6 mb-4">
                    <div class="">
                        <img src="<?php echo base_url('') ?>assets/images/offer/logo4.png" class="card-img-top" alt="project1" />
                    </div>
                </div>

                <div class="col-md-2 col-6 mb-4">
                    <div class="">
                        <img src="<?php echo base_url('') ?>assets/images/offer/logo5.png" class="card-img-top" alt="project1" />
                    </div>
                </div>

                <div class="col-md-2 col-6 mb-4 text-center">
                    <div class="">
                        <img src="<?php echo base_url('') ?>assets/images/offer/logo6.png" class="card-img-top" alt="project1" />
                    </div>
                </div>

            </div>
            <div class="row text-center mb-4">
                <div class="col">
                    <h5 class="sub-judul" style="color: #327A6D;"> <button class="btn btn-outline-success rounded-pill px-4 py-2">
                            Lihat selengkapnya</button> </h5>
                </div>
            </div>
        </div>
    </section>

    <!-- section ke dua-->
    <section id="hubungi-kami">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-3">
                    <strong> Bantu Kami Menghubungi Anda </strong>
                    <p class="text-secondary mt-2">Isi form di bawah untuk mendapatkan demo.</p>
                    <form id="formClient" class="form-group mb-4">
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Nama Lengkap<span class="text-danger">*</span></label>
                            <input required type="text" name="nama" placeholder="Masukkan nama lengkap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Email<span class="text-danger">*</span></label>
                            <input required type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan email" aria-describedby="emailHelp" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Nomor Handphone/WA<span class="text-danger">*</span></label>
                            <input required type="text" name="telepon" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nomor handphone" aria-describedby="emailHelp" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Nama Lengkap Instansi/Faskes<span class="text-danger">*</span></label>
                            <input required type="text" name="instansi" placeholder="Masukkan nama instansi/perusahaan/faskes" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Jabatan<span class="text-danger">*</span></label>
                            <input required type="text" name="jabatan" placeholder="Masukkan jabatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                        </div>
                        <div class="mb-3 form-group">
                            <label for="exampleInputEmail1">Nomor Telepon Instansi/Perusahaan<span class="text-danger">*</span></label>
                            <input required type="text" name="telpInstansi" class="form-control" placeholder="Masukkan nomor telepon" id="exampleInputEmail1" aria-describedby="emailHelp" />
                        </div>
                        <div class="mb-3 form-group">
                            <button type="button" id="insertClient" class="btn btn-success btn-block rounded-pill py-2">Kirim
                                Permintaan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <section style="background-color:#327A6D;">
        <div id="header-fifth" class="d-flex flex-row p-5">
            <div class="container">
                <div class="row text-white">
                    <div class="col-md-6">
                        <h4>Harmoni Integra</h4>
                        <p><i class="fa fa-phone-square"></i> +62 821 1013 6555</p>
                        info@harmoni-integra.com
                        <p>Jl. Wiguna Tengah 12-15 SURABAYA</p>
                        <a class="text-white" href="#">www.smartpsc.id</a>
                        <p>Copyright © 2017 Harmoni-Integra.</p>
                    </div>
                    <div class="col-md-6 text-white">
                        <a class="text-white" href="#"> <i class="fa fa-list-alt">
                            </i> <strong>Produk</strong></a>
                        <br />
                        <a class="text-white" href="#tentangkami" target="_blank"> <i class="fa fa-info-circle"></i> <strong>Tentang Harmoni </strong> </a>
                        <br />
                        <a class="text-white" href="#pelanggan" target="_blank"> <i class="fa fa-user-o"></i> <strong>Pelanggan </strong> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        //Fetch form to apply custom Bootstrap validation
        $('#insertClient').click(function() {
            // 
            var form = $('#formClient');
            if (form[0].checkValidity() === false) {
                event.preventDefault()
                event.stopPropagation()
                form.addClass('was-validated')
            } else {
                new Swal({
                    title: 'loading.',
                    allowEscapeKey: false,
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    showCancelButton: false,
                    didOpen: () => {
                        Swal.showLoading();
                        $.ajax({
                            url: "<?php echo base_url() ?>smartpsc_offer/requestDemo",
                            type: 'POST',
                            data: $('#formClient').serialize(),
                            dataType: 'json',
                            success: function(data) {
                                console.log(data);
                                if (data["status"] == "success") {
                                    Swal.fire({
                                        title: 'Berhasil',
                                        text: 'Permintaan Anda telah terkirim',
                                        icon: 'success',
                                        confirmButtonText: 'Ok'
                                    }).then((result) => {
                                        $('#formClient')[0].reset();
                                    })
                                } else {
                                    alert('Permintaan gagal dikirim');
                                }
                            },
                            error: function(data, cml, json) {
                                console.log(data.responseText);
                            }
                        });
                    }
                })
            }
        });
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>