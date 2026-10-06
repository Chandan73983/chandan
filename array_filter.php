<?php
$offers = [1200, 950, 800, 1600, 700];

$below1000 = array_filter($offers, function($value) {
    return $value <= 1000;
});

foreach ($below1000 as $offer) {
    echo "Offer: ₹$offer<br>";
}
?>
<hr>
<?php
$catalog = [
    ["name" => "Wireless Mouse", "price" => 599, "category" => "Accessories"],
    ["name" => "Mechanical Keyboard", "price" => 2299, "category" => "Accessories"],
    ["name" => "Running Shoes", "price" => 1899, "category" => "Footwear"],
    ["name" => "Webcam", "price" => 1499, "category" => "Electronics"]
];

// Filter by category
$accessories = array_filter($catalog, function($item) {
    return $item["category"] === "Accessories";
});

foreach ($accessories as $item) {
    echo "{$item['name']}: ₹{$item['price']}<br>";
}
?>

<?php
$midRange = array_filter($catalog, function($item) {
    return $item["price"] >= 1000 && $item["price"] <= 2000;
});

foreach ($midRange as $item) {
    echo "{$item['name']}: ₹{$item['price']}<br>";
}
?>