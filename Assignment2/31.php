<?php
$students = [
    [
        "name"=>"Chandan",
        "marks"=>[
            "html"=>90,
            "css"=>85,
            "js"=>88
        ]
    ],

     [
        "name"=>"Ravi",
        "marks"=>[
            "html"=>70,
            "css"=>65,
            "js"=>68
        ]
    ],

     [
        "name"=>"Prince",
        "marks"=>[
            "html"=>80,
            "css"=>75,
            "js"=>68
        ]
    ]
];

echo "<table border='1' cellpadding='10'>";
echo "<tr>";
 echo "<th colspan='4'>Stuents Sheet</th>";
 echo "</tr>";
 echo "<tr>";
echo "<th rowspan='2'>Name</th>";
echo "<th colspan='3'>Subjects</th>";
echo "</tr>";
echo "<tr>";
echo "<th>HTML</th>";
echo "<th>CSS</th>";
echo "<th>JS</th>";

foreach($students as $student){
    echo "<tr>";
    echo "<td>".$student['name']."</td>";
    echo "<td>".$student['marks']['html']."</td>";
    echo "<td>".$student['marks']['css']."</td>";
    echo "<td>".$student['marks']['js']."</td>";
     echo "</tr>";
}
?>