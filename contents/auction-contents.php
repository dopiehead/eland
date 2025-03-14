<?php

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
         auction.starting_time AS starting_time,
         auction.ending_time,
         auction.starting_price,
         auction.date
     FROM products
     INNER JOIN auction ON products.property_id = auction.property_id
     WHERE products.property_id = ?";
 
     $getbid = $conn->prepare($query);
     $getbid->bind_param("i",$bid_id);
     if($getbid->execute()){
         $result_bid = $getbid->get_result();
         while($property = $result_bid->fetch_assoc()){
            include ("contents/property-listings.php");
         }
     }
?>