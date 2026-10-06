<?php

$students = [
    "Chandan"=>90,
    "Ravi"=>80,
    "Prince"=>85,
    "Himanshu"=>75
];

echo "<table border='1' cellpadding='10'>";

echo "<tr>";
echo "<th>Students Name</th>";
echo "<th>Marks</th>";
echo "</tr>";

foreach($students as $name=>$marks){
    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$marks</td>";
    echo "</tr>";
}

?>