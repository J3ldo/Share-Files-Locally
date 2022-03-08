<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileDestination = 'files/'.$fileName;
    move_uploaded_file($fileTmpName, $fileDestination);
    header("Location: upload.php?uploadsuccess");
};