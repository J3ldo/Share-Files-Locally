<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];

    $fileDestination = 'files/'.$fileName;
    move_uploaded_file($fileTmpName, $fileDestination);
    header("Location: upload.php?uploadsuccess");
};
