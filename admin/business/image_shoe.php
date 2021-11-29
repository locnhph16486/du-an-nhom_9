<?php
    function image_index(){
    $sql = "select * from image_shoe";
    $img = executeQuery($sql, true);
    $sql = "select * from shoes";
    $shoes = executeQuery($sql, true);
    // hiển thị view
    admin_render('image_shoe/index.php', compact('img','shoes'), 'admin-assets/custom/category_index.js');
    }
    function image_remove(){
        $id = $_GET['id'];
        $sql = "delete from image_shoe where id = $id";
        executeQuery($sql);
        header("location: " . ADMIN_URL . 'image_shoe');
    }
    function image_add_form(){
        $sql = "select * from shoes";
        $shoes = executeQuery($sql, true);
        admin_render('image_shoe/add-form.php', compact('shoes'), 'admin-assets/custom/category_add.js');
    }

    function image_save_add(){
        $id=$_GET['id'];
        $file = $_FILES['image'];
        $filename = "";
        if($file['size'] > 0){
            $filename = uniqid() . '-' . $file['name'];
            move_uploaded_file($file['tmp_name'], './public/uploads/' . $filename);
            $filename = 'uploads/' . $filename;
        }
        $sql = "insert into image_shoe (id_shoe,img) values ($id,'$filename')";
        executeQuery($sql);
        header("location: " . ADMIN_URL . 'image_shoe');
    }
    function image_edit_form(){
        $sql = "select * from shoes";
        $shoes = executeQuery($sql, true);
        admin_render('image_shoe/edit-form.php',compact('shoes'), 'admin-assets/custom/category_add.js');
    }
    function image_save_edit(){
        $id_shoe = $_GET['id_shoe'];
        $id=$_GET['id'];
        $file = $_FILES['image'];
        $filename = "";
        if($file['size'] > 0){
            $filename = uniqid() . '-' . $file['name'];
            move_uploaded_file($file['tmp_name'], './public/uploads/' . $filename);
            $filename = 'uploads/' . $filename;
        }
        $sql = "UPDATE image_shoe set id_shoe='$id_shoe' , img='$filename' where id=$id";
        executeQuery($sql);
        header("location: " . ADMIN_URL . 'image_shoe');
    }
?>