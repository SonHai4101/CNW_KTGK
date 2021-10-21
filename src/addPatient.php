<?php
include '../header.php';
include '../config/config.php'
?>


<main class="container">
    <h2>Thêm thông tin bệnh nhân</h2>
    <form action="process_add_patient.php" method="post">
        <div class="form-group row">
            <label for="firstname" class="col-sm-2 col-form-label">Tên </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
        </div>
        <div class="form-group row">
            <label for="lastname" class="col-sm-2 col-form-label">Họ đệm</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
        </div>
        <div class="form-group row">
            <label for="mobile" class="col-sm-2 col-form-label">Số điện thoại</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" id="mobile" name="mobile">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
               <button type="submit" class="btn btn-info">Thêm</button>
            </div>
        </div>
    </form>
</main>