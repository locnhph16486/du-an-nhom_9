<?php
require_once './dao/system_dao.php';
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;
function home(){
    $sql="select * from shoe_brand";
    $brand=executeQuery($sql,true);
    $sql="select * from shoe_category";
    $cate=executeQuery($sql,true);
    $sql="select * from image_shoe";
    $img=executeQuery($sql,true);
    $sqlQuery = "select * from shoes";
    $products = executeQuery($sqlQuery, true);
    client_render('homepage/index.php',compact('products','brand','cate','img'));
}
?>