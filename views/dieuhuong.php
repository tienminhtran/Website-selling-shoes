<?php
    $action = isset($_GET['action']) ? $_GET['action'] : "trangchu"; 

    switch ($action) {
    	case 'trangchu':
    		require_once('home/home.php');
    		break;
    	case 'cuahang':
    	    require_once('cuahang/cuahang.php');
            break;

        case 'cuahang1':
            require_once('cuahang/cuahang.php');
            break;

        case 'taikhoan':
            require_once('taikhoannguoidung/taikhoannguoidung.php');
            break;
        case 'luachon':
            require_once('cuahang/cuahang.php');
            break;




    	case 'gioithieu':
    	    require_once('gioithieu/gioithieu.php');
            break;
        case 'dangnhap':
            require_once('dangnhap/dangnhap.php');
            break;
        case 'dangky':
            require_once('dangnhap/dangky.php');
            break;
        case 'giohang':
            require_once('giohang/giohang.php');
            # code...
            break;
        case 'chitietmathang':
            require_once('chitietmathang/chitietmathang.php');
            require_once('sanphamlienquan/sanphamlienquan.php');
            # code...
            break;
        case 'giohang':
            require_once('giohang/giohang.php');
            # code...
            break;
        case 'quenmatkhau':
            require_once('dangnhap/quenmk.php');
            # code...
            break;
        case 'laymatkhau_submit':
            require_once('dangnhap/quenmk.php');
            # code...
            break;
        case 'thanhtoan':
            require_once('thanhtoan/thanhtoan.php');
            # code...
            break;
        case 'hoanthanhdonhang':
            require_once('hoanthanhdonhang/hoanthanhdonhang.php');
            # code...
            break;

    	default:
    		# code...
    		break;
    }
