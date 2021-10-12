

<h2>Thông tin cá nhân</h2>
<table class="table table-bordered">
    <tr>
      
        <th>Username</th>
        <th>First_name</th>
        <th>Last_name</th>
        <th>Phone_number</th>
        <th>Address</th>
        <th>Email</th>
        <th>Avatar</th>
        <th>jobs</th>
        <th>created_at</th>
       
    </tr>
    <?php if (!empty($users)): ?>
            <?php foreach ($users as $user): ?>
                <tr>
                  
                    <td><?php echo $user['username'] ?></td>
                    <td><?php echo $user['first_name'] ?></td>
                    <td><?php echo $user['last_name'] ?></td>
                    <td><?php echo $user['phone'] ?></td>
                    <td><?php echo $user['address'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td>
                        <?php if (!empty($user['avatar'])): ?>
                            <img height="80" src="assets/uploads/<?php echo $user['avatar'] ?>"/>
                        <?php endif; ?>
                    </td>
                    <td><?php echo $user['jobs'] ?></td>
                    <td><?php echo date('d-m-Y H:i:s', strtotime($user['created_at'])) ?></td>
                    
                </tr>
                <tr>
                    <td style="text-align: center;" colspan="10">
                        <?php
                        $url_detail = "index.php?controller=user&action=detail&id=" . $user['id'];
                        $url_update = "index.php?controller=user&action=update&id=" . $user['id'];
                        $url_delete = "index.php?controller=user&action=delete&id=" . $user['id'];
                        ?>
                        <a title="Chi tiết" href="<?php echo $url_detail ?>">Xem chi tiết <i class="fa fa-eye"></i></a> &nbsp;&nbsp;
                        <a title="Update" href="<?php echo $url_update ?>">Chỉnh sửa thông tin <i class="fa fa-pencil-alt"></i></a> &nbsp;&nbsp;
                        <!-- <a title="Xóa" href="<?php echo $url_delete ?>"  onclick="return confirm('Are you sure delete?')">Xóa tài khoản <i
                                    class="fa fa-trash"></i></a> -->
                    </td>
                </tr>
        <?php endforeach; ?>
    <?php else: ?>
    <?php endif; ?>
</table>
<?php echo $pages; ?>