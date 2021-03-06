<?php
include "connection.php";
$statusMsg = '';

$targetDir = "memo-uploads/";
$title = $_POST['title'];
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)) {
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
            $insert = mysqli_query($link, "INSERT into memo (title, file_name, uploaded_on) VALUES ('$title','".$fileName."', NOW())");
            if($insert) {
                echo "<script>alert('The file has been uploaded successfully.');
                window.location='memo.php';</script>";
                header("Refresh:0");
            } else {
                echo "<script>alert('File upload failed, please try again.');
                window.location='memo.php';</script>";
            } 
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.');
            window.location='memo.php';</script>";
        }
    } else {
        echo "<script>alert('Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.');
        window.location='memo.php';</script>";
    }
} else {
    echo "<script>alert('Please select a file to upload.');
    window.location='memo.php';</script>";
}

// Display status message
echo $statusMsg;
?>