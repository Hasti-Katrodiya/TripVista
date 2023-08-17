<!-- Header File -->
<?php include('./Includes/header.html');  ?>

<!-- Data Connection -->
<?php  include('./Configuration/DataConnection.php'); ?>

<div class="container form_css">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Message</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <br>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<!-- Footer File -->
<?php  include('./Includes/footer.html');?>

</body>
</html>