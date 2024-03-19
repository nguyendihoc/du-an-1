<?php
include "header.php";
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
// controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            $error = [];
            // Kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $check = true;

                $tenten_danhmucdm = $_POST['ten_danhmuc'];
                if (empty($ten_danhmuc)) {
                    $error['ten_danhmuc'] = "không được để trống!";
                    $check = false;
                }

                if ($check) {
                    insert_danhmuc($ten_danhmuc);
                    $thongbao = "Thêm thành công";
                }
            }
            include "danhmuc/add.php";
            break;

        case 'xoadm':
            if (isset($_GET['ma_danhmuc']) && ($_GET['ma_danhmuc'] > 0)) {
                delete_danhmuc($_GET['ma_danhmuc']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['ma_danhmuc']) && ($_GET['ma_danhmuc'] > 0)) {
                $dm = loadone_danhmuc($_GET['ma_danhmuc']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                $ma_danhmuc = $_POST['ma_danhmuc'];
                $ten_danhmuc = $_POST['ten_danhmuc'];
                if (empty($ten_danhmuc)) {
                    $error['ten_danhmuc'] = "không được để trống!";
                    $check = false;
                }

                update_danhmuc($ma_danhmuc, $ten_danhmuc);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

            // controler sản phẩm
        case 'addsp':
            $error = [];
            // Kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $check = true;
                $ma_danh_muc = $_POST['ma_danh_muc'];

                $ten_sanpham = $_POST['ten_sanpham'];
                if (empty($ten_sanpham)) {
                    $error['ten_sanpham'] = "không được để trống!";
                    $check = false;
                }

                $mota = $_POST['mota'];
                if (empty($mota)) {
                    $error['mota'] = "không được để trống!";
                    $check = false;
                }

                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file". htmlspecialchars( basename( $_FILES["hinh"]["name"]))."has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                if ($hinh == '') {
                    $error['hinh'] = "không được để trống";
                    $check = false;
                }
                if ($check) {
                    insert_sanpham($ten_sanpham, $hinh, $mota, $ma_danh_muc);
                    $thongbao = "Thêm thành công";
                }
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;

        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $ma_danh_muc = $_POST['ma_danh_muc'];
            } else {
                $kyw = '';
                $ma_danh_muc = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $ma_danh_muc);
            include "sanpham/list.php";
            break;

        case 'xoasp':
            if (isset($_GET['ma_sanpham']) && ($_GET['ma_sanpham'] > 0)) {
                delete_sanpham($_GET['ma_sanpham']);
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;


        case 'suasp':
            if (isset($_GET['ma_sanpham']) && ($_GET['ma_sanpham'] > 0)) {
                $sanpham = loadone_sanpham($_GET['ma_sanpham']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;

        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ma_sanpham = $_POST['ma_sanpham'];
                $ma_danh_muc = $_POST['ma_danh_muc'];
                $ten_sanpham = $_POST['ten_sanpham'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file". htmlspecialchars( basename( $_FILES["hinh"]["name"]))."has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($ma_sanpham, $ma_danh_muc, $ten_sanpham, $mota, $hinh);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
