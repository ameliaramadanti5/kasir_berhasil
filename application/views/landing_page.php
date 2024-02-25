<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shusiko</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('landing') ?>/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url('landing') ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('landing') ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('landing') ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('landing') ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url('landing') ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url('landing') ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('landing') ?>/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Updated: Jan 30 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Shusiko<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Tampilan</a></li>
          <li><a href="#menu">Menu</a></li>
            <!-- <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
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
            </ul> -->
          </li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="<?= base_url('auth') ?>/">Login</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Selamat Datang di Aplikasi Kasir Shusiko!</h2>
          <p data-aos="fade-up" data-aos-delay="100">Aplikasi kasir shusiko ini dibuat untuk mempermudah transaksi pembayaran dan pembelian produk.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="<?= base_url('landing') ?>/assets/img/sushi2.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">


            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Menu kami</h2>
          <p> <span>Shusiko Menu</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-favorit">
              <h4>1</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-makanan_berat">
              <h4>2</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-cemilan">
              <h4>3</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-hidangan_penutup">
              <h4>4</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-minuman">
              <h4>5</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-favorit">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Favorit</h3>
            </div>

            <div class="row gy-5">

            <div class="col-lg-4 menu-item">
                <a href="uploads/produk/fc66d766ffb83c27e74aa5c09f9c7105.jpg" class="glightbox"><img src="uploads/produk/fc66d766ffb83c27e74aa5c09f9c7105.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Ramen</h4>
                <p class="ingredients">
                 (mie, daging sapi, telur, Daun bawang)
                </p>
                <p class="price">
                  Rp. 27.000	
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="uploads/produk/a9760fbeed98b4d7f1d297b176450ba9.jpg" class="glightbox"><img src="uploads/produk/a9760fbeed98b4d7f1d297b176450ba9.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Oyakodon</h4>
                <p class="ingredients">
                (nasi, ayam, telur)
                </p>
                <p class="price">
                  Rp. 26.000	
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="uploads/produk/4077debf5933aad7b14315b0153291ac.jpg" class="glightbox"><img src="uploads/produk/4077debf5933aad7b14315b0153291ac.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Shabu-shabu</h4>
                <p class="ingredients">
                 (daging, tahu, jamur-jamuran)
                </p>
                <p class="price">
                  Rp.  189.000	
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="uploads/produk/bfe2a7931198a84b9c6c66d39db66694.jpg" class="glightbox"><img src="uploads/produk/bfe2a7931198a84b9c6c66d39db66694.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Unagi</h4>
                <p class="ingredients">
                 (nasi & belut bakar)
                </p>
                <p class="price">
                  Rp.  24.000	
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="uploads/produk/ccb3b32a084d8584fee9897568ddf72c.jpg" class="glightbox"><img src="uploads/produk/ccb3b32a084d8584fee9897568ddf72c.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Okonomiyaki</h4>
                <p class="ingredients">
                 (tepung tempura goreng, mie, bawang)
                </p>
                <p class="price">
                  Rp.  35.000	
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="uploads/produk/d1db873b9419fe6dbbcfe7555f81c92f.jpg" class="glightbox"><img src="uploads/produk/d1db873b9419fe6dbbcfe7555f81c92f.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Karaage</h4>
                <p class="ingredients">
                 (ayam goreng tepung)
                </p>
                <p class="price">
                  Rp.  30.000	
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-makanan_berat">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Makanan Berat</h3>
            </div>

            <div class="row gy-5">

            <div class="col-lg-4 menu-item">
                <a href="uploads/produk/72b08afc09930137e102e4006db37415.jpg" class="glightbox"><img src="uploads/produk/72b08afc09930137e102e4006db37415.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Sashimi</h4>
                <p class="ingredients">
                 (ikan salmon mentah)
                </p>
                <p class="price">
                  Rp.  26.000	
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="uploads/produk/2a211c930df4ba429b718e6aa6fb8f8c.jpg" class="glightbox"><img src="uploads/produk/2a211c930df4ba429b718e6aa6fb8f8c.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Nigiri Sushi</h4>
                <p class="ingredients">
                 (nasi dengan fillet ikan salmon, tuna, udang)
                </p>
                <p class="price">
                  Rp.  50.000	
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="uploads/produk/e8022b4710f3f042baddb46c89c623a7.jpg" class="glightbox"><img src="uploads/produk/e8022b4710f3f042baddb46c89c623a7.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Maki Sushi</h4>
                <p class="ingredients">
                 (irisan timun, salmon, daging sapi, seafood)
                </p>
                <p class="price">
                  Rp.  90.000	
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="uploads/produk/59cd02733a142390fbca0703cc79533f.jpg" class="glightbox"><img src="uploads/produk/59cd02733a142390fbca0703cc79533f.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Onigiri</h4>
                <p class="ingredients">
                (nasi segitiga berlapis nori)
                </p>
                <p class="price">
                  Rp.  15.000	
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="uploads/produk/13dae89252f120e65b8a5f5d970e434b.jpg" class="glightbox"><img src="uploads/produk/13dae89252f120e65b8a5f5d970e434b.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Inarizushi</h4>
                <p class="ingredients">
                (sushi dengan isian nasi di dalam tahu)
                </p>
                <p class="price">
                  Rp.  17.000	
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="uploads/produk/9687ec96dc0721e32da1b4d806af7d4d.jpg" class="glightbox"><img src="uploads/produk/9687ec96dc0721e32da1b4d806af7d4d.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Yaki Onigiri</h4>
                <p class="ingredients">
                (nasi panggang)
                </p>
                <p class="price">
                  Rp.  20.000	
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-cemilan">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Cemilan</h3>
            </div>

            <div class="row gy-5">

            <div class="col-lg-4 menu-item">
                <a href="uploads/produk/43e0632e320ffc30d6c08e65071fc0c8.jpg" class="glightbox"><img src="uploads/produk/43e0632e320ffc30d6c08e65071fc0c8.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Tamagoyaki</h4>
                <p class="ingredients">
                (telur dadar gulung)
                </p>
                <p class="price">
                  Rp.  15.000	
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="uploads/produk/88038f49ee2a956ad8e90764bb7f36ee.jpg" class="glightbox"><img src="uploads/produk/88038f49ee2a956ad8e90764bb7f36ee.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Takoyaki</h4>
                <p class="ingredients">
                (bola-bola goreng dengan gurita di dalamnya)
                </p>
                <p class="price">
                  Rp.  30.000	
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="uploads/produk/52508d2c8fa7c95e3885ca0c5a92513b.jpg" class="glightbox"><img src="uploads/produk/52508d2c8fa7c95e3885ca0c5a92513b.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Ebi Tempura</h4>
                <p class="ingredients">
                (udang goreng dengan tepung)
                </p>
                <p class="price">
                  Rp.  14.000	
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="uploads/produk/b0cb078face8a16955e6c17a64bea75f.jpg" class="glightbox"><img src="uploads/produk/b0cb078face8a16955e6c17a64bea75f.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Gyoza</h4>
                <p class="ingredients">
                (kulit pangsit dengan isi daging cincang)
                </p>
                <p class="price">
                  Rp.  40.000	
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="uploads/produk/4d76b88ac95b084369f011fdbd423289.jpg" class="glightbox"><img src="uploads/produk/4d76b88ac95b084369f011fdbd423289.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Miso Soup</h4>
                <p class="ingredients">
                (perpaduan antara kuah miso dengan tahu)
                </p>
                <p class="price">
                  Rp.  25.000	
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="uploads/produk/0d653e66753cf3b61b75813e3c64ce37.jpg" class="glightbox"><img src="uploads/produk/0d653e66753cf3b61b75813e3c64ce37.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Chawanmushi</h4>
                <p class="ingredients">
                (puding telur/telur ayam dan dashi)
                </p>
                <p class="price">
                  Rp.  23.000	
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Lunch Menu Content -->

          <div class="tab-pane fade" id="menu-hidangan_penutup">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Hidangan Penutup</h3>
            </div>

            <div class="row gy-5">

            <div class="col-lg-4 menu-item">
                <a href="uploads/produk/df74b97017ef6d62c5b7efa01562180a.jpg" class="glightbox"><img src="uploads/produk/df74b97017ef6d62c5b7efa01562180a.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Dorayaki</h4>
                <p class="ingredients">
                (pancake dengan isi pasta kacang merah)
                </p>
                <p class="price">
                  Rp.  10.000	
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="uploads/produk/0b0bb173b8873c80093ba9201f849aac.jpg" class="glightbox"><img src="uploads/produk/0b0bb173b8873c80093ba9201f849aac.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Anmitsu</h4>
                <p class="ingredients">
                (campuran jeli, buah, dan kacang-kacangan)
                </p>
                <p class="price">
                  Rp.  20.000	
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="uploads/produk/9e118f794f73d1116b56e2476e90901f.jpg" class="glightbox"><img src="uploads/produk/9e118f794f73d1116b56e2476e90901f.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Taiyaki</h4>
                <p class="ingredients">
                (kue ikan dengan isian pasta kacang merah)
                </p>
                <p class="price">
                  Rp.  9.000	
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="uploads/produk/b3e7767f4c5d7316f7e606151f252087.jpg" class="glightbox"><img src="uploads/produk/b3e7767f4c5d7316f7e606151f252087.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Daifuku</h4>
                <p class="ingredients">
                (mochi dengan isi coklat dan strawberry)
                </p>
                <p class="price">
                  Rp.  18.000	
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="uploads/produk/d78f14cf4849da5b894f8c909553be2e.jpg" class="glightbox"><img src="uploads/produk/d78f14cf4849da5b894f8c909553be2e.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Matcha Ice Cream</h4>
                <p class="ingredients">
                (ice cream dengan rasa teh hijau yang khas)
                </p>
                <p class="price">
                  Rp.  13.000	
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="uploads/produk/65f872395c6b91beddbd6d3b1e5245c8.jpg" class="glightbox"><img src="uploads/produk/65f872395c6b91beddbd6d3b1e5245c8.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Dango</h4>
                <p class="ingredients">
                (kue bulat tepung beras diberi   saus manis)
                </p>
                <p class="price">
                  Rp.  23.000	
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Dinner Menu Content -->

          <div class="tab-pane fade" id="menu-minuman">

<div class="tab-header text-center">
  <p>Menu</p>
  <h3>Minuman</h3>
</div>

<div class="row gy-5">

<div class="col-lg-4 menu-item">
    <a href="uploads/produk/fa31a47cc4df63a443deb73d301ecc8e.jpg" class="glightbox"><img src="uploads/produk/fa31a47cc4df63a443deb73d301ecc8e.jpg" class="menu-img img-fluid" alt=""></a>
    <h4>Matcha Latte</h4>
    <p class="ingredients">
     (minuman matcha yang dicampur susu)
    </p>
    <p class="price">
      Rp.  25.000	
    </p>
  </div><!-- Menu Item -->

  <div class="col-lg-4 menu-item">
    <a href="uploads/produk/fb632e63aa1984c73628eb666102ce7c.jpg" class="glightbox"><img src="uploads/produk/fb632e63aa1984c73628eb666102ce7c.jpg" class="menu-img img-fluid" alt=""></a>
    <h4>Amazake</h4>
    <p class="ingredients">
     (minuman fermentasi beras ketan)
    </p>
    <p class="price">
      Rp.  11.000	
    </p>
  </div><!-- Menu Item -->

  <div class="col-lg-4 menu-item">
    <a href="uploads/produk/f31bd019174f6572c6b7c250ff938170.jpg" class="glightbox"><img src="uploads/produk/f31bd019174f6572c6b7c250ff938170.jpg" class="menu-img img-fluid" alt=""></a>
    <h4>Sencha</h4>
    <p class="ingredients">
     (teh hijau jepang)
    </p>
    <p class="price">
      Rp.  8.000	
    </p>
  </div><!-- Menu Item -->

  <div class="col-lg-4 menu-item">
    <a href="uploads/produk/50d5a183c7e34d43be129df610757a44.jpg" class="glightbox"><img src="uploads/produk/50d5a183c7e34d43be129df610757a44.jpg" class="menu-img img-fluid" alt=""></a>
    <h4>Mugi-cha</h4>
    <p class="ingredients">
    (teh sereal terbuat dari barley/gandum )
    </p>
    <p class="price">
      Rp.  15.000	
    </p>
  </div><!-- Menu Item -->

  <div class="col-lg-4 menu-item">
    <a href="uploads/produk/2bcc4eb32d535dc43305fa9ee09efb6a.jpg" class="glightbox"><img src="uploads/produk/2bcc4eb32d535dc43305fa9ee09efb6a.jpg" class="menu-img img-fluid" alt=""></a>
    <h4>Ramune</h4>
    <p class="ingredients">
    (kombinasi unik antara manis,segar,soda)
    </p>
    <p class="price">
      Rp.  13.000	
    </p>
  </div><!-- Menu Item -->

  <div class="col-lg-4 menu-item">
    <a href="uploads/produk/b355ef68eb19efb33d3fefece25b21d6.jpg" class="glightbox"><img src="uploads/produk/b355ef68eb19efb33d3fefece25b21d6.jpg" class="menu-img img-fluid" alt=""></a>
    <h4>Hojicha</h4>
    <p class="ingredients">
    (teh hijau yang dipanggang)
    </p>
    <p class="price">
      Rp.  20.000	
    </p>
  </div><!-- Menu Item -->

</div>
</div><!-- End Breakfast Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

        </div>

      </div>
    </section><!-- End Chefs Section -->


        </div>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Kontak</h2>
          <p><span>Hubungi kami</span></p>
        </div>

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>Jl. Pangeran Jayakarta No. 15 DKI Jakarta</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>ameliaramadanti405@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Telp</h3>
                <p>+62 896 1159 8067</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Jam Buka</h3>
                <div><strong>Setiap hari:</strong> 10:00 pagi - 22:00 malam</div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-5 col-md-8 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Alamat</h4>
            <p>
            Jl. Pangeran Jayakarta No. 15 <br>
            Jakarta Utara, DKI Jakarta - Indonesia<br>
            </p>
          </div>

        </div>

        <div class="col-lg-5 col-md-8 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservasi</h4>
            <p>
              <strong>Phone:</strong> +62 896 1159 8067<br>
              <strong>Email:</strong> ameliaramadanti405@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-2 col-md-8 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Jam Buka</h4>
            <p>
              <strong>Setiap hari:</strong> 10:00 pagi - 22:00 malam<br>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Shusiko</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Amelia Ramadanti</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('landing') ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('landing') ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url('landing') ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('landing') ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url('landing') ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('landing') ?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('landing') ?>/assets/js/main.js"></script>

</body>

</html>