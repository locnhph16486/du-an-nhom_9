<?php 
    function category_index(){
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    // lấy danh sách danh mục
    $sql = "select * from shoe_category where name like '%$keyword%'";
    $category = executeQuery($sql, true);
    $sql = "select * from shoe_brand";
    $brand = executeQuery($sql, true);
    // hiển thị view
    admin_render('shoe_category/index.php', compact('category', 'keyword','brand'), 'admin-assets/custom/category_index.js');
    }
    function category_remove(){
        $id = $_GET['id'];
        $sql = "delete from shoe_category where id = $id";
        executeQuery($sql);
        header("location: " . ADMIN_URL . 'shoe_category');
    }
    
    function brand_add_form(){
        $sql = "select * from shoe_brand";
        $brand = executeQuery($sql, true);
        admin_render('shoe_category/add-form.php', compact('brand'), 'admin-assets/custom/category_add.js');
    }
    
    function brand_save_add(){
        $name = $_POST['name'];
        $sql = "insert into shoe_category (name) values ('$name')";
        executeQuery($sql);
        header("location: " . ADMIN_URL . 'shoe_category');
    }
?>