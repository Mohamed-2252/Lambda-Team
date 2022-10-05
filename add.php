<?php
    include('connect.php');
    $code = $_POST['code'];
    $name = $_POST['name'];
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $temp = explode(".", $file_name);
    $newfilename = $code . '.' . end($temp);
    move_uploaded_file($file_tmp, "images/certificates/" . $newfilename);
    $insertCertificate = $conn->prepare('INSERT INTO certifecates(l_name, l_code, l_image) VALUES(?, ?, ?)');
    $insertCertificate->execute([$name, $code, $newfilename]);
    if ($insertCertificate->rowCount() == 1) {
        echo 'added successfuly';
    } else {
        echo 'please try again';
    }