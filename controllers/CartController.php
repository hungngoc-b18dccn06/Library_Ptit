<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';

class CartController extends Controller
{
        public function add(){
           $product_id = $_POST['product_id'];
        //    var_dump($product_id);
           $product_model = new Product();
           $product  =  $product_model-> getById($product_id);
        //    echo "<pre>";
        //         print_r($product);
        //    echo "</pre>";
        // Tạo mảng lưu thông tin cần thiết
        $cart = [
            'name' => $product['title'],
            'price' => $product['price'],
            'avatar' => $product['avatar'],
            'quantity' => 1,
        ];
        // xử lí thêm vào giỏ hàng(session)
        // Nếu giỏ hàng chưa từng tồn tại
        if(!isset($_SESSION['cart'])){
            //Tạo mới giỏ hàng thêm phần tử đầu tiên cho giỏ
            $_SESSION['cart'][$product_id] = $cart;

        }
        //Ngược lại giỏ hàng đã tồn tại 
        else{
            //Nếu sản phẩm thêm dã tồn tại -> chỉ cập nhật  quantity tăng 1 mà k thêm phần tử ms
            // Kiểm tra product_id xem có tồn tại trong cái key của giỏ hàng hay ko
            if(array_key_exists($product_id, $_SESSION['cart'])){
                    $_SESSION['cart'][$product_id['quantity']]++;
            }else {
                $_SESSION['cart'][$product_id] = $cart;
            }
        }
      //  echo "<pre>";
           // print_r($_SESSION);
        //echo "</pre>";

        }

        public function index(){
            // Xử lí update giỏ hàng:
            // echo "<pre>";
            // print_r($_SESSION);
            // echo "</pre>";
            if(isset($_POST['submit'])){
                foreach ($_POST AS $product_id => $quantity){
                    if(is_numeric(($quantity) && $quantity < 0)){
                        $_SESSION['error'] = 'số lượng phải >0';
                        header("Location:Gio-hang-cua-ban.html");
                    }
                }
                //cập nhật giỏ hàng bằng cách lặp session
                //Giỏ hàng , gắn số lượng mới từ form
                //Cho từng phần tử trong giỏ hàng
                foreach ($_SESSION['cart'] AS $product_id => $cart){
                    $_SESSION['cart'][$product_id]['quantity'] = $_POST[$product_id];
                }
                $_SESSION['success'] = 'cập nhật giỏ hàng thành công';
            }

            // LẤy nội dung view
                $this->content =
                    $this->render('views/carts/index.php');

            //Gọi layout
            require_once  'views/layouts/main.php';
        }
}