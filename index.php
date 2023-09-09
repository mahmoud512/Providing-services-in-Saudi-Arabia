<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- title -->
  <title>خدمات تسليك المجاري و الصرف الصحي</title>
  <meta name="title" content="شركة تسليك مجاري بالمبرز" />
  <meta name="application-name" content="شركة تسليك مجاري بالمبرز" />
  <meta name="apple-mobile-web-app-title" content="شركة تسليك مجاري بالمبرز" />
  <meta name="description" content=" خدمات تسليك المجاري و الصرف الصحي ">
  <meta name="robots" content="index, follow" />
  <meta property="og:type" content="website" />
  <!-- <meta
    property="og:url"
    content="هنا هنحط url/خدمات تسليك المجاري و الصرف الصحي"
  /> -->
  <meta property="og:image" content="assets/img/m/091520211253176141ecbd959b9.gif" />
  <meta property="twitter:card" content="summary_large_image" />
  <!-- <meta
    property="twitter:url"
    content="هنا هنحط url/خدمات تسليك المجاري و الصرف الصحي"
  /> -->
  <meta property="twitter:image" content="assets/img/m/091520211253176141ecbd959b9.gif" />

  <!-- favicon -->
  <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- fontawesome -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <!-- mean menu css -->
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <!-- bootstrap -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <!-- owl carousel -->
  <link rel="stylesheet" href="assets/css/owl.carousel.css">
  <!-- main style -->
  <link rel="stylesheet" href="assets/css/main.css">
  <!-- responsive -->
  <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>

  <!--PreLoader-->
  <div class="loader">
    <div class="loader-inner">
      <div class="circle"></div>
    </div>
  </div>
  <!--PreLoader Ends-->

  <!-- header -->
  <div class="top-header-area" id="sticker">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12 text-center">
          <div class="main-menu-wrap">
            <!-- logo -->
            <div class="site-logo">
              <a href="index.html">
                <img style="width: 100%; height: 100%;" src="assets/img/logo.png" alt="">
              </a>
            </div>
            <!-- logo -->

            <!-- menu start -->
            <nav class="main-menu">
              <ul>
                <li class="current-list-item"><a href="#">Home</a>
                  <ul class="sub-menu">
                    <li><a href="index.html">Static Home</a></li>
                    <li><a href="index_2.html">Slider Home</a></li>
                  </ul>
                </li>
                <li><a href="about.html">About</a></li>
                <li><a href="#">Pages</a>
                  <ul class="sub-menu">
                    <li><a href="404.html">404 page</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="checkout.html">Check Out</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="shop.html">Shop</a></li>
                  </ul>
                </li>
                <li><a href="news.html">News</a>
                  <ul class="sub-menu">
                    <li><a href="news.html">News</a></li>
                    <li><a href="#">Single News</a></li>
                  </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="shop.html">Shop</a>
                  <ul class="sub-menu">
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="checkout.html">Check Out</a></li>
                    <li><a href="single-product.html">Single Product</a></li>
                    <li><a href="cart.html">Cart</a></li>
                  </ul>
                </li>
                <li>
                  <div class="header-icons">
                    <a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                  </div>
                </li>
              </ul>
            </nav>
            <div class="mobile-menu"></div>
            <!-- menu end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header -->

  <!-- hero area -->
  <div class="hero-area hero-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 offset-lg-2 text-center">
          <div class="hero-text">
            <div class="hero-text-tablecell">
              <h1> خدمات تسليك المجاري و الصرف </h1>
              <span class="subtitle"> تسليك مجاري - شفط بيارات </span>
              <div class="hero-btns">
                <a style="font-size: 25px; padding: 5px 30px;" href="cart.html" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> احجز الان </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end hero area -->
  <?php
  if (isset($_SESSION['scses_cfoul'])) {
  ?>
    <div class="position-fixed bottom-0 right-0 p-3" style="z-index: 5; right: 48%; top: 100px;">
      <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000">
        <div class="toast-header" style="background-color: #051922;">
          <strong class="mr-auto">Bootstrap</strong>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="toast-body" style="font-size: 30px;">
          تم ارسال الرسالة بي نجاح
        </div>
      </div>
    </div>
  <?php
    unset($_SESSION['scses_cfoul']);
  }
  ?>
  <section class="cart-banner pt-100 pb-100">
    <div class="container">
      <div class="row clearfix">
        <!--Image Column-->
        <div class="image-column col-lg-4">
          <div class="image">
            <img style="width: 100%; height: 100%;" src="assets/img/m/m2.webp" alt="خدمات تسليك المجاري و الصرف الصحي">
          </div>
        </div>
        <!--Content Column-->
        <div class="content-column col-lg-8" style="text-align: right;">
          <h3><span class="orange-text">خدمات</span> الصرف الصحي </h3>
          <div class="row" style="gap: 5px; direction:rtl;">

            <div class="col-md-5 col-xs-11" style="background: #dbdbdb; padding: 15px; border-radius: 10px;margin: 10px;">
              <div class="row">
                <div class="col-2">
                  <i style="font-size: 35px;" class="fas fa-bullseye"></i>
                </div>
                <div class="col-10">
                  <h5 style="font-size: 25px; font-weight: 700;"> تنظيف و تسليك البالوعات </h5>
                  <p>
                    تسليك بالوعات الحمام <br>
                    تسليك بالوعات المطبخ <br>
                    تسليك بالوعات الصرف الداخي<br>
                    تسليك بالوعات الصرف الخارجي
                  </p>
                </div>

              </div>
            </div>

            <div class="col-md-5 col-xs-11" style="background: #dbdbdb; padding: 15px; border-radius: 10px;margin: 10px;">
              <div class="row">
                <div class="col-2">
                  <i style="font-size: 35px;" class="far fa-question-circle"></i>
                </div>
                <div class="col-10">
                  <h5 style="font-size: 25px; font-weight: 700;"> إزالة الروائح الكريهه </h5>
                  <p>تنظيف الصرف وإزالة الروائح الكريهه من صفايات الحمامات و المطابخ بأحدث الطرق المتبعة</p>
                </div>

              </div>
            </div>

            <div class="col-md-5 col-xs-11" style="background: #dbdbdb; padding: 15px; border-radius: 10px;margin: 10px;">
              <div class="row">
                <div class="col-2">
                  <i style="font-size: 35px;" class="fas fa-adjust"></i>
                </div>
                <div class="col-10">
                  <h5 style="font-size: 25px; font-weight: 700;"> شفط البيارات </h5>
                  <p> وايت شفط البيارات 24 ساعة مع تقديم حل أمثل </p>
                </div>

              </div>
            </div>

            <div class="col-md-5 col-xs-11" style="background: #dbdbdb; padding: 15px; border-radius: 10px;margin: 10px;">
              <div class="row">
                <div class="col-2">
                  <i style="font-size: 35px;" class="fas fa-asterisk"></i>
                </div>
                <div class="col-10">
                  <h5 style="font-size: 25px; font-weight: 700;"> تسليك المجاري </h5>
                  <p> يعمل فريقنا بجد لحل جميع المشاكل المتعلقة بتسليك المجاري </p>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div style="text-align: center;">
      <br>
      <h2> <span class="orange-text">خدماتنا</span> بالمملكة العربية السعودية</h2>
      <p style="font-size: 30px;">نمتلك خبرة طويلة في مجالنا، ولذلك نستطيع تقديم خدمات متميّزة لك</p>
      <a href="cart.html" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> اطلبة الان </a>
    </div>
  </section>
  <br>

  <!-- logo carousel -->
  <div class="logo-carousel-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="logo-carousel-inner">

            <div class="single-latest-news">
              <a href="#"><img style="width: 100%; height: 200px;" src="assets/img/m/m2.webp" alt=""></a>
              <div class="news-text-box">
                <h3><a href="#">A man's worth has its season, like tomato.</a></h3>
                <p class="blog-meta">
                  <span class="author"><i class="fas fa-user"></i> Admin</span>
                  <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                </p>
                <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
                <a href="#" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
              </div>
            </div>

            <div class="single-latest-news">
              <a href="#"><img style="width: 100%; height: 200px;" src="assets/img/m/m1.webp" alt=""></a>
              <div class="news-text-box">
                <h3><a href="#">A man's worth has its season, like tomato.</a></h3>
                <p class="blog-meta">
                  <span class="author"><i class="fas fa-user"></i> Admin</span>
                  <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                </p>
                <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
                <a href="#" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- end logo carousel -->

  <!-- footer -->
  <div class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-box about-widget">
            <h2 class="widget-title"> من نحن </h2>
            <p style="font-size: 17px;"><span class="orange-text">نحن </span> شركة رائدة في مجال تسليك المجاري و <br> <br> الصرف الصحي
              نمتلك خبرة طويلة في مجالنا<br> <br> ولذلك نستطيع تقديم خدمات متميّزة لك

            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-box get-in-touch">
            <h2 class="widget-title">عنا</h2>
            <ul>
              <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
              <br>
              <li>support@fruitkha.com</li>
              <br>
              <li>+00 111 222 3333</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-box pages">
            <h2 class="widget-title">الصفحات</h2>
            <ul>
              <li><a href="index.html">الرئيسية</a></li>
              <br>
              <li><a href="services.html">المدونة</a></li>
              <br>
              <li><a href="news.html">سلة المنتجات</a></li>
            </ul>
          </div>
        </div>
        <?php
        function e($value)
        {
          echo (isset($_SESSION['error'][$value])) ? $_SESSION['error'][$value] : '';
          unset($_SESSION['error'][$value]);
        }
        ?>
        <div class="col-lg-3 col-md-6">
          <div class="footer-box subscribe">
            <h2 class="widget-title">تواصل معنا</h2>
            <form action="function/add_masege.php" method="post">
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="ادخل اسمك" name="name">
                  <span class="text-danger"><?php e('name') ?></span>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="ادخل رقم المحمول" name="phone">
                  <span class="text-danger"><?php e('phone') ?></span>
                </div>
              </div>
              <input type="email" name="email" placeholder="ادخل الاميل">
              <span class="text-danger"><?php e('email') ?></span>

              <textarea name="maseg" placeholder="محتوي الرسالة" cols="30" rows="2"></textarea>
              <span class="text-danger"><?php e('maseg') ?></span>

              <br>
              <button type="submit" style="width: 100%;"><i class="fas fa-paper-plane"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end footer -->
  <?php
  if (isset($_SESSION['error'])) {
  ?>
    <div class="position-fixed bottom-0 right-0 p-3" style="z-index: 5; right: 48%; top: 100px;">
      <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000">
        <div class="toast-header" style="background-color: #051922;">
          <strong class="mr-auto">Bootstrap</strong>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="toast-body" style="font-size: 15px;">
          لم يتم ارسال الرسالة بي نجاح يرجي ملا جميع الحقول
        </div>
      </div>
    </div>
  <?php
  }
  unset($_SESSION['error']);
  ?>


  <!-- jquery -->
  <script src="assets/js/jquery-1.11.3.min.js"></script>
  <!-- bootstrap -->
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- count down -->
  <script src="assets/js/jquery.countdown.js"></script>
  <!-- isotope -->
  <script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
  <!-- waypoints -->
  <script src="assets/js/waypoints.js"></script>
  <!-- owl carousel -->
  <script src="assets/js/owl.carousel.min.js"></script>
  <!-- magnific popup -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- mean menu -->
  <script src="assets/js/jquery.meanmenu.min.js"></script>
  <!-- sticker js -->
  <script src="assets/js/sticker.js"></script>
  <!-- main js -->
  <script src="assets/js/main.js"></script>
  <script>
    var toastLiveExample = document.getElementById('liveToast')
    if (toastLiveExample) {
      var toast = new bootstrap.Toast(toastLiveExample)
      toast.show()
    }
  </script>

</body>

</html>