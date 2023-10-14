<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>
<body>
   <h2>Profile picture</h2>
<form id="imageUpload" action="image.php" name='img' method="request" enctype="">
   
 
        Choose file:
            <input type="file"  name="input"><br>
          
            <input type="submit" id="submit" name="upload"
            value="submit">
</form>
</body>
</html>
<?php
if (isset($_REQUEST["upload"])) {

   $Extensions = array("png","jpg","jpeg");

   $file_extension = pathinfo($files["name"], PATHINFO_EXTENSION);

 if (!in_array($file_extension, $Extensions)) {
     $response = array(
// print_r("jph")
        "type" => "error",
        "message" => "Upload valid images. Only png and jpeg are allowed."
     );
 } // Validate image file size
   else if (($files["input"]["size"] > 4000000)) {
     $response = array(
         "type" => "invalid input",
         "message" => "Image size exceeds 4MB"
       );
 }
else {
  $target = "image/".basename($files["input"]["name"]);
       if (move_uploaded_file($files["input"]["tmp_name"], $target)) {
 $response = array(
             "type" => "success",
           "message" => "Image uploaded successfully."
       );
         } else {
       $response = array(
           "type" => "error",
           "message" => "Problem in uploading image files."
           );
     }
}
}

?>


