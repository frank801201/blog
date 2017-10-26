<?php   
require_once("db_class.php");
$db = new DB();   
$id = $_REQUEST['id'];   
$date= $_REQUEST['date'];
$title = $_REQUEST['title'];
$content = $_REQUEST['content'];   

$db->query("UPDATE article Set id = '$id', date = '$date', title = '$title', content = '$content' WHERE id = '$id'");
//$article =$db->fetch_array();
/*$db-> query("SELECT * FROM news");
  $result = mysqli_query($conn,$sql_query) or die('MySQL query error');*/
 
$url = "http://localhost/blog/AdminBSBMaterialDesign-master/pages/tables/jquery-datatable.php";
echo "<script type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>";
?>