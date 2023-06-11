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

  <title>Contact</title>
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