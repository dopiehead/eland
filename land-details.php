<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("components/links.php"); ?>
    <title>E-Land Auctions - 6 Hectares Of Land</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/land-details.css">
    
</head>
<body class='bg-white'>
<?php include ("components/navbar.php"); ?>
    <div class="property-container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Property Title and ID -->
                <h1 class="property-title">6 Hectares Of Land</h1>
                <p class="property-id">No. 91068985</p>
                
                <!-- Main Image -->
                <img src="assets/images/background/product-img.jpeg" alt="6 Hectares Of Land" class="main-image">
                
                <!-- Thumbnails -->
                <div class="thumbnail-container">
                    <img src="assets/images/background/product-img.jpeg" alt="Thumbnail 1" class="thumbnail">
                    <img src="assets/images/background/product-img.jpeg" alt="Thumbnail 2" class="thumbnail">
                    <img src="assets/images/background/product-img.jpeg" alt="Thumbnail 3" class="thumbnail">
                    <div class="thumbnail-wrapper">
                        <img src="assets/images/background/product-img.jpeg" alt="Thumbnail 4" class="thumbnail">
                        <div class="view-all">See all photos (10)</div>
                    </div>
                </div>
                
                <!-- Property Information -->
                 <div>
                     <h2 class="section-title">Land Listing Information</h2>
                     <dl class="property-info">
                         <dt>Property Name:</dt>
                         <dd>Green Valley Estate Plot 15</dd>
                    
                         <dt>Location:</dt>
                         <dd>Lekki Phase 1, Lagos, Nigeria</dd>
                     </dl>
                 </div>

        <!-- Land Size -->
                  <div class="detail-section">
                     <h2 class="detail-title">Land Size:</h2>
                     <p class="detail-value">450 square meters</p>
                 </div>
        
        <!-- Auctioned Price -->
        <div class="detail-section">
            <h2 class="detail-title">Auctioned Price:</h2>
            <p class="detail-value">₦25,000,000</p>
        </div>
        
        <!-- Description -->
        <div class="detail-section">
            <h2 class="detail-title">Description:</h2>
            <p class="detail-value description">
                This prime plot of land is located in the heart of Lekki Phase 1, an 
                upscale and fast-developing area in Lagos. It is suitable for 
                residential or mixed-use purposes. The land is fenced, cleared, 
                and ready for immediate development.
            </p>
        </div>
        
        <!-- Key Features -->
        <div class="detail-section">
            <h2 class="detail-title">Key Features:</h2>
            <ul class="feature-list">
                <li>Gated community with 24/7 security.</li>
                <li>Good road network and drainage system.</li>
                <li>Proximity to major landmarks such as The Palms Shopping Mall and Lekki Beach.</li>
                <li>Documented with Governor's Consent for guaranteed ownership.</li>
            </ul>
        </div>
        
        <!-- Payment Plan Options -->
        <div class="detail-section">
            <h2 class="detail-title">Payment Plan Options:</h2>
            <ul class="feature-list payment-options">
                <li>Outright purchase: ₦25,000,000</li>
                <li>Installment plan: ₦5,000,000 deposit with 6 monthly payments of ₦3,500,000 each.</li>
            </ul>
        </div>
        
        <!-- Site Visit Schedule -->
        <div class="detail-section">
            <h2 class="detail-title">Site Visit Schedule:</h2>
            <p class="detail-value">
                Available for viewing on weekdays and weekends. Contact us to book a tour.
            </p>
        </div>
        
        <!-- Contact Information -->
        <div class="detail-section">
            <h2 class="detail-title">Contact Information:</h2>
            <ul class="feature-list contact-info">
                <li>Agent: John Adewale</li>
                <li>Phone: +234 810 123 4567</li>
                <li>Email: johnadewale@eland.com</li>
            </ul>
        </div>
    </div>
            
            <div class="col-lg-4">
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Payment Button -->
                    <button class="btn-payment">
                        <i class="fas fa-credit-card"></i> Proceed to payment
                    </button>
                    
                    <!-- Questions Section -->
                    <h3 class="sidebar-title">Any Questions?</h3>
                    <a href="#" class="sidebar-link">Get in touch via our help centre</a>
                    <a href="#" class="sidebar-link">Contact an expert about this vehicle</a>
                    
                    <!-- Share Section -->
                    <h3 class="sidebar-title">Share this land with your friends</h3>
                    <div class="social-icons">
                        <a href="#" class="social-icon facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon pinterest">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- product list -->
     
    <div class="container mt-4">
        <div class="header">
            <h5>Other lands:</h5>
            <div class="dropdown">
                <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="viewAll" data-bs-toggle="dropdown" aria-expanded="false">
                    View all <i class="fas fa-chevron-down"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="viewAll">
                    <li><a class="dropdown-item" href="#">Newest</a></li>
                    <li><a class="dropdown-item" href="#">Price: Low to High</a></li>
                    <li><a class="dropdown-item" href="#">Price: High to Low</a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <!-- Listing 1 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z3JlZW4lMjBmaWVsZHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="Land" class="img-fluid">
                        <div class="rating">
                            <span class="star">★★★★★</span>
                        </div>
                    </div>
                    <div class="card-body px-0 py-2">
                        <h6 class="mb-1">6 Hectares Of Land</h6>
                        <div class="location">
                            <i class="fas fa-map-marker-alt"></i> Eko, Lagos State
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="starting-bid">Starting Bid</div>
                                <div class="price">986,000.00</div>
                            </div>
                            <button class="view-detail-btn">View Detail</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Listing 2 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z3JlZW4lMjBmaWVsZHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="Land" class="img-fluid">
                        <div class="rating">
                            <span class="star">★★★★★</span>
                        </div>
                    </div>
                    <div class="card-body px-0 py-2">
                        <h6 class="mb-1">6 Hectares Of Land</h6>
                        <div class="location">
                            <i class="fas fa-map-marker-alt"></i> Eko, Lagos State
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="starting-bid">Starting Bid</div>
                                <div class="price">986,000.00</div>
                            </div>
                            <button class="view-detail-btn">View Detail</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Listing 3 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z3JlZW4lMjBmaWVsZHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="Land" class="img-fluid">
                        <div class="rating">
                            <span class="star">★★★★★</span>
                        </div>
                    </div>
                    <div class="card-body px-0 py-2">
                        <h6 class="mb-1">6 Hectares Of Land</h6>
                        <div class="location">
                            <i class="fas fa-map-marker-alt"></i> Eko, Lagos State
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="starting-bid">Starting Bid</div>
                                <div class="price">986,000.00</div>
                            </div>
                            <button class="view-detail-btn">View Detail</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Listing 4 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z3JlZW4lMjBmaWVsZHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="Land" class="img-fluid">
                        <div class="rating">
                            <span class="star">★★★★★</span>
                        </div>
                    </div>
                    <div class="card-body px-0 py-2">
                        <h6 class="mb-1">6 Hectares Of Land</h6>
                        <div class="location">
                            <i class="fas fa-map-marker-alt"></i> Eko, Lagos State
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="starting-bid">Starting Bid</div>
                                <div class="price">986,000.00</div>
                            </div>
                            <button class="view-detail-btn">View Detail</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Listing 5 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z3JlZW4lMjBmaWVsZHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="Land" class="img-fluid">
                        <div class="rating">
                            <span class="star">★★★★★</span>
                        </div>
                    </div>
                    <div class="card-body px-0 py-2">
                        <h6 class="mb-1">6 Hectares Of Land</h6>
                        <div class="location">
                            <i class="fas fa-map-marker-alt"></i> Eko, Lagos State
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="starting-bid">Starting Bid</div>
                                <div class="price">986,000.00</div>
                            </div>
                            <button class="view-detail-btn">View Detail</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Listing 6 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z3JlZW4lMjBmaWVsZHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="Land" class="img-fluid">
                        <div class="rating">
                            <span class="star">★★★★★</span>
                        </div>
                    </div>
                    <div class="card-body px-0 py-2">
                        <h6 class="mb-1">6 Hectares Of Land</h6>
                        <div class="location">
                            <i class="fas fa-map-marker-alt"></i> Eko, Lagos State
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="starting-bid">Starting Bid</div>
                                <div class="price">986,000.00</div>
                            </div>
                            <button class="view-detail-btn">View Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("components/bottom-heading.php"); ?>
    <?php include ("components/footer.php"); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>