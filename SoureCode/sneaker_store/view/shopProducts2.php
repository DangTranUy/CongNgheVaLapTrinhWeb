<!-- Shop products -->
<div class="shop-box">
    <div class="shop-product">
        <!-- <div class="breadcrumb-box">
            <nav class="breadcrumb">
                <a href="index.php">Home page</a> <i>/</i> Sneaker
            </nav>
        </div> -->
        <div class="title-shop">
            <?php
            $list_categories = categories();
            $id_category = $_REQUEST['category_id'];
            foreach ($list_categories as $list_categoriess) :
                if ($list_categoriess['category_id'] == $id_category) :
            ?>
                    <h1><?php echo $list_categoriess['name_category'] ?></h1>
            <?php
                endif;
            endforeach;
            ?>
        </div>


        <div class="products-box">
            <div class="box-feature-item">
                <nav class="feature-item">
                    <div class="form-group">

                        <select name="" id="a">
                            <option value="0"> --- Sort by --- </option>
                            <option value="?character=asc">From A - Z</option>
                            <option value="?character=desc">From Z -A</option>
                            <option value="?price=asc">Prices ascending</option>
                            <option value="?price=desc">Prices decrease</option>
                        </select>
                    </div>
                    <div class="form-group-2">
                        <!-- CSS -->
                        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

                        <p>
                            <label for="amount" style=" font-size: 16px; font-weight: 600;">Price range:</label>
                            <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range" style="background-color:antiquewhite; margin-top: 5px;"></div>
                        <!-- <input type="submit" value="Filter" style="background-color:#f6931f; margin-top: 15px; border: none; padding: 5px; border-radius: 5px;"> -->

                        <!-- JS -->
                        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
                        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
                        <script>
                            $(function() {
                                $("#slider-range").slider({
                                    range: true,
                                    min: 0,
                                    max: 500,
                                    values: [75, 300],
                                    slide: function(event, ui) {
                                        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                                    }
                                });
                                $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                                    " - $" + $("#slider-range").slider("values", 1));
                            });
                        </script>
                    </div>

                </nav>
            </div>





            <?php
            $per_page = 8;
            $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;

            $list_product = products();

            $id_menu = $_REQUEST['category_id'];
            $filtered_products = [];
            foreach ($list_product as $product) {
                if ($product['category_id'] == $id_menu) {
                    $filtered_products[] = $product;
                }
            }

            $paginated_products = array_slice($filtered_products, ($page - 1) * $per_page, $per_page);

            if (empty($paginated_products)) {
                echo '<p class="tb-none-sp">No products found on this page.</p>';
                exit;
            }

            $total_pages = ceil(count($filtered_products) / $per_page);

            echo '<div class="products section4">';
            echo '<div class="trend-now-product-content">';

            foreach ($paginated_products as $product) {
            ?>

                <?php
                $img =  $product['product_img'];
                $img = explode(",", $img);
                $img = array_map('trim', $img);
                ?>

                <div class="card-product">
                    <div class="info-cart-product">
                        <div class="img-product">
                            <picture>
                                <a href="./index.php?act=productDetails&product_id=<?php echo $product['product_id'] ?>"><img src="../view/images/imgProduct/<?php echo $img[0] ?>"></a>
                            </picture>
                        </div>
                        <div class="info-bottom-img">
                            <div class="name-product">
                                <h3><?php echo $product['product_name'] ?></h3>
                            </div>

                            <div class="sku-box">
                                <span>SKU: <span class="sku"><?php echo $product['product_sku'] ?></span></span>
                            </div>
                            <span class="price-product">$<?php echo $product['product_price'] ?> </span><del>$<?php echo $product['product_old_price'] ?></del>
                            <?php $sale_off = round(100 - (((int)$product['product_price'] / (int)$product['product_old_price']) * 100)) ?>
                            <h3 class="discount discount-top"><?php echo $sale_off ?>% off</h3>
                            <i class="bi bi-cart-plus add-cart" onclick="addToCart(); addToCart<?php echo $product['product_id'] ?>();"></i>
                            <div id="cart-notification"><i class="bi bi-check2-circle"></i><br>Add to cart successfully</div>
                            <script>
                                function addToCart<?php echo $product['product_id'] ?>() {
                                    const expiresInDays = 30;
                                    const expiresDate = new Date(Date.now() + expiresInDays * 24 * 60 * 60 * 1000);
                                    document.cookie = `cart<?php echo $product['product_id'] ?>=<?php echo $product['product_id'] ?>,<?php echo $product['product_name'] ?>,<?php echo $product['product_price'] ?>,../view/images/imgProduct/<?php echo $img[0] ?>; expires=${expiresDate.toUTCString()}`;
                                }
                            </script>
                            <span class="discount discount-member">
                                <p></p>
                            </span>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <div class="pagination-box">
        <nav class="pagination">
            <ul class="page-numbers">
                <?php
                $list_product = categories();
                $id_category = $_REQUEST['category_id'];
                foreach ($list_product as $category) {
                    if ($category['category_id'] == $id_category) :

                        for ($i = 1; $i <= $total_pages; $i++) {
                            $active_class = ($i == $page) ? 'current' : '';

                            echo '<li><a class="page-numbers ' . $active_class . '" href="?act=' . $category['name_category'] . '&page=' . $i . '&category_id=' . $id_category . '">' . $i . '</a></li>';
                        }
                    endif;
                }

                ?>
            </ul>
        </nav>
    </div>


</div>

<div class="section-separator">
</div>