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
    case 'cp-admin/shoe_category':
        require_once './admin/business/shoe_category.php';
        category_index();
        break;
    case 'cp-admin/shoe_category/xoa':
        require_once './admin/business/shoe_category.php';
        brand_remove();
        break;
    case 'cp-admin/shoe_category/tao-moi':
        require_once './admin/business/shoe_category.php';
        brand_add_form();
        break;
    case 'cp-admin/shoe_category/luu-tao-moi':
        require_once './admin/business/shoe_category.php';
        brand_save_add();
        break;
    default:
        # code...
        break;
}

?>