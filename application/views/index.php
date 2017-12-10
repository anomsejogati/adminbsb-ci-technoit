<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="AKN Kajen">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="<?= base_url()?>mainakn/assets/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>mainakn/assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>mainakn/assets/css/selectize.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>mainakn/assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>mainakn/assets/css/vanillabox/vanillabox.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>mainakn/assets/css/vanillabox/vanillabox.css" type="text/css">

    <link rel="stylesheet" href="<?= base_url()?>mainakn/assets/css/style.css" type="text/css">

    <link rel="shortcut icon" href="<?= base_url()?>mainakn/assets/img/favicon.png">
    <title>AKN Kajen</title>

</head>

<body class="page-homepage-carousel">
<!-- Wrapper -->
<div class="wrapper">
<!-- Header -->
<div class="navigation-wrapper">
    <div class="secondary-navigation-wrapper">
        <div class="container">
            <div class="navigation-contact pull-left">Kontak kami :  <span class="opacity-70">0285-423000</span></div>
            <div class="search">
                <div class="input-group">
                    <input type="search" class="form-control" name="search" placeholder="Search">
                    <span class="input-group-btn"><button type="submit" id="search-submit" class="btn"><i class="fa fa-search"></i></button></span>
                </div><!-- /.input-group -->
            </div>
            <ul class="secondary-navigation list-unstyled">
                <li><a href="<?= site_url()?>">Calon Mahasiswa</a></li>
                <li><a href="<?= site_url()?>">Mahasiswa</a></li>
                <li><a href="<?= site_url()?>">Dosen & Staff</a></li>
                <li><a href="<?= site_url()?>">Alumni</a></li>
                <li><a href="<?= site_url()?>">Sistem Informasi</a></li>
            </ul>
        </div>
    </div><!-- /.secondary-navigation -->
    <div class="primary-navigation-wrapper">
        <header class="navbar" id="top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand nav" id="brand">
                        <a href="<?= base_url()?>mainakn/index.html"><img src="<?= base_url()?>mainakn/assets/img/logo.png" alt="brand"></a>
                    </div>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="<?= site_url('')?>">Beranda</a>
                        </li>
                        <li>
                            <a href="" class=" has-child no-link">AKN Kajen</a>
                            <ul class="list-unstyled child-navigation">
                                <li><a href="<?= site_url()?>">Sejarah</a></li>
                                <li><a href="<?= site_url()?>">Visi dan Misi</a></li>
                                <li><a href="<?= site_url()?>">Arti dan Makna Lambang</a></li>
                                <li><a href="<?= site_url()?>">Statuta</a></li>
                                <li><a href="<?= site_url()?>">Profil AKN Kajen</a></li>
                                <li><a href="<?= site_url()?>">Struktur Organisasi</a></li>
                                <li><a href="<?= site_url()?>">Fasilitas</a></li>
                                <li><a href="<?= site_url()?>">Sistem Pendidikan</a></li>
                                <li><a href="<?= site_url()?>">Dosen dan Staff</a></li>
                                <li><a href="<?= site_url()?>">Kalender Akademik</a></li>
                                <li><a href="<?= site_url()?>">Denah Kampus AKN Kajen</a></li>
                                <li><a href="<?= site_url()?>">Informasi Internal</a></li>
                                <li><a href="<?= site_url()?>">Kode Etik</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= site_url('')?>" class="has-child no-link">Jurusan</a>
                            <ul class="list-unstyled child-navigation">
                                <li><a href="<?= site_url('')?>">Teknik Kimia</a></li>
                                <li><a href="<?= site_url('')?>">Teknik Mesin</a></li>
                                <li><a href="<?= site_url('')?>">Teknik Komputer dan Informatika</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="" class="has-child no-link">Informasi</a>
                            <ul class="list-unstyled child-navigation">
                                <li><a href="<?= site_url('')?>">Berita</a></li>
                                <li><a href="<?= site_url('')?>">Events</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="" class="has-child no-link">Layanan</a>
                            <ul class="list-unstyled child-navigation">
                                <li><a href="<?= site_url('')?>">Beasiswa</a></li>
                                <li><a href="<?= site_url('')?>">AKN Kajen Career Center</a></li>
                                <li><a href="<?= site_url('')?>">Publikasi Karya Ilmiah Dosen</a></li>
                                <li><a href="<?= site_url('')?>">Publikasi Karya Ilmiah Mahasiswa</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= site_url('')?>">Kontak kami</a>
                        </li>
                    </ul>
                </nav><!-- /.navbar collapse-->
            </div><!-- /.container -->
        </header><!-- /.navbar -->
    </div><!-- /.primary-navigation -->
    <div class="background">
        <img src="<?= base_url()?>mainakn/assets/img/background-city.png"  alt="background">
    </div>
</div>
<!-- end Header -->

<!-- Page Content -->
<div id="page-content">
<!-- Slider -->
<div id="homepage-carousel">
    <div class="container">
        <div class="homepage-carousel-wrapper">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <div class="image-carousel">
                        <div class="image-carousel-slide"><img src="<?= base_url()?>mainakn/assets/img/foto-slide1.jpg" alt=""></div>
                        <div class="image-carousel-slide"><img src="<?= base_url()?>mainakn/assets/img/foto-slide2.jpg" alt=""></div>
                        <div class="image-carousel-slide"><img src="<?= base_url()?>mainakn/assets/img/foto-slide3.jpg" alt=""></div>
                    </div><!-- /.slider-image -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-5">
                    <div class="slider-content">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Lihat Profil Lulusan</h1>
                                <form id="slider-form" role="form" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input class="form-control has-dark-background" name="slider-name" id="slider-name" placeholder="Pilih Program Studi" type="text" disabled>
                                            </div>
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input class="form-control has-dark-background" name="slider-name" id="slider-name" placeholder="Tahun Angkatan" type="text" disabled>
                                            </div>
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <select name="slider-study-level" id="slider-study-level" class="has-dark-background">
                                                    <option value="">-- Pilih --</option>
                                                    <option value="D2 - Teknik Kimia">D2 - Teknik Kimia</option>
                                                    <option value="D2 - Teknik Mesin">D2 - Teknik Mesin</option>
                                                    <option value="D2 - Teknik Informatika">D2 - Teknik Informatika</option>
                                                </select>
                                            </div><!-- /.form-group -->
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <select name="slider-course" id="slider-course" class="has-dark-background">
                                                    <option value="">-- Pilih --</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                </select>
                                            </div><!-- /.form-group -->
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                    <button type="submit" id="slider-submit" class="btn btn-framed pull-right">Submit</button>
                                    <div id="form-status"></div>
                                </form>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.slider-content -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
            <div class="background"></div>
        </div><!-- /.slider-wrapper -->
        <div class="slider-inner"></div>
    </div><!-- /.container -->
</div>
<!-- end Slider -->

<!-- News, Events, About -->
<div class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <section class="news-small" id="news-small">
                    <header>
                        <h2>Berita</h2>
                    </header>
                    <div class="section-content">
                        <article>
                            <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                            <header><a href="<?= base_url()?>mainakn/#">U-M School of Public Health, Detroit partners aim to improve air quality in the city</a></header>
                        </article><!-- /article -->
                        <article>
                            <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                            <header><a href="<?= base_url()?>mainakn/#">At 50, Center for the Education of Women celebrates a wider mission</a></header>
                        </article><!-- /article -->
                        <article>
                            <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                            <header><a href="<?= base_url()?>mainakn/#">Three U-Michigan scientists receive Sloan fellowships</a></header>
                        </article><!-- /article -->
                    </div><!-- /.section-content -->
                    <a href="<?= base_url()?>mainakn/" class="read-more stick-to-bottom">All News</a>
                </section><!-- /.news-small -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6">
                <section class="events small" id="events-small">
                    <header>
                        <h2>Events</h2>
                        <a href="<?= base_url()?>mainakn/" class="link-calendar">Calendar</a>
                    </header>
                    <div class="section-content">
                        <article class="event nearest">
                            <figure class="date">
                                <div class="month">jan</div>
                                <div class="day">18</div>
                            </figure>
                            <aside>
                                <header>
                                    <a href="<?= base_url()?>mainakn/event-detail.html">Conservatory Exhibit: The garden of india a country and culture revealed</a>
                                </header>
                                <div class="additional-info">Matthaei Botanical Gardens</div>
                            </aside>
                        </article><!-- /article -->
                        <article class="event nearest-second">
                            <figure class="date">
                                <div class="month">feb</div>
                                <div class="day">01</div>
                            </figure>
                            <aside>
                                <header>
                                    <a href="<?= base_url()?>mainakn/event-detail.html">February Half-Term Activities: Big Stars and Little Secrets </a>
                                </header>
                                <div class="additional-info clearfix" >Pitt Rivers and Natural History Museums</div>
                            </aside>
                        </article><!-- /article -->
                        <article class="event">
                            <figure class="date">
                                <div class="month">mar</div>
                                <div class="day">23</div>
                            </figure>
                            <aside>
                                <header>
                                    <a href="<?= base_url()?>mainakn/event-detail.html">The Orchestra of the Age of Enlightenment perform with Music</a>
                                </header>
                                <div class="additional-info">Faculty of Music</div>
                            </aside>
                        </article><!-- /article -->
                    </div><!-- /.section-content -->
                </section><!-- /.events-small -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-12">
                <section id="about">
                    <header>
                        <h2>Tentang AKN Kajen</h2>
                    </header>
                    <div class="section-content">
                        <img src="<?= base_url()?>mainakn/assets/img/students.jpg" alt="" class="add-margin">
                        <p><strong>Akademi Komunitas Negeri Kajen</strong> merupakan pendidikan vokasi atau setara diploma yang mengembangkan 
                        ilmu pengetahun dan teknologi terapan yang mendukung budaya lokal. </p>
                        <a href="<?= base_url()?>mainakn/" class="read-more stick-to-bottom">Read More</a>
                    </div><!-- /.section-content -->
                </section><!-- /.about -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end News, Events, About -->

<!-- Testimonial -->
<section id="testimonials">
    <div class="block">
        <div class="container">
            <div class="author-carousel">
                <div class="author">
                    <blockquote>
                        <figure class="author-picture"><img src="<?= base_url()?>mainakn/assets/img/student-testimonial.jpg" alt=""></figure>
                        <article class="paragraph-wrapper">
                            <div class="inner">
                                <header>Mahasiswa adalah agen perubahan.</header>
                                <footer>Drs. Mujiyanto</footer>
                            </div>
                        </article>
                    </blockquote>
                </div><!-- /.author -->
                <div class="author">
                    <blockquote>
                        <figure class="author-picture"><img src="<?= base_url()?>mainakn/assets/img/student-testimonial.jpg" alt=""></figure>
                        <article class="paragraph-wrapper">
                            <div class="inner">
                                <header>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.
                                    Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.</header>
                                <footer>Claire Doe</footer>
                            </div>
                        </article>
                    </blockquote>
                </div><!-- /.author -->
            </div><!-- /.author-carousel -->
        </div><!-- /.container -->
    </div><!-- /.block -->
</section>
<!-- end Testimonial -->

<!-- Academic Life, Campus Life, Newsletter -->
<div class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <section id="academic-life">
                    <header>
                        <h2>Kehidupan Akademik</h2>
                    </header>
                    <div class="section-content">
                        <ul class="list-links">
                            <li><a href="<?= base_url()?>mainakn/#">Penelitian</a></li>
                            <li><a href="<?= base_url()?>mainakn/#">Pengabdian Masyarakat</a></li>
                            <li><a href="<?= base_url()?>mainakn/#">Riset dan Inovasi Mahasiswa</a></li>
                            <li><a href="<?= base_url()?>mainakn/#">Jenjang Karir</a></li>
                            <li><a href="<?= base_url()?>mainakn/#">Kursus dan Sertifikat Peningkatan Keahlian</a></li>
                        </ul>
                    </div><!-- /.section-content -->
                </section><!-- /.academic-life -->
            </div><!-- /.col-md-4 -->

            <div class="col-md-4 col-sm-4">
                <section id="campus-life">
                    <header>
                        <h2>Kehidupan Kampus</h2>
                    </header>
                    <div class="section-content">
                        <ul class="list-links">
                            <li><a href="<?= base_url()?>mainakn/#">Pengenalan Kampus</a></li>
                            <li><a href="<?= base_url()?>mainakn/#">Malam Keakraban</a></li>
                            <li><a href="<?= base_url()?>mainakn/#">Pembelajaran</a></li>
                            <li><a href="<?= base_url()?>mainakn/#">Himpunan Mahasiswa (HIMA)</a></li>
                            <li><a href="<?= base_url()?>mainakn/#">Unit Kegiatan Mahasiswa</a></li>
                            <li><a href="<?= base_url()?>mainakn/#">BEM dan MPM</a></li>
                            <li><a href="<?= base_url()?>mainakn/#">Seni dan Budaya</a></li>
                            <li><a href="<?= base_url()?>mainakn/#">Atletik dan Rekreasi</a></li>
                            <li><a href="<?= base_url()?>mainakn/#">Unit Kesehatan</a></li>
                            <li><a href="<?= base_url()?>mainakn/#">Pujasera (Kantin)</a></li>
                        </ul>
                    </div><!-- /.section-content -->
                </section><!-- /.campus-life -->
            </div><!-- /.col-md-4 -->

            <div class="col-md-4 col-sm-4">
                <section id="newsletter">
                    <header>
                        <h2>Info PMB</h2>
                        <div class="section-content">
                        <ul class="list-links">
                            <li><a href="<?= base_url()?>mainakn/#">PMDK</a></li>
                            <li><a href="<?= base_url()?>mainakn/#">SUMB</a></li>
                            <li><a href="<?= base_url()?>mainakn/#">Beasiswa Mitra</a></li>
                        </ul>
                    </div><!-- /.section-content -->
                    </header>
                </section><!-- /.newsletter -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Academic Life, Campus Life, Newsletter -->

<!-- Divisions, Connect -->
<div class="block">
    <div class="container">
        <div class="block-dark-background">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <section id="division" class="has-dark-background">
                        <header>
                            <h2>Jurusan</h2>
                        </header>
                        <div class="section-content">
                            <ul class="list-links">
                                <li><a href="<?= base_url()?>mainakn/#">Teknik Kimia</a></li>
                                <li><a href="<?= base_url()?>mainakn/#">Teknik Mesin</a></li>
                                <li><a href="<?= base_url()?>mainakn/#">Teknik Komputer dan Informatika</a></li>
                            </ul>
                        </div><!-- /.section-content -->
                    </section><!-- #.divisions -->
                </div>
                <div class="col-md-9 col-sm-8">
                    <section id="connect" class="has-dark-background">
                        <header>
                            <h2>Connect</h2>
                        </header>
                        <div class="connect-block">
                            <div class="row">
                                <div class="col-md-3">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li class="active"><a href="<?= base_url()?>mainakn/#tab-twitter" data-toggle="pill"><i class="fa fa-twitter"></i>Twitter</a></li>
                                        <li><a href="<?= base_url()?>mainakn/#tab-facebook" data-toggle="pill"><i class="fa fa-facebook"></i>Facebook</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab-twitter">
                                        <div class="col-md-3">
                                            <article class="social-post twitter-post">
                                                <header>15 minutes ago</header>
                                                <figure><a href="<?= base_url()?>mainakn/#">@universo</a></figure>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam odio augue, accumsan ut massa ut, faucibus gravida turpis.
                                                    <a href="<?= base_url()?>mainakn/http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                </p>
                                            </article><!-- /.twitter-post -->
                                        </div>
                                        <div class="col-md-3">
                                            <article class="social-post twitter-post">
                                                <header>2 hours ago</header>
                                                <figure><a href="<?= base_url()?>mainakn/#">@universo</a></figure>
                                                <p>
                                                    Nullam odio augue, accumsan ut massa ut, faucibus gravida turpis. Nulla eleifend libero mi, at consequat tellus.
                                                    <a href="<?= base_url()?>mainakn/http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                </p>
                                            </article><!-- /.twitter-post -->
                                        </div>
                                        <div class="col-md-3">
                                            <article class="social-post twitter-post">
                                                <header>February 02, 2014</header>
                                                <figure><a href="<?= base_url()?>mainakn/#">@universo</a></figure>
                                                <p>
                                                    Ut at arcu sed justo laoreet iaculis ut nec leo. Aliquam laoreet orci eu egestas fermentum.
                                                    <a href="<?= base_url()?>mainakn/http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                </p>
                                            </article><!-- /.twitter-post -->
                                        </div>
                                    </div><!-- /.tab-twitter -->
                                    <div class="tab-pane fade" id="tab-facebook">
                                        <div class="col-md-3">
                                            <article class="social-post facebook-post">
                                                <header>30 minutes ago</header>
                                                <figure><a href="<?= base_url()?>mainakn/#">@universo</a></figure>
                                                <p>
                                                    Ut at arcu sed justo laoreet iaculis ut nec leo. Aliquam laoreet orci eu egestas fermentum.
                                                    <a href="<?= base_url()?>mainakn/http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                </p>
                                            </article><!-- /.twitter-post -->
                                        </div>
                                        <div class="col-md-3">
                                            <article class="social-post facebook-post">
                                                <header>4 days ago</header>
                                                <figure><a href="<?= base_url()?>mainakn/#">@universo</a></figure>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam odio augue, accumsan ut massa ut, faucibus gravida turpis.
                                                    <a href="<?= base_url()?>mainakn/http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                </p>
                                            </article><!-- /.twitter-post -->
                                        </div>
                                        <div class="col-md-3">
                                            <article class="social-post facebook-post">
                                                <header>One week ago</header>
                                                <figure><a href="<?= base_url()?>mainakn/#">@universo</a></figure>
                                                <p>
                                                    Nullam odio augue, accumsan ut massa ut, faucibus gravida turpis. Nulla eleifend libero mi, at consequat tellus.
                                                    <a href="<?= base_url()?>mainakn/http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                </p>
                                            </article><!-- /.twitter-post -->
                                        </div>
                                    </div><!-- /.tab-twitter -->
                                </div><!-- /.tab-content -->
                            </div><!-- /.row -->
                        </div><!-- /.section-content -->
                    </section><!-- #.divisions -->
                </div><!-- /.col-md-9 -->
            </div><!-- /.row -->
        </div><!-- /.block-dark-background -->
    </div><!-- /.container -->
</div>
<!-- end Divisions, Connect -->

<!-- Our Professors, Gallery -->
<div class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <section id="our-professors">
                    <header>
                        <h2>Para Pengajar</h2>
                    </header>
                    <div class="section-content">
                        <div class="professors">
                            <article class="professor-thumbnail">
                                <figure class="professor-image"><a href="<?= base_url()?>mainakn/member-detail.html"><img src="<?= base_url()?>mainakn/assets/img/professor.jpg" alt=""></a></figure>
                                <aside>
                                    <header>
                                        <a href="<?= base_url()?>mainakn/member-detail.html">Ika Yuliawati, M.Pd</a>
                                        <div class="divider"></div>
                                        <figure class="professor-description">Pendidikan Teknik Kimia</figure>
                                    </header>
                                    <a href="<?= base_url()?>mainakn/member-detail.html" class="show-profile">Lihat Profil</a>
                                </aside>
                            </article><!-- /.professor-thumbnail -->
                            <article class="professor-thumbnail">
                                <figure class="professor-image"><a href="<?= base_url()?>mainakn/member-detail.html"><img src="<?= base_url()?>mainakn/assets/img/professor-02.jpg" alt=""></a></figure>
                                <aside>
                                    <header>
                                        <a href="<?= base_url()?>mainakn/member-detail.html">Linggar Suwarno Putri, M.Pd</a>
                                        <div class="divider"></div>
                                        <figure class="professor-description">Pendidikan Teknik Kimia</figure>
                                    </header>
                                    <a href="<?= base_url()?>mainakn/member-detail.html" class="show-profile">Lihat Profil</a>
                                </aside>
                            </article><!-- /.professor-thumbnail -->
                            <a href="<?= base_url()?>mainakn/" class="read-more stick-to-bottom">Semua Pengajar</a>
                        </div><!-- /.professors -->
                    </div><!-- /.section-content -->
                </section><!-- /.our-professors -->
            </div><!-- /.col-md-4 -->

            <div class="col-md-8 col-sm-8">
                <section id="gallery">
                    <header>
                        <h2>Galeri</h2>
                    </header>
                    <div class="section-content">
                        <ul class="gallery-list">
                            <li><a href="<?= base_url()?>mainakn/assets/img/gallery-big-image.jpg" class="image-popup"><img src="<?= base_url()?>mainakn/assets/img/image-01.jpg" alt=""></a></li>
                            <li><a href="<?= base_url()?>mainakn/assets/img/gallery-big-image.jpg" class="image-popup"><img src="<?= base_url()?>mainakn/assets/img/image-02.jpg" alt=""></a></li>
                            <li><a href="<?= base_url()?>mainakn/assets/img/gallery-big-image.jpg" class="image-popup"><img src="<?= base_url()?>mainakn/assets/img/image-03.jpg" alt=""></a></li>
                            <li><a href="<?= base_url()?>mainakn/assets/img/gallery-big-image.jpg" class="image-popup"><img src="<?= base_url()?>mainakn/assets/img/image-04.jpg" alt=""></a></li>
                            <li><a href="<?= base_url()?>mainakn/assets/img/gallery-big-image.jpg" class="image-popup"><img src="<?= base_url()?>mainakn/assets/img/image-05.jpg" alt=""></a></li>
                            <li><a href="<?= base_url()?>mainakn/assets/img/gallery-big-image.jpg" class="image-popup"><img src="<?= base_url()?>mainakn/assets/img/image-06.jpg" alt=""></a></li>
                            <li><a href="<?= base_url()?>mainakn/assets/img/gallery-big-image.jpg" class="image-popup"><img src="<?= base_url()?>mainakn/assets/img/image-07.jpg" alt=""></a></li>
                            <li><a href="<?= base_url()?>mainakn/assets/img/gallery-big-image.jpg" class="image-popup"><img src="<?= base_url()?>mainakn/assets/img/image-08.jpg" alt=""></a></li>
                            <li><a href="<?= base_url()?>mainakn/assets/img/gallery-big-image.jpg" class="image-popup"><img src="<?= base_url()?>mainakn/assets/img/image-09.jpg" alt=""></a></li>
                            <li><a href="<?= base_url()?>mainakn/assets/img/gallery-big-image.jpg" class="image-popup"><img src="<?= base_url()?>mainakn/assets/img/image-10.jpg" alt=""></a></li>
                            <li><a href="<?= base_url()?>mainakn/assets/img/gallery-big-image.jpg" class="image-popup"><img src="<?= base_url()?>mainakn/assets/img/image-11.jpg" alt=""></a></li>
                            <li><a href="<?= base_url()?>mainakn/assets/img/gallery-big-image.jpg" class="image-popup"><img src="<?= base_url()?>mainakn/assets/img/image-12.jpg" alt=""></a></li>
                            <li><a href="<?= base_url()?>mainakn/assets/img/gallery-big-image.jpg" class="image-popup"><img src="<?= base_url()?>mainakn/assets/img/image-13.jpg" alt=""></a></li>
                            <li><a href="<?= base_url()?>mainakn/assets/img/gallery-big-image.jpg" class="image-popup"><img src="<?= base_url()?>mainakn/assets/img/image-14.jpg" alt=""></a></li>
                        </ul>
                        <a href="<?= base_url()?>mainakn/" class="read-more">Lihat ke Galeri</a>
                    </div><!-- /.section-content -->
                </section><!-- /.gallery -->
            </div><!-- /.col-md-4 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Our Professors, Gallery -->

<!-- Partners, Make a Donation -->
<div class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <section id="partners">
                    <header>
                        <h2>Mitra</h2>
                    </header>
                    <div class="section-content">
                        <div class="logos">
                            <div class="logo"><a href="<?= base_url()?>mainakn/"><img src="<?= base_url()?>mainakn/assets/img/logo-partner-01.png" alt=""></a></div>
                            <div class="logo"><a href="<?= base_url()?>mainakn/"><img src="<?= base_url()?>mainakn/assets/img/logo-partner-02.png" alt=""></a></div>
                            <div class="logo"><a href="<?= base_url()?>mainakn/"><img src="<?= base_url()?>mainakn/assets/img/logo-partner-03.png" alt=""></a></div>
                            <div class="logo"><a href="<?= base_url()?>mainakn/"><img src="<?= base_url()?>mainakn/assets/img/logo-partner-04.png" alt=""></a></div>
                            <div class="logo"><a href="<?= base_url()?>mainakn/"><img src="<?= base_url()?>mainakn/assets/img/logo-partner-05.png" alt=""></a></div>
                        </div>
                    </div>
                </section>
            </div><!-- /.col-md-9 -->
            <div class="col-md-3 col-sm-3">
                <section id="donation">
                    <header>
                        <h2>Buat Donasi</h2>
                    </header>
                    <div class="section-content">
                        <a href="<?= base_url()?>mainakn/" class="universal-button">
                            <h3>Dukung kami!</h3>
                            <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                        </a>
                    </div><!-- /.section-content -->
                </section>
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Partners, Make a Donation -->
</div>
<!-- end Page Content -->

<!-- Footer -->
<footer id="page-footer">
    <section id="footer-top">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-social">
                    <figure>Ikuti kami:</figure>
                    <div class="icons">
                        <a href="<?= base_url()?>mainakn/"><i class="fa fa-twitter"></i></a>
                        <a href="<?= base_url()?>mainakn/"><i class="fa fa-facebook"></i></a>
                        <a href="<?= base_url()?>mainakn/"><i class="fa fa-youtube-play"></i></a>
                    </div><!-- /.icons -->
                </div><!-- /.social -->
                <div class="search pull-right">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                    </span>
                    </div><!-- /input-group -->
                </div><!-- /.pull-right -->
            </div><!-- /.footer-inner -->
        </div><!-- /.container -->
    </section><!-- /#footer-top -->

    <section id="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <aside class="logo">
                        <img src="<?= base_url()?>mainakn/assets/img/logo-white.png" class="vertical-center">
                    </aside>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-4">
                    <aside>
                        <header><h4>Hubungi kami</h4></header>
                        <address>
                            <strong>Akademi Komunitas Negeri Kajen</strong>
                            <br>
                            <span>Jalan Bahurekso No. 1 Kajen</span>
                            <br><br>
                            <span>Kabupatan Pekalongan, 51112</span>
                            <br>
                            <abbr title="Telephone">Telepone:</abbr> (0285) 423000
                            <br>
                            <abbr title="Email">Email:</abbr> <a href="<?= base_url()?>">humas.aknkajen@aknkajen.ac.id</a>
                        </address>
                    </aside>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-4">
                    <aside>
                        <header><h4>Tautan Penting</h4></header>
                        <ul class="list-links">
                            <li><a href="<?= site_url()?>">Calon Mahasiswa</a></li>
                            <li><a href="<?= site_url()?>">Alumni</a></li>
                            <li><a href="<?= site_url()?>">Buat Donasi</a></li>
                            <li><a href="<?= site_url()?>">Dosen</a></li>
                            <li><a href="<?= site_url()?>">Prestasi Mahasiswa</a></li>
                            <li><a href="<?= site_url()?>">Beasiswa</a></li>
                        </ul>
                    </aside>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-4">
                    <aside>
                        <header><h4>Tentang AKN Kajen</h4></header>
                        <p><strong>Akademi Komunitas Negeri Kajen</strong> merupakan pendidikan vokasi atau setara diploma yang mengembangkan 
                            ilmu pengetahun dan teknologi terapan yang mendukung budaya lokal.
                        </p>
                        <div>
                            <a href="<?= site_url('')?>" class="read-more">Semua Berita</a>
                        </div>
                    </aside>
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="background"><img src="<?= base_url()?>mainakn/assets/img/background-city.png" class="" alt=""></div>
    </section><!-- /#footer-content -->

    <section id="footer-bottom">
        <div class="container">
            <div class="footer-inner">
                <div class="copyright">© AKN Kajen, 2018</div><!-- /.copyright -->
            </div><!-- /.footer-inner -->
        </div><!-- /.container -->
    </section><!-- /#footer-bottom -->

</footer>
<!-- end Footer -->

</div>
<!-- end Wrapper -->

<script type="text/javascript" src="<?= base_url()?>mainakn/assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>mainakn/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>mainakn/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>mainakn/assets/js/selectize.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>mainakn/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>mainakn/assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>mainakn/assets/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="<?= base_url()?>mainakn/assets/js/jQuery.equalHeights.js"></script>
<script type="text/javascript" src="<?= base_url()?>mainakn/assets/js/icheck.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>mainakn/assets/js/jquery.vanillabox-0.1.5.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>mainakn/assets/js/retina-1.1.0.min.js"></script>

<script type="text/javascript" src="<?= base_url()?>mainakn/assets/js/custom.js"></script>

</body>
</html>