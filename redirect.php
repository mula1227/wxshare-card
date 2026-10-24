<?php
// 声明页面header
header("Content-type:text/html;charset=utf-8");

// 获取分享ID
$shareid = trim($_GET["sid"]);

// 数据库配置
include './db_config.php';

// 连接数据库
$conn = new mysqli($db_url, $db_user, $db_pwd, $db_name);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

mysqli_query($conn,"SET NAMES utf8");
$sql = "SELECT * FROM wxzdy_share WHERE sid = '$shareid'";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        $redirect_url = $row["redirect_url"];


        header('Location: '.$redirect_url.'');
    }
} else {
    echo "<p style='text-align:center;margin-top:200px;font-size:18px;color:#666;'>链接不存在<br/>或者已经被删除了</p>";
}
$conn->close();
?>