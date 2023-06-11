<?php
include 'navbar.html'
?>
<div class="container pb-5 pt-5">
    <h2 class="fw-bold">المنتج</h2>
    <p class="text-black-50 mb-5">
        Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit.
    </p>
    <div class="row">
        <?php
        $ID = $_GET['id'];
        $con = mysqli_connect("localhost", "root", "", "medicen_city");
        $sql = "SELECT * FROM `product` WHERE id=$ID";
        $res = $con->query($sql);
        if ($res->num_rows > 0) {
            foreach ($res as $row) {
                echo '<div class="col-md-6 col-lg-6 text-item-center">
                <div class="box bg-white p-3">
                <img class="img-fluid" style="width:500px;height: 500px;" src="' . $row["img"] . '" alt="" />
                </div>
                </div>
                
                <div class="col-md-6 col-lg-6 text-item-center">
                <div class="box bg-white p-3">
                <table class="table  table-striped">
                <tr>
                <th scope="col" class="text-danger">price</th>
                  <th scope="col-" class="text-danger">category</th>
                  <table class="table  table-striped">
                </tr>
                <td class="">' . $row["price"] . '</td>
                <td class="">' . $row["category"] . '</td>    
                </td>
                </tr>
                </table>

                <table class="table  table-striped">
                          
                <tr>
                  <th scope="col" class="text-danger">description</th>
                  <table class="table  table-striped">
                </tr>
                <td class="">' . $row["description"] . '</td>      
                </td>
                </tr>
                </table>
              <a class="btn  btn-success" href="buy.php"" role="button">اضف للسلة</a>  

              </div>
            </div>
          ';
            }
        }


        ?>
    </div>
</div>
</div>

<?php

include 'footer.html';

?>