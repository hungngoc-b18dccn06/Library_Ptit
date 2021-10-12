
<?php require_once 'views/layouts/header1.php' ?>
<style>
body {
    margin-top: 150px;
}
</style>
<div class="container" style="max-width: 500px">
    <form method="post" action="">
        <h2>Quên mật khẩu</h2>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" value="" id="username" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="password">Email</label>
            <input type="email" name="email" value="" id="email" class="form-control"/>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Xác nhận" class="btn btn-primary"/>
            <p>
                Quay về trang, <a href="index.php?controller=login&action=login">Đăng nhập</a> 
            </p>
        </div>
    </form>
</div>