<?php 
if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_FILES["photo"])){
    // $file = $_FILES["image"];
    // $target = "uploads/";
    // if(!is_dir($target)){
    //     mkdir($target, 0777, true);
        
    // }
    // $targetpath = $target . basename(($file["name"]));
    // if(move_uploaded_file($file["tmp_name"],$targetpath)){
    //     echo "Product Image uploads: " . $file["name"];
    // }else{
    //     echo "Upload failed. ";
    // }

   
$file_name = $_FILES['photo']['name'];          // Original file name
$temp_name = $_FILES['photo']['tmp_name'];      // Temporary file location
$destination = "uploads/" . $file_name;         // Final destination

if (move_uploaded_file($temp_name, $destination)) {
    echo "File uploaded successfully.";
} else {
    echo "File upload failed.";
}

}

?>