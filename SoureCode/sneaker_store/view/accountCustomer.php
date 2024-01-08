<main class="thongtinkhachhang">
    <?php
    if (isset($_SESSION['tkuser'])) {
        $tkuser = $_SESSION['tkuser'];
    ?>
        <h1>
            Chào mừng <?php echo $tkuser['username']; ?> đến với Sneaker store
        </h1>

        <div style="display: gid; grid-template-columns: auto;">
            <div style=" border:1px; width:600px; margin:10px 10px; background-color: white;">
                <div class="abc">
                    <div style="background-color: white; width: 5px; height:30px;"></div>
                    <div class="ke">
                        <h2 style=" margin-top:-25px;">
                            Thông tin tài khoản
                        </h2>
                    </div>


                    <div class="all">
                        <div class="trai">
                            <div class="item">
                                <img src="" style="width:100px; height: 120px;">
                                <div class="chenChu">
                                    <span>Chưa cập nhật</span><br><big>Hình ảnh</big>
                                </div>
                            </div>
                            <div>
                                <button class="button2"><img src=""><small>Chọn avatar</small></button><br>
                            </div>


                        </div>
                        <div class="giua">
                            <label class="lb1">Họ tên <span class="star-icon">&ast;</span></label>
                            <label class="lb1">Email <span class="star-icon">&ast;</span></label>
                            <!-- <label class="lb1">Ngày sinh <span class="star-icon">&ast;</span></label> -->
                            <label class="lb1">Mật khẩu <span class="star-icon">&ast;</span></label>
                        </div>

                        <div class="phai">
                            <div>
                                <input class="ip1" type="text" value="<?php echo $tkuser['username']; ?>">
                            </div>
                            <div>
                                <input class="ip1" type="text" value="<?php echo $tkuser['email']; ?>">
                            </div>
                            <!-- <div>
                                <input class="ip1" type="text" value="">
                            </div> -->
                            <div>
                                <input class="ip1" type="password" value="<?php ?>">
                            </div>
                            <div>
                                <button class="button"><img src=""> Sửa</button><br>
                            </div>
                        </div>






                    </div>

                </div>

            </div>
            <div style=" border:1px; width:100%; margin:10px 10px; background-color: white;">
                <div class="abc">
                    <div style="background-color: white; width: 5px; height:30px;"></div>
                    <h2 style=" margin-top:25px;">
                        Tình trạng đơn hàng của bạn <br>
                    </h2>
                    <div>
                        <style>
                            table {
                                font-family: arial, sans-serif;
                                border-collapse: collapse;
                                width: 100%;
                            }

                            td,
                            th {
                                border: 1px solid #dddddd;
                                text-align: left;
                                padding: 8px;
                            }

                            tr:nth-child(even) {
                                background-color: #dddddd;
                            }
                        </style>
                        <table>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th>Ngày đặt hàng</th>
                                <th>Thành tiền</th>
                                <th>Địa chỉ nhận</th>
                                <th>Ghi chú</th>
                                <th>Tình trạng</th>
                            </tr>

                            <?php
                            $tt_donhang = tt_donhang();
                            foreach ($tt_donhang as $tt_donhangs) :
                            ?>

                                <tr>
                                    <td><?php echo $tt_donhangs['product_name']; ?></td>
                                    <td><?php echo $tt_donhangs['ngaymua']; ?></td>
                                    <td><?php echo $tt_donhangs['giatien']; ?> VNĐ</td>
                                    <td><?php echo $tt_donhangs['diachi']; ?></td>
                                    <td><?php echo $tt_donhangs['ghichu']; ?></td>
                                    <td><?php echo $tt_donhangs['tinhtrang']; ?></td>
                                </tr>

                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <br>
    <br>
</main>