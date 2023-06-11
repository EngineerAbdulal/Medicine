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

  <title>MEDICEN CITY</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo-mc.png">

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <?php
  include 'navbar.html'
  ?>
  <!-- slider section -->
  <?php
  $con = new mysqli("localhost", "root", "", "medicen_city");
  $sql = "SELECT * FROM `product`";
  $res = $con->query($sql);
  foreach ($res as $row) {
    echo '<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">

        <img src="' . $row["img"] . '"  width="180px" height="600px" class="d-block w-100" alt="slider-1">
        <div class="carousel-caption d-none d-md-block">
          <h5>' . $row["title"] . '</h5>
          <p>' . $row["description"] . '</p>
        </div>
      </div>';
  }
  ?>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  <!-- end slider section -->
  </div>


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
              <a href="buy.php">
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

  <!-- health section -->
  <section class="health_section layout_padding" style=" background-color:#1A5F7A ;">
    <div class="health_carousel-container">
      <h2 class="text-uppercase">
        الطب والصحة
      </h2>
      <div class="carousel-wrap layout_padding2">
        <div class="item">

          <?php
          $con = new mysqli("localhost", "root", "", "medicen_city");
          $sql = "SELECT * FROM `product` LIMIT 8";
          $res = $con->query($sql);
          foreach ($res as $row) {
            echo '<div class="box" style=" background-color:#90909090;">
            <h3><label>' . $row["title"] . '</label></h3>

              <div class="img-box">
                <img src="' . $row["img"] . '" width="180px" height="200px" alt="">
              </div>
    
              <div class="detail-box">
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <div class="text">
                  <h6>' . $row["category"] . '</h6>
                  <h6 class="price">' . $row["price"] . '</h6>
                </div>
                
              </div>
              <center>
              <div class="btn_container">
              <a class="btn btn-outline-secondary" href="description.php?id=' . $row["id"] . '" role="button"> تفاصيل المنتج</a>
              </div>
              </center>

            </div>';
          }
          ?>
        </div>

      </div>
      <div class="d-flex justify-content-center">
        <a href="buy.php">
          للمزيد
        </a>
      </div>
  </section>
  <!-- end health section -->

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
        <div class="d-flex justify-content-center">
          <a href="about.php">
            اقرأ المزيد
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- client section -->
  <section class="client_section layout_padding" style=" background-color:#1A5F7A ;">
    <div class="container">
      <div class="custom_heading-container ">
        <h2>
          ما يقول عملائنا
        </h2>
      </div>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_container layout_padding2">
              <div class="client_detail">
                <p>
                  هناك العديد من الاختلافات في مقاطع لوريم إبسوم المتاحة، لكن الغالبية عانت
                  التعديل في
                  شكل ما، عن طريق الفكاهة المحقونة، أو الكلمات العشوائية التي لا تبدو قابلة للتصديق قليلاً.
                </p>
              </div>
              <div class="client_box ">
                <div class="img-box">
                  <img src="images/client.png " alt="">
                </div>
                <div class="name">
                  <h5>
                    عشوائية
                  </h5>
                  <h6>
                    <span>
                      عميل
                    </span>
                    <img src="images/quote.png" alt="">
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding2">
              <div class="client_detail">
                <p>
                  هناك العديد من الاختلافات في مقاطع لوريم إبسوم المتاحة، لكن الغالبية عانت
                  التعديل في
                  شكل ما، عن طريق الفكاهة المحقونة، أو الكلمات العشوائية التي لا تبدو قابلة للتصديق قليلاً.
                </p>
              </div>
              <div class="client_box ">
                <div class="img-box">
                  <img src="images/client.png " alt="">
                </div>
                <div class="name">
                  <h5>
                    عشوائية
                  </h5>
                  <h6>
                    <span>
                      عميل
                    </span>
                    <img src="images/quote.png" alt="">
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding2">
              <div class="client_detail">
                <p>
                  هناك العديد من الاختلافات في مقاطع لوريم إبسوم المتاحة، لكن الغالبية عانت
                  التعديل في
                  شكل ما، عن طريق الفكاهة المحقونة، أو الكلمات العشوائية التي لا تبدو قابلة للتصديق قليلاً.
                </p>
              </div>
              <div class="client_box ">
                <div class="img-box">
                  <img src="images/client.png " alt="">
                </div>
                <div class="name">
                  <h5>
                    عشوائية
                  </h5>
                  <h6>
                    <span>
                      عميل
                    </span>
                    <img src="images/quote.png" alt="">
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>
  <!-- end client section -->

  <!-- contact section -->
  <?php

  if (isset($_POST["btn"])) {
    $n = $_POST["name"];
    $p = $_POST["phone"];
    $e = $_POST["email"];
    $med = $_POST["medecine"];
    $mess = $_POST["message"];
    $con = new mysqli("localhost", "root", "", "medicen_city");
    $sql = "INSERT INTO `messages`( `name`, `phone`, `email`, `medecine`, `message`) VALUES ('$n','$p','$e','$med','$mess')";
    if ($con->query($sql)) {
      echo "";
    }
  }
  ?>
  <!-- contact section -->
  <section class="contact_section" style="background-color:#0000;">
    <br>
    <br>
    <div class="container">
      <div class="row">
        <div class="custom_heading-container ">
          <br>
          <h2>للتواصل معنا</h2>
        </div>
      </div>
    </div>
    <div class="container layout_padding2">
      <div class="row">
        <div class="col-md-5">
          <div class="form_contaier">
            <form action="" method="post">
              <div class="form-group">
                <label for="exampleInputName1">الاسم</label>
                <input type="text" name="name" class="form-control" id="exampleInputName1">
              </div>
              <div class="form-group">
                <label for="exampleInputNumber1">رقم الهاتف</label>
                <input type="text" name="phone" class="form-control" id="exampleInputNumber1">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">الإيميل </label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1">
              </div>
              <div class="form-group ">
                <label for="inputState">الدواء</label>
                <select id="inputState" name="medecine" class="form-control">
                  <option selected>الدواء 1 </option>
                  <option selected>الدواء 2</option>
                  <option selected>الدواء 3</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputMessage">الرسالة</label>
                <input type="text" name="message" class="form-control" id="exampleInputMessage">
              </div>
              <input type="submit" class="btn btn-success col-lg-12" value="ارسل" name="btn" id="send">
            </form>
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <h3>
              احصل الآن على الأدوية </h3>
            <p>
              هناك العديد من الاختلافات في مقاطع Lorem Ipsum المتاحة، لكن الغالبية عانت من التغيير
              بشكل ما، عن طريق الفكاهة المحقونة، أو الكلمات العشوائية التي لا تبدو قابلة للتصديق قليلاً.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->
  <?php
  include 'footer.html'
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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