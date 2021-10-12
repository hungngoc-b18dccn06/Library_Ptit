<?php
require_once 'helpers/Helper.php';
?>
<!--    PRODUCT-->
<div class="product-wrap">
    <div class="product container">
      <?php if (!empty($categories)): ?>
          <h1 class="post-list-title">
              <a href="#" class="link-category-item">Ngân hàng đề thi</a>
          </h1>
          <div class="link-secondary-wrap row">
            <?php foreach ($categories as $category):
              $slug = Helper::getSlug($category['name']);
              $category_link = "index.php?controller=category&action=detail&id=" . $category['id'];
              //$category_link = "#";
              //$product_cart_add = "them-vao-gio-hang/" . $category['id'] . ".html";
              ?>
                <div class="service-link col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $category_link; ?>">
                        <img class="secondary-img img-responsive" title="<?php echo $category['name'] ?>"
                             src="../backend/assets/uploads/<?php echo $category['avatar'] ?>"
                             alt="<?php echo $category['name'] ?>"/>
                        <span class="shop-title">
                        <?php echo $category['name'] ?>
                    </span>
                    </a>
                    <span class="shop-price"> 
                          Giá bán:  <?php  echo number_format($category['price']) ?> vnđ
                </span>

                    <span class="add-to-cart" data-id="<?php echo $category['id']?>">
                        <a href="#" style="color: inherit">Thêm vào giỏ</a>
                    </span>
                </div>
            <?php endforeach; ?>
             
          </div>
          <center>
          <tr>
          <td colspan="7"><?php echo $pages; ?></td>
      </tr></center>
      <?php endif; ?>
    </div>
</div>
