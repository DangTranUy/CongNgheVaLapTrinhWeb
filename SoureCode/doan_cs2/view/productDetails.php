<?php
include('../model/db_product_details.php');

$product_id = $_REQUEST['product_id'];
$product_details = product_details($product_id);

?>

<main>
    <!-- <div class="breadcrumb-box">
        <nav class="breadcrumb">
            <a href="#">Home page</a> <i>/</i> <a href="#">Sneaker</a> <i>/</i> <a href="#">Converse</a> <i>/</i> Converse Chuck Taylor All Star Shoes
        </nav>
    </div> -->
    <?php
    $anh = $product_details[0]['product_img'];
    $anh = explode(",", $anh);

    $anh = array_map('trim', $anh);
    // print_r($anh);
    ?>
    <div class="product-details-box">
        <div class="img-details-box">
            <div class="big-img">
                <img src="../view/images/imgProduct/<?php echo $anh[0] ?>">
            </div>
            <div class="images">
                <div class="small-img">
                    <img src="../view/images/imgProduct/<?php echo $anh[0] ?>" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                    <img src="../view/images/imgProduct/<?php echo $anh[1] ?>" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                    <img src="../view/images/imgProduct/<?php echo $anh[2] ?>" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                    <img src="../view/images/imgProduct/<?php echo $anh[3] ?>" onclick="showImg(this.src)">
                </div>



            </div>
        </div>
        <script>
            let bigImg = document.querySelector('.big-img img');

            function showImg(pic) {
                bigImg.src = pic;
            }
        </script>

        <div class="info-product">
            <h1><?php echo $product_details[0]['product_name'] ?></h1>
            <div class="group-status">
                <span class="first_status">Brand: <span class="status_name"><?php echo $product_details[0]['name_category'] ?></span></span>
                <!-- <span class="first_status status_2"> <span class="line_tt">|</span> Warehouse:
                    <span class="status_name">In stock</span>
                </span> -->
                <div>
                    SKU: <span class="sku"><?php echo $product_details[0]['product_sku'] ?></span>
                </div>
            </div>
            <div class="price">
                <span class="price-product">$<?php echo $product_details[0]['product_price'] ?> </span><del><span>$<?php echo $product_details[0]['product_old_price'] ?></span></del>
            </div>
            <!-- <div class="promotion">
                <div class="tt-promotion">
                    <i class="bi bi-gift-fill"></i><span>Promotions and offers</span>
                </div>

                <ul class="promotion-list">
                    <li>Enter code XINCHAO to get up to 10% off orders from $0</li>
                    <li>Extra 5% Off w/MEMBER20</li>
                </ul>
            </div> -->
            <div class="size-box">
                <table class="size">
                    <tbody>
                        <td class="label">
                            <label for="">
                                Size:
                            </label>
                        </td>
                        <td class="value">
                            <div class="size-number">
                                <ul>
                                    <li>37</li>
                                    <li>38</li>
                                    <li>39</li>
                                    <li>40</li>
                                    <li>41</li>
                                    <li>42</li>
                                </ul>
                            </div>
                        </td>
                    </tbody>
                </table>
                <div class="size-guide">
                    <span><a href="#"><i>Size Guide </i> <i class="bi bi-rulers"></i></a></span>
                </div>
                <div class="quantity">
                    <p>Quantity :</p>
                    <div class="wrapper-quantity">
                        <span id="minus">-</span>
                        <span id="num">1</span>
                        <span id="plus">+</span>
                    </div>
                </div>


            </div>
            <div class="button-box">
                <?php
                $tt_product = products();
                foreach ($tt_product as $product) :
                ?>
                <?php endforeach; ?>
                <div class="button">
                    <button class="add-to-cart" onclick="addToCart(); addToCart<?php echo $product['product_id'] ?>();"><b>Add to cart</b></button>
                    <div id="cart-notification"><i class="bi bi-check2-circle"></i><br>Add to cart successfully</div>
                    <script>
                        function addToCart<?php echo $product['product_id'] ?>() {
                            const expiresInDays = 30;
                            const expiresDate = new Date(Date.now() + expiresInDays * 24 * 60 * 60 * 1000);
                            document.cookie = `cart<?php echo $product['product_id'] ?>=<?php echo $product['product_id'] ?>,<?php echo $product['product_name'] ?>,<?php echo $product['product_price'] ?>,../view/images/imgProduct/<?php echo $img[0] ?>; expires=${expiresDate.toUTCString()}`;
                        }
                    </script>
                </div>

                <div class="button">
                    <!-- <a href="../model/muahang.php?thaotac=muahang&giatien=<?php echo $product_details[0]['product_price'] ?>&id_sanpham=<?php echo $product_details[0]['product_id'] ?>"> <button class="buy-now"><b>Buy now</b></button>
                    </a> -->
                    <a href="./index.php?act=pay2&id_sanpham=<?php echo $product_details[0]['product_id'] ?>"> <button class="buy-now"><b>Buy now</b></button>
                    </a>
                </div>
            </div>
            <div class="description-box" style="display: none;">
                <div class="description">
                    <h2 onclick="toggleDescription()">Product Description<span class="arrow"></span></h2>
                    <div id="product-description" class="collapsed">
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="section-separator">
    </div>
</main>