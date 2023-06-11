<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo-mc.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!---start sidebar-->

    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="active">
                        <a href="dashboard.php"><img src="assets/img/icons/dashboard.svg" alt="img"><span> لوحة التحكم</span> </a>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><i class="fa-solid fa-box-archive"></i><span> المنتجات</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="productlist.php">قائمة المنتجات</a></li>
                            <li><a href="addproduct.php">إضافة منتج</a></li>
                            <li><a href="categorylist.php">قائمة التصنيفات</a></li>
                            <li><a href="addcategory.php">إضافة صنف</a></li>

                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><i class="fa-regular fa-user"></i><span>المستخدمون</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="newuser.php">إضافة مستخدم مسؤول </a></li>
                            <li><a href="userlists.php"> قائمة المستخدمون (المسؤولين) </a></li>
                            <li><a href="userslists.php"> قائمة المستخدمون (الزبائن) </a></li>

                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><i class="fa-regular fa-envelope"></i><span>الرسائل</span> <span class="menu-arrow"></span></a>
                        <ul>
                        <li><a href="messagelist.php">قائمة الرسائل</a></li>

                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><img src="assets/img/icons/settings.svg" alt="img"><span> Settings</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="generalsettings.html">General Settings</a></li>
                            <li><a href="emailsettings.html">Email Settings</a></li>
                            <li><a href="paymentsettings.html">Payment Settings</a></li>
                            <li><a href="currencysettings.html">Currency Settings</a></li>
                            <li><a href="grouppermissions.html">Group Permissions</a></li>
                            <li><a href="taxrates.html">Tax Rates</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!---End sidebar-->
</body>

</html>