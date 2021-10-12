<?php
require_once 'helpers/Helper.php';
?>
<!--    PRODUCT-->
<div class="product-wrap">
    <div class="product container">
      <?php if (!empty($products)): ?>
          <h1 class="post-list-title">
              <a href="#" class="link-category-item">Ngân hàng đề thi</a>
          </h1>
          <div class="link-secondary-wrap row">
            <?php foreach ($products AS $product):
              $slug = Helper::getSlug($product['title']);
             
               $product_link = "index.php?controller=product&action=detail&id=" . $product['id'];
              $product_cart_add = "them-vao-gio-hang/" . $product['id'] . ".html";
              ?>
                <div class="service-link col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $product_link; ?>">
                        <img class="secondary-img img-responsive" title="<?php echo $product['title'] ?>"
                             src="../backend/assets/uploads/<?php echo $product['avatar'] ?>"
                             alt="<?php echo $product['title'] ?>"/>
                        <span class="shop-title">
                        <?php echo $product['title'] ?>
                    </span>
                    </a>
                    <span class="shop-price"> 
                          Giá bán:  <?php  echo number_format($product['price']) ?> vnđ
                </span>

                    <span class="add-to-cart" data-id="<?php echo $product['id']?>">
                        <a href="#" style="color: inherit">Thêm vào giỏ</a>
                    </span>
                </div>
            <?php endforeach; ?>
          </div>
      <?php endif; ?>
    </div>
</div>
