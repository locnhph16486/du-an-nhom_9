<?php
require_once './dao/system_dao.php';
require_once './commons/utils.php';
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;
function login(){
    user_render('dangnhap.php');
}
function register(){
    user_render('dangky.php');
}
?>