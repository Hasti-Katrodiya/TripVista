<?php include('./Includes/header.html');  ?>
<?php  include('./Configuration/DataConnection.php'); ?>

<div class="my-2">
<?php
$id = $_GET['id'];

$sql = "SELECT * FROM `country` where Country_id =$id";
$result = mysqli_query($connection,$sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
?> 

<h1 class="text-center my-3 detail_h1 container-fluid my-4 py-4">Top Tourist Places to Visit in <span class="color-change"> <?php echo $row['Country_Name']; ?></span></h1>
<img src="<?php echo $row['Country_img'];?>" alt="img" height="850px" width="100%" class="w-100 my-2">
<?php  } }?>

<div class="container-fluid my-4 py-4 form_css">
    <div class="row">
        <?php 
            $sql = "SELECT * FROM `places` WHERE country_id=$id";
            $result = mysqli_query($connection, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
        ?>
        <div class="col-md-4 container mb-4">
            <div class=" card custom-card h-100 places_card">
                <img src="<?php echo $row['place_img']; ?>" alt="<?php echo $row['place_name']; ?>" class="card-img-top">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center"><b><?php echo $row['place_name']; ?></b></h5>
                    <p class="card-text flex-grow-1"><?php echo $row['place_description']; ?></p>
                    <div class="mt-auto">
                        <button class="btn btn-outline-primary readMoreBtn">Read More >></button>
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