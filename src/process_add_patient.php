<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];


    include '../config/config.php';
    //Bước 2:
    $sql = "INSERT INTO patient (firstname, lastname, mobile, email)
    values ('$firstname', '$lastname', '$mobile', '$email')";

    echo $sql;
    $result = mysqli_query($conn, $sql);
    //Bước 3:
    if($result > 0){
        echo "Bản ghi đã được lưu";
    } else{
        echo"Lỗi";
    }

    //Bước 4:
    mysqli_close($conn);
?>