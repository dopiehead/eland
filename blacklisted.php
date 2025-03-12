<html lang="en">
<head>
   <?php include ("components/links.php"); ?>
   <link rel="stylesheet" href="assets/css/blacklisted.css">
   <link rel="stylesheet" href="assets/css/listings.css">
    <title>Blacklisted list</title>
</head>
<body>
    <div>
    <?php include ("components/navbar.php"); ?>

         <div class='hero-section'>

            

                 <div class='d-flex align-items-center justify-content-center flex-row flex-column col-md-6 text-center backdrop full-height h-100'>
                     <h2 class='fw-bold'><span class='text-primary'> Blacklisted</span> Lands </h2>
                     <p>Lorem ipsum dolor sit amet consectetur. Vivamus etiam egestas aliquet eget elementum vel ullamcorper mauris. Eget pretium urna a id sed nunc. Elementum pulvinar enim donec aliquam aliquam auctor mattis vitae tristique. Elit potenti tellus adipiscing scelerisque sed eu ac auctor.</p>
                 </div>

                 <div class='col-md-6 text-center'>                    
                     <h1 style='font-family: "Playwrite IT Moderna", cursive;' class='text-danger fw-bold'>BLACKLIST</h1>                     
                 </div>

          

         </div>

         <div class='container py-3 rounded rounded-pill shadow-lg d-flex justify-content-between bg-white w-100 search-box'>
          
           <input class='border-0' type="text" placeholder='Search for lands'>
           <button style='font-family:arial,fontawesome;' class='btn btn-primary border-0'> &#xF002;  Search</button>

         </div>
         <br><br>
         <?php include("components/listings.php"); ?>
         <br><br>
    <?php include("components/bottom-heading.php"); ?>
    <?php include ("components/footer.php"); ?>
    </div>
</body>
</html>