<?php
session_start();
if (isset($_POST['login'])) {
    $e = $_POST['email'];
    $p = $_POST['password'];
    $con = new mysqli("localhost", "root", "", "medicen_city");
    $sql = "SELECT `user_id`, `user_name`, `email`, `password` FROM `user` Where email='$e' AND password='$p'";
    
    $query = mysqli_query($con, $sql);
    $count = mysqli_num_rows($query);
    $row = mysqli_fetch_array($query);
    if ($count > 0) {
        $_SESSION['id'] = $row['user_id'];
        $name = $row['email'];
        echo "
				<script>alert('مرحبا,$name')</script>
				<script>window.location = 'index.php'</script>
				";
    } else {
        echo "
			<script>alert('تأكد من اسم المستخدم أو كلمة المرور')</script>
			<script>window.location = 'signin.php'</script>
			";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Login</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo-mc.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="account-page">
    <form action="" method="POST" class="">

        <div class="main-wrapper">
            <div class="account-content">
                <div class="login-wrapper">
                    <div class="login-content">
                        <div class="login-userset">
                            <!-- <div class="login-logo">
                            <img src="assets/img/logo.png" alt="img">
                        </div> -->
                            <div class="login-userheading">
                                <h3>تسجيل الدخول </h3>
                                <h4>يرجى تسجيل الدخول إلى حسابك</h4>
                            </div>
                            <div class="form-login">
                                <label>الإيميل</label>
                                <div class="form-addons">
                                    <input type="text" placeholder="ادخل الإيميل الخاص بك" name="email" >
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
                            <!-- <div class="form-login">
                            <div class="alreadyuser">
                                <h4><a href="forgetpassword.html" class="hover-a">Forgot Password?</a></h4>
                            </div>
                        </div> -->
                            <div class="form-login">
                                <button class="btn btn-login" name="login">سجل الدخول</button>
                            </div>
                            <div class="signinform text-center">
                                <h4>ليس لديك حساب ؟ <a href="signup.php" class="hover-a">إنشاء حساب</a></h4>
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
                        <img src="assets/img/pex.jpg" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </form>
    			<!--start script message-->
			<?php if (isset($_SESSION['message'])) : ?>
				<div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> 
                msg"><?php echo $_SESSION['message']['text'] ?></div>
				<script>
					(function() {
						// removing the message 3 seconds after the page load
						setTimeout(function() {
							document.querySelector('.msg').remove();
						}, 3000)
					})();
				</script>
			<?php
			endif;
			// clearing the message
			unset($_SESSION['message']);
			?>
			<!--End script message-->

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>