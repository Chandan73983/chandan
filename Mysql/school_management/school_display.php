<?php 

$conn = mysqli_connect("127.0.0.1", "root", "", "school_management", 3308);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// 1. Ek page par kitne products dikhane hain
$limit = 3;

// 2. Current page
$page = $_GET['page'] ?? 1;

// 3. Data kahan se start hoga
$start = ($page - 1) * $limit;

$search = $_GET['search'] ?? '';

// 4. Total products
$count_sql = "SELECT * FROM teachers";
$count_result = mysqli_query($conn, $count_sql);
$total_products = mysqli_num_rows($count_result);

// 5. Total pages
$total_pages = ceil($total_products / $limit);

$sql = "SELECT * FROM teachers WHERE name LIKE '%$search%' LIMIT $start, $limit";
$result = mysqli_query($conn, $sql);

echo "Total Teachers: " . $total_products;
echo "<br><br>";
echo "<a href='add.php'>Add</a> | ";
echo "<br><br>";

echo "<form method='GET'>
<input type='text'
name='search'
placeholder='Search Teachers'>
<button type='submit'>Search</button>
</form>
";

echo "<br>";

echo "<table border='1' cellpadding='10' cellspacing='0'>";

echo "<tr>";
echo "<th>ID</th>";
echo "<th>Image</th>";
echo "<th>Teacher Name</th>";
echo "<th>Teacher Email</th>";
echo "<th>Teacher Subject</th>";
echo "<th>Teacher Salary</th>";
echo "<th>Edit || Delete</th>";
echo "</tr>";


while ($row = mysqli_fetch_assoc($result)) {

    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";

    // Image display
    if (!empty($row['image']) && file_exists("uploads/" . $row['image'])) {
        echo "<td><img src='uploads/" . $row['image'] . "' width='60' height='60'></td>";
    } else {
        echo "<td>No Image</td>";
    }

    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['subject'] . "</td>";
    echo "<td>" . $row['salary'] . "</td>";
    echo "<td>";
    echo "<a href='edit.php?id=".$row['id']."'>Edit</a> | ";
    echo "<a href='delete.php?id=".$row['id']."'>Delete</a>";
    echo "</td>";
    echo "</tr>";
}

echo "</table>";

echo "<br>";

for ($i = 1; $i <= $total_pages; $i++) {
    echo "<a href='?page=$i'>$i</a> &nbsp;";
}

mysqli_close($conn);

?>