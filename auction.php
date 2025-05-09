<!DOCTYPE html>
<html lang="en">
<head>
 <?php include ("components/links.php"); ?>
 <link rel="stylesheet" href="assets/css/auction.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<title>Auction</title>

</head>
<body>
    <?php include ("components/navbar.php"); ?>
    <div class="hero-section">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1 class="mb-4">Welcome to E-Land Auctions</h1>
            <p class="mb-5">E-Land Auctions offer you the chance to secure premium lands at unbeatable prices. With a transparent bidding process, verified listings, and real-time updates, we bring you closer to owning your dream property.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button class="btn btn-primary btn-lg px-4 me-md-2">Browse Listings</button>
                <button class="btn btn-outline-light btn-lg px-4">Learn More</button>
            </div>
        </div>
    </div>

    <!-- section steps and how to works  -->

    <div class="container mb-5">
        <h2 class="section-title">Here's How it works</h2>
        
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <!-- Step 1 -->
            <div class="col">
                <div class="step-card">
                    <div class="step-icon">
                        <span class='bi bi-search'></span>
                    </div>
                    <h3 class="step-number">Step 01</h3>
                    <p>Browse Listings: Explore available lands up for auction, complete with details like location, size, and starting bid price.</p>
                </div>
            </div>
            
            <!-- Step 2 -->
            <div class="col">
                <div class="step-card">
                    <div class="step-icon">
                         <span class='bi bi-search'></span>
                    </div>
                    <h3 class="step-number">Step 02</h3>
                    <p>Browse Listings: Explore available lands up for auction, complete with details like location, size, and starting bid price.</p>
                </div>
            </div>
            
            <!-- Step 3 -->
            <div class="col">
                <div class="step-card">
                    <div class="step-icon">
                          <span class='bi bi-search'></span>
                    </div>
                    <h3 class="step-number">Step 03</h3>
                    <p>Browse Listings: Explore available lands up for auction, complete with details like location, size, and starting bid price.</p>
                </div>
            </div>
            
            <!-- Step 4 with highlight border -->
            <div class="col">
                <div class="step-card highlighted">
                    <div class="step-icon">
                         <span class='bi bi-search'></span>
                    </div>
                    <h3 class="step-number">Step 04</h3>
                    <p>Browse Listings: Explore available lands up for auction, complete with details like location, size, and starting bid price.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- land auction part -->
      
    <?php
        error_reporting(E_ALL); // Report all types of errors
        ini_set('display_errors', 1); // Display errors on the screen
       require("engine/config.php");
       $query = " SELECT 
         products.property_id AS property_id,
         products.property_name AS property_name,
         products.property_details AS property_details,
         products.property_image AS property_image,
         products.property_category AS property_category,
         products.property_location AS property_location,
         products.property_address AS property_address,
         products.property_quantity AS property_quantity,
         products.property_size AS property_size,
         auction.id,
         auction.poster_id,
         auction.property_id, 
         auction.starting_time AS property_starting_time,
         auction.ending_time,
         auction.starting_price AS property_starting_price,
         auction.date
     FROM products
     INNER JOIN auction ON products.property_id = auction.property_id ";
     $getbid = $conn->prepare($query);
     if($getbid->execute()){
         $result_bid = $getbid->get_result();
         $datafound = $result_bid->num_rows; ?>
    <div class="container mb-4">
        <div class="section-header">
            <h2 class="section-title">Auction Listings(<?= htmlspecialchars($datafound) ?>)</h2>
            <p class="section-subtitle">Explore available lands up for auction</p>
        </div>
        
        <div class="row">

         <?php          
         while($property = $result_bid->fetch_assoc()){ 
            include ("contents/property-listings.php");  
            
            ?>
         
         <div class="col-md-4">
                <div class="property-card">
                    <div class="property-image">
                        <img src="<?= htmlspecialchars($property_image) ?>" alt="Land Property">
                        <div class="time-badge">
                            <i class="far fa-clock"></i>
                            89:59:00
                        </div>
                    </div>
                    <div class="property-rating">
                        <span class="star"><i class="fas fa-star"></i></span>
                        <span class="star"><i class="fas fa-star"></i></span>
                        <span class="star"><i class="fas fa-star"></i></span>
                        <span class="star"><i class="fas fa-star"></i></span>
                        <span class="star"><i class="far fa-star"></i></span>
                    </div>
                    <div class="property-details">
                        <h3 class="property-title"><?= htmlspecialchars($property_name) ?></h3>
                        <div class="property-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <?= htmlspecialchars($property_address." ".$property_location) ?>
                        </div>
                        <div class="property-price">
                            <div class="price-info">
                                <span class="price-label">Starting Bid</span>
                                <span class="price-value"><?= htmlspecialchars(number_format($property['property_starting_price'],0,2)) ?></span>
                            </div>
                            <a href='auction-details.php?bid_id=<?= htmlspecialchars($property_id); ?>' class="btn-detail text-decoration-none">View Detail</a>
                        </div>
                    </div>
                </div>
            </div>

<?php

         }
     }
?>

        </div>
        
        <div class="text-end">
            <button class="btn-see-more">
                See More <i class="fas fa-angle-right"></i>
            </button>
        </div>
    </div>
     <br><br><br>
    <?php include("components/bottom-heading.php"); ?>
    <?php include ("components/footer.php"); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>