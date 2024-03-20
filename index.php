<?php
  session_start();
  include "model/pdo.php";
  include "model/danhmuc.php";
  include "model/sanpham.php";
  include "view/header.php";
  // include "view/home.php";
  include "global.php";

  if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[]; //moi

  $spnew=loadall_sanpham_home();
  $dsdm=loadall_danhmuc();
  

  if((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch ($act) {

      case 'sanpham':
        if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
          $kyw=$_POST['kyw'];
        }else{
          $kyw="";

        }
        if(isset($_GET['ma_danhmuc'])&&($_GET['ma_danhmuc']>0)){
          $ma_danhmuc=$_GET['ma_danhmuc'];
        }else{
          $ma_danhmuc=0;
        }
        
        $dssp=loadall_sanpham($kyw,$ma_danhmuc);
        $tendm=load_ten_dm($ma_danh_muc);
        //chú ý chỗ này
        include "view/sanpham.php";
        break;

        case 'sanphamct':
          if(isset($_GET['ma_sanpham'])&&($_GET['ma_sanpham']>0)){
            $ma_sanpham=$_GET['ma_sanpham'];
            $onesp=loadone_sanpham($ma_sanpham);
            extract($onesp);
            $sp_cung_loai=load_sanpham_cungloai($ma_sanpham,$ma_danh_muc);//luu ý
          include "view/sanphamct.php";
          }else{
          include "view/home.php";
          }
          break;


            case 'thoat':
              session_unset();
              header('Location: index.php');
              break;

        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;

            //moi
            case 'addtocart':
              if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                $id=$_POST['id'];
                $name=$_POST['name'];
                $img=$_POST['img'];
                $price=$_POST['price'];
                $soluong=1;
                $ttien=$soluong* $price;
                $spadd=['$id,$name,$img,$price,$soluong,$ttien'];
                array_push($_SESSION['mycart'],$spadd);
              }
              //
              include "view/cart/viewcart.php";
              break;
            case 'viewcart':
              include "view/cart/viewcart.php";
              break;
            case 'delcart':
              header('location: index.php?act=viewcart');
              break;
        default:
            include "view/home.php";
            break;
    }
  }else{
        include "view/home.php";
  }
  include "view/footer.php";
?>



