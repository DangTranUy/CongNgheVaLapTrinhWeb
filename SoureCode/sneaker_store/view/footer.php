<!-- Section 6: service -->
<section class="section6">
    <div class="container-service">
        <div class="wrap-item-service">
            <span>
                <img src="https://theme.hstatic.net/200000265619/1001091352/14/srv_1.png?v=213" alt="">
            </span>
            <div class="content-right">
                <p>COD SHIPPING NATIONWIDE</p>
                <span>Free shipping nationwide for orders from 999,000 VND.</span>
            </div>
        </div>
        <div class="wrap-item-service">
            <span>
                <img src="https://theme.hstatic.net/200000265619/1001091352/14/srv_2.png?v=213" alt="">
            </span>
            <div class="content-right">
                <p>100% ABSOLUTE QUALITY</p>
                <span>Committed to genuine products from Converse, Vans, Palladium and Supra.</span>
            </div>
        </div>
        <div class="wrap-item-service">
            <span>
                <img src="https://theme.hstatic.net/200000265619/1001091352/14/srv_3.png?v=213" alt="">
            </span>
            <div class="content-right">
                <p>EASY PAYMENT</p>
                <span>Payment methods are diverse and extremely convenient.</span>
            </div>
        </div>
        <div class="wrap-item-service">
            <span>
                <img src="https://theme.hstatic.net/200000265619/1001091352/14/srv_4.png?v=213" alt="">
            </span>
            <div class="content-right">
                <p>SAVE TIME</p>
                <span>Shopping is easier online.</span>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>SNEAKER STORE</h4>
                <ul>
                    <li>
                        <a href="https://maps.app.goo.gl/cUrXjYNGhtbH6tnX9"><i class="bi bi-geo-alt-fill"></i> 470 Đ. Trần Đại Nghĩa, Khu
                            đô thị, Ngũ Hành Sơn, Đà Nẵng 550000, Việt Nam
                        </a>
                    </li>
                    <li>
                        <a href=""><i class="bi bi-telephone-fill"></i> 1900 1009</a>
                    </li>
                    <li>
                        <a href=""><i class="bi bi-envelope-at-fill"></i> ecom@sneakerstore.vn</a>
                    </li>
                    <li>
                        <a href="">Phú Vỹ Trading & Service Company Limited. Business Registration
                            Certificate No. 0313679661 issued by Da Nang City Department of
                            Planning and Investment on March 7, 2016</a>
                    </li>

                    <!-- <li class="logo">
                        <img src="../view/images/thongbao.webp" alt="" />
                    </li> -->
                </ul>
            </div>
            <div class="footer-col">
                <h4>PRODUCT CATEGORY</h4>
                <ul>
                    <?php
                    $list_menumain = menuMain();
                    foreach ($list_menumain as $list_menumains) :
                    ?>
                        <li>
                            <a href="index.php?act=<?php echo $list_menumains['name_link_menu'] ?>&menumain_id=<?php echo $list_menumains['menumain_id'] ?>"><?php echo  $list_menumains['menumain_name']; ?></a>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>
            <div class="footer-col">
                <h4>POLICY</h4>
                <ul>
                    <li><a href="">Ordering Guide</a></li>
                    <li><a href="">Payment Option</a></li>
                    <li><a href="">Terms & Conditions</a></li>
                    <li><a href="">Shipping policy</a></li>
                    <li><a href="">Return and Warranty Policy</a></li>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">FAQs</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>FOLLOW US</h4>
                <div class="follow-us">
                    <a href="https://www.facebook.com/profile.php?id=100063572514390"><i class="bi bi-facebook" style="color: blue;"></i></a>
                    <a href="https://www.instagram.com/"><i class="bi bi-instagram" style="color: deeppink;"></i></a>
                    <a href="https://twitter.com/?lang=en"><i class="bi bi-twitter-x" style="color: black;"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>


</html>