<!--main content start-->
<section id="main-content">

    <section class="wrapper">
        <h3 style="margin-bottom: 10px; color: #ffffff;"><b>QUẢN LÝ SẢN PHẨM</b></h3>

        <div class="table-agile-info">



            <div class="table-agile-info">
                <h4 style="margin-bottom: 10px;"><b>TÌM KIẾM</b></h4>

                <form action="" method="post" class="form_locsanpham_2">

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

                    <div>

                        <button type="submit" class="btn btn-danger">Tìm kiếm</button>
                        <button type="submit" class="btn btn-success">Tất cả</button>
                    </div>

                </form>







                <a style="margin-bottom: 10px;" href="#myModal-1" data-toggle="modal" class="btn btn-warning">
                    Thêm sản phẩm
                </a>


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
                        SẢN PHẨM
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
                                    <th>MÃ SẢN PHẨM</th>
                                    <th>TÊN SẢN PHẨM</th>
                                    <th>DANH MỤC</th>
                                    <th>HÌNH ẢNH</th>
                                    <th>GIÁ BÁN</th>
                                    <th>THAO TÁC</th>

                                </tr>
                            </thead>
                            <tbody>



                                <?php
                                $list_product = products();



                                foreach ($list_product as $product) :
                                    $img =  $product['product_img'];
                                    $img = explode(",", $img);
                                    $img = array_map('trim', $img);
                                ?>
                                    <tr>
                                        <td class="td_table"><label class="i-checks m-b-none"><i></i></label></td>
                                        <td class="td_table"><?php echo $product['product_sku'] ?></td>
                                        <td class="td_table"><?php echo $product['product_name'] ?></td>
                                        <td class="td_table">Adidas</td>

                                        <td class="td_table">
                                            <img src="../view/images/imgProduct/<?php echo $img[0] ?>" style="height: 160px; width: 160px;" alt="">
                                        </td>
                                        <td class="td_table"><span style="color: red;">$</span><?php echo $product['product_price'] ?> </td>

                                        <td class="td_table">
                                            <button type="submit" class="btn btn-info">Cập nhập</button>
                                            <button type="submit" class="btn btn-danger">Xóa</button>
                                        </td>
                                    </tr>

                                <?php
                                endforeach;
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
                                    <li><a href="">2</a></li>
                                    <li><a href="">3</a></li>
                                    <li><a href="">4</a></li>
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