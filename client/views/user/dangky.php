<?php
require_once './dao/system_dao.php';
if (isset($_POST['btnLuu'])) {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $address = $_POST['address'];

    if ($_FILES['avatar']['size'] > 0) {
        $avatar = $_FILES['avatar']['name'];
    } else {
        $avatar = '';
    }
   
    $sql = "INSERT INTO user SET user_name='$user_name', password='$password', email='$email',
     name='$name', user_address='$user_address', avatar='$avatar'";

    $stmt = $conn->prepare($sql);
    /*var_dump($sql);
die;*/
    if ($stmt->execute()) {
        //Upload ảnh lên server
        if (!empty($avatar)) {
            move_uploaded_file($_FILES['avatar']['tmp_name'], '../img/' . $avatar);
        }
        header("location:dangnhap.php?message=Thêm dữ liệu thành công");
        die;
    } else {
        echo "Thêm dữ liệu thất bại";
    }
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>X-SPORTS</title>
    <script src="public/website/js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="public/website/css/dangnhap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- for-mobile-apps -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //for-mobile-apps -->
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
    <!--header start here-->
    <div class="header-main">
        
        <form action="" method="post" enctype="multipart/form-data">
            <h1>X-SPORTS</h1>
            <label for="">Tên đăng nhập</label>
            <input class="form-control" type="text" name="user_name">

            <label for="">Mật khẩu </label>
            <input class="form-control" type="text" name="password">

            <label for=""> Email </label>
            <input class="form-control" type="text" name="email" />

            <label for=""> Họ và Tên </label>
            <input class="form-control" type="text" name="name">

            <label for=""> Hình Ảnh </label>
            <input class="form-control" type="file" name="avatar">

            <button class="btn btn-primary" type="submit" name="btnLuu">Đăng Ký</button>
        </form>
    </div>
</body>

</html>