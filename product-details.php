<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dreams Pos admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo-mc.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">

        <?php
        include 'header.php';
        include 'sidebar.php';

        ?>

        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>تفاصيل المنتج</h4>
                        <h6>التفاصيل الكاملة لمنتج</h6>
                    </div>
                </div>

                <?php
                $ID = $_GET['id'];
                $con = mysqli_connect("localhost", "root", "", "medicen_city");
                $sql = "SELECT * FROM `product` WHERE id=$ID";
                $res = $con->query($sql);
                if ($res->num_rows > 0) {
                    foreach ($res as $row) {
                        echo '<div class="row">
                    <div class="col-lg-8 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- <div class="bar-code-view">
                                    <img src="assets/img/barcode1.png" alt="barcode">
                                    <a class="printimg">
                                        <img src="assets/img/icons/printer.svg" alt="print">
                                    </a>
                                </div> -->
                                <div class="productdetails">
                                    <ul class="product-bar">
                                        <li>
                                            <h4>اسم المنتج</h4>
                                            <h6>' . $row["title"] . '</h6>
                                        </li>
                                        <li>
                                            <h4>الصنف</h4>
                                            <h6>' . $row["category"] . '</h6>
                                        </li>                                       
                                        <li>
                                            <h4>السعر</h4>
                                            <h6>' . $row["price"] . '</h6>
                                        </li>

                                        <li>
                                            <h4>الوصف</h4>
                                            <h6>' . $row["description"] . '</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="slider-product-details">
                                    <div class="owl-carousel owl-theme product-slide">
                                        <div class="slider-product">
                                        <img src="' . $row["img"] . '" alt="product">
                                        <h4>' . $row["title"] . '</h4>
                                            <h6>' . $row["description"] . '</h6>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="productlist.php" class="btn btn-success">رجوع</a>

                    </div>
                    
                </div>';
                    }
                }
                ?>


            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/js/jquery.slimscroll.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>