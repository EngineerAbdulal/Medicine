<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Edit User</title>

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
        include "header.php";
        include "sidebar.php";
        ?>
        <form action="" method="post" enctype="multipart/form-data">

            <div class="page-wrapper">
                <div class="content">
                    <div class="page-header">
                        <div class="page-title">
                            <h4>تعديل بيانات المستخدم</h4>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>الاسم</label>
                                        <input type="text" name="name">
                                    </div>
                                </div>


                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>كلمة المرور</label>
                                        <div class="pass-group">
                                            <input type="password" class=" pass-input" name="password">
                                            <span class="fas toggle-password fa-eye-slash"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>رقم الهاتف</label>
                                        <input type="text" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>الإيميل</label>
                                        <input type="text" name="email">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>صورة المستخدم</label>
                                        <div class="image-upload">
                                            <input type="file" class="custom-file-input" name="img" accept="images/*">
                                            <div class="image-uploads">
                                                <img src="assets/img/icons/upload.svg" alt="img">
                                                <h4>اضغط لإضافة صورة</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-success col-lg-5" name="btn" id="send">عدل</button>
                                    <a href="userlists.php" class="btn btn-danger col-lg-5">إلغاء</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
    </form>
    <?php
    $id = $_GET["id"];
    $m = "";
    if (isset($_POST["btn"])) {
        $n = $_POST["name"];
        $ph = $_POST["phone"];
        $e = $_POST["email"];
        $pa = $_POST["password"];
        $namefile = $_FILES["img"]["name"];
        $i = "user_images/" . $namefile;
        $tmpfile = $_FILES["img"]["name"];
        move_uploaded_file($tmpfile, $i);
        $con = new mysqli("localhost", "root", "", "medicen_city");
        $sql = "UPDATE `user_admin` SET `name`='$n',`phone`='$ph',`email`='$e',`password`='$pa',`img`='$i' WHERE `user_id`='$id'";
        if ($con->query($sql)) {
            $m = '<div class="alert alert-success" role="alert">
Update Successfully
</div>';
        } else {
            $m = '<div class="alert alert-danger" role="alert">
    Error
    </div>';
        }

    }

    ?>


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