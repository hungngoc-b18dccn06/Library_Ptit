<?php
if (isset($_SESSION['user'])) {
    $id = $_SESSION['user']['id'];
    $username = $_SESSION['user']['username'];
    $jobs = $_SESSION['user']['jobs'];
    $avatar = $_SESSION['user']['avatar'];
    $year = date('Y', strtotime($_SESSION['user']['created_at']));
}

?>
<?php
require_once 'helpers/Helper.php';
?>

<h2>Thông tin người dùng</h2>
<table style="width: 1002; margin-left: 220px;" class="table table-bordered">
    <tr>
        <th>username</th>
        <td><?php echo $user['username'] ?></td>
    </tr>
    <tr>
        <th>First_name</th>
        <td><?php echo $user['first_name'] ?></td>
    </tr>
    <tr>
        <th>Last_name</th>
        <td><?php echo $user['last_name'] ?></td>
    </tr>
    <tr>
        <th>Phone_Number</th>
        <td><?php echo $user['phone'] ?></td>
    </tr>
    <tr>
        <th>Address</th>
        <td><?php echo $user['address'] ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?php echo $user['email'] ?></td>
    </tr>
    <tr>
        <th>Avatar</th>
        <td>
            <?php if (!empty($user['avatar'])): ?>
                <img height="80" src="assets/uploads/<?php echo $user['avatar'] ?>"/>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <th>Jobs</th>
        <td><?php echo $user['jobs'] ?></td>
    </tr>
    <tr>
        <th>Điểm thi</th>
      <td>10</td>
    </tr>
   
    <tr>
        <th>Lần đăng nhập gần nhất</th>
        <td><?php echo date('d-m-Y H:i:s', strtotime($user['created_at'])) ?></td>
    </tr>
    <tr>
        <th>Ngày tạo tài khoản</th>
        <td><?php echo date('d-m-Y H:i:s', strtotime($user['updated_at'])) ?></td>
    </tr>
</table>
<a  style=" margin-left: 1200px;
    background: red;" href="index.php?controller=home&action=index" class="btn btn-default">Back
</a>
<?php
 $url_update = "index.php?controller=user&action=update&id=" . $id;
?>
<a  style="
    background: #1CA0F1;"href="<?php echo $url_update ?>" class="btn btn-default btn-flat">Chỉnh sửa thông tin
</a>