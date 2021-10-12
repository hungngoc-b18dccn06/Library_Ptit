
application/x-httpd-php header.php ( PHP script, UTF-8 Unicode text, with CRLF line terminators )
<?php
$year = '';
$username = '';
$jobs = '';
$avatar = '';
$id= '';
if (isset($_SESSION['user'])) {
    $id = $_SESSION['user']['id'];
    $username = $_SESSION['user']['username'];
    $jobs = $_SESSION['user']['jobs'];
    $avatar = $_SESSION['user']['avatar'];
    $year = date('Y', strtotime($_SESSION['user']['created_at']));
}

?>
<style>
ul.header-navigation {
    height: 30px;
}
img.user-image {
    width: 31%;
    border-radius: 100px;
}
.header-top .header-navigation > li > a {
    width: 100px;
    color: #fff;
    font-size: 14px;
    display: inline-block;
    height: auto;
    font-weight: normal;
}
p.mess {
    width: 210px;
}
</style>
<a href="#" class="scrollup"></a>
<div class="header-top nopc">
    <div class="container">
        <div class="row">
            <div class=" col-md-4 col-sm-4 col-xs-12">
                <a class="info-contact" href="tel:0983755697">
                    <i class="fas fa-phone-alt"></i> 0983755697
                </a>
                <a class="info-contact" href="mailto:abc@gmail.com">
                    <i class="far fa-envelope"></i> hocvien@gmail.com
                </a>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12">

                <ul class="header-navigation" data-show-menu-on-mobile="">
                    <li>
                    <li class="dropdown user user-menu">
                        <?php if(!isset($_SESSION['user'])) {
                        echo 
                        '<li>
                        <a href="index.php?controller=login&action=login" class="material-button submenu-toggle">Đăng nhập</a>
                        </li>';
                        } 
                        ?>
                        
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    
                    <?php
                    if(isset($avatar) && !empty($avatar)){
                        echo '<img src="assets/uploads/' .$avatar.' " class="user-image" alt="User Image">';
                    }
                    ?>
                     <span class="hidden-xs"><?php echo $username; ?></span>
                     </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                       
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                            <?php
                                 $url_detail = "index.php?controller=user&action=detail&id=".$id;
                
                             ?>
                                <a href="<?php echo $url_detail ?>" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="index.php?controller=user&action=logout" class="btn btn-default btn-flat">Sign
                                    out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                    </li>
                    <li>
                        <a href="gio-hang-cua-ban.html" class="cart-link">
                            <i class="fa fa-cart-plus"></i>
                          <?php
                          $cart_total = 0;
                          if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] AS $cart) {
                              $cart_total += $cart['quantity'];
                            }
                          }
                          ?>
                            <span class="cart-amount">
                                <?php echo $cart_total; ?>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<span class="ajax-message"></span>
<!-- header start -->
<header class="header">

    <div class="header-wrapper container">
        <!--sidebar menu toggler start -->
        <div class="toggle-sidebar material-button">
            <i class="material-icons">&#xE5D2;</i>
        </div>
        <!--sidebar menu toggler end -->

        <!--logo start -->
        <div class="logo-box">
            <h1>
                <a href="/" class="logo"></a>
            </h1>
        </div>
        <!--logo end -->

        <div class="header-menu">

            <!-- header left menu start -->
            <ul style="margin-left: 300px;" class="header-navigation" data-show-menu-on-mobile> 
                <li>
                    <a href="home.php" class="home-link material-button submenu-toggle">Trang Chủ</a>
                </li>
                <li>
                    <a href="index.php?controller=category&action=showall" class="material-button submenu-toggle">Thư viện</a>
                </li>

                <li>
                    <a href="index.php?controller=login&action=login" class="material-button submenu-toggle"> Shop Online </a>
                   
                </li>
                <li>
                    <a href="http://thi.ptishop.vn" class="material-button submenu-toggle">Thi thử</a>
                </li>
            </ul>
            <!-- header left menu end -->
        </div>
        <div class="header-right with-seperator">
            <!-- header right menu start -->
            <ul class="header-navigation">
                <li>
                    <a href="/gio-hang-cua-ban.html" class="">
                        <i class="fa fa-cart-plus"></i>
                        <span class="cart-amount-mobile">
                                <?php echo $cart_total; ?>
                        </span>
                    </a>
                </li>
            </ul>
            <!-- header right menu end -->

        </div>
    </div>
</header>
<!-- header end -->

<!-- Left sidebar menu start -->
<div class="sidebar">
    <div class="sidebar-wrapper">

        <!-- side menu logo start -->
        <div class="sidebar-logo">
            <a href="#"></a>
            <div class="sidebar-toggle-button">
                <i class="material-icons">&#xE317;</i>
            </div>
        </div>
        <!-- side menu logo end -->
        <!-- mobile menu start -->
        <div id="mobileMenu">
            <div class="sidebar-seperate"></div>
        </div>
        <!-- mobile menu end -->

        <!-- sidebar menu start -->
        <ul class="sidebar-menu">
            <li>
                <a href="index.php" class="material-button submenu-toggle">Trang chủ</a>
            </li>
            <li>
                <a href="library.php" class="material-button submenu-toggle">Thư Viện</a>
            </li>
            <li>
                <a href="index.php?controller=login&action=login" class="material-button submenu-toggle">Shop online</a>
            </li>
            <? if (!isset($_SESSION['user'])) {
                        echo '<li><a href="index.php?controller=login&action=login" class="material-button submenu-toggle">Đăng nhập</a></li>';
                        } else echo '<li><a href="index.php?controller=user&action=logout" class="material-button submenu-toggle">Đăng xuất</a></li>'; ?>
            
        </ul>
        <!-- sidebar menu end -->
        <div class="sidebar-seperate"></div>
        <!-- sidebar menu end -->
    </div>
</div>