<?php 
    function shoes_index(){
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    // lấy danh sách danh mục
    $sql = "select * from shoes where name like '%$keyword%'";
    $shoes = executeQuery($sql, true);
    $sql = "select * from shoe_category";
    $category = executeQuery($sql, true);
    $sql = "select * from shoes";
    $brand = executeQuery($sql, true);
    // hiển thị view
    admin_render('shoes/index.php', compact('shoes', 'keyword','brand','category'), 'admin-assets/custom/category_index.js');
    }
    function shoes_remove(){
        $id = $_GET['id'];
        $sql = "delete from shoes where id = $id";
        executeQuery($sql);
        header("location: " . ADMIN_URL . 'shoes');
    }
    function shoes_add_form(){
        $sql = "select * from shoe_category";
        $cate = executeQuery($sql, true);
        admin_render('shoes/add-form.php', compact('cate'), 'admin-assets/custom/category_add.js');
    }
    function shoes_save_add(){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $detailed =$_POST['detailed'];
        $favor = $_POST['favor'];
        $sale = $_POST['sale'];
        $id = $_POST['id_category'];
        $sql = "insert into shoes (id_category,name,price,detailed,favor,sale) values ('$id','$name','$price','$detailed','$favor','$sale')";
        executeQuery($sql);
        header("location: " . ADMIN_URL . 'shoes');
    }
    function shoes_edit_form(){
        $sql = "select * from shoe_category";
        $cate = executeQuery($sql, true);
        $sql = "select * from shoes";
        $shoes = executeQuery($sql, true);
        admin_render('shoes/edit-form.php',compact('cate','shoes'), 'admin-assets/custom/category_add.js');
    }
    function shoes_save_edit(){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $detailed =$_POST['detailed'];
        $favor = $_POST['favor'];
        $sale = $_POST['sale'];
        $id_category= $_POST['id_category'];
        $id=$_GET['id'];
        $sql = "UPDATE shoes set id_category=$id_category , name='$name' , detailed='$detailed' , favor='$favor' , sale='$sale' where id=$id";
        executeQuery($sql);
        header("location: " . ADMIN_URL . 'shoes');
    }
    function shoes_detailed(){
        $id=$_GET['id'];
        $sql = "select * from shoe_size where id_shoe = $id";
        $size = executeQuery($sql, true);
        $sql = "select * from image_shoe where id_shoe = $id";
        $img = executeQuery($sql, true);
        $sql = "select * from shoes where id=$id";
        $shoes = executeQuery($sql, true);
        admin_render('shoes/detailed.php', compact('shoes','size','id','img'), 'admin-assets/custom/category_add.js');
    }
    function filterFloat($field){
        // Làm sạch số
        $field = filter_var(trim($field), FILTER_SANITIZE_NUMBER_FLOAT);
        
        // Xác thực số
        if(filter_var($field, FILTER_SANITIZE_NUMBER_FLOAT)){
            return $field;
        } else{
            return FALSE;
        }
    }
    function filterInt($field){
        // Làm sạch Size
        $field = filter_var(trim($field), FILTER_SANITIZE_NUMBER_FLOAT);
        
        // Xác thực Size
        if(filter_var($field, FILTER_SANITIZE_NUMBER_FLOAT)){
            return $field;
        } else{
            return FALSE;
        }
    }
?>