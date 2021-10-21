<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hello, world!</title>
</head>

<body>
    <?php
    include '../header.php';
    ?>

    <a href="addPatient.php" class="btn btn-secondary">Thêm bệnh nhân</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã bệnh nhân</th>
                <th scope="col">Tên</th>
                <th scope="col">Họ đệm</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Email</th>
                <th scope="col">Chiều cao</th>
                <th scope="col">Cân nặng</th>
                <th scope="col">Nhóm máu</th>
                <th scope="col">Ngày lập sổ</th>
                <th scope="col">Ngày cập nhật</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../config/config.php';

            $sql = "SELECT * from patient ";
            $result = mysqli_query($conn, $sql);


            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<th scope="row">' . $row['patientid'] . '</th>';
                    echo '<td>' . $row['firstname'] . '</td>';
                    echo '<td>' . $row['lastname'] . '</td>';
                    echo '<td>' . $row['dateofbirth'] . '</td>';
                    echo '<td>' . $row['gender'] . '</td>';
                    echo '<td>' . $row['mobile'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<td>' . $row['height'] . '</td>';
                    echo '<td>' . $row['weight'] . '</td>';
                    echo '<td>' . $row['blood_type'] . '</td>';
                    echo '<td>' . $row['created_on'] . '</td>';
                    echo '<td>' . $row['modified_on'] . '</td>';
                    echo '<td><a href="editPatient.php?id='.$row['patientid'].'"><i class="fas fa-user-edit"></i></a></td>';
                    echo '<td><a href="deletePatient.php?id='.$row['patientid'].'"><i class="fas fa-user-times"></i></a></td>';
                    echo '</tr>';
                }
            }


            mysqli_close($conn);

            ?>

        </tbody>
    </table>



</body>

</html>