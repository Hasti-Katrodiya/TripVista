<?php include('./Includes/header.html');  ?>
<?php  include('./Configuration/DataConnection.php'); ?>

<?php
$id = $_GET['id'];

$sql = "SELECT * FROM `country` where Country_id =$id";
$result = mysqli_query($connection,$sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
?> 

<h1 class="text-center my-3 detail_h1 container-fluid "> <i>Top Tourist Places to Visit in <?php echo $row['Country_Name']; ?></i></h1>

<img src="<?php echo $row['Country_img'];?>" alt="img" height="450px" width="100%" class="container-fluid my-2">
<hr>




<?php  } }?>


<div class="row container-fluid my-2">

    <?php 

        $sql = "SELECT * FROM `places` WHERE country_id=$id";
          $result = mysqli_query($connection,$sql);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_array($result)) {
    ?>
    <div class="col-lg-3 col-md-6 col-sm-6 container-fluid div_details_places my-2">
        <div class="container-fluid">
            <h4 class="text-center my-3"><?php echo $row['place_name']; ?></h4>
            <hr>
            <img src="<?php echo $row['place_img']; ?>" alt="" class="container-fluid" width="100%" height="200px">
            <hr>
            <p class="container-fluid"><?php echo $row['place_description']; ?></p>
        </div>
    </div>
    <?php
          }
        }
    ?>



</div>
<br><br>
<?php include('./Includes/footer.html');  ?>
</body>
</html>