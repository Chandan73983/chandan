<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "school_management", 3308);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO teachers (name, email, subject, salary)
VALUES
('Rahul Sharma', 'rahul@gmail.com', 'Mathematics', 45000),
('Priya Singh', 'priya@gmail.com', 'English', 42000),
('Amit Kumar', 'amit@gmail.com', 'Science', 48000),
('Neha Verma', 'neha@gmail.com', 'Hindi', 40000),
('Rohit Gupta', 'rohit@gmail.com', 'Computer Science', 55000),
('Pooja Yadav', 'pooja@gmail.com', 'Biology', 46000),
('Vikas Mehta', 'vikas@gmail.com', 'Physics', 50000),
('Anjali Sharma', 'anjali@gmail.com', 'Chemistry', 47000),
('Suresh Kumar', 'suresh@gmail.com', 'History', 41000),
('Kavita Singh', 'kavita@gmail.com', 'Geography', 43000)";


if (mysqli_query($conn, $sql)) {
    echo "Insert Data  successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>