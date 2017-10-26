<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("db_class.php");
$name = $_POST['name'];
$pw = $_POST['password'];
//搜尋資料庫資料
$db = new DB();                                     
$db->query("SELECT * FROM user where name = '$name'");

$user = $db->fetch_array();
//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($name != null && $pw != null && $user["name"] == $name && $user["password"] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $user["email"];
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
}
?>