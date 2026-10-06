<?php 

$conn = mysqli_connect("127.0.0.1", "root", "", "shop", 3308);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM products";

$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);

echo "<table border='1' cellpadding='10' cellspacing='0'>";

echo "<tr>";
echo "<th>Name</th>";
echo "<th>Categorys</th>";
echo "<th>Descriptions</th>";
echo "<th>Prices</th>";
echo "<th>Stocks</th>";
echo "</tr>";

while ($row = mysqli_fetch_assoc($result)) {

    echo "<tr>";

    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['category'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $row['stock'] . "</td>";
    
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);

?>