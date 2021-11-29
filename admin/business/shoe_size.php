<?php 
    function size_index(){
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    // lấy danh sách danh mục
    $sql = "select * from shoe_size where id_shoe like '%$keyword%'";
    $size = executeQuery($sql, true);
    $sql = "select * from shoes";
    $shoes = executeQuery($sql, true);
    // hiển thị view
    admin_render('shoe_size/index.php', compact('size', 'keyword','shoes'), 'admin-assets/custom/category_index.js');
    }
    function size_remove(){
        $id = $_GET['id'];
        $sql = "delete from shoe_size where id = $id";
        executeQuery($sql);
        header("location: " . ADMIN_URL . 'shoe_size');
    }
    function size_add_form(){
        $sql = "select * from shoes";
        $shoes = executeQuery($sql, true);
        admin_render('shoe_size/add-form.php', compact('shoes'), 'admin-assets/custom/category_add.js');
    }
    
    function size_save_add(){
        $id=$_GET['id'];
        $id_shoe = $_POST['id_shoe'];
        $size = $_POST['size'];
        $quantity = $_POST['quantity'];
        if(isset($id))
            $sql =  "insert into shoe_size (id_shoe,size,quantity) values ($id,$size,$quantity)";
        else
            $sql = "insert into shoe_size (id_shoe,size,quantity) values ($id_shoe,$size,$quantity)";
        executeQuery($sql);
        header("location: " . ADMIN_URL . 'shoe_size');
    }
    function size_edit_form(){
        $sql = "select * from shoes";
        $shoes = executeQuery($sql, true);
        admin_render('shoe_size/edit-form.php',compact('shoes'), 'admin-assets/custom/category_add.js');
    }
    function size_save_edit(){
        $id_shoe = $_GET['id_shoe'];
        $size = $_POST['size'];
        $quantity = $_POST['quantity'];
        $id=$_GET['id'];
        $sql = "UPDATE shoe_size set id_shoe='$id_shoe' , size=$size , quantity=$quantity where id=$id";
        executeQuery($sql);
        header("location: " . ADMIN_URL . 'shoe_size');
    }
?>