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
        // $id_shoe = $_POST['id_shoe'];
        if(empty($_POST["size"])){
            $filterSize = 0;
            // header("location: " . ADMIN_URL . 'shoe_size/tao-moi?id='.$id.'&&error=done'); 
        } else{
            $size = filterSize($_POST["size"]);
            if($size == FALSE){
                $filterSize = 1;
                // header("location: " . ADMIN_URL . 'shoe_size/tao-moi?id='.$id); 
            }
        }
        if(empty($_POST["quantity"])){
            $filterQuantity = 0;
            // header("location: " . ADMIN_URL . 'shoe_size/tao-moi?id='.$id.'&&error=done'); 
        } else{
            $quantity = filterQuantity($_POST["quantity"]);
            if($quantity == FALSE){
                $filterQuantity = 1;
                // header("location: " . ADMIN_URL . 'shoe_size/tao-moi?id='.$id); 
            }
        }
        if($filterQuantity!=""||$filterSize!=""){
            header("location: " . ADMIN_URL . 'shoe_size/tao-moi?id='.$id.'&&errorS='.$filterSize.'&&errorQ='.$filterQuantity); 
        }
        $quantity = $_POST['quantity'];
        $size = $_POST['size'];
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
        $id=$_GET['id'];
        $id_shoe = $_GET['id_shoe'];
        if(empty($_POST["size"])){
            $filterSize = 0;
        } else{
            $size = filterSize($_POST["size"]);
            if($size == FALSE){
                $filterSize = 1;
            }
        }
        if(empty($_POST["quantity"])){
            $filterQuantity = 0;
        } else{
            $quantity = filterQuantity($_POST["quantity"]);
            if($quantity == FALSE){
                $filterQuantity = 1;
            }
        }
        if($filterQuantity!=""||$filterSize!=""){
            header("location: " . ADMIN_URL . 'shoe_size/cap-nhat?id='.$id.'&&id_shoe='.$id_shoe.'&&errorS='.$filterSize.'&&errorQ='.$filterQuantity); 
        }
        $size = $_POST['size'];
        $quantity = $_POST['quantity'];
        $id=$_GET['id'];
        $sql = "UPDATE shoe_size set id_shoe='$id_shoe' , size=$size , quantity=$quantity where id=$id";
        executeQuery($sql);
        header("location: " . ADMIN_URL . 'shoe_size');
    }
    //
    $filterSize=$filterQuantity="";
    function filterSize($field){
        // Làm sạch Size
        $field = filter_var(trim($field), FILTER_SANITIZE_NUMBER_FLOAT);
        
        // Xác thực Size
        if(filter_var($field, FILTER_SANITIZE_NUMBER_FLOAT)){
            return $field;
        } else{
            return FALSE;
        }
    }
    function filterQuantity($field){
        // Làm sạch QUantity
        $field = filter_var(trim($field), FILTER_SANITIZE_NUMBER_INT);
        
        // Xác thực QUantity
        if(filter_var($field, FILTER_SANITIZE_NUMBER_INT)){
            return $field;
        } else{
            return FALSE;
        }
    }
?>