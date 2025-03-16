<?php
     $bid_id = isset($_GET['bid_id']) && !empty($_GET['bid_id']) ? $_GET['bid_id'] : header("Location:auction.php");
     require("engine/config.php");
     include ("contents/auction-contents.php");
?>
<html lang="en">
<head>
     <?php include("components/links.php") ?>
     <link rel="stylesheet" href="assets/css/auction-details.css">
     <title>Auction details</title>
</head>
<body>
     <?php include("components/navbar.php") ?>
     <div class="container mt-3">
        <div class="row">
            <div class="col-md-8">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-dark text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="auction.php" class="text-dark text-decoration-none">Auctions</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($property_name) ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="row mt-3">
            <!-- Left column for images -->
            <div class="col-md-2">
                <div class="thumbnail">
                    <img src="<?= htmlspecialchars($property_image) ?>" alt="<?= htmlspecialchars($property_name) ?>" class="img-fluid">
                </div>
                <div class="thumbnail">
                    <img src="<?= htmlspecialchars($property_image) ?>" alt="<?= htmlspecialchars($property_name) ?>" class="img-fluid">
                </div>
                <div class="thumbnail">
                    <img src="<?= htmlspecialchars($property_image) ?>" alt="<?= htmlspecialchars($property_name) ?>" class="img-fluid">
                </div>
            </div>
           
            <!-- Middle column for main image -->
            <div class="col-md-5">
                <div class="car-images">
                    <img src="<?= htmlspecialchars($property_image) ?>" alt="<?= htmlspecialchars($property_name) ?>" class="img-fluid">
                </div>
            </div>
            
            <!-- Right column for vehicle details -->
            <div class="col-md-5">
                <div class="vehicle-details">
                    <h5>Land Details</h5>
                    
                    <div class="detail-row">
                        <div class="detail-label">Property Category</div>
                        <div class="detail-value text-capitalize"><?= htmlspecialchars(preg_replace("/_/"," ",$property_category)) ?></div>
                    </div>
                    
                    <div class="detail-row">
                        <div class="detail-label">Lot Number</div>
                        <div class="detail-value"><?= htmlspecialchars($property_id) ?></div>
                    </div>
                    
                    <div class="detail-row">
                        <div class="detail-label">Size</div>
                        <div class="detail-value"><?= htmlspecialchars($property_quantity." ".$property_size) ?></div>
                    </div>          
                    
                    <div class="detail-row">
                        <div class="detail-label">Property Type</div>
                        <div class="detail-value">Government issued</div>
                    </div>
                                                      
                    <div class="detail-row">
                        <div class="detail-label">Location</div>
                        <div class="detail-value"><?= htmlspecialchars($property_location) ?></div>
                    </div>
                </div>

                <div class='mt-3'>

                    <div class='border border-muted border-2 rounded px-3 py-2 bg-white'>
                      
                       <h4 class='text-capitalize fw-bold mb-3'>
                        bidders list
                       </h4>
                       <?php
                       ini_set('display_errors', 1);
                       error_reporting(E_ALL);
                      include("components/get-bidders-list.php");
                      include("engine/days-ago.php");  
                      if($getbidders->execute()){
                          $result_bids = $getbidders->get_result();
                           while($bids = $result_bids->fetch_assoc()){
                                  ?>
     
                               <div class='d-flex justify-content-between align-items-center mt-1 border-bottom border-muted pb-2'>
                                 <img style='height:60px; width:60px; ' class='rounded rounded-circle p-1 border border-success border-2' src="<?= htmlspecialchars($bids['user_image'] ?? "N/A") ?>" alt="">
                                 <span style='font-weight:bold' class='fw-bold'><?= htmlspecialchars($bids['user_name'] ?? "N/A"); ?></span>
                                 
                                 <span><i class='fas fa-naira-sign'></i><?= htmlspecialchars($bids['bid_amount'] ?? "N/A"); ?></span>
                                 <span class='text-sm text-muted '><?= htmlspecialchars(time_ago($bids['bid_time']) ?? "N/A"); ?></span>
                            </div> 

 <?php   }
}
?>
                    </div>

                </div>

            </div>

        </div>
        
        <!-- Vehicle Description -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="vehicle-description">
                    <h5>Land Description</h5>
                    <p>
                         <?= htmlspecialchars($property_details) ?>
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Auction Information -->
        <div class="row">
            <div class="col-12">
                <div class="auction-box">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Auction Details -->
                            <div class="auction-row">
                                <div class="auction-label">Time left:</div>
                                <?php 
$get_auction_time = $conn->prepare("SELECT * FROM auction WHERE property_id = ? ORDER BY id DESC LIMIT 1");
$get_auction_time->bind_param("i", $bid_id);

if ($get_auction_time->execute()) {
    $result_auction_time = $get_auction_time->get_result();
    $data = $result_auction_time->fetch_assoc();

    $auction_start_time = $data['starting_time'] ?? 0;
    $auction_end_time = $data['ending_time'] ?? 0;  

    // Convert to DateTime objects
    $start = new DateTime($auction_start_time);
    $end = new DateTime($auction_end_time);
    $now = new DateTime(); // Get current time

    // Format the auction end time for display
    $format_date = $end->format("F j, Y H:i:s");

    // Calculate remaining time
    $interval = $now->diff($end);
    
    // Check if time has expired
    if ($now > $end) {
        $remaining_time = "Auction ended";
    } else {
        $remaining_time = $interval->format("%d days");
    }

}
?>


                                 <div class="auction-value">

                                     <div>
       
                                         <div class="countdown d-flex g-3">
                                              <div class="countdown-item">
                                                   <span id="days">00</span>
                                                   <div class="label">Days</div>
                                               </div>
                                               <span class="colon">:</span>
                                               <div class="countdown-item">
                                                   <span id="hours">00</span>
                                                   <div class="label">Hours</div>
                                              </div>
                                              <span class="colon">:</span>
                                              <div class="countdown-item">
                                                   <span id="minutes">00</span>
                                                   <div class="label">Minutes</div>
                                              </div>
                                              <span class="colon">:</span>
                                              <div class="countdown-item">
                                                   <span id="seconds">00</span>
                                                   <div class="label">Seconds</div>
                                              </div>
                                       </div>

                                     </div>
              
                                 </div>

                            </div>
                            
                            <div class="auction-row">
                                <div class="auction-label">Bid Status:</div>
                                <div class="auction-value">Ongoing</div>
                            </div>
                            
                            <div class="auction-row">

                                <div class="auction-label">Current Bid:</div>
                                <?php 
                                $get_bid_price = $conn->prepare("SELECT * FROM bid WHERE property_id = ? ORDER BY id DESC LIMIT 1");
                                $get_bid_price->bind_param("i",$bid_id);
                                if($get_bid_price->execute()){
                                     $result_bid_price = $get_bid_price->get_result();
                                     $data = $result_bid_price->fetch_assoc();
                                     $bid_amount = $data['bid_amount'] ?? 0;
                                }
                                
                                ?>
                                <div class="auction-value"> <i class='fas fa-naira-sign'></i><?= htmlspecialchars(number_format($bid_amount,0,2)) ?></div>
                            </div>
                            
                            <div class="auction-row">
                                <div class="auction-label">Auction Duration:</div>
                                <div class="auction-value"><?= htmlspecialchars($remaining_time)." left "; ?></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Bid Form -->
                            <div class="mt-3">
                                <div class="mb-2">Enter amount</div>
                                <input type="number" step='500.00' class="bid-input" min='<?= htmlspecialchars($bid_amount) ?>' placeholder="Enter amount">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="#" class="watchlist-btn d-block">ADD TO WISHLIST</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="bid-btn d-block">BID</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    
$(document).ready(function () {
    // Set the target date and time
    const target = new Date("<?= $format_date ?>").getTime();

    // Update the countdown every second
    setInterval(function () {
        const now = new Date().getTime();
        const timeRemaining = target - now;

        // Calculate days, hours, minutes, and seconds
        const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

        // Display the result in the respective elements
        $("#days").text(days.toString().padStart(2, '0'));
        $("#hours").text(hours.toString().padStart(2, '0'));
        $("#minutes").text(minutes.toString().padStart(2, '0'));
        $("#seconds").text(seconds.toString().padStart(2, '0'));

        // If the countdown is finished, show "00" for all values
        if (timeRemaining < 0) {
            $("#days").text("00");
            $("#hours").text("00");
            $("#minutes").text("00");
            $("#seconds").text("00");
        }
    }, 1000);
});


    </script><br><br>

    <?php include ("components/footer.php") ?>
    <?php include ("engine/time-format.php"); ?>
   <script src="assets/js/auction.js"></script>
</body>
</html>