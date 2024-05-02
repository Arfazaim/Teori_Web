<?php
// Define menu items
$menu = array(
    "Ayam Goreng" => 15000,
    "Rendang" => 20000,
    "Gulai" => 18000,
    "Sambalado" => 5000,
    // Add more menu items as needed
);

// Function to display menu
function displayMenu($menu) {
    echo "Menu Nasi Padang: <br>";
    foreach($menu as $item => $price) {
        echo "- $item: Rp $price <br>";
    }
}

// Function to calculate total
function calculateTotal($order, $menu) {
    $total = 0;
    foreach($order as $item) {
        if(array_key_exists($item, $menu)) {
            $total += $menu[$item];
        }
    }
    return $total;
}

// Example order
$order = ["Ayam Goreng", "Rendang", "Sambalado"];

// Display menu
displayMenu($menu);

// Calculate and display total
$total = calculateTotal($order, $menu);
echo "Total Harga: Rp $total";

?>
