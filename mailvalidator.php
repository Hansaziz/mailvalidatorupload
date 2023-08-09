<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['user_email'];
    $emailRegex = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
    
    if (!preg_match($emailRegex, $email)) {
        echo "Please enter a valid email address.";
        exit;
    }

    $allowedExtensions = array("jpeg", "jpg", "png");
    $fileExtension = pathinfo($_FILES["user_file"]["name"], PATHINFO_EXTENSION);

    if (!in_array($fileExtension, $allowedExtensions)) {
        echo "Please upload a JPEG or PNG file.";
        exit;
    }

    $targetDirectory = "dumps/";
    $targetFile = $targetDirectory . basename($_FILES["user_file"]["name"]);

    if (move_uploaded_file($_FILES["user_file"]["tmp_name"], $targetFile)) {
        echo "File uploaded.";
    } else {
        echo "Error uploading file.";
    }
}
?>
