<?php   
 require_once("db_class.php");
 $db = new DB();
 $id = $_REQUEST['id'];
 $date= $_REQUEST['date'];
 $title = $_REQUEST['title'];

$db->query("DELETE FROM  article Where id = '$id'");
  

$url = "http://localhost/blog/AdminBSBMaterialDesign-master/pages/tables/jquery-datatable.php";
echo "<script type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>"; 

?>