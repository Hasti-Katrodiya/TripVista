<?php include('./Includes/header.html');  ?>
<?php  include('./Configuration/DataConnection.php'); ?>

<div class="body_detail">
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

<div class="container form_css">
    <div class="row">
        <?php 
            $sql = "SELECT * FROM `places` WHERE country_id=$id";
            $result = mysqli_query($connection, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
        ?>
        <div class="col-md-3 mb-4">
            <div class="card custom-card h-100 places_card">
                <img src="<?php echo $row['place_img']; ?>" alt="<?php echo $row['place_name']; ?>" class="card-img-top">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center"><b><?php echo $row['place_name']; ?></b></h5>
                    <p class="card-text flex-grow-1"><?php echo $row['place_description']; ?></p>
                    <div class="mt-auto">
                        <button class="btn btn-outline-primary readMoreBtn">Read More ></button>
                    </div>
                </div>
            </div>
        </div>
        <?php
                }
            }
        ?>
    </div>
</div>








<br><br>
<?php include('./Includes/footer.html');  ?>
</body>
</html>