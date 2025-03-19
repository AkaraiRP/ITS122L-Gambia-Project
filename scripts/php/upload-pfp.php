<?php
require_once 'database.php';
session_start();

$target_dir = "../../resources/images/profiles/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    if ($_FILES['file']['size'] == 0 && $_FILES['file']['error'] == 0) {
        header("location: /Dashboard/");
        exit();
    }
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      echo "<button onclick='window.location.href=\"/Dashboard/admin.php\"'>Go Back</button>";
      $uploadOk = 0;
    }
  }
  
  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    echo "<button onclick='window.location.href=\"/Dashboard/admin.php\"'>Go Back</button>";
    $uploadOk = 0;
  }
  
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    echo "<button onclick='window.location.href=\"/Dashboard/admin.php\"'>Go Back</button>";
    $uploadOk = 0;
  }
  
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    echo "<button onclick='window.location.href=\"/Dashboard/admin.php\"'>Go Back</button>";
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      $stmt = $conn ->prepare("UPDATE users SET  pfp = :filename WHERE user_id = :id");
      $stmt -> execute(["filename" => $_FILES["fileToUpload"]["name"], "id" => $_SESSION['user']['id']]);
      echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      header("location: /Dashboard/");
      exit();
      
    } else {
      echo "Sorry, there was an error uploading your file.";
       echo "<button onclick='window.location.href=\"/Dashboard/admin.php\"'>Go Back</button>";
    }
  }
  ?>