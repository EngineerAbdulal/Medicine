<?php
$id = $_GET["id"];
$con = new mysqli("localhost", "root", "", "medicen_city");
$sql = "DELETE FROM `product` WHERE id='$id'";
if ($con->query($sql)) {
    header("location: productlist.php");
}
?>