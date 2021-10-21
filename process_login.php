<?php
        session_start(); 

        if(isset($_POST['sbmGuiDi'])){
            $username = $_POST['txtUsername'];
            $password = $_POST['txtPass'];

            $conn = mysqli_connect('localhost','root','','hopistal');
            if(!$conn){
                die("Không thể kết nối");
            }

            $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND userpass ='$password'";
            $result = mysqli_query($conn,$sql);


            if(mysqli_num_rows($result) > 0){
                $_SESSION['loginOK'] = $username;
                header("Location: admin/index.php");
            }else{
                header("Location: index.php");
            }
        }
    ?>