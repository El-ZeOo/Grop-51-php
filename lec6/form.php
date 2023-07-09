<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';

    $fileName = $_FILES['img']['name'];
    $fileType = $_FILES['img']['type'];
    $fileTmpName = $_FILES['img']['tmp_name'];
    $fileSize = $_FILES['img']['size'];
    $fileCount = count($fileName);

    $errorMsg = [];
    // we get file count of any before varaible to for loop because the foreach can not do this process
    for ($i = 0; $i < $fileCount; $i++) {
        if (!empty($fileName[$i])) {
            // filter the before varaible
            // in the first checked is the size
            if ($fileSize[$i] < 5242880) {

                // check the extention of file
                $extentions = ['jpg', 'jpeg', 'png'];
                $explodeFile = explode('.', $fileName[$i]);
                $endFile = strtolower(end($explodeFile));
                if (in_array($endFile, $extentions)) {
                    move_uploaded_file($fileTmpName[$i], 'upload/' . uniqid() . $fileName[$i]);
                } else {
                    $errorMsg[] = 'this file can not be uploaded because the type is your file is ' . $endFile;
                }
            } else {
                $errorMsg[] = 'the size more than 1 MB';
            }
        } else {
            $errorMsg[] = 'You are Not Sent the file';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="img[]" id="" multiple>
        <input type="submit" value="Send">
    </form>
    <?php
    if (!empty($errorMsg)) {
        foreach ($errorMsg as $value) {
            echo $value . '<br>';
        }
    }
    ?>
</body>

</html>