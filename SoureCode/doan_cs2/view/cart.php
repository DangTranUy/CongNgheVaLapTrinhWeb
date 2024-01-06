<!-- Cart -->

<main>
    <div class="cart-box">
        <!-- <div class="breadcrumb-box">
            <nav class="breadcrumb">
                <a href="">Home page</a> <i>/</i> Cart
            </nav>
        </div> -->
        <div class="title-cart">
            <h1>Your cart</h1>
        </div>
        <div class="cart-section">
            <div class="products-list">
                <div class="wr-products-list">
                    <?php
                    $slSpGio = 0;
                    $cartCookie = $_COOKIE;
                    foreach ($cartCookie as $key => $cartCookies) :
                        if (substr($key, 0, 4) == "cart") :
                            $cart_array = explode(",", $_COOKIE[$key]);
                            $slSpGio++;
                    ?>
                            <div class="cart-p" id="cart-p<?php echo $cart_array[0] ?>">
                                <div class="img-p-cart">
                                    <img src="<?php echo $cart_array[3] ?>" alt="">
                                </div>
                                <div class="info-p-cart">
                                    <p><span class="name-p-cart"><?php echo $cart_array[1] ?></span></p>
                                    <p>Size: <span class="size-p-cart"></span></p>
                                </div>
                                <div class="quantity-p-cart">
                                    <div class="wr-quantity">
                                        <span id="minus">-</span>
                                        <span id="num">1</span>
                                        <span id="plus">+</span>
                                    </div>
                                </div>
                                <div class="price-p-cart">
                                    <p>$<span id="price" onchange="total()"><?php echo $cart_array[2] ?></span></p>
                                </div>
                                <div onclick="xoa()" class="button-delete-p-cart">
                                    <button class="buttondeleteproduct" onclick="deleteCartProduct<?php echo $cart_array[0] ?>()"><i class="bi bi-trash-fill"></i></button>
                                </div>
                                <script>
                                    function deleteCartProduct<?php echo $cart_array[0] ?>() {

                                        document.cookie = `cart<?php echo $cart_array[0] ?>=; expires=Thu, 01 Jan 1970 00:00:01 GMT;`;

                                        var elementProduct = document.getElementById('cart-p<?php echo $cart_array[0] ?>');
                                        elementProduct.innerHTML = "";
                                        elementProduct.style.display = "none";

                                    }
                                </script>
                            </div>

                    <?php endif;


                    endforeach;
                    if ($slSpGio == 0) {
                        echo '<img class="img-gioHangTrong" src="../view/images/gioHangTrong.png">';
                    }

                    ?>
                </div>
                <!-- <img src="../view/images/gioHangTrong.png" style="width: 50%;"> -->
            </div>
            <div class="total-cart" id="total-cart" onload="total()">
                <div class="total-cart-box">
                    <p>
                        <span class="tt-total-amount">Total amount: </span><span class="total-amount">$<span id="totalPPCart"></span></span>
                    </p>
                    <hr><br>
                    <p>Shipping fees will be calculated at the checkout page.<br>
                        You can also enter a discount code at the checkout page.<br>
                        Delivery time is 3 to 5 days from order confirmation.</p>
                    <div class="link-pay"><a href="index.php?act=payment">PAY</a></div>
                    <form action="" method="post">
                        <input type="hidden" name="tongtinhtam" value="" id="tongtinhtam">
                    </form>
                </div>

            </div>
        </div>
        <script>
            window.addEventListener("DOMContentLoaded", total());

            function total() {
                var pluses = document.querySelectorAll("#plus");
                var minuses = document.querySelectorAll("#minus");
                var input = document.querySelectorAll("#tongtinhtam");
                var tongtam = document.querySelectorAll("#totalPPCart");
                var prices = document.querySelectorAll("#price");
                var totalAllPPCart = 0;

                pluses.forEach((plus, index) => {

                    totalAllPPCart = totalAllPPCart + parseFloat(prices[index].innerText)


                    // console.log(prices[index].innerText);
                });
                totalAllPPCart = totalAllPPCart.toFixed(2);
                document.getElementById("totalPPCart").innerHTML = totalAllPPCart;
                document.getElementById("tongtinhtam").value = totalAllPPCart;



            }

            function xoa() {
                total();
                // console.log('abc');
            }


            var pluses = document.querySelectorAll("#plus");
            var minuses = document.querySelectorAll("#minus");
            var nums = document.querySelectorAll("#num");
            var prices = document.querySelectorAll("#price");
            var totalAllPPCart = document.querySelectorAll("#totalPPCart")

            pluses.forEach((plus, index) => {
                plus.addEventListener("click", () => {
                    // Tăng số lượng sp
                    nums[index].innerText = parseInt(nums[index].innerText) + 1;

                    // Tính toán giá mới
                    var currentQuantity = parseInt(nums[index].innerText);
                    var newPricePCart = parseFloat(prices[index].innerText) + (parseFloat(prices[index].innerText) / (currentQuantity - 1));

                    prices[index].innerText = newPricePCart.toFixed(2);
                    total();
                });
            });

            minuses.forEach((minus, index) => {
                minus.addEventListener("click", () => {
                    var currentQuantity = parseInt(nums[index].innerText);
                    if (currentQuantity > 1) {
                        // Giảm số lượng sp
                        nums[index].innerText = parseInt(nums[index].innerText) - 1;

                        // Tính toán giá mới
                        var newPricePCart = parseFloat(prices[index].innerText) - (parseFloat(prices[index].innerText) / (currentQuantity));

                        prices[index].innerText = newPricePCart.toFixed(2);
                        total();
                    }
                });
            });
        </script>
    </div>
</main>





<!-- // if (isset($_SESSION['cart']))
// echo var_dump($_SESSION['cart']); -->


<div class="section-separator">
</div>