<?php
require_once 'controllers/Controller.php';
require_once 'models/Order.php';
require_once 'models/OrderDetail.php';
require_once 'libraries/PHPMailer/src/PHPMailer.php';
require_once 'libraries/PHPMailer/src/SMTP.php';
require_once 'libraries/PHPMailer/src/Exception.php';

class PaymentController extends Controller
{
    public function index(){
        // Xử lí update giỏ hàng:
       // echo "<pre>";
       // print_r($_SESSION);
       // echo "</pre>";
        if(isset($_POST['submit'])){
            foreach ($_POST AS $product_id => $quantity){
                if(is_numeric(($quantity) && $quantity < 0)){
                    $_SESSION['error'] = 'số lượng phải > 0';
                    header("Location:index.php?controller=cart&action=index");
                }
            }
            //cập nhật giỏ hàng bằng cách lặp session
            //Giỏ hàng , gắn số lượng mới từ form
            //Cho từng phần tử trong giỏ hàng
            foreach ($_SESSION['cart'] AS $product_id => $cart){
                $_SESSION['cart'][$product_id]['quantity'] = $_POST[$product_id];
            }
            $_SESSION['success'] = 'Thông tin thanh toán đã được gửi đi';
        }

        // LẤy nội dung view
            $this->content =
                $this->render('views/payments/index.php');

        //Gọi layout
        require_once  'views/layouts/main.php';
    }
}