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
        ?>



        <?php
        include 'sidebar.php';

        if (isset($_POST["btn"])) {
            $t = $_POST["title"];
            $d = $_POST["description"];
            $p = $_POST["price"];
            $c = $_POST["category"];
            $namefile = $_FILES["img"]["name"];
            $floder = "images/" . $namefile;
            $tmpfile = $_FILES["img"]["tmp_name"];
            move_uploaded_file($tmpfile, $floder);
            $con = new mysqli("localhost", "root", "", "medicen_city");
            $sql = "INSERT INTO `product`(`title`, `description`, `img`, `price`, `category`) VALUES ('$t','$d','$floder','$p','$c')";
            if ($con->query($sql)) {
                echo "";
            }
        }
        ?>
        <?php echo $m; ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="page-wrapper">
                <div class="content">
                    <div class="page-header">
                        <div class="page-title">
                            <h4>إضافة منتج</h4>
                            <h6>إنشاء منتج جديد</h6>
                        </div>

                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>اسم المنتج</label>
                                        <input name="title" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>الصنف</label>
                                        <select class="select" name="category">
                                            <option selected="">الصنف</option>
                                            <option value="دواء">دواء</option>
                                            <option value="إسعافات أولية">إسعافات أولية</option>
                                            <option value="جمال">جمال</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>الوصف</label>
                                        <textarea name="description" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>السعر</label>
                                        <input type="text" name="price">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>صورة المنتج</label>
                                        <div class="image-upload">
                                            <input type="file" class="custom-file-input" name="img" accept="image/*"><br>
                                            <div class="image-uploads">
                                                <img src="assets/img/icons/upload.svg" alt="img">
                                                <h4>انقر لإضافة صورة</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-success col-lg-5" value="اضف" name="btn" id="send">
                                    <a href="productlist.php" class="btn btn-danger col-lg-5">إلغاء</a>

                                </div>
                                <!-- <div class="col-lg-12">
                                <a href="javascript:void(0);" class="btn btn-submit me-2" name="btn">Submit</a>
                                <a href="productlist.html" class="btn btn-cancel">Cancel</a>
                            </div> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
    </form>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/js/jquery.slimscroll.min.js"></script>

    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>