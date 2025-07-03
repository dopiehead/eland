<html lang="en">
<head>
    <?php include ("components/links.php"); ?>
    <title>Search result</title>
</head>
<body>
<?php include("components/navbar.php"); ?>
<?php

// Enable all error reporting
error_reporting(E_ALL);

// Display errors on the screen
ini_set('display_errors', 1);
// Include your database connection
require("engine/config.php");

// Initialize variables
$search_term = isset($_POST['search_term']) ? $_POST['search_term'] : '';
$service = isset($_POST['service']) ? $_POST['service'] : '';
$category = isset($_POST['category']) ? $_POST['category'] : '';
$type = isset($_POST['type']) ? $_POST['type'] : '';
$location = isset($_POST['location']) ? $_POST['location'] : '';
$min_price = isset($_POST['min_price']) ? $_POST['min_price'] : '';
$max_price = isset($_POST['max_price']) ? $_POST['max_price'] : '';

// Construct the base SQL query
$query = "SELECT * FROM products WHERE 1";

// Add conditions based on user input
if (!empty($search_term)) {
    $query .= " AND (property_name LIKE ? OR property_de LIKE ?)";
}
if (!empty($service)) {
    $query .= " AND service = ?";
}
if (!empty($category)) {
    $query .= " AND property_category = ?";
}
if (!empty($type)) {
    $query .= " AND property_type = ?";
}
if (!empty($location)) {
    $query .= " AND property_location = ?";
}
if (!empty($min_price)) {
    $query .= " AND property_price >= ?";
}
if (!empty($max_price)) {
    $query .= " AND property_price <= ?";
}

// Prepare and bind the query
$stmt = $conn->prepare($query);

// Bind parameters dynamically
$bind_params = [];
$bind_types = "";
if (!empty($search_term)) {
    $bind_params[] = "%" . $search_term . "%";
    $bind_params[] = "%" . $search_term . "%";
    $bind_types .= "ss"; // two string parameters for LIKE
}
if (!empty($service)) {
    $bind_params[] = $service;
    $bind_types .= "s"; // string parameter
}
if (!empty($category)) {
    $bind_params[] = $category;
    $bind_types .= "s"; // string parameter
}
if (!empty($type)) {
    $bind_params[] = $type;
    $bind_types .= "s"; // string parameter
}
if (!empty($location)) {
    $bind_params[] = $location;
    $bind_types .= "s"; // string parameter
}
if (!empty($min_price)) {
    $bind_params[] = $min_price;
    $bind_types .= "i"; // integer parameter
}
if (!empty($max_price)) {
    $bind_params[] = $max_price;
    $bind_types .= "i"; // integer parameter
}

// Bind the parameters dynamically
$stmt->bind_param($bind_types, ...$bind_params);

// Execute the query
$stmt->execute();
$result = $stmt->get_result();

// Fetch results and display them
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='property-card'>";
        echo "<h4>" . htmlspecialchars($row['property_name']) . "</h4>";
        echo "<p>" . htmlspecialchars($row['property_description']) . "</p>";
        echo "<p>Price: " . number_format($row['price']) . "</p>";
        echo "<p>Location: " . htmlspecialchars($row['location']) . "</p>";
        echo "</div>";
    }
} else {
    echo "<div class='w-100 container h-50 d-flex align-items-center full-height text-danger'><p>No properties found matching your criteria.</div></p>";
}

// Close the prepared statement
$stmt->close();
?>
<?php include ("components/bottom-heading.php"); ?>
<?php include ("components/footer.php"); ?>
</body>
</html>
