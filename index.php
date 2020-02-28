<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

    if(isset($_POST['submit'])){
        $tmp = $_FILES['image']['tmp_name'];
        
        $img_name= uniqid().".jpg";
        move_uploaded_file($tmp,"photos/".$img_name);
    }
?>
    <form action="" method="POST" enctype="multipart/form-data">
    
        
        <input type="file" name="image">
        <input type="submit" name="submit" value="Upload">

    
    </form>
</body>
</html>