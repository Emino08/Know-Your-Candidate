<?php
include_once("config.php");
    $currentDirectory = getcwd();
    $uploadDirectory = "./uploads/";

    $errors = []; // Store errors here

    $fileExtensionsAllowed = ['jpeg','jpg','png']; // These will be the only file extensions allowed 

    $fileName = $_FILES['cpict']['name'];
    $fileName1 = $_FILES['cpart']['name'];
    $fileSize = $_FILES['cpict']['size'];
    $fileSize1 = $_FILES['cpart']['size'];
    $fileTmpName  = $_FILES['cpict']['tmp_name'];
    $fileTmpName1  = $_FILES['cpart']['tmp_name'];
    $fileType = $_FILES['cpict']['type'];
    $fileType1 = $_FILES['cpart']['type'];
    // $fileExtension = strtolower(end(explode('.',$fileName)));
    
    $fname = test_input($_POST['cfname']);
$mname = test_input($_POST['cmname']);
$lname = $_POST['clname'];


if ($fname != '' && $mname != '' && $lname != '' && $fileName != '' && $fileName1 != '') {
            // Change $success variable from an empty string.
            $success = 'success';

            // Insert whatever you want to do upon success.

        } else {
            // Upon Failure.
            echo '<p class="error">Fill in all fields.</p>';

            // Set $success variable to an empty string.
            $success = '';
        }

    $tmp = explode('.', $fileName);
    $tmp1 = explode('.', $fileName1);
    $fileExtension = strtolower(end($tmp));
    $fileExtension1 = strtolower(end($tmp1));
    $uploadPath = $currentDirectory . $uploadDirectory . basename($fileName); 
    $uploadDatabase = $uploadDirectory . basename($fileName);
    $uploadPath1 = $currentDirectory . $uploadDirectory . basename($fileName1); 
    $uploadDatabase1 = $uploadDirectory . basename($fileName1);
    if (isset($_POST['submit'])) {

      if (! in_array($fileExtension,$fileExtensionsAllowed)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
      }

      if ($fileSize > 4000000 && $fileSize1 > 4000000) {
        $errors[] = "File exceeds maximum size (4MB)";
      }

      if (empty($errors)) {
          
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
        $didUpload1 = move_uploaded_file($fileTmpName1, $uploadPath1);
        

        if ($didUpload && $didUpload1) {
          echo "The file " . basename($fileName) . " has been uploaded";
          echo "The file " . basename($fileName1) . " has been uploaded";

          $sql = "INSERT INTO details (candidate_photo,candidate_fname,candidate_mname,candidate_lname,political_party_photo) VALUES ('$uploadDatabase','$fname','$mname','$lname','$uploadDatabase1')";
       
        if ($conn->query($sql) === TRUE) {
//            echo "New record created successfully";
            echo 1;
        } else {
//            echo "Error: " . $sql . "<br>" . $conn->error;
            echo 0;
        }
        } else {
          echo "An error occurred. Please contact the administrator.";
        }
      } else {
        foreach ($errors as $error) {
          echo $error . "These are the errors" . "\n";
        }
      }

    }
?>