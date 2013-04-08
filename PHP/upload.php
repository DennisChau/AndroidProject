<?php 
ini_set('display_errors', 'On');
include "base.php"; 

		
	     
         mysql_query("INSERT INTO android(name, phone1, phone2, email, school, company, jobtitle, photo) VALUES ('".$_POST['name']."','".$_POST['phone1']."','".$_POST['phone2']."', '".$_POST['email']."', '".$_POST['school']."','".$_POST['company']."','".$_POST['jobtitle']."','".$_POST['photo']."')")or die('Error, query failed');
         // echo $query;
      
 
        //  echo "<br>Image successfully uploaded to database<br>";
          
 
 

?>
<html>
<p><a href="index.php">click here back to admin channel</a>.</p>
</html>