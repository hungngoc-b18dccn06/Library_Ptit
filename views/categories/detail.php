<?php
$product = $category;
?>
<div class="container">
    <div class="row">
        <div class="detail-content-wrap con-md-8 col-sm-8 col-xs-12">
            <div class="product-info-wrap">
                
                <div class="product-info">
                    <h3 class="product-title">
                      <?php echo $product['name']; ?>
                    </h3>
                    
                    
                </div>
            </div>

<div class="c-product-gallery__primary js-pg-primary">
<div class="c-product-gallery__image">
<img src="../backend/assets/uploads/<?php echo $product['avatar'] ?> ">
</div>
</div>

            <!--Timeline items end -->
          
            <div class="detail-comment">
                <h2 class="link-category-item">Bình luận</h2>
                <div class="fb-comments" data-href="http://thamngan.com/index.php?controller=category&action=detail&id=<?php echo $product['id'] ?>" data-width="100%"
                     data-numposts="5"></div>
            </div>
        </div>
        <div class="news-relative-wrap col-md-4 col-sm-4 col-xs-12">
            <h4 class="link-category-item">Đề thi khác</h4>
            <!-- <ul class="news-relative">
                <li>
                    <a href='product_detail.html' class="news-relative-link">
                                <span class="news-relative-img">
                                <img src="assets/images/samsung-galaxy-note-10-plus-silver-400x460.png"
                                     alt="no-image" title="SamSung Note 10"
                                     class="detail-relative-img"/>
                                </span>
                        <span class="detail-relative-content">
                                    SamSung Note 10
                                </span>
                    </a>
                </li>
                <li>
                    <a href='product_detail.html' class="news-relative-link">
                                <span class="news-relative-img">
                                <img src="assets/images/samsung-galaxy-note-10-plus-silver-400x460.png"
                                     alt="no-image" title="SamSung Note 10"
                                     class="detail-relative-img"/>
                                </span>
                        <span class="detail-relative-content">
                                    SamSung Note 10
                            </span>
                    </a>
                </li>
                <li>
                    <a href='product_detail.html' class="news-relative-link">
                                <span class="news-relative-img">
                                <img src="assets/images/samsung-galaxy-note-10-plus-silver-400x460.png"
                                     alt="no-image" title="SamSung Note 10"
                                     class="detail-relative-img"/>
                                </span>
                        <span class="detail-relative-content">
                                    SamSung Note 10
                            </span>
                    </a>
                </li>
                <li>
                    <a href='product_detail.html' class="news-relative-link">
                                <span class="news-relative-img">
                                <img src="assets/images/samsung-galaxy-note-10-plus-silver-400x460.png"
                                     alt="no-image" title="SamSung Note 10"
                                     class="detail-relative-img"/>
                                </span>
                        <span class="detail-relative-content">
                                    SamSung Note 10
                            </span>
                    </a>
                </li>
                <li>
                    <a href='product_detail.html' class="news-relative-link">
                                <span class="news-relative-img">
                                <img src="assets/images/samsung-galaxy-note-10-plus-silver-400x460.png"
                                     alt="no-image" title="SamSung Note 10"
                                     class="detail-relative-img"/>
                                </span>
                        <span class="detail-relative-content">
                                    SamSung Note 10
                            </span>
                    </a>
                </li>
            </ul> -->
        </div>
    </div>
</div>