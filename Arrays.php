<?php 
echo "<h1>Q1: Indexed Array</h1>";
$subjets=["Math","Science","English","Drawing","So-Science","Economics"];
for($i=0;$i<count($subjets);$i++){
    echo "Subjects Name: ".$subjets[$i]."<br>";
}
    echo "<h1>Q2: Associative Arrays</h1>";
    $marks=[
    "Math"=>92,
    "English"=>95,
    "Drawing"=>99,
    "Science"=>99,
    "Economics"=>95
    ];
    $total=0;
    foreach($marks as $subjets=>$numbers){
        echo "$subjets : $numbers"."<br>";
        $total +=$numbers;
    }

    $percentage=($total/500)*100;
    echo "Total Numbers: $total<br>";
    echo "Percentage of Total Numbers: $percentage";

      echo "<h1>Q3: Multidimensional Arrays</h1>";
    $data=[
    ["Chandan ", 95 ," A" ,99],
    ["Prince ", 85 ," B" ,65],
    ["Himanshu ", 65 ," C",75],
    ["Rahul ", 65 ," C",65]
    ];
    foreach($data as $students){
        echo "Students Names: ".$students[0]."<br>" . " Marks: " . $students[1]."<br>"  . " Grade: " . $students[2]."<br>"." Attendance Parcentage ".$students[3]."<br><br>";   

    }

     echo "<h1>Q3-Q2: Multidimensional Arrays</h1>";
     $array=[
    ["name"=>"Chandan ","marks" => 95 ,"grade"=>" A ","Attendance"=> 99],
   ["name"=>"Prince ","marks" => 85 ,"grade"=>" B ","Attendance"=> 85],
    ["name"=>"Himanshu ","marks" => 75 ,"grade"=>" C ","Attendance"=> 75],
    ["name"=>"Rahul ","marks" => 65 ,"grade"=>" D ","Attendance"=> 65]
    ];

    foreach($array as $students ){
        if($students["Attendance"]>=75){
           $status="pass";
        }else{
           $status="Fail";
        }
        echo "Name:".$students["name"]."<br>";
         echo "Name:".$students["name"]."<br>";
        echo "Attendance:".$students["Attendance"]."%"."<br>";
        echo "status:".$status."<br><br>";
    }
?>