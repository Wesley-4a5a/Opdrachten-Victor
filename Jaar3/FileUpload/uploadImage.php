<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action='' method='POST' enctype="multipart/form-data">
      <input type='file' name='fileUploadske' />
      <input type='submit' name='submit' />
    </form>
  </body>
</html>

<?php

if(isset($_POST['submit'])){
$target_dir = "";
$target_file = $target_dir . basename($_FILES["fileUploadske"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileUploadske"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "Is geen imageke.";
        $uploadOk = 0;
    }
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileUploadske"]["tmp_name"], $target_file)) {
        echo "<img src=$target_file />";
    } else {
        echo "Sorry, bruder.";
    }
}

}
 ?>
