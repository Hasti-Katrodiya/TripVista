<!-- Header File -->
<?php include('./Includes/header.html');  ?>

<!-- Data Connection -->
<?php  include('./Configuration/DataConnection.php'); ?>

<div class="contact-container">
    <div class="contact-form">
        <h2 class="form-heading">Contact Us</h2>
        <form action="process_contact.php" method="post">
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea id="message" name="message" class="form-textarea" required></textarea>
            </div>
            <button type="submit" class="submit-btn" >Submit</button>
        </form>
    </div>
</div>

<!-- Footer File -->
<?php  include('./Includes/footer.html');?>

</body>
</html>