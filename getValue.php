<?php
 namespace getValue;
 include_once "form.php";  
     if($_POST){  
        $name=$_POST['name'];
        $name=$_POST['gender'];
        $name=$_POST['province'];
        $name=$_POST['email'];
            include_once "footer.php";  
     }  

?>