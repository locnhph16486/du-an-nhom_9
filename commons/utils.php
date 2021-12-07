<?php

const BASE_URL = "http://localhost/du-an-nhom_9/";
const PUBLIC_URL = BASE_URL . 'public/';
const ADMIN_URL = BASE_URL . 'cp-admin/';
const ADMIN_ASSET = BASE_URL . 'public/admin-assets/';
const HOME = BASE_URL . 'public/home/';
const HOME_ASSET = BASE_URL . 'homepage/';


function dd(){
    $data = func_get_args();
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}
function user_render($link,$data = []){
    extract($data);
    $link= './client/views/user/'.$link;
    include_once $link;
}
function client_render($view, $data = []){
    extract($data);
    $view = './client/views/' . $view;
    include_once "./client/views/layouts/main.php";
}

function admin_render($view, $data = [], $jsFile = null){
    extract($data);
    $view = './admin/views/' . $view;
    include_once "./admin/views/layouts/main.php";
}

?>