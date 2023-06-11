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

  <title>Buy Medicine</title>
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


  <!-- health section -->
  <section class="health_section layout_padding" style=" background-color:#57C5B6 ;">
    <div class="health_carousel-container">
      <h2 class="text-uppercase">
        الطب والصحة
      </h2>
      <div class="carousel-wrap layout_padding2">
        <div class="item">

          <?php
          $con = new mysqli("localhost", "root", "", "medicen_city");
          $sql = "SELECT * FROM `product`";
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
              <a class="btn btn-outline-secondary" href="description.php?id=' . $row["id"] . '" role="button">تفاصيل المنتج</a>
              </div>
              </center>

            </div>';
          }
          ?>
        </div>

      </div>
      <!-- <div class="d-flex justify-content-center">
        <a href="">
          للمزيد
        </a>
      </div> -->
  </section>


  <!-- end health section -->


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