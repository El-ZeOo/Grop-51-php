<?php
echo '<pre>';
print_r($_FILES);
echo '</pre>';
if (isset($_FILES['img']) && !empty($_FILES['img']['name'])) {
    if ($_FILES['img']['size'] <= 2097152) {
        $extentions = ['jpg', 'png', 'jpeg'];
        $explode = explode('.', $_FILES['img']['name']);
        $endOfExploded = end($explode);
        if (in_array($endOfExploded, $extentions)) {
            $imageName = $_FILES['img']['name'];
            $tmpName = $_FILES['img']['tmp_name'];
            $imageSize = $_FILES['img']['size'];
            $imageError = $_FILES['img']['error'];
            $imageName = uniqid() . $imageName;
            move_uploaded_file($tmpName, "img/$imageName");
        } else {
            echo 'this extention is not found in my array';
        }
    } else {
        $errorMsg = 'sorry this file is more than 2 MB';
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
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="img" id="">
        <input type="submit" value="Upload">
    </form>
</body>

</html>