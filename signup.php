<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Register</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo-mc.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="account-page">
    <?php

    if (isset($_POST["btn"])) {
        $un = $_POST["user_name"];
        $e = $_POST["email"];
        $p = $_POST["password"];
        $con = new mysqli("localhost", "root", "", "medicen_city");
        $sql = "INSERT INTO `user`(`user_name`, `email`, `password`) VALUES ('$un','$e','$p')";
        if ($con->query($sql)) {
            echo "";
        }
    }
    ?>

    <form method="post" action="" enctype="multipart/form-data">
        <div class="main-wrapper">
            <div class="account-content">
                <div class="login-wrapper">
                    <div class="login-content">
                        <div class="login-userset">

                            <div class="login-userheading">
                                <h3>إنشاء حساب جديد</h3>
                            </div>

                            <div class="form-login">
                                <label>اسم المستخدم</label>
                                <div class="form-addons">
                                    <input type="text" placeholder="اكتب اسم المستخدم" name="user_name">
                                    <img src="assets/img/icons/users1.svg" alt="img">
                                </div>
                            </div>

                            <div class="form-login">
                                <label>الإيميل</label>
                                <div class="form-addons">
                                    <input type="text" placeholder="اكتب الإيميل الخاص بك" name="email">
                                    <img src="assets/img/icons/mail.svg" alt="img">
                                </div>
                            </div>

                            <div class="form-login">
                                <label>كلمة المرور</label>
                                <div class="pass-group">
                                    <input type="password" class="pass-input" placeholder="اكتب كلمة المرور" name="password">
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                            </div>

                            <div class="form-login">
                                <input type="submit" class="btn btn-login" value="اشاء حساب جديد" name="btn">
                            </div>

                            <div class="signinform text-center">
                                <h4>موجود حساب؟ <a href="signin.php" class="hover-a">تسجيل الدخول</a></h4>
                            </div>

                            <div class="form-setlogin">
                                <h4>أو سجل مع التالي</h4>
                            </div>

                            <div class="form-sociallink">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/icons/google.png" class="me-2" alt="google">
                                            سجل الدخول باستخدام Google
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/icons/facebook.png" class="me-2" alt="google">
                                            سجل الدخول باستخدام Facebook
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="login-img">
                        <img src="assets/img/pex2.jpg" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>