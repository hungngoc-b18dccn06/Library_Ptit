<!-- 
    - Chức năng giỏ hàng
    + Mục đích giống như đi siêu thị
    + Lưu giỏ hàng theo cơ chế nào ??
        - lưu database
        - session - dùng session là đơn giản nhất
        - cookie



    + Dung thêm sp vò dỏ hàng ajax     -> code nhiều hơn để đánh đổi trải nghiệm người dùng
    + quan trọng nhất ở cấu trúc giỏ hàng
 -->

<?php
 $_SESSION['cart'] = [
    5 =>[
        'name' =>'sp1',
        'price' =>2222,
        'avatar' => 'sq1.jpg',
        'quantity' => 4 

    ],
    2 =>[
        'name' =>'sp2',
        'price' =>30000,
        'avatar' => 'sq2.jpg',
        'quantity' => 1

    ],
 
 
 ];