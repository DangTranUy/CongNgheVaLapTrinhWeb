<?php
include('../model/db_product_details.php');

$product_id = $_REQUEST['id_sanpham'];
$product_details = product_details($product_id);

?>
<?php
$anh = $product_details[0]['product_img'];
$anh = explode(",", $anh);

$anh = array_map('trim', $anh);
// print_r($anh);
?>
<!-- Payment -->
<form action="../model/muahang.php?thaotac=muahang&giatien=<?php echo $product_details[0]['product_price'] ?>&id_sanpham=<?php echo $product_details[0]['product_id'] ?>" method="post">
    <main class="payment">
        <div class="shipment-details">
            <div class="tt-page-">
                <h1>Shipment details</h1>
            </div>
            <br>
            <div class="customer-info">

                <h2 class="result-address"><i class="bi bi-geo-alt-fill"></i> Delivery Address :
                    <div class="wr-result ">
                        <br>
                        <p id="result-name-phone"></p>
                        <p id="result-address"></p>
                    </div>
                </h2>
                <div class="fieldset">
                    <div class="infield">
                        <input placeholder="First and last name" type="text" required name="tenkhachhang" />
                        <label></label>
                    </div>
                    <div class="infield">
                        <input placeholder="Phone number" type="tel" required name="sodienthoai" />
                        <label></label>
                    </div>
                </div>
                <div class="address">
                    <div class="address-select">
                        <select name="province" id="province" required>
                            <option value=""></option>
                        </select>
                        <select name="district" id="district" required>
                            <option value="">Quận/huyện</option>
                        </select>
                        <select name="ward" id="ward" required>
                            <option value="">Phường/xã</option>
                        </select>
                    </div>
                    <div class="fieldset">
                        <input type="hidden" name="diachi" id="diachi" value="">
                        <div class="infield">
                            <input placeholder="Address name (eg: Office, Home,...)" name="sonha" type="text">
                            <label></label>
                        </div>
                    </div>


                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <script>
                    const host = "https://provinces.open-api.vn/api/"; //Địa chỉ của API.
                    //Hàm gọi API.
                    var callAPI = (api) => {
                        return axios.get(api)
                            .then((response) => {
                                renderData(response.data, "province");
                            });
                    }

                    //Hàm gọi API lấy danh sách quận huyện theo tỉnh thành phố.
                    callAPI('https://provinces.open-api.vn/api/?depth=1');
                    var callApiDistrict = (api) => {
                        return axios.get(api)
                            .then((response) => {
                                renderData(response.data.districts, "district");
                            });
                    }
                    //Hàm gọi API lấy danh sách phường xã theo quận huyện.
                    var callApiWard = (api) => {
                        return axios.get(api)
                            .then((response) => {
                                renderData(response.data.wards, "ward");
                            });
                    }

                    //Hàm hiển thị dữ liệu lên trang web.
                    var renderData = (array, select) => {
                        let row = ' <option disable value="">Chọn địa chỉ</option>';
                        array.forEach(element => {
                            row += `<option value="${element.code}">${element.name}</option>`
                        });
                        document.querySelector("#" + select).innerHTML = row
                    }

                    //Gọi API lấy danh sách quận huyện khi #province thay đổi:
                    $("#province").change(() => {
                        callApiDistrict(host + "p/" + $("#province").val() + "?depth=2");
                        printResult();
                    });

                    //Gọi API lấy danh sách phường xã khi #district thay đổi:
                    $("#district").change(() => {
                        callApiWard(host + "d/" + $("#district").val() + "?depth=2");
                        printResult();
                    });

                    // Hiển thị kết quả khi #ward thay đổi:
                    $("#ward").change(() => {
                        printResult();
                    })

                    var printResult = () => {
                        if ($("#district").val() != "" && $("#province").val() != "" &&
                            $("#ward").val() != "") {
                            let result = $("#province option:selected").text() +
                                ", " + $("#district option:selected").text() + ", " +
                                $("#ward option:selected").text();
                            $("#result-address").text(result);
                            const diachi = document.getElementById('diachi');
                            diachi.value = result;
                        }

                    }
                </script>

            </div>

            <div class="payment-methods-box">
                <div class="header-payment-methods">
                    <h3 class="title-payment-methods">Payment methods</h3>
                </div>

                <div class="content-payment-methods">

                    <div class="radio-box">
                        <div class="radio-input">
                            <input class="input-radio" name="payment_method_id" type="radio" value="vnpay">
                            <label for=""></label>
                        </div>
                        <div class="radio-content-input">
                            <img class="main-img" src="https://i.gyazo.com/4914b35ab9381a3b5a1e7e998ee9550c.png" width="50px" height="50px">
                            <div>
                                <span class="radio-primary">VNPAY</span>
                            </div>
                        </div>
                    </div>
                    <div class="radio-box">
                        <div class="radio-input">
                            <input class="input-radio" name="payment_method_id" type="radio">
                            <label for=""></label>
                        </div>
                        <div class="radio-content-input">
                            <img class="main-img" src="https://hstatic.net/0/0/global/design/seller/image/payment/cod.svg?v=6" width="44px">
                            <div>
                                <span class="radio-primary">Cash on delivery (COD)</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class=" note-of-customer">
                <div class="header-note">
                    <h3 class="title-note">Order notes</h3>
                </div>
                <div class="note">
                    <textarea placeholder="If you want to leave some notes" id="note-textarea" name="ghichu"></textarea>
                </div>
            </div>
        </div>
        <div class="product-pay-box">
            <div class="wr-product-pay">
                <div class="products-list-pay">
                    <div class="products-pay">
                        <div class="img-p-cart">
                            <img src="../view/images/imgProduct/<?php echo $anh[0] ?>" alt="">
                        </div>
                        <div class="info-p-cart">
                            <p><span class="name-p-cart"><?php echo $product_details[0]['product_name'] ?></span></p>
                            <p>Số lượng: <span class="size-p-cart">1</span></p>
                        </div>
                        <!-- <div class="quantity-p-cart">
                            <div class="wr-quantity">
                                <span class="minus">-</span>
                                <span class="num">01</span>
                                <span class="plus">+</span>
                            </div>
                        </div> -->
                        <div class="price-p-cart">
                            <p>$<?php echo $product_details[0]['product_price'] ?></p>
                        </div>
                        <!-- <div class="button-delete-p-cart">
                            <button><i class="bi bi-trash-fill"></i></button>
                        </div> -->
                    </div>
                </div>
                <div class="discount-codes-box">
                    <div class="discount-codes">
                        <form action="">
                            <div class="input-discount-codes">
                                <label for=""></label>
                                <input placeholder="Discount code">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="calc-price">
                    <div class="content-calc-price-box">

                        <div class="content-calc-price calc-total-price">
                            <div class="tt-calc">
                                <span class="">Total</span></span>
                            </div>
                            <span class="content-price total-price">$<?php echo $product_details[0]['product_price'] ?></span>
                        </div>
                    </div>
                </div>
                <div class="btn-order">
                    <button type="submit">ORDER</button>
                </div>
                <div class="description-order">

                    <span class="note-order1">
                        By clicking 'Place Order', you confirm that you are over 13 years of age and agree to our
                        <a href="">Terms and Conditions</a>
                        and <a href=""> Privacy Policy .</a>
                    </span>
                    <div class="note-order2">
                        <span>*Please do not cancel your order once payment has been made*</span>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </main>

</form>
<div class="section-separator">
</div>