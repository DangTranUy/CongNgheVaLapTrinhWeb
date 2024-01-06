<!-- Payment -->
<main class="payment">
    <div class="shipment-details">
        <div class="tt-page-">
            <h1>Shipment details</h1>
        </div>
        <br>
        <div class="customer-info">
            <form action="">
                <h2 class="result-address"><i class="bi bi-geo-alt-fill"></i> Delivery Address :
                    <div class="wr-result ">
                        <br>
                        <p id="result-name-phone"></p>
                        <p id="result-address"></p>
                    </div>
                </h2>
                <div class="fieldset">
                    <div class="infield">
                        <input placeholder="First and last name" type="text" required />
                        <label></label>
                    </div>
                    <div class="infield">
                        <input placeholder="Phone number" type="tel" required />
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
                        <div class="infield">
                            <input placeholder="Building, house number, street name" type="text" />
                            <label></label>
                        </div>
                        <div class="infield">
                            <input placeholder="Address name (eg: Office, Home,...)" type="tel">
                            <label></label>
                        </div>
                    </div>
                    <div class="btn-Confirm">
                        <button type="submit">Confirm</button>
                    </div>
                </div>
            </form>
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

                //Hiển thị kết quả khi #ward thay đổi:
                // $("#ward").change(() => {
                //     printResult();
                // })

                // var printResult = () => {
                //     if ($("#district").val() != "" && $("#province").val() != "" &&
                //         $("#ward").val() != "") {
                //         let result = $("#province option:selected").text() +
                //             " | " + $("#district option:selected").text() + " | " +
                //             $("#ward option:selected").text();
                //         $("#result-address").text(result)
                //     }

                // }
            </script>
        </div>

        <div class="payment-methods-box">
            <div class="header-payment-methods">
                <h3 class="title-payment-methods">Payment methods</h3>
            </div>

            <div class="content-payment-methods">
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

                <div class="radio-box">
                    <div class="radio-input">
                        <input class="input-radio" name="payment_method_id" type="radio">
                        <label for=""></label>
                    </div>
                    <div class="radio-content-input">
                        <img class="main-img" src="https://hstatic.net/0/0/global/design/seller/image/payment/other.svg?v=6" width="44px">
                        <div>
                            <span class="radio-primary">Payment via bank account</span>
                        </div>
                    </div>
                </div>

                <div class="radio-box">
                    <div class="radio-input">
                        <input class="input-radio" name="payment_method_id" type="radio">
                        <label for=""></label>
                    </div>
                    <div class="radio-content-input">
                        <img class="main-img" src="https://reebok.com.vn/images/payments/momo.png" width="44px" height="25px">
                        <div>
                            <span class="radio-primary">Payment via MoMo e-wallet</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="transport-box">
            <div class="header-transport">
                <h3 class="title-transport">Payment methods</h3>
            </div>
            <div class="content-transport">
                <div class="radio-box">
                    <div class="radio-input">
                        <input class="input-radio" name="payment_method_id" type="radio">
                        <label for=""></label>
                    </div>
                    <div class="radio-content-input">
                        <span class="radio-primary">Standard delivery (3 - 6 days nationwide)</span>
                    </div>
                    <span class="price-transport">$1,85</span>
                </div>
                <div class="radio-box">
                    <div class="radio-input">
                        <input class="input-radio" name="payment_method_id" type="radio">
                        <label for=""></label>
                    </div>
                    <div class="radio-content-input">
                        <span class="radio-primary">Fast delivery of the day </span></span>
                    </div>
                    <span class="price-transport">$2,68</span>
                </div>
            </div>
        </div>
        <div class=" note-of-customer">
            <div class="header-note">
                <h3 class="title-note">Order notes</h3>
            </div>
            <div class="note">
                <textarea placeholder="If you want to leave some notes" id="note-textarea"></textarea>
            </div>
        </div>
    </div>
    <div class="product-pay-box">
        <div class="wr-product-pay">
            <div class="products-list-pay">
                <div class="products-pay">
                    <div class="img-p-cart">
                        <img src="../view/images/newProduct/new7-Converse-Chuck-Taylor-All-Star.webp" alt="">
                    </div>
                    <div class="info-p-cart">
                        <p><span class="name-p-cart">Converse Chuck Taylor All Star</span></p>
                        <p>Size: <span class="size-p-cart">37</span></p>
                    </div>
                    <div class="quantity-p-cart">
                        <div class="wr-quantity">
                            <span class="minus">-</span>
                            <span class="num">01</span>
                            <span class="plus">+</span>
                        </div>
                    </div>
                    <div class="price-p-cart">
                        <p>$50.00</p>
                    </div>
                    <div class="button-delete-p-cart">
                        <button><i class="bi bi-trash-fill"></i></button>
                    </div>
                </div>
            </div>
            <div class="discount-codes-box">
                <div class="discount-codes">
                    <form action="">
                        <div class="input-discount-codes">
                            <label for=""></label>
                            <input placeholder="Discount code">
                        </div>
                        <button type="submit">Apply</button>
                    </form>
                </div>
            </div>
            <div class="calc-price">
                <div class="content-calc-price-box">
                    <div class="content-calc-price calc-provisional-price">
                        <div class="tt-calc">
                            <span class="">Provisional</span>
                        </div>
                        <span class="content-price provisional-price">$50.00</span>
                    </div>
                    <div class="content-calc-price calc-discount-price">
                        <div class="tt-calc">
                            <span class="">Discount</span></span>
                        </div>
                        <span class="content-price discount-price">$0.00</span>
                    </div>
                    <div class="content-calc-price calc-transport-price">
                        <div class="tt-calc">
                            <span class="">Transport</span></span>
                        </div>
                        <span class="content-price transport-price">$1.85</span>
                    </div>
                    <div class="content-calc-price calc-total-price">
                        <div class="tt-calc">
                            <span class="">Total (VAT included)</span></span>
                        </div>
                        <span class="content-price total-price">$51.85</span>
                    </div>
                </div>
            </div>
            <div class="btn-order">
                <button>ORDER</button>
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

<div class="section-separator">
</div>