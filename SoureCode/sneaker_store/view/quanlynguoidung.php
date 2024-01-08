        <!--main content start-->
        <section id="main-content">

            <section class="wrapper">
                <h3 style="margin-bottom: 10px; color: #ffffff;"><b>QUẢN LÝ NGƯỜI DÙNG</b></h3>

                <div class="table-agile-info">



                    <div class="table-agile-info">
                        <h4 style="margin-bottom: 10px;"><b>TÌM KIẾM</b></h4>

                        <form action="" method="post" class="form_locsanpham_2">

                            <div class="input-group m-bot15">
                                <span class="input-group-btn">
                                    <b class="btn btn-danger" type="button">Tên tài khoản</b>
                                </span>
                                <input type="text" class="form-control" placeholder="Nhập tên sản phẩm">
                            </div>
                            <div class="input-group m-bot15">
                                <span class="input-group-btn">
                                    <b class="btn btn-success" type="button">Email</b>
                                </span>
                                <input type="text" class="form-control" placeholder="Nhập tên sản phẩm">
                            </div>

                            <div>

                                <button type="submit" class="btn btn-danger">Tìm kiếm</button>
                                <button type="submit" class="btn btn-success">Tất cả</button>
                            </div>

                        </form>


                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-1" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 class="modal-title">THÊM DANH MỤC</h4>
                                    </div>
                                    <div class="modal-body">

                                        <form id="upload" method="post" action="" enctype="multipart/form-data">

                                            <div class="input-group m-bot15">
                                                <span class="input-group-btn">
                                                    <b class="btn btn-danger" type="button">Tên sản phẩm</b>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Nhập tên sản phẩm">
                                            </div>
                                            <div class="input-group m-bot15">
                                                <span class="input-group-btn">
                                                    <b class="btn btn-success" type="button">Mã sản phẩm</b>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Nhập tên sản phẩm">
                                            </div>
                                            <div class="input-group m-bot15">
                                                <span class="input-group-btn">
                                                    <b class="btn btn-info" type="button">Danh mục</b>
                                                </span>
                                                <select class="form-control m-bot15">
                                                    <option selected>Adidas</option>
                                                    <option>Bật</option>
                                                    <option>Tắt</option>
                                                </select>
                                            </div>


                                            <div id="drop">
                                                Thêm hình ảnh sản phẩm

                                                <a>Tải lên</a>
                                                <input type="file" name="upl" multiple="">
                                            </div>

                                            <div>

                                                <button type="submit" class="btn btn-success">Lưu thay đổi</button>
                                            </div>

                                        </form>



                                    </div>

                                </div>
                            </div>
                        </div>











                        <div class="panel panel-default">

                            <div class="panel-heading">
                                NGƯỜI DÙNG
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped b-t b-light">
                                    <thead>
                                        <tr>
                                            <th style="width:20px;">
                                                <!-- <label class="i-checks m-b-none">
                                                    <input type="checkbox"><i></i>
                                                </label> -->
                                            </th>
                                            <th>ID</th>
                                            <th>TÊN TÀI KHOẢN</th>
                                            <th>EMAIL</th>

                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php
                                        $tk = taikhoan();
                                        foreach ($tk as $tks) {
                                        ?>
                                            <tr>
                                                <th style="width:20px;">
                                                    <!-- <label class="i-checks m-b-none">
                                                    <input type="checkbox"><i></i>
                                                </label> -->
                                                </th>
                                                <td class="td_table">#<?php echo $tks['user_id'] ?></td>
                                                <td class="td_table"><?php echo $tks['username'] ?></td>
                                                <td class="td_table"><?php echo $tks['email'] ?></td>

                                            </tr>
                                        <?php
                                        }
                                        ?>




                                    </tbody>
                                </table>
                            </div>
                            <footer class="panel-footer">
                                <div class="row">

                                    <!-- <div class="col-sm-5 text-center">
                                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                                    </div> -->
                                    <div class="col-sm-7 text-right text-center-xs">
                                        <ul class="pagination pagination-sm m-t-none m-b-none">
                                            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                                            <li><a href="">1</a></li>

                                            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>




            </section>
            <!-- footer -->
            <div class="footer">
                <div class="wthree-copyright">
                    <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
                </div>
            </div>
            <!-- / footer -->
        </section>
        <!--main content end-->