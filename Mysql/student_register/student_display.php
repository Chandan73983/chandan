<?php 

$conn = mysqli_connect("127.0.0.1", "root", "", "student_register", 3308);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$search = $_GET['search'] ?? '';

$sql = "SELECT * FROM register WHERE first_name LIKE '%$search%'";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);

echo "Total Teachers: " . $num;
echo "<br><br>";
echo "<a href='student_add.php'>Add</a> | ";
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
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Email</th>";
echo "<th>Massege</th>";
echo "<th>Date of Birth</th>";
echo "<th>Course</th>";
echo "<th>Gender</th>";
echo "<th>Batch</th>";

echo "<th>Edit || Delete</th>";
echo "</tr>";


while ($row = mysqli_fetch_assoc($result)) {

    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";

    // // Image display
    // if (!empty($row['image']) && file_exists("uploads/" . $row['image'])) {
    //     echo "<td><img src='uploads/" . $row['image'] . "' width='60' height='60'></td>";
    // } else {
    //     echo "<td>No Image</td>";
    // }

    echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['massege'] . "</td>";
    echo "<td>" . $row['dob'] . "</td>";
     echo "<td>" . $row['course'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['batch'] . "</td>";
    echo "<td>";
    echo "<a href='edit.php?id=".$row['id']."'>Edit</a> | ";
    echo "<a href='delete.php?id=".$row['id']."'>Delete</a>";
    echo "</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);

?>