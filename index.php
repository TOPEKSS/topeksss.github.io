<?php
if (isset($_POST['submit'])) {
    // Pastikan untuk membersihkan data yang diterima dari formulir
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    $noWa = htmlspecialchars($_POST['noWa']);

    // Debug: Cetak data yang diterima dari formulir
    echo "Name: $name<br>";
    echo "Phone: $phone<br>";
    echo "Email: $email<br>";
    echo "Subject: $subject<br>";
    echo "Message: $message<br>";
    echo "WhatsApp Number: $noWa<br>";

    // Pastikan nomor WhatsApp hanya berisi angka
    if (ctype_digit($noWa)) {
        // Membuat URL dengan nomor WhatsApp dan pesan yang diterima dari formulir
        $whatsapp_message = "Nama:%20$name%20%0DPhone:%20$phone%20%0DEmail:%20$email%20%0DSubject:%20$subject%20%0DPesan:%20$message";
        $whatsapp_url = "https://api.whatsapp.com/send?phone=$noWa&text=$whatsapp_message";

        // Debug: Cetak URL WhatsApp
        echo "WhatsApp URL: $whatsapp_url<br>";

        // Redirect pengguna ke URL WhatsApp
        header("Location: $whatsapp_url");
        exit(); // Pastikan untuk keluar setelah mengarahkan pengguna
    } else {
        echo "Nomor WhatsApp tidak valid.";
    }
} else {
    // Jika pengguna mencoba mengakses file ini secara langsung, kembalikan mereka ke halaman sebelumnya
   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Muhammad Taufiq</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/profile.jpg">
    <!-- CSS 
    ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
   
</head>

<body class="template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">

    <!-- Start Header -->
    <header class="rn-header haeder-default black-logo-version header--fixed header--sticky">
        <div class="header-wrapper rn-popup-mobile-menu m--0 row align-items-center">
            <!-- Start Header Left -->
            <div class="col-lg-2 col-6">
                <div class="header-left">
                    <a class="navbar-brand" href="index.html">
                        <h5>Muhammad Taufiq</h5>
                    </a>
                </div>
            </div>
            <!-- End Header Left -->
            <!-- Start Header Center -->
            <div class="col-lg-10 col-6">
                <div class="header-center">
                    <nav id="sideNav" class="mainmenu-nav navbar-example2 d-none d-xl-block">
                        <!-- Start Mainmanu Nav -->
                        <ul class="primary-menu nav nav-pills">
                            <li class="nav-item"><a class="nav-link smoth-animation active" href="#home">Beranda</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#portfolio">Portofolio</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#resume">Pengalaman</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#contacts">Kontak</a></li>
                        </ul>
                        <!-- End Mainmanu Nav -->
                    </nav>
                    <!-- Start Header Right  -->
                    <div class="header-right">
                        <!-- <a class="rn-btn" target="_blank" href="../../checkout/83025947/create_account.html?license=regular"><span>BUY NOW</span></a> -->
                        <div class="hamberger-menu d-block d-xl-none">
                            <i id="menuBtn" class="feather-menu humberger-menu"></i>
                        </div>
                        <div class="close-menu d-block">
                            <span class="closeTrigger">
                            <i data-feather="x"></i>
                        </span>
                        </div>
                    </div>
                    <!-- End Header Right  -->

                </div>
            </div>
            <!-- End Header Center -->
        </div>
    </header>
    <!-- End Header Area -->

    <main class="main-page-wrapper">

        <!-- Start Slider Area -->
        <div id="home" class="rn-slider-area">
            <div class="slide slider-style-1">
                <div class="container">
                    <div class="row row--30 align-items-center">
                        <div class="order-2 order-lg-1 col-lg-7 mt_md--50 mt_sm--50 mt_lg--30">
                            <div class="content">
                                <div class="inner">
                                    <span class="subtitle">Selamat Datang </span>
                                    <h1 class="title">Halo, <br>

                                        <span class="header-caption" id="page-top">
                                            <!-- type headline start-->
                                            <span class="cd-headline clip is-full-width">
                                                <span>Saya </span>
                                        <!-- ROTATING TEXT -->
                                        <span class="cd-words-wrapper">
                                                    <b class="is-visible" style="color: #ff014f;">Muhammad Taufiq</b>
                                                    <b class="is-hidden" style="color: #ff014f;">Web Developer.</b>
                                                    <b class="is-hidden" style="color: #ff014f;">Front-End Developer.</b>
                                                </span>
                                        </span>
                                        <!-- type headline end -->
                                        </span>
                                    </h1>

                                    <div>
                                        <p class="description">Biasa di panggil Taufiq. Lulusan SMK NEGERI 1 KOTA PASURUAN jurusan REKAYASA PERANGKAT LUNAK. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti voluptate dolores similique rerum, architecto nesciunt fugit reprehenderit quae earum distinctio tempora commodi iusto dolorum, inventore, ex illo totam. Iure, recusandae. Labore fuga, sapiente sequi architecto numquam, sed vel necessitatibus repellendus cumque impedit quas adipisci rem dicta? Minus accusamus alias beatae.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-xl-6 col-md-3   col-sm-3 col-12">
                                        <div class="social-share-inner-left">
                                            <span class="title">SOCIAL MEDIA :</span>
                                            <ul class="social-share d-flex liststyle">
                                                <li class="facebook"><a href="https://www.facebook.com/profile.php?id=100031142632842&mibextid=ZbWKwL"><i data-feather="facebook"></i></a>
                                                </li>
                                                <li class="instagram"><a href="https://www.instagram.com/topeksss_/"><i data-feather="instagram"></i></a>
                                                </li>
                                                <li class="linkedin"><a href="https://www.linkedin.com/in/m-taufiq-4384612b8/"><i data-feather="linkedin"></i></a>
                                                </li>
                                                <li class="github"><a href="https://github.com/TOPEKSS"><i data-feather="github"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="order-1 col-6 col-lg-5">
                            <div class="thumbnail">
                                <div class="inner">
                                    <img src="assets/images/logo/wajah.png" alt="Personal Portfolio Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->

       

        <!-- Start Portfolio Area -->
        <div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">KUNJUNGI AKUN GITHUB SAYA DAN TETAPKAN UMPAN BALIK ANDA</span>
                            <h2 class="title">Portofolio Saya</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--10 mt_md--10 mt_sm--10">
                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCenterr">
                            <div class="inner">
                                <div class="thumbnail" style="overflow: auto; height: 200px;">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/portfolio/portfolio-01.jpg" style="height:156px;" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">UI UX Design of Website</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                                10</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">I Designed UI and UX Design of EasyBux Website portal <i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->
                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-toggle="modal" data-target="#ee">
                            <div class="inner">
                                <div class="thumbnail" style="overflow: auto; height: 200px;">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/portfolio/project-2.jpg" style="height:156px;" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">UI UX Design of Website</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                                                    5</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">Design of Loan Landing Page <i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCente">
                            <div class="inner">
                                <div class="thumbnail" style="overflow: auto; height: 200px;">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/portfolio/portfolio-02.jpg" style="height:156px;" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Portfolio Website</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                                8</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">Design of Portfolio Website <i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCent">
                            <div class="inner">
                                <div class="thumbnail" style="overflow: auto; height: 200px;">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/portfolio/portfolio-03.jpg" style="height:156px;" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Landing Page</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                                9</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">IT Company Portfolio
                                            <i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCen">
                            <div class="inner">
                                <div class="thumbnail" style="overflow: auto; height: 200px;">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/portfolio/portfolio-04.jpg" style="height:156px;" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Figma</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                                360</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">Mobile app landing design &
                                            Services<i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCe">
                            <div class="inner">
                                <div class="thumbnail" style="overflow: auto; height: 200px;">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/portfolio/portfolio-05.jpg" style="height:156px;" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Web Design</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                                280</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">Design for tecnology & services<i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->
                </div>
            </div>
        </div>
        <!-- End portfolio Area -->

        <!-- Start Resume Area -->
        <div class="rn-resume-area rn-section-gap section-separator" id="resume">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Pengalaman Saya</span>
                            <h2 class="title">Pengalaman Saya</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--45">
                    <div class="col-lg-12">
                        <ul class="rn-nav-list nav nav-tabs" id="myTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="true">Pendidikan</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="professional-tab" data-toggle="tab" href="#professional" role="tab" aria-controls="professional" aria-selected="false">professional
                                    Skills</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">experience</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="interview-tab" data-toggle="tab" href="#interview" role="tab" aria-controls="interview" aria-selected="false">interview</a>
                            </li> -->
                        </ul>
                        <!-- Start Tab Content Wrapper  -->
                        <div class="rn-nav-content tab-content" id="myTabContents">
                            <!-- Start Single Tab  -->
                            <div class="tab-pane show active fade single-tab-area" id="education" role="tabpanel" aria-labelledby="education-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">SD NEGERI 1 PASURUAN</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>-</h4>
                                                                    <span>-</span>
                                                                </div>
                                                                
                                                            </div>

                                                        </div>
                                                    </div><br><br>
                                                    <!-- End Single List  -->
                                                    
                                                    <div class="content">
                                                            <span class="subtitle">2007 - 2010</span>
                                                            <h4 class="maintitle">SMP NEGERI 11 PASURUAN</h4>
                                                            <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4> -</h4>
                                                                    <span>-</span>
                                                                </div>
                                                                <!-- <div class="date-of-time">
                                                                    <span>4.50/5</span>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->
                                                    </div>
                                                        </div>
                                                         
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <span class="subtitle">2021 - 2024</span>
                                                <h4 class="maintitle">SMK NEGERI 1 PASURUAN</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>REKAYASA PERANGKAT LUNAK</h4>
                                                                    <span>AKSA SDS (2020 - 2021)</span>
                                                                </div>
                                                                <!-- <div class="date-of-time">
                                                                    <span>4.90/5</span>
                                                                </div> -->
                                                            </div>
                                                            <p class="description">Gather and evaluate user requirements in collaboration with product managers and engineers.Illustrate design ideas using storyboards, process flows and sitemaps.Design graphic user interface
                                                                </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                   

                                                  

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <!-- <div class="tab-pane fade " id="professional" role="tabpanel" aria-labelledby="professional-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row row--40">

                                       
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <span class="subtitle">Features</span>
                                                    <h4 class="maintitle">Design Skill</h4>
                                                   
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">PHOTOSHOP</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">100%</span></div>
                                                        </div>
                                                    </div>
                                            

                                          
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">FIGMA</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 95%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">95%</span></div>
                                                        </div>
                                                    </div>
                                                  

                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">ADOBE XD</h6>
                                                        <di class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 60%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">60%</span></div>
                                                        </di

                                                    
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">ADOBE ILLUSTRATOR</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">70%</span></div>
                                                        </div>
                                                    </div>
                                               

                                                   
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">DESIGN</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 90%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">90%</span></div>
                                                        </div>
                                                    </div>
                                                    

                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- End Single Progressbar  -->
<!-- 
                                       
                                        <div class="col-lg-6 col-md-6 col-12 mt_sm--60">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <span class="subtitle">Features</span>
                                                    <h4 class="maintitle">Development Skill</h4>
                                                   
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">HTML</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">85%</span></div>
                                                        </div>
                                                    </div>
                                                  

                                                   
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">CSS</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 80%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">80%</span></div>
                                                        </div>
                                                    </div>
                                                  

                                                   
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">JAVASCRIPT</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 90%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">90%</span></div>
                                                        </div>
                                                    </div>
                                                 
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">JQuery</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 75%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">75%</span></div>
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">PLUGIN</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">70%</span></div>
                                                        </div>
                                                    </div>
                                                   

                                                </div>
                                            </div>
                                        </div> 

                                    </div>
                                </div>
                            </div>
                            End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Education Quality</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Bechalour of Computer Science BSCS</h4>
                                                                    <span>Air University (2013 - 2018)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.30/5</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4> ICS</h4>
                                                                    <span>502 Model College (2011 - 2013)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.50/5</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <!-- <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Tips For Personal Portfolio</h4>
                                                                    <span>University of Studies (1997 - 2001)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.80/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description"> If you are going to use a passage.
                                                                Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div> -->
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <span class="subtitle">2016 - 2021</span>
                                                <h4 class="maintitle">Job Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>SENIOR UI/UX DESIGNER</h4>
                                                                    <span>AKSA SDS (2020 - 2021)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.90/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Gather and evaluate user requirements in collaboration with product managers and engineers.Illustrate design ideas using storyboards, process flows and sitemaps.Design graphic user interface
                                                                elements, like menus, tabs and widgets.Build page navigation buttons and search fields.Develop UI mockups and prototypes that clearly illustrate how sites function and look like.Create original
                                                                graphic designs (e.g. images, sketches and tables).Prepare and present rough drafts to internal teams and key stakeholders.Identify and troubleshoot UX problems (e.g. responsiveness).</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>SENIOR UI/UX DESIGNER</h4>
                                                                    <span>Job at Arkhitech (2018 - 2021)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>5/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">I was responsible the look and feel of a physical or digital product. This can include everything from packaging to web design. I work closely with interaction designers and UI/UX copywriters
                                                                to create a user experience that is aesthetically pleasing, user-friendly, and efficient. My job was to assist UI/UX designers with developing high-fidelity prototypes towards the end of
                                                                the design phase.visual styling of an app or website. Think things like how icons are designed, how they’re arranged on the page, and how they relate to each other. Design elements such as
                                                                font choice, color scheme, graphics, buttons, and menu styling are all elements of interface design.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>FRONTEND DEVELOPER</h4>
                                                                    <span>DEVTREST PVT LTD (2016 -
                                                                2018)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>5.00/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">My responsibility was to Optimizie the user experience.Using HTML, JavaScript and CSS to bring concepts to life.Developing and maintaining the user interface.Implementing design on mobile websites.Creating
                                                                tools that improve site interaction regardless of the browser.Managing software workflow.Following SEO best practices.Fixing bugs and testing for usability.Ensure the technical feasibility
                                                                of UI/UX designs..</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade" id="interview" role="tabpanel" aria-labelledby="interview-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Company Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Personal Portfolio April Fools</h4>
                                                                    <span>University of DVI (1997 - 2001)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.30/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The education should be very interactual. Ut tincidunt est ac dolor aliquam sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4> Examples Of Personal Portfolio</h4>
                                                                    <span>College of Studies (2000 - 2002)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.50/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut imperdiet. Ut tincidunt est ac dolor aliquam sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="700" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Tips For Personal Portfolio</h4>
                                                                    <span>University of Studies (1997 - 2001)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.80/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description"> If you are going to use a passage. Ut tincidunt est ac dolor aliquam sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Job Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Web Development</h4>
                                                                    <span>BSE In CSE (2004 - 2008)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.70/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Contrary to popular belief. Ut tincidunt est ac dolor aliquam sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="700" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>The Personal Portfolio Mystery</h4>
                                                                    <span>Job at Rainbow-Themes (2008 - 2016)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.95/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Generate Lorem Ipsum which looks. Ut tincidunt est ac dolor aliquam sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="900" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Computer Science</h4>
                                                                    <span>Works at Plugin Development (2016 -
                                                                2020)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>5.00/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut imperdiet. Ut tincidunt est ac dolor aliquam sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Resume Area -->
        <!-- Start Testimonia Area  -->

        <!-- ENd Mews Area -->
        <!-- Start Contact section -->
        <div class="rn-contact-area rn-section-gap section-separator" id="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Contact</span>
                            <h2 class="title">Contact With Me</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                    <div class="col-lg-5">
                        <div class="contact-about-area">
                            <div class="thumbnail">
                                <img src="assets/images/contact/contact1.png" alt="contact-img">
                            </div>
                            <div class="title-area">
                                <h4 class="title">Muhammad Taufiq</h4>
                                <span>UI UX DESIGNER</span>
                            </div>
                            <div class="description">
                                <p>Saya bersedia untuk pekerjaan freelance. Terhubung dengan saya melalui dan hubungi akun saya.
                                </p>
                                <span class="phone">Phone: <a href="#">+6285855739362</a></span>
                                <span class="mail">Email: <a href="m.taufiqtaufiq744@gail.com">m.taufiqtaufiq744@gail.com</a></span>
                            </div>
                            <div class="social-area">
                                <div class="name">SOCIAL MEDIA :</div>
                                <div class="social-icone">
                                    <a href="https://www.facebook.com/profile.php?id=100031142632842&mibextid=ZbWKwL"><i data-feather="facebook"></i></a>
                                    <a href="https://www.linkedin.com/in/m-taufiq-4384612b8/"><i data-feather="linkedin"></i></a>
                                    <a href="https://www.instagram.com/topeksss_/"><i data-feather="instagram"></i></a>
                                    <a href="https://github.com/TOPEKSS"><i data-feather="github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos-delay="600" class="col-lg-7 contact-input">
                        <div class="contact-form-wrapper">
                            <div class="introduce">
                            <form class=" row" id="contact-form" action="index.php" method="POST" target="_blank">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-name">Your Name</label>
                                            <input class="form-control form-control-lg" name="name" id="contact-name" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-phone">Phone Number</label>
                                            <input class="form-control" name="phone" id="contact-phone" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-email">Email</label>
                                            <input class="form-control form-control-sm" id="contact-email" name="email" type="email">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input class="form-control form-control-sm" id="subject" name="subject" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-message">Your Message</label>
                                            <textarea name="message" id="contact-message" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <input type="hidden" name="noWa" value="6285855739362">

                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" id="submit" class="rn-btn">
                                            <span>SEND MESSAGE</span>
                                            <i data-feather="arrow-right"></i>
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contuct section -->

        <!-- Modal Portfolio Body area Start -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="portfolio-popup-thumbnail">
                                    <div class="image">
                                        <img class="w-100" src="assets/images/portfolio/portfolio-01.jpg" alt="slide">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-content">
                                    <h3>
                                        <span>Featured - Design</span> UI UX Design and development.
                                    </h3>
                                    <p class="mb--30">Designed website portal of Easybux using figma and for development used bootstrap 5 , JQuery and javascript</p>
                                    <div class="button-group mt--20">
                                        <a href="#" class="rn-btn thumbs-icon">
                                            <span>LIKE THIS</span>
                                            <i data-feather="thumbs-up"></i>
                                        </a>
                                        <!-- <a href="https://inamurrehman420.github.io/easybux/" class="rn-btn">
                                            <span>VIEW PROJECT</span>
                                            <i data-feather="chevron-right"></i>
                                        </a> -->
                                    </div>

                                </div>
                                <!-- End of .text-content -->
                            </div>
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Portfolio area -->

        <!-- Modal Portfolio Body area Start -->
        <div class="modal fade" id="exampleModalCenterr" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="portfolio-popup-thumbnail">
                                    <div class="image">
                                        <img class="w-100" src="assets/images/portfolio/portfolio-01.jpg" alt="slide">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-content">
                                    <h3>
                                        <span>Featured - Design</span> UI UX Design and development.
                                    </h3>
                                    <p class="mb--30">Designed website portal of Easybux using figma and for development used bootstrap 5 , JQuery and javascript</p>
                                    <div class="button-group mt--20">
                                        <a href="#" class="rn-btn thumbs-icon">
                                            <span>LIKE THIS</span>
                                            <i data-feather="thumbs-up"></i>
                                        </a>
                                        <!-- <a href="https://inamurrehman420.github.io/easybux/" class="rn-btn">
                                            <span>VIEW PROJECT</span>
                                            <i data-feather="chevron-right"></i>
                                        </a> -->
                                    </div>

                                </div>
                                <!-- End of .text-content -->
                            </div>
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Portfolio area -->

        <!-- Modal Portfolio Body area Start -->
        <div class="modal fade" id="ee" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="portfolio-popup-thumbnail">
                                    <div class="image">
                                        <img class="w-100" src="assets/images/portfolio/project-2.jpg" alt="slide">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-content">
                                    <h3>
                                        <span>Featured - Design</span> UI UX Design and development.
                                    </h3>
                                    <p class="mb--30">Designed website portal of Easybux using figma and for development used bootstrap 5 , JQuery and javascript</p>
                                    <div class="button-group mt--20">
                                        <a href="#" class="rn-btn thumbs-icon">
                                            <span>LIKE THIS</span>
                                            <i data-feather="thumbs-up"></i>
                                        </a>
                                        <!-- <a href="https://inamurrehman420.github.io/easybux/" class="rn-btn">
                                            <span>VIEW PROJECT</span>
                                            <i data-feather="chevron-right"></i>
                                        </a> -->
                                    </div>

                                </div>
                                <!-- End of .text-content -->
                            </div>
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Portfolio area -->


        <!-- Modal Portfolio Body area Start -->
        <div class="modal fade" id="exampleModalCente" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="portfolio-popup-thumbnail">
                                    <div class="image">
                                        <img class="w-100" src="assets/images/portfolio/portfolio-02.jpg" alt="slide">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-content">
                                    <h3>
                                        <span>Portfolio - Design</span> UI UX Design and development.
                                    </h3>
                                    <p class="mb--30">Designed website portal of Easybux using figma and for development used bootstrap 5 , JQuery and javascript</p>
                                    <div class="button-group mt--20">
                                        <a href="#" class="rn-btn thumbs-icon">
                                            <span>LIKE THIS</span>
                                            <i data-feather="thumbs-up"></i>
                                        </a>
                                        <!-- <a href="https://inamurrehman420.github.io/portfolio/" class="rn-btn">
                                            <span>VIEW PROJECT</span>
                                            <i data-feather="chevron-right"></i>
                                        </a> -->
                                    </div>

                                </div>
                                <!-- End of .text-content -->
                            </div>
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Portfolio area -->

        <!-- Modal Portfolio Body area Start -->
        <div class="modal fade" id="exampleModalCent" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="portfolio-popup-thumbnail">
                                    <div class="image">
                                        <img class="w-100" src="assets/images/portfolio/portfolio-03.jpg" alt="slide">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-content">
                                    <h3>
                                        <span>APP Market - Design</span> UI UX Design and development.
                                    </h3>
                                    <p class="mb--30">Designed website portal of Easybux using figma and for development used bootstrap 5 , JQuery and javascript</p>
                                    <div class="button-group mt--20">
                                        <a href="#" class="rn-btn thumbs-icon">
                                            <span>LIKE THIS</span>
                                            <i data-feather="thumbs-up"></i>
                                        </a>
                                        <!-- <a href="https://inamurrehman420.github.io/easybux/" class="rn-btn">
                                    <span>VIEW PROJECT</span>
                                    <i data-feather="chevron-right"></i>
                                </a> -->
                                    </div>

                                </div>
                                <!-- End of .text-content -->
                            </div>
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Portfolio area -->
        <!-- Modal Portfolio Body area Start -->
        <div class="modal fade" id="exampleModalCen" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="portfolio-popup-thumbnail">
                                    <div class="image">
                                        <img class="w-100" src="assets/images/portfolio/portfolio-04.jpg" alt="slide">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-content">
                                    <h3>
                                        <span>APP - Design</span> UI UX Design and development.
                                    </h3>
                                    <p class="mb--30">Designed website portal of Easybux using figma and for development used bootstrap 5 , JQuery and javascript</p>
                                    <div class="button-group mt--20">
                                        <a href="#" class="rn-btn thumbs-icon">
                                            <span>LIKE THIS</span>
                                            <i data-feather="thumbs-up"></i>
                                        </a>
                                        <!-- <a href="https://inamurrehman420.github.io/easybux/" class="rn-btn">
                                    <span>VIEW PROJECT</span>
                                    <i data-feather="chevron-right"></i>
                                </a> -->
                                    </div>

                                </div>
                                <!-- End of .text-content -->
                            </div>
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Portfolio area -->
        <!-- Modal Portfolio Body area Start -->
        <div class="modal fade" id="exampleModalCe" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="portfolio-popup-thumbnail">
                                    <div class="image">
                                        <img class="w-100" src="assets/images/portfolio/portfolio-05.jpg" alt="slide">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-content">
                                    <h3>
                                        <span>Travek - Design</span> UI UX Design and development.
                                    </h3>
                                    <p class="mb--30">Designed website portal of Easybux using figma and for development used bootstrap 5 , JQuery and javascript</p>
                                    <div class="button-group mt--20">
                                        <a href="#" class="rn-btn thumbs-icon">
                                            <span>LIKE THIS</span>
                                            <i data-feather="thumbs-up"></i>
                                        </a>
                                        <!-- <a href="https://inamurrehman420.github.io/easybux/" class="rn-btn">
                                    <span>VIEW PROJECT</span>
                                    <i data-feather="chevron-right"></i>
                                </a> -->
                                    </div>

                                </div>
                                <!-- End of .text-content -->
                            </div>
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>




        <!-- End Modal Portfolio area -->
        <!-- Modal Portfolio Body area Start -->
        <div class="modal fade" id="exampleModalC" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="portfolio-popup-thumbnail">
                                    <div class="image">
                                        <img class="w-100" src="assets/images/portfolio/portfolio-06.jpg" alt="slide">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-content">
                                    <h3>
                                        <span>Dashboard - Design</span> UI UX Design and development.
                                    </h3>
                                    <p class="mb--30">Designed website portal of Easybux using figma and for development used bootstrap 5 , JQuery and javascript</p>
                                    <div class="button-group mt--20">
                                        <a href="#" class="rn-btn thumbs-icon">
                                            <span>LIKE THIS</span>
                                            <i data-feather="thumbs-up"></i>
                                        </a>
                                        <!-- <a href="https://inamurrehman420.github.io/easybux/" class="rn-btn">
                                    <span>VIEW PROJECT</span>
                                    <i data-feather="chevron-right"></i>
                                </a> -->
                                    </div>

                                </div>
                                <!-- End of .text-content -->
                            </div>
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Portfolio area -->
        <!-- Modal Portfolio Body area Start -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="portfolio-popup-thumbnail">
                                    <div class="image">
                                        <img class="w-100" src="assets/images/portfolio/portfolio-04.jpg" alt="slide">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-content">
                                    <h3>
                                        <span>Featured - Design</span> UI UX Design and development.
                                    </h3>
                                    <p class="mb--30">Designed website portal of Easybux using figma and for development used bootstrap 5 , JQuery and javascript</p>
                                    <div class="button-group mt--20">
                                        <a href="#" class="rn-btn thumbs-icon">
                                            <span>LIKE THIS</span>
                                            <i data-feather="thumbs-up"></i>
                                        </a>
                                        <!-- <a href="https://inamurrehman420.github.io/easybux/" class="rn-btn">
                                            <span>VIEW PROJECT</span>
                                            <i data-feather="chevron-right"></i>
                                        </a> -->
                                    </div>

                                </div>
                                <!-- End of .text-content -->
                            </div>
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Portfolio area -->
       
        <!-- Back to  top Start -->
        <div class="backto-top">
            <div>
                <i data-feather="arrow-up"></i>
            </div>
        </div>
        <!-- Back to top end -->
    </main>

    <!-- Start Footer Area -->
    <div class="rn-footer-area rn-section-gap section-separator">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-area text-center">

                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/images/logo/profile.jpg" alt="logo">
                            </a>
                        </div>

                        <p class="description mt--30">© taufiq 2024. All rights reserved by
                            <a target="_blank"></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area -->

    <!-- JS ============================================ -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/modernizer.min.js"></script>
    <script src="assets/js/vendor/feather.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/bootstrap.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/wow.js"></script>
    <script src="assets/js/vendor/aos.js"></script>
    <script src="assets/js/vendor/particles.js"></script>
    <!-- main JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>