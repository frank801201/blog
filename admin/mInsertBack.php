<?php   
 require_once("db_class.php");
 $db = new DB();
 $name = $_REQUEST['name'];
 $email= $_REQUEST['email'];
 $title = $_REQUEST['title'];
 $content = $_REQUEST['content'];
  
 $db->query("INSERT INTO message (`nickname`,`email`, `title`, `content`) VALUES ('$name','$email','$title','$content')");
 
 
  $url = "http://localhost/blog/contact.php";
echo "<script type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>"; 
 
?>