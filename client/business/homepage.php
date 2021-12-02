<?php
require_once './dao/system_dao.php';
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;
function home(){
    // $sqlQuery = "select * from products";
    // $products = executeQuery($sqlQuery, true);
    client_render('homepage/index.php');
}
?>