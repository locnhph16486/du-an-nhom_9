<?php
session_start();
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : "/";
require_once './commons/utils.php';
require_once './dao/system_dao.php';
// require_once './vendor/PHPMailer/src/Exception.php';
// require_once './vendor/PHPMailer/src/PHPMailer.php';
// require_once './vendor/PHPMailer/src/SMTP.php';
switch ($url) {
    case '/':
        require_once './client/business/homepage.php';
        home();
        break;
    case 'dang-nhap':
        require_once './client/business/user.php';
        login();
        break;
    case 'dang-ky':
        require_once './client/business/user.php';
        register();
        break;
    case 'home-brand':
        require_once './client/business/homepage.php';
        home();
        break;
    case 'gioi-thieu':
        require_once './client/business/homepage.php';
        about();
    case 'danh-muc':
        require_once './client/business/category.php';
        list_product();
        break;
    case 'cp-admin':
        require_once './admin/business/dashboard.php';
        dashboard_index();
        break;
    case 'cp-admin/shoe_brand':
        require_once './admin/business/shoe_brand.php';
        brand_index();
        break;
    case 'cp-admin/shoe_brand/xoa':
        require_once './admin/business/shoe_brand.php';
        brand_remove();
        break;
    case 'cp-admin/shoe_brand/tao-moi':
        require_once './admin/business/shoe_brand.php';
        brand_add_form();
        break;
    case 'cp-admin/shoe_brand/luu-tao-moi':
        require_once './admin/business/shoe_brand.php';
        brand_save_add();
        break;
    case 'cp-admin/shoe_brand/cap-nhat':
        require_once './admin/business/shoe_brand.php';
        brand_edit_form();
        break;
    case 'cp-admin/shoe_brand/luu-cap-nhat':
        require_once './admin/business/shoe_brand.php';
        brand_save_edit();
        break;
    case 'cp-admin/shoe_category':
        require_once './admin/business/shoe_category.php';
        category_index();
        break;
    case 'cp-admin/shoe_category/xoa':
        require_once './admin/business/shoe_category.php';
        category_remove();
        break;
    case 'cp-admin/shoe_category/tao-moi':
        require_once './admin/business/shoe_category.php';
        category_add_form();
        break;
    case 'cp-admin/shoe_category/luu-tao-moi':
        require_once './admin/business/shoe_category.php';
        category_save_add();
        break;
    case 'cp-admin/shoe_category/cap-nhat':
        require_once './admin/business/shoe_category.php';
        category_edit_form();
        break;
    case 'cp-admin/shoe_category/luu-cap-nhat':
        require_once './admin/business/shoe_category.php';
        category_save_edit();
        break;
    //
    case 'cp-admin/shoes':
        require_once './admin/business/shoes.php';
        shoes_index();
        break;
    case 'cp-admin/shoes/xoa':
        require_once './admin/business/shoes.php';
        shoes_remove();
        break;
    case 'cp-admin/shoes/tao-moi':
        require_once './admin/business/shoes.php';
        shoes_add_form();
        break;
    case 'cp-admin/shoes/luu-tao-moi':
        require_once './admin/business/shoes.php';
        shoes_save_add();
        break;
    case 'cp-admin/shoes/cap-nhat':
        require_once './admin/business/shoes.php';
        shoes_edit_form();
        break;
    case 'cp-admin/shoes/luu-cap-nhat':
        require_once './admin/business/shoes.php';
        shoes_save_edit();
        break;
    case 'cp-admin/shoes/chi-tiet-giay':
        require_once './admin/business/shoes.php';
        shoes_detailed();
        break; 
    //
    case 'cp-admin/shoe_size':
        require_once './admin/business/shoe_size.php';
        size_index();
        break;
    case 'cp-admin/shoe_size/xoa':
        require_once './admin/business/shoe_size.php';
        size_remove();
        break;
    case 'cp-admin/shoe_size/tao-moi':
        require_once './admin/business/shoe_size.php';
        size_add_form();
        break;
    case 'cp-admin/shoe_size/luu-tao-moi':
        require_once './admin/business/shoe_size.php';
        size_save_add();
        break;
    case 'cp-admin/shoe_size/cap-nhat':
        require_once './admin/business/shoe_size.php';
        size_edit_form();
        break;
    case 'cp-admin/shoe_size/luu-cap-nhat':
        require_once './admin/business/shoe_size.php';
        size_save_edit();
        break;
    //
    case 'cp-admin/image_shoe':
        require_once './admin/business/image_shoe.php';
        image_index();
        break;
    case 'cp-admin/image_shoe/xoa':
        require_once './admin/business/image_shoe.php';
        image_remove();
        break;
    case 'cp-admin/image_shoe/tao-moi':
        require_once './admin/business/image_shoe.php';
        image_add_form();
        break;
    case 'cp-admin/image_shoe/luu-tao-moi':
        require_once './admin/business/image_shoe.php';
        image_save_add();
        break;
    case 'cp-admin/image_shoe/cap-nhat':
        require_once './admin/business/image_shoe.php';
        image_edit_form();
        break;
    case 'cp-admin/image_shoe/luu-cap-nhat':
        require_once './admin/business/image_shoe.php';
        image_save_edit();
        break;
    default:
        # code...
        break;
}

?>