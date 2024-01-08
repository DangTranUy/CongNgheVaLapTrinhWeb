<?php

include '../model/list_category.php';
//controller
include '../view/headerAdmin.php';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'quanlydanhmuc':
            include '../view/quanlydanhmuc.php';
            break;
        case 'themDanhMuc':
            $name_category = $_POST['name_category'];
            // $img_category = $_FILES['upl'];
            $danhmuclon = $_POST['danhmuclon'];
            $img_category = $_POST['base64'];
            $img_category = "data:image/jpeg;base64," . $img_category;
            insert_category($name_category, $img_category, $danhmuclon);
            include '../view/quanlydanhmuc.php';

            break;
        case 'xoaDanhMuc':
            $category_id = $_POST['category_id'];
            delete_category($category_id);
            include '../view/quanlydanhmuc.php';
            break;
        case 'quanlysanpham':
            include '../view/quanlysanpham.php';
            break;

        case 'quanlynguoidung':
            include '../view/quanlynguoidung.php';
            break;
        default:
            include '../view/trangTongQuanAdmin.php';
            break;
    }
} else {
    include '../view/trangTongQuanAdmin.php';
}



include '../view/footerAdmin.php';
