<?php include('./Includes/header.html');  ?>
<?php  include('./Configuration/DataConnection.php'); ?>
<!-- Content -->
<!-- <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner carousel_custom">
    <div class="carousel-item active">
      <img src="./Images/1.jpg" class="d-block w-100 img-fluid" height="" alt="slide1">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./Images/2.jpg" class="d-block w-100" alt="slide2">
    </div>
    <div class="carousel-item">
      <img src="./Images/3.jpg" class="d-block w-100" alt="slide3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br><br><br><br> -->
<br>
<h2 class="container-fluid text-center h2_custom">There is a Big world to Explore</h2>
<hr>
<div class="container-fluid row">
    <div class="col-lg-6 col-md-12 col-sm-12 container-fluid">
        <img class="container-fluid" src="./Images/1.jpg" alt="">
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 container-fluid">
        <p class="container-fluid para_custom">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet blanditiis iure, unde eius dolore vitae ad reiciendis, excepturi totam deleniti architecto optio ea fugiat exercitationem delectus quas dolores maiores facere voluptate! Minima rem, sequi culpa nisi nemo quo quibusdam quidem velit amet quod id ibero. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic voluptas tempore numquam, aperiam asperiores deserunt quam sint id cumque vel?</p>
    </div>
</div>
<br>
<hr>
<div class="row">
  <?php

    $sql = "SELECT * FROM `country`";
    $result = mysqli_query($connection,$sql);

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
?>
<div class="col-lg-2 col-md-4 col-sm-6 container-fluid country_container my-4">
  <a href="./country_detail.php?id=<?php echo $row['Country_id'];?>">
  <img src="<?php echo $row['Country_img']; ?>" alt="img"   class="country_imgs " >
  </a>
      
      <!-- <h4 class="text-center">
        <?php
        //  echo $row['Country_Name'];  
         ?>
    </h4> -->

</div>
<?php
      }
    }

  ?>
  
  <hr>

</div>
<?php include('./Includes/footer.html');  ?>

</body>
</html>