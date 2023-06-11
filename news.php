<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>News</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo-mc.png">

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <!-- header section strats -->
  <?php
  include 'navbar.html'
  ?>
  <!-- end header section -->

  <!-- about section -->
  <section class="about_section layout_padding" style="background-color:#0000;">
    <div class="container">
      <div class="custom_heading-container ">
        <h2>
          من نحن
        </h2>
      </div>

      <div class="img-box">
        <img src="image/contact.png" height="350px" alt="">
      </div>
      <div class="detail-box">
        <p>
          من الحقائق الراسخة منذ فترة طويلة أن القارئ سوف يشتت انتباهه بالمحتوى المقروء للصفحة عند النظر
          في تصميمها. الهدف من استخدام Lorem Ipsum هو أنه يحتوي على توزيع عادي إلى حد ما للأحرف، مثل
          معارضة استخدام «المحتوى هنا، المحتوى هنا»، جعله
        </p>
        
      </div>
    </div>
  </section>

  <!-- end about section -->

   <!-- discount section -->

   <section class="discount_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-5 offset-md-2">
          <div class="detail-box">
            <h2>
              يمكنك الحصول على <br>
              أي دواء عليه<br>

              <span>
                %خصم 10
              </span>

            </h2>
            <p>
              إنها حقيقة راسخة منذ فترة طويلة أن القارئ سوف يشتت انتباهه
            </p>
            <div>
              <a href="">
                اشتري الآن
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-md-5">
          <div class="img-box">
            <img src="images/medicines.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end discount section -->

  <?php
  include 'footer.html'
  ?>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
  </script>
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
  <script type="text/javascript">
    $(".owl-2").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,

      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
</body>

</html>