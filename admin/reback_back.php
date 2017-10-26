<?php   
require_once("db_class.php");
$db = new DB();  

$id = $_REQUEST['id'];   
$reback = $_REQUEST['reback'];   

$db->query("UPDATE message Set reback = '$reback' WHERE id = '$id'");
//$article =$db->fetch_array();
/*$db-> query("SELECT * FROM news");
  $result = mysqli_query($conn,$sql_query) or die('MySQL query error');*/
 
$url = "http://localhost/blog/admin/pages/tables/normal-tables.php";
echo "<script type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>";
?>