       <!--main content start-->

       <section id="main-content">

           <section class="wrapper">
               <h3 style="margin-bottom: 10px; color: #ffffff;"><b>QUẢN LÝ DANH MỤC</b></h3>

               <div class="table-agile-info">



                   <div class="table-agile-info">
                       <h4 style="margin-bottom: 10px;"><b>TÌM KIẾM</b></h4>

                       <form action="" method="post" class="form_locsanpham">

                           <div class="input-group m-bot15">
                               <span class="input-group-btn">
                                   <b class="btn btn-danger" type="button">Tên danh mục</b>
                               </span>
                               <input type="text" class="form-control" placeholder="Nhập tên sản phẩm">
                           </div>
                           <!-- <div class="input-group m-bot15">
                               <span class="input-group-btn">
                                   <b class="btn btn-danger" type="button">Trạng thái</b>
                               </span>
                               <select class="form-control m-bot15">
                                   <option selected>Không chọn</option>
                                   <option>Bật</option>
                                   <option>Tắt</option>
                               </select>
                           </div> -->

                           <div>

                               <button type="submit" class="btn btn-danger">Tìm kiếm</button>
                               <button type="submit" class="btn btn-success">Tất cả</button>
                           </div>

                       </form>







                       <a style="margin-bottom: 10px;" href="#myModal-1" data-toggle="modal" class="btn btn-warning">
                           Thêm danh mục
                       </a>


                       <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-1" class="modal fade">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                       <h4 class="modal-title">THÊM DANH MỤC</h4>
                                   </div>
                                   <div class="modal-body">

                                       <form id="upload" method="post" action="indexAdmin.php?act=themDanhMuc" enctype="multipart/form-data">

                                           <div class="input-group m-bot15">
                                               <span class="input-group-btn">
                                                   <b class="btn btn-danger" type="button">Tên danh mục</b>
                                               </span>
                                               <input type="text" name="name_category" class="form-control" placeholder="Nhập tên sản phẩm">
                                           </div>
                                           <div class="input-group m-bot15">
                                               <span class="input-group-btn">
                                                   <b class="btn btn-danger" type="button">Trạng thái</b>
                                               </span>
                                               <select name="danhmuclon" class="form-control m-bot15">
                                                   <option selected>Danh mục lớn</option>
                                                   <option value="2">BRAND</option>
                                                   <option value="3">SPORT</option>
                                                   <option value="4">ACCESSORIES</option>
                                               </select>

                                           </div>
                                           <div id="drop">
                                               Thêm hình ảnh sản phẩm
                                               <!-- <a>Tải lên</a> -->
                                               <input type="file" name="upl" id="anh" style="display: block;" onchange="imageUploaded()">
                                               <input type="hidden" name="base64" value="" id="base64">
                                               <script>
                                                   let base64String = "";

                                                   function imageUploaded() {
                                                       let file = document.querySelector(
                                                           'input[type=file]')['files'][0];

                                                       let reader = new FileReader();
                                                       console.log("next");

                                                       reader.onload = function() {
                                                           base64String = reader.result.replace("data:", "")
                                                               .replace(/^.+,/, "");

                                                           imageBase64Stringsep = base64String;

                                                           // alert(imageBase64Stringsep);
                                                           console.log(base64String);
                                                       }
                                                       reader.readAsDataURL(file);
                                                       var input_base64 = document.getElementById('base64');
                                                       input_base64.value = base64String;


                                                   }
                                               </script>

                                           </div>
                                           <script>

                                           </script>

                                           <div>

                                               <button type=" submit" class="btn btn-success">Lưu thay đổi</button>
                                           </div>

                                       </form>



                                   </div>

                               </div>
                           </div>
                       </div>











                       <div class="panel panel-default">

                           <div class="panel-heading">
                               Danh mục
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
                                           <th>TÊN DANH MỤC</th>
                                           <th>HÌNH ẢNH</th>
                                           <th>THAO TÁC</th>

                                       </tr>
                                   </thead>
                                   <tbody>

                                       <!-- <tr>
                                           <td class="td_table"><label class="i-checks m-b-none"><i></i></label></td>
                                           <td class="td_table">#1</td>
                                           <td class="td_table">NIKE</td>
                                           <td class="td_table">
                                               <img src="..\images/imgCategories/duong-dan-giay-nike-1.jpg" style="height: 90px; width: 160px;" alt="">
                                           </td>
                                           <td class="td_table">
                                               <button type="submit" class="btn btn-info">Cập nhập</button>
                                               <button type="submit" class="btn btn-danger">Xóa</button>
                                           </td>
                                       </tr> -->
                                       <?php
                                        $list_categories = categories();

                                        foreach ($list_categories as $list_categoriess) :

                                        ?>

                                           <tr>
                                               <td class="td_table"><label class="i-checks m-b-none"><i></i></label></td>
                                               <td class="td_table">#<?php echo $list_categoriess['category_id'] ?></td>
                                               <td class="td_table"><?php echo $list_categoriess['name_category'] ?></td>
                                               <td class="td_table">
                                                   <img src="<?php echo $list_categoriess['category_img'] ?>" style="height: 90px; width: 160px;" alt="">
                                               </td>
                                               <td class="td_table">

                                                   <!-- model capnhap -->
                                                   <a href=" #ModalCapNhapDanhMuc-<?php echo $list_categoriess['category_id'] ?>" data-toggle="modal" class="btn btn-info">
                                                       Cập nhập
                                                   </a>
                                                   <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="ModalCapNhapDanhMuc-<?php echo $list_categoriess['category_id'] ?>" class="modal fade">
                                                       <div class="modal-dialog">
                                                           <div class="modal-content">
                                                               <div class="modal-header">
                                                                   <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                                   <h4 class="modal-title">Cập nhập danh mục <b><?php echo $list_categoriess['name_category'] ?></b></h4>
                                                               </div>
                                                               <div class="modal-body">

                                                                   <form id="upload" method="post" action="indexAdmin.php?act=themDanhMuc" enctype="multipart/form-data">

                                                                       <div class="input-group m-bot15">
                                                                           <span class="input-group-btn">
                                                                               <b class="btn btn-danger" type="button">Tên danh mục</b>
                                                                           </span>
                                                                           <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" value="<?php echo $list_categoriess['name_category'] ?>">
                                                                       </div>
                                                                       <div class="input-group m-bot15">
                                                                           <span class="input-group-btn">
                                                                               <b class="btn btn-danger" type="button">Trạng thái</b>
                                                                           </span>
                                                                           <select class="form-control m-bot15">
                                                                               <option selected>Danh mục lớn</option>
                                                                               <option value="2">BRAND</option>
                                                                               <option value="3">SPORT</option>
                                                                               <option value="4">ACCESSORIES</option>
                                                                           </select>

                                                                       </div>
                                                                       <div id="drop">
                                                                           Thêm hình ảnh sản phẩm
                                                                           <!-- <a>Tải lên</a> -->
                                                                           <input type="file" name="upl" id="anh" style="display: block;" onchange="imageUploaded()">
                                                                           <input type="hidden" name="base64" value="" id="base64">


                                                                       </div>
                                                                       <script>

                                                                       </script>

                                                                       <div>

                                                                           <button type=" submit" class="btn btn-success">Lưu thay đổi</button>
                                                                       </div>

                                                                   </form>



                                                               </div>

                                                           </div>
                                                       </div>
                                                   </div>



                                                   <!-- modelxoa   -->
                                                   <a href=" #ModalXoaDanhMuc-<?php echo $list_categoriess['category_id'] ?>" data-toggle="modal" class="btn btn-danger">
                                                       Xóa
                                                   </a>
                                                   <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="ModalXoaDanhMuc-<?php echo $list_categoriess['category_id'] ?>" class="modal fade">
                                                       <div class="modal-dialog">
                                                           <div class="modal-content">
                                                               <div class="modal-header">
                                                                   <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                                   <h4 class="modal-title">Bạn có muốn xóa danh mục <b><?php echo $list_categoriess['name_category'] ?></b> không?</h4>
                                                               </div>
                                                               <div class="modal-body">

                                                                   <form method="post" action="indexAdmin.php?act=xoaDanhMuc">
                                                                       <input type="hidden" name="category_id" value="<?php echo $list_categoriess['category_id'] ?>">
                                                                       <input type="submit" class="btn btn-success" value="Đồng ý">
                                                                       <button aria-hidden="true" data-dismiss="modal" class="btn btn-danger" type="button">hủy</button>

                                                                   </form>




                                                               </div>

                                                           </div>
                                                       </div>
                                                   </div>


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