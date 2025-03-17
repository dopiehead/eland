<?php  session_start();
$buyer = isset($_SESSION['id']) && !empty($_SESSION['id']) ? $_SESSION['id'] :"rand()";
require ("engine/config.php");
if(isset($_GET['id'])){
   $id = $_GET['id'];

   $get_product_details = $conn->prepare("SELECT * FROM products WHERE property_id = ?");
   $get_product_details->bind_param("i",$id);
   if($get_product_details->execute()){
         $details = $get_product_details->get_result();
         while($property = $details->fetch_assoc()){
           include("contents/property-listings.php");

           $getposter = $conn->prepare("SELECT * FROM user_profile WHERE id = ? ");
           $getposter->bind_param('i', $poster_id);
           if($getposter->execute()){
             $users = $getposter->get_result();
             while($seller = $users->fetch_assoc()){               
                include ("contents/seller-contents.php");

                $key_features = $conn->prepare("SELECT * FROM key_features WHERE product_id = ?");
                $key_features->bind_param("i",$id);
                if($key_features->execute()){
                    $features = $key_features->get_result();
                    while($feature = $features->fetch_assoc()){
                      include("contents/feature-contents.php");

                    }
                }

             }

           }

        }

     }
}
else{
     header("Location:products.php");
     exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("components/links.php"); ?>
    <title>E-Land Auctions - <?= htmlspecialchars($property_quantity) ?> <?= htmlspecialchars($property_size) ?></title>
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
                <h1 class="property-title"><?= htmlspecialchars($property_quantity) ?> <?= htmlspecialchars($property_size) ?></h1>
                <p class="property-id">No. <?= htmlspecialchars(preg_replace('/\D/', '', md5($property_id))) ?></p>

                
                <!-- Main Image -->
                <img src=" <?= htmlspecialchars($property_image) ?>" alt=" <?= htmlspecialchars($property_quantity) ?> <?= htmlspecialchars($property_size)  ?>" class="main-image">
                
                <!-- Thumbnails -->
                <div class="thumbnail-container">
                    <img src="<?= htmlspecialchars($property_image) ?>" alt="Thumbnail 1" class="thumbnail">
                    <img src="<?= htmlspecialchars($property_image) ?>" alt="Thumbnail 2" class="thumbnail">
                    <img src="<?= htmlspecialchars($property_image) ?>" alt="Thumbnail 3" class="thumbnail">
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
                         <dd><?= htmlspecialchars($property_name) ?></dd>
                    
                         <dt>Location:</dt>
                         <dd><?= htmlspecialchars($property_address)?> , <?= htmlspecialchars($product_location)?></dd>
                     </dl>
                 </div>

        <!-- Land Size -->
                  <div class="detail-section">
                     <h2 class="detail-title">Land Size:</h2>
                     <p class="detail-value"><?= htmlspecialchars($property_quantity)?> <?= htmlspecialchars($property_size)?></p>
                 </div>
        
        <!-- Auctioned Price -->
        <div class="detail-section">
            <h2 class="detail-title">Auctioned Price:</h2>
            <p class="detail-value"><?= htmlspecialchars($property_price)?></p>
        </div>
        
        <!-- Description -->
        <div class="detail-section">
            <h2 class="detail-title">Description:</h2>
            <p class="detail-value description">
                <?= htmlspecialchars($property_details) ?>
            </p>
        </div>
        
        <!-- Key Features -->
        <div class="detail-section">
            <h2 class="detail-title">Key Features:</h2>
            <ul class="feature-list">

                <?php if(!empty($feature_option_1)){ ?>
                     <li><?= htmlspecialchars($feature_option_1)."."; ?></li>
               <?php } ?>

                <?php if(!empty($feature_option_2)){ ?>
                      <li><?= htmlspecialchars($feature_option_2)."."; ?></li>
                <?php } ?>

                <?php if(!empty($feature_option_3)){ ?>
                      <li><?= htmlspecialchars($feature_option_3)."."; ?></li>
                <?php } ?>

                <?php if(!empty($feature_option_4)){ ?>
                    <li><?= str_replace('#39;', "'", htmlspecialchars($feature_option_4, ENT_QUOTES, 'UTF-8'))."."; ?></li>

                <?php } ?>

            </ul>
        </div>
        
        <!-- Payment Plan Options -->
        <div class="detail-section">
            <h2 class="detail-title">Payment Plan Options:</h2>
            <ul class="feature-list payment-options">
                <li>Outright purchase: ₦<?= htmlspecialchars($property_price)?></li>
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
                <li class='text-capitalize'>Agent: <?= htmlspecialchars($seller_details_name) ?></li>
                <li>Phone: + <a class='text-dark text-decoration-none' href='tel:<?= htmlspecialchars($seller_details_phone) ?>'><?= htmlspecialchars($seller_details_phone) ?></a></li>
                <li>Email: <a class='text-dark text-decoration-none' href='mailto:<?= htmlspecialchars($seller_details_email) ?>'><?= htmlspecialchars($seller_details_email) ?></a></li>
            </ul>
        </div>
    </div>
            
            <div class="col-lg-4">
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Payment Button -->
                    <button id='<?= htmlspecialchars($property_id) ?>' class="btn-payment">
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
    <input type="hidden" name='seller_id' id='seller_id' value='<?= htmlspecialchars($seller_details) ?>'>
    <input type="hidden" value='normal' id='product_type'  name='product_type'>
    <input type="hidden" value='1' name='noofitem' id='noofitem'>

    <script>
  $(".btn-payment").on("click", function(e) {
    e.preventDefault();
    
    // Get the itemId from the clicked button
    let itemId = $(this).attr("id");
    let buyer = "<?= htmlspecialchars($_SESSION['id']); ?>";
    let seller_id = $("#seller_id").val();
    let product_type = $("#product_type").val();
    let noofitem = $("#noofitem").val();

    // Validate the required fields
    if (!itemId || !seller_id || !product_type || !noofitem) {
        console.log("All fields are required");
        swal({
            title: "Error",
            text: "All fields are required.",
            icon: "error"
        });
        return;
    }

    $.ajax({
        url: "cart-process.php",
        type: "POST",
        data: {
            "itemId": itemId,
            "buyer": buyer,
            "seller_id": seller_id,
            "product_type": product_type,
            "noofitem": noofitem
        },
        success: function(response) {
            if (response.success) {
                swal({
                    title: "Success",
                    text: "Item added successfully",
                    icon: "success"
                });
            } else {
                swal({
                    title: "Notice",
                    text: response.message,
                    icon: "warning"
                });
            }
        },
        error: function(err) {
            console.log(err);
            swal({
                title: "Error",
                text: "Something went wrong, please try again.",
                icon: "error"
            });
        }
    });

  });
</script>


    <?php include("components/bottom-heading.php"); ?>
    <?php include ("components/footer.php"); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>