<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("components/links.php"); ?>
    <title>Contact Us</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/contact.css">

</head>
<body>
    <?php include ("components/navbar.php"); ?>
    <div class="container">
        
        <div class="contact-container d-flex justify-content-between">
      
        <div class='w-50'>
             <h2 class="mb-4 fw-bold">Contact us</h2>
            <p class="text-muted mb-4">For any support, Please call our email or via email. Our support team will get back to you within 24 hours.</p>
            <p><i class='fa fa-phone'></i> 09087675546</p>
            <div class='d-flex justify-content-start g-3'>
                <span><i class='fa fa-envelope'></i> essentialnigeria@gmail.com</span>
                <span class='fw-bold'>|</span>
                <span>Support : support@elands.ng</span>
            </div>
       </div> 

       <div class='w-50'>  
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-submit">Register</button>
            </form>
      </div>

        </div>
    </div>
    <?php include ("components/bottom-heading.php"); ?>
    <?php include ("components/footer.php"); ?>
</body>
</html>