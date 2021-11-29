<?php 
    function brand_index(){
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    // lấy danh sách danh mục
    $sql = "select * from shoe_brand where name like '%$keyword%'";
    $brand = executeQuery($sql, true);

    // hiển thị view
    admin_render('shoe_brand/index.php', compact('brand', 'keyword'), 'admin-assets/custom/category_index.js');
    }
    function brand_remove(){
        $id = $_GET['id'];
        $sql = "delete from shoe_brand where id = $id";
        executeQuery($sql);
        header("location: " . ADMIN_URL . 'shoe_brand');
    }
    
    function brand_add_form(){
        admin_render('shoe_brand/add-form.php', [], 'admin-assets/custom/category_add.js');
    }
    
    function brand_save_add(){
        $name = $_POST['name'];
        // $show_menu = isset($_POST['show_menu']) ? 1 : 0;
        $sql = "insert into shoe_brand (name) values ('$name')";
        executeQuery($sql);
        header("location: " . ADMIN_URL . 'shoe_brand');
    }
    function brand_edit_form(){
        $sql = "select * from shoe_brand";
        $brand = executeQuery($sql, true);
        admin_render('shoe_brand/edit-form.php',compact('brand'), 'admin-assets/custom/category_add.js');
    }
    function brand_save_edit(){
        $name = $_POST['name'];
        $id=$_GET['id'];
        $sql = "UPDATE shoe_brand set name='$name' where id=$id";
        executeQuery($sql);
        header("location: " . ADMIN_URL . 'shoe_brand');
    }
?>