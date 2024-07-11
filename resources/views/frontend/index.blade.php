<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - CherryWheels</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css" rel="stylesheet') }}">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top" style="background-color: #ff8080;">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ url('/landing') }}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">CherryWheels</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda</a></li>
          <li><a href="#about">tentangn Kami</a></li>
          <li><a href="#services">Armada</a></li>
          <li><a href="#portfolio">Jenis Kendaraan</a></li>
          <li><a href="#team">Tim</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ url('/admin/peminjaman/create/form') }}">Mulai</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background" style="background-color: #ff8080;">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Welcome to CherryWheels</h1>
            <p>Kenyamanan dan Keceriaan di Setiap Rodanya</p>
            <div class="d-flex">
              <a href="{{ url('/admin/peminjaman/create/form') }}" class="btn-get-started">Mulai</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 mobil-depan.png" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('assets/img/mobil-depan.png') }}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="zoom-in">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/BMW.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/Daihatsu.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/Hino.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/Honda.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/Mercedes-Benz.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/Mitsubishi.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/Nissan.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/Wuling.jpeg" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Kami</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
                Selamat datang di CherryWheels, tempat penyewaan mobil yang mengutamakan kenyamaan, keceriaan, dan gaya di setiap perjalanan Anda. Kami hadir untuk memberikan pengalaman berkendara yang tak hanya nyaman, tetapi juga :
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Pelayanan Terbaik.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Kendaraan Berkualitas.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Harga Bersaing</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>CherryWheels berkomitmen untuk memberikan pengalaman penyewaan mobil yang menyenangkan, bebas stres, dan penuh gaya. Setiap perjalanan adalah kesempatan untuk menciptakan kenangan indah, dan kami ada di sini untuk memastikan Anda melakukannya dengan penuh keceriaan dan kenyamanan. </p>
            <a href="#" class="read-more"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us light-background" data-builder="section">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

          <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="{{ asset('assets/img/why-us.png') }}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Armada</h2></h2>
        <p>Kendaraan Pilihan Untuk Anda</p>
      </div><!-- End Section Title -->

      <div class="container">

        <section class="py-5">
              <div
                class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"
              >
                <div class="col mb-5">
                  <div class="card h-100">
                    <!-- Sale badge-->
                    <div
                      class="badge badge-custom bg-warning text-white position-absolute"
                      style="top: 0; right: 0"
                    >
                      Tidak Tersedia
                    </div>
                    <!-- Product image-->
                    <img
                      class="card-img-top"
                      src="{{ asset('assets/img/mobil-depan.png') }}" 
                      alt="..."
                    />
                    <!-- Product details-->
                    <div class="card-body card-body-custom pt-4">
                      <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">Special Item</h5>
                        <!-- Product price-->
                        <div class="rent-price mb-3">
                          <span class="text-primary">Rp.200.000/</span>day
                        </div>
                        <ul class="list-unstyled list-style-group">
                          <li
                            class="border-bottom p-2 d-flex justify-content-between"
                          >
                            <span>Bahan bakar</span>
                            <span style="font-weight: 600">Bensin</span>
                          </li>
                          <li
                            class="border-bottom p-2 d-flex justify-content-between"
                          >
                            <span>Jumlah Kursi</span>
                            <span style="font-weight: 600">5</span>
                          </li>
                          <li
                            class="border-bottom p-2 d-flex justify-content-between"
                          >
                            <span>Transmisi</span>
                            <span style="font-weight: 600">Manual</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer border-top-0 bg-transparent">
                      <div class="text-center">
                        <a class="btn btn-primary mt-auto" href="{{ url('/admin/peminjaman/create/form') }}">Sewa</a>
                        <a
                          class="btn btn-info mt-auto text-white"
                          href="./detail.html"
                          >Detail</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col mb-5">
                  <div class="card h-100">
                    <!-- Sale badge-->
                    <div
                      class="badge badge-custom bg-success text-white position-absolute"
                      style="top: 0; right: 0"
                    >
                      Tersedia
                    </div>
                    <!-- Product image-->
                    <img
                      class="card-img-top"
                      src="{{ asset('assets/img/Hrv.jpeg') }}" 
                      alt="..."
                    />
                    <!-- Product details-->
                    <div class="card-body card-body-custom pt-4">
                      <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">Special Item</h5>
                        <!-- Product price-->
                        <div class="rent-price mb-3">
                          <span class="text-primary">Rp.200.000/</span>day
                        </div>
                        <ul class="list-unstyled list-style-group">
                          <li
                            class="border-bottom p-2 d-flex justify-content-between"
                          >
                            <span>Bahan bakar</span>
                            <span style="font-weight: 600">Bensin</span>
                          </li>
                          <li
                            class="border-bottom p-2 d-flex justify-content-between"
                          >
                            <span>Jumlah Kursi</span>
                            <span style="font-weight: 600">5</span>
                          </li>
                          <li
                            class="border-bottom p-2 d-flex justify-content-between"
                          >
                            <span>Transmisi</span>
                            <span style="font-weight: 600">Manual</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer border-top-0 bg-transparent">
                      <div class="text-center">
                        <a class="btn btn-primary mt-auto" href="{{ url('/admin/peminjaman/create/form') }}">Sewa</a>
                        <a
                          class="btn btn-info mt-auto text-white"
                          href="./detail.html"
                          >Detail</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col mb-5">
                  <div class="card h-100">
                    <!-- Sale badge-->
                    <div
                      class="badge badge-custom bg-success text-white position-absolute"
                      style="top: 0; right: 0"
                    >
                      Tersedia
                    </div>
                    <!-- Product image-->
                    <img
                      class="card-img-top"
                      src="{{ asset('assets/img/mitsubisi.jpeg') }}" 
                      alt="..."
                    />
                    <!-- Product details-->
                    <div class="card-body card-body-custom pt-4">
                      <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">Special Item</h5>
                        <!-- Product price-->
                        <div class="rent-price mb-3">
                          <span class="text-primary">Rp.200.000/</span>day
                        </div>
                        <ul class="list-unstyled list-style-group">
                          <li
                            class="border-bottom p-2 d-flex justify-content-between"
                          >
                            <span>Bahan bakar</span>
                            <span style="font-weight: 600">Bensin</span>
                          </li>
                          <li
                            class="border-bottom p-2 d-flex justify-content-between"
                          >
                            <span>Jumlah Kursi</span>
                            <span style="font-weight: 600">5</span>
                          </li>
                          <li
                            class="border-bottom p-2 d-flex justify-content-between"
                          >
                            <span>Transmisi</span>
                            <span style="font-weight: 600">Manual</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer border-top-0 bg-transparent">
                      <div class="text-center">
                        <a class="btn btn-primary mt-auto" href="{{ url('/admin/peminjaman/create/form') }}">Sewa</a>
                        <a
                          class="btn btn-info mt-auto text-white"
                          href="./detail.html"
                          >Detail</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Jenis - jenis Mobil</h2>
        <p>Berbagai macam jenis Mobil yang Tersedia di CherryWheels  </p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Toyota</li>
            <li data-filter=".filter-product">Mitsubisi</li>
            <li data-filter=".filter-branding">BMW</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset('assets/img/toyota.jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Toyota</h4>
                <p>Rp.700.000/ Hari</p>
                <a href="{{ asset('assets/img/toyota.jpeg') }}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="{{ asset('assets/img/Mitsubishi 1.jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mitsubishi</h4>
                <p>Rp.400.000/ Hari</p>
                <a href="{{ asset('assets/img/Mitsubishi 1.jpeg') }}" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="{{ asset('assets/img/BMW1.jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>BMW</h4>
                <p>Rp.1.000.000/ Hari</p>
                <a href="{{ asset('assets/img/BMW1.jpeg') }}" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset('assets/img/Toyota2.jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Toyota</h4>
                <p>Rp. 500.000/Hari</p>
                <a href="{{ asset('assets/img/Toyota2.jpeg') }}" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="{{ asset('assets/img/Mitsubishi2.jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mitsubishi</h4>
                <p>Rp. 700.000/Hari</p>
                <a href="{{ asset('assets/img/Mitsubishi2.jpeg') }}" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="{{ asset('assets/img/BMW2.jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>BMW</h4>
                <p>Rp. 800.000/Hari</p>
                <a href="{{ asset('assets/img/BMW2.jpeg') }}" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset('assets/img/Toyota3.jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Toyota</h4>
                <p>Rp. 600.000/Hari</p>
                <a href="{{ asset('assets/img/Toyota3.jpeg') }}" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="{{ asset('assets/img/mitsubisi.jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mitsubishi</h4>
                <p>Rp. 800.000</p>
                <a href="{{ asset('assets/img/mitsubisi.jpeg') }}" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="{{ asset('assets/img/BMW3.jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>BMW</h4>
                <p>Rp. 700.000</p>
                <a href="{{ asset('assets/img/BMW3.jpeg') }}" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tim</h2>
        <p>Beberapa Driver yang Bisa Anda Pilih</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/nuy.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Nurhayati</h4>
                <span>Driver</span>
                </p>Sudah menjadi Driver selama 3 tahun</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/eka.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Eka Kartini</h4>
                <span>Driver</span>
                <p>Sudah menjadi Driver selama 5 Tahun</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/putri.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Putri Nur Febrianti</h4>
                <span>Driver</span>
                <p>Sudah menjadi Driver selama 4 tahun</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/farida.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Farida Rabbani Virdynata</h4>
                <span>Driver</span>
                <p>Sudah Mendriver Sejak SMA,dan sudah bekerja bersama kami 2 tahun</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Penilaian</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Layanan sewa mobil di sini luar biasa! Proses pemesanan sangat mudah dan cepat. Staf sangat ramah dan membantu. Mobil yang kami sewa dalam kondisi 
                    sangat baik, bersih, dan nyaman. Kami pasti akan menggunakan layanan ini lagi di masa depan. Sangat direkomendasikan!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Pengalaman kami dengan layanan sewa mobil ini cukup memuaskan. Harga sewa cukup terjangkau dan pilihan mobilnya beragam. Proses pengambilan dan 
                    pengembalian mobil juga tidak memakan waktu lama. Satu-satunya kekurangan adalah ada sedikit bau rokok di dalam mobil, tetapi secara keseluruhan, layanannya bagus.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Pelayanan cukup baik, tetapi ada beberapa hal yang perlu diperbaiki. Mobil yang kami dapatkan mengalami sedikit masalah mesin di tengah jalan. 
                    Untungnya, staf tanggap dan segera mengganti mobil tersebut. Meskipun ada kendala, mereka menangani situasi dengan profesional.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Saya sangat puas dengan layanan sewa mobil ini! Staf sangat profesional dan membantu kami memilih mobil yang tepat sesuai kebutuhan. Mobil dalam 
                    kondisi prima dan sangat nyaman digunakan. Proses pengembalian juga sangat mudah dan tidak merepotkan. Saya akan merekomendasikan layanan ini kepada teman dan keluarga.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Pengalaman sewa mobil yang sangat memuaskan! Mobil yang kami sewa benar-benar baru dan dalam kondisi sempurna. Proses reservasi online sangat mudah dan staf di lokasi sangat membantu. Mereka memberikan penjelasan yang jelas tentang semua detail sewa dan asuransi. Tidak ada biaya tersembunyi dan pengembalian mobil juga cepat dan mudah. Pasti akan menggunakan layanan ini lagi di masa depan!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
     
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>Lenteng Agung, Srengseng Sawah. kec.Jagakarsa, Kota Jakarta Selatan, 12640</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>cherrywheels@gmail.com</p>
                </div>
              </div><!-- End Info Item -->
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">
    
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">CherryWheels</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Beranda</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Tentang Kami</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Armada</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Jenis Kendaraan</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Tim</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">CherryWheels</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>