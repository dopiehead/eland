
    <div class="container mt-5">
    <?php 
    require("engine/config.php");
    $countproperty = $conn->prepare("SELECT * FROM products");

    if ($countproperty->execute()) {
        $countproperty->store_result(); 
        $count_no_of_property = $countproperty->num_rows; 
    }
?>
        <h2 class="mb-4">New Listings (<?= htmlspecialchars($count_no_of_property) ?>)</h2>
        <div class="row">
        <?php 
            
             $getproperty = $conn->prepare("SELECT * FROM products");
             if($getproperty->execute()){
                 $result = $getproperty->get_result();
                 while($property = $result->fetch_assoc()) {
                     include ("contents/property-listings.php"); ?>
             <!-- card list -->
            <div class="col-md-4">
                <div class="listing-card">
                    <img src="<?= htmlspecialchars($property_image)?>" alt="Land Image">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($property_name)?></h5>
                        <p class="listing-location"><?= htmlspecialchars($property_address)?>,<?= htmlspecialchars($property_location)?></p>
                        <p class="listing-price"><?= htmlspecialchars(number_format($property_price,0,2))?></p>
                        <a href='land-details.php?id=<?= htmlspecialchars($property_id)?>' class="btn btn-view-detail">View Detail</a>
                    </div>
                </div>
            </div>

            <?php   }

}
?>
            <!-- end of card -->
        </div>
    </div>
           