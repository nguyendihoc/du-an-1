<?php
include "header.php";
include "../model/pdo.php";
include "../model/danhmuc.php";
// controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            // Kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $tendm = $_POST['tendm'];
                insert_danhmuc($tendm);
                $thongbao = "Thêm thành công";
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
                $ten_danhmuc = $_POST['ten_danhmuc'];
                $ma_danhmuc = $_POST['ma_danhmuc'];
                update_danhmuc($ma_danhmuc, $ten_danhmuc);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
