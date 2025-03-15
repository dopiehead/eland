<?php
$bidders = "SELECT 
                 u.id, 
                 u.user_name AS user_name, 
                 u.user_image AS user_image,
                 b.id AS bid_id,
                 b.property_id AS bid_property_id,
                 b.buyer_id AS buyer_id,
                 b.bid_amount AS bid_amount,
                 b.bid_time AS bid_time,
                 p.property_id AS product_property_id 
            FROM user_profile u
            JOIN bid b ON u.id = b.buyer_id
            JOIN products p ON p.property_id = b.property_id
            WHERE b.property_id = ?";
$getbidders = $conn->prepare($bidders);
$getbidders->bind_param("i", $property_id);
// ?>