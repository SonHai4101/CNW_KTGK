<?php 

    include('../config/config.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM patient WHERE patientid=$id";

    $res = mysqli_query($conn, $sql);

    if($res==true)
    {
        $_SESSION['delete'] = "<div class='success'>Xóa thành công</div>";
        header('Location:index.php');    }
    else
    {

        $_SESSION['delete'] = "<div class='error'>Xóa thất bại</div>";
        header("Location:index.php");    }

