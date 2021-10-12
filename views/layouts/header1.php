<header class="c-header">
<!-- <div id="site">
<a href="#content" class="c-skip-link">Skip to main content</a>
<div class="c-cookie-notice is-visible" id="cookie-notice">
<div class="c-cookie-notice__inner">
<p class="c-cookie-notice__message">We use tracking cookies to analyse and track website traffic so we can improve your experience and tailor your content.</p>
<div class="c-cookie-notice__controls">
<a class="c-button c-button--text js-cookie-consent" href="cookie-policy.html">More information</a>
<button class="c-button c-button--white js-cookie-consent">Accept</button>
</div>
</div>
</div>
</div> -->
<?php
$year = '';
$username = '';
$jobs = '';
$avatar = '';
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']['username'];
    $jobs = $_SESSION['user']['jobs'];
    $avatar = $_SESSION['user']['avatar'];
    $year = date('Y', strtotime($_SESSION['user']['created_at']));
}

?>
<style>
ul.header-navigation {
    margin-left: 300px;
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
                        <a href="info.html" class="material-button submenu-toggle">Giới thiệu
                    </li>
                    <li>
                        <a href="contact.html" class="material-button submenu-toggle">Liên hệ</a>
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
            <ul class="header-navigation" style="text-align: center;"> 
                <li>
                    <a href="home.php" class="home-link material-button submenu-toggle">Trang Chủ</a>
                </li>
                <li>
                    <a href="library.php" class="material-button submenu-toggle">Thư viện</a>
                </li>

                <li>
                    <a href="index.php?controller=login&action=login" class="material-button submenu-toggle"> Shop Online </a>
                   
                </li>
              
                <li>
                    <a href="http://thi.ptishop.vn/" class="material-button submenu-toggle">Thi thử</a>
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