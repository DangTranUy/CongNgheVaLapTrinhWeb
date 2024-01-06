<?php
include('../model/db_product_details.php');
$product_show_new_arival = product_details_show(5);
$product_show_special_offer = product_details_show(6);

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<!-- Home page content -->
<main class="main">
    <title>Sneaker Store</title>
    <div class="content">
        <!-- Section 1 : Banner website-->
        <section class="section1">
            <!-- Swiper -->
            <div class="swiper mySwiper2 slides-banner">
                <div class="swiper-wrapper" id="swiper-wrapper">
                    <div class="swiper-slide img-banner"><img src="../view/images/banner/banner_1.jpg" alt=""></div>
                    <div class="swiper-slide img-banner"><img src="../view/images/banner/banner_2.jpg" alt=""></div>
                    <div class="swiper-slide img-banner"><img src="../view/images/banner/banner_3.jpg" alt=""></div>
                </div>
            </div>
            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
            <!-- Initialize Swiper with Autoplay -->
            <script>
                var swiper = new Swiper(".mySwiper2", {
                    slidesPerView: 1,
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    autoplay: {
                        delay: 3000, // Thời gian chuyển đổi giữa các slide (đơn vị: mili giây)
                        disableOnInteraction: false, // Tắt autoplay khi người dùng tương tác với Swiper
                    },
                    breakpoints: {
                        "@1.50": {
                            slidesPerView: 1,
                        },
                    },
                });
            </script>
        </section>

        <!-- Section 2: Outstanding brand -->
        <section class="section2">
            <div class="title">
                <h2>OUTSTANDING BRAND</h2>
            </div>
            <!-- Slides logo brand -->
            <!-- Swiper -->
            <div class="swiper mySwiper slides-logo-brand">
                <div class="swiper-wrapper" id="swiper-wrapper">
                    <div class="swiper-slide img-logo-brand"><img src="../view/images/logo_banner_brand/index_feature_collections___1_image.webp" alt=""></div>
                    <div class="swiper-slide img-logo-brand"><img src="../view/images/logo_banner_brand/index_feature_collections___2_image.webp" alt=""></div>
                    <div class="swiper-slide img-logo-brand"><img src="../view/images/logo_banner_brand/index_feature_collections___3_image.webp" alt=""></div>
                    <div class="swiper-slide img-logo-brand"><img src="../view/images/logo_banner_brand/index_feature_collections___4_image.webp" alt=""></div>
                    <div class="swiper-slide img-logo-brand"><img src="../view/images/logo_banner_brand/index_feature_collections___5_image.webp" alt=""></div>
                    <div class="swiper-slide img-logo-brand"><img src="../view/images/logo_banner_brand/index_feature_collections___6_image.webp" alt=""></div>
                    <div class="swiper-slide img-logo-brand"><img src="../view/images/logo_banner_brand/index_feature_collections___7_image.webp" alt=""></div>
                </div>
            </div>
            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
            <!-- Initialize Swiper with Autoplay -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    autoplay: {
                        delay: 1700, // Thời gian chuyển đổi giữa các slide (đơn vị: mili giây)
                        disableOnInteraction: false, // Tắt autoplay khi người dùng tương tác với Swiper
                    },
                    breakpoints: {
                        "@0.00": {
                            slidesPerView: 3,
                            spaceBetween: 0,
                        },
                        "@0.75": {
                            slidesPerView: 3,
                            spaceBetween: 0,
                        },
                        "@1.10": {
                            slidesPerView: 4,
                            spaceBetween: 30,
                        },
                        "@1.50": {
                            slidesPerView: 5,
                            spaceBetween: 50,
                        },
                    },
                });
            </script>

            <!-- Category brand -->
            <div class="banner-brand">
                <div class="wrap-banner-brand-1">
                    <div class="banner-brand">
                        <div class="wrap-banner-brand">
                            <picture>
                                <a href="../controller/index.php?act=Converse&category_id=2"><img src="../view/images/logo_banner_brand/banner_project_1.webp" alt="" class="img-banner-brand-1"></a>
                                <a href="../controller/index.php?act=Converse&category_id=2"><img src="../view/images/logo_banner_brand/banner_project_1_mobile.webp" alt="" class="img-banner-brand-mb"></a>
                            </picture>
                            <div class="wr-title-banner-brand">
                                <h2>CONVERSE</h2>
                                <!-- <p>181&nbsp;sản phẩm</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="banner-brand">
                        <div class="wrap-banner-brand">
                            <picture>
                                <a href="../controller/index.php?act=Vans&category_id=11"><img src="../view/images/logo_banner_brand/banner_project_2.webp" alt="" class="img-banner-brand-1"></a>
                                <a href="../controller/index.php?act=Vans&category_id=11"><img src="../view/images/logo_banner_brand/banner_project_2_mobile.webp" alt="" class="img-banner-brand-mb"></a>
                            </picture>
                            <div class="wr-title-banner-brand">
                                <h2>VANS</h2>
                                <!-- <p>538&nbsp;sản phẩm</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-banner-brand-2">
                    <div class="banner-brand">
                        <div class="wrap-banner-brand">
                            <picture>
                                <img src="../view/images/logo_banner_brand/banner_project_3.jpg" alt="">
                            </picture>
                            <div class="wr-title-banner-brand">
                                <h2>PALLADIUM</h2>
                                <!-- <p>135&nbsp;sản phẩm</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="banner-brand">
                        <div class="wrap-banner-brand">
                            <picture>
                                <a href="../controller/index.php?act=Nike&category_id=7"><img src="../view/images/logo_banner_brand/banner_project_4.jpg" alt=""></a>
                            </picture>
                            <div class="wr-title-banner-brand">
                                <h2>NIKE</h2>
                                <!-- <p>178&nbsp;sản phẩm</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="banner-brand">
                        <div class="wrap-banner-brand">
                            <picture>
                                <a href="../controller/index.php?act=accessories&menumain_id=4"> <img src="../view/images/logo_banner_brand/banner_project_5.jpg" alt=""></a>
                            </picture>
                            <div class="wr-title-banner-brand">
                                <h2>ACCESSORIES</h2>
                                <!-- <p>438&nbsp;sản phẩm</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: New products -->
        <section class="section3">
            <div class="title">
                <h2><a href="../controller/index.php?act=new-arrival&menumain_id=5" style="color: black;">NEW ARRIVAL</a></h2>
            </div>
            <div class="new-product-content">
                <img src="../view/images/logo_banner_brand/back.png" alt="" id="backBtn">
                <div class="slides-new-product">




                    <?php foreach ($product_show_new_arival as $product_show_new_arivals) : ?>
                        <?php
                        $img =  $product_show_new_arivals['product_img'];
                        $img = explode(",", $img);
                        $img = array_map('trim', $img);
                        ?>

                        <div class="card-product">
                            <a href="./index.php?act=productDetails&product_id=<?php echo $product_show_new_arivals['product_id'] ?>">
                                <div class="info-cart-product">
                                    <div class="img-product">
                                        <picture>
                                            <img src="../view/images/imgProduct/<?php echo $img[0] ?>" alt="">
                                        </picture>
                                    </div>
                                    <div class="info-bottom-img">
                                        <div class="name-product">
                                            <h3><?php echo $product_show_new_arivals['product_name'] ?></h3>
                                        </div>
                                        <div class="sku-box">
                                            <span>SKU: <span class="sku"><?php echo $product_show_new_arivals['product_sku'] ?></span></span>
                                        </div>
                                        <span class="price-product">$<?php echo $product_show_new_arivals['product_price'] ?></span><del></del>
                                        <h3 class="discount discount-top"></h3>
                                        <i class="bi bi-cart-plus add-cart"></i>
                                        <span class="discount discount-member">
                                            <p></p>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>


                    <?php endforeach; ?>




                </div>
                <img src="../view/images/logo_banner_brand/next.png" alt="" id="nextBtn">
            </div>
        </section>
        <script>
            let scrollContainer = document.querySelector(".slides-new-product");
            let backBtn = document.getElementById("backBtn");
            let nextBtn = document.getElementById("nextBtn");

            const scrollDistance = window.innerWidth / 2;

            nextBtn.addEventListener("click", () => {
                scrollContainer.style.scrollBehavior = "smooth";
                scrollContainer.scrollLeft += scrollDistance;
            });

            backBtn.addEventListener("click", () => {
                scrollContainer.style.scrollBehavior = "smooth";
                scrollContainer.scrollLeft -= scrollDistance;
            });
        </script>

        <!-- Section 4: Products trending now-->
        <section class="section4">
            <div class="title title-section4">
                <h2><a href="../controller/index.php?act=special-offers&menumain_id=6" style="color: black;">SPECIAL OFFERS</a></h2>
            </div>
            <div class="trend-now-product-content">

                <?php
                $i = 0;
                foreach ($product_show_special_offer as $product_show_special_offers) :
                ?>
                    <?php
                    $img =  $product_show_special_offers['product_img'];
                    $img = explode(",", $img);
                    $img = array_map('trim', $img);
                    ?>

                    <?php if ($i >= 8) {
                        continue;
                    } ?>
                    <div class="card-product">
                        <a href="./index.php?act=productDetails&product_id= <?php echo $product_show_special_offers['product_id'] ?>">

                            <div class="info-cart-product">
                                <div class="img-product">
                                    <picture>
                                        <img src="../view/images/imgProduct/<?php echo $img[0] ?>" alt="">
                                    </picture>
                                </div>
                                <div class="info-bottom-img">
                                    <div class="name-product">
                                        <h3><?php echo $product_show_special_offers['product_name'] ?></h3>
                                    </div>

                                    <div class="sku-box">
                                        <span>SKU: <span class="sku"><?php echo $product_show_special_offers['product_sku'] ?></span></span>
                                    </div>
                                    <span class="price-product">$<?php echo $product_show_special_offers['product_price'] ?> </span><del>$<?php echo $product_show_special_offers['product_old_price'] ?></del>
                                    <?php $sale_off = round(100 - (((int)$product_show_special_offers['product_price'] / (int)$product_show_special_offers['product_old_price']) * 100)) ?>
                                    <h3 class="discount discount-top"><?php echo $sale_off ?>% off</h3>
                                    <i class="bi bi-cart-plus add-cart"></i>
                                    <span class="discount discount-member">
                                        <p></p>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>


                <?php
                    $i++;
                endforeach;
                ?>


            </div>
            <div class="view-more-trend-now-product">
                <h3><a href="../controller/index.php?act=special-offers&menumain_id=6">View more >></a></h3>
            </div>
        </section>

        <!-- Section 5 : Shop by sport -->
        <section class="section5">
            <div class="title">
                <h2><a href="../controller/index.php?act=sport&menumain_id=3" style="color: black;">SHOP BY SPORT</a></h2>
            </div>

            <div class="banner-sport">
                <div class="item-category-sport">
                    <div class="wrap-banner-sport">
                        <picture>
                            <a href="../controller/index.php?act=Running&category_id=13"><img src="../view/images/banner-sport-1.jpg" alt=""></a>
                        </picture>
                        <div class="wr-title-banner-sport">
                            <h2>RUNNING</h2>
                        </div>
                    </div>
                </div>
                <div class="item-category-sport">
                    <div class="wrap-banner-sport">
                        <picture>
                            <img src="../view/images/banner-sport-2.jpg" alt="">
                        </picture>
                        <div class="wr-title-banner-sport">
                            <h2>SOCCER</h2>
                        </div>
                    </div>
                </div>
                <div class="item-category-sport">
                    <div class="wrap-banner-sport">
                        <picture>
                            <a href="../controller/index.php?act=Basketball&category_id=12"> <img src="../view/images/banner-sport-3.jpg" alt=""></a>
                        </picture>
                        <div class="wr-title-banner-sport">
                            <h2>BASKETBALL</h2>
                        </div>
                    </div>
                </div>
                <div class="item-category-sport">
                    <div class="wrap-banner-sport">
                        <picture>
                            <a href="../controller/index.php?act=Training&category_id=14"><img src="../view/images/banner-sport-4.jpg" alt=""></a>
                        </picture>
                        <div class="wr-title-banner-sport">
                            <h2>TRAINING</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-separator">
        </div>
    </div>
</main>