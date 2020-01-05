<?php
/**
 * khởi động session trong php
 */

session_start();
 /** kiểm tra xem người dùng đã đăng nhập hay chưa
 * nếu chưa đăng nhập ta sẽ chuyển hướng về trang login.php
 */

if(!isset($_SESSION["loggedin"]) || ($_SESSION["loggedin"] != true))  {
   // để chuyển hướng redirect trong php sử dụng hàm header
    header("Location: login.php");
    exit;
}
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

/**
 * nếu đã đăng nhập thành công
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1> Đăng nhập thành công</h1>
            <p>Tên người dùng: <?php echo $_SESSION["username"] ?></p>
            <p><a href="logout.php">Đăng xuất</a></p>
        </div>
    </div>
</div>
</body>
</html>