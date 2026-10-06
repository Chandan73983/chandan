<?php
if(isset($_POST["query"])) {
 $query = strtolower(trim($_POST["query"]));

 $courses = ["Web Designing", "Tally Prime", "Advanced Excel", "Python", "CorelDRAW", "Photoshop"];

 $results = array_filter($courses, function($course) use ($query) {
  return strpos(strtolower($course), $query) !== false;
 });

 if(count($results) > 0){
  foreach($results as $match){
   echo "<div>📘 " . htmlspecialchars($match) . "</div>";
  }
 } else {
  echo "<div>❌ No results found</div>";
 }
}
?>