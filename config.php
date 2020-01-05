<?php
/**
 * khai báo hằng dùng để kết nối đến cơ sở dữ liệu
 */
define("DB_SERVER","localhost");
define("DB_SERVER_USERNAME","root");
define("DB_SERVER_PASSWORD", "");
define("DB_SERVER_NAME", "demoapplogin1");

/* tạo biến connection kết nối đến CSDL bằng hàm mysqli_connect*/
$connection= mysqli_connect(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD,DB_SERVER_NAME);

/**
 * kiểm tra xem kết nối đến csdl có thành công hay không
 * nếu không thành công thì ngắt chương trình bằng CÂU LỆNH die()
 */
if($connection==false) {
    die("ERROR không thể kết nối đến cơ sở dữ liệu" . mysqli_connect_error());
}


