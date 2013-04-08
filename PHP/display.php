<?php
ini_set('display_errors', 'On');
include "base.php"; 



      
	  
	   $query = "SELECT * FROM android WHERE name=\"".$_GET['name']."\" ";
	 //Execute SQL query
	   $result = mysql_query($query) or die('Error! ' . mysql_error());
     //Display the results 
	   
	    while($row = mysql_fetch_array($result) ){
		
		print $row['name']."|";
		print $row['phone1']."|";
		print $row['phone2']."|";
		print $row['email']."|";
		print $row['school']."|";
		print $row['company']."|";
		print $row['jobtitle'];
      
//  echo "<td><button type='button'"|";
     //	echo"onclick=\"cprice('".$row['name']."');window.location.reload() \"";
	//	echo "> Delete!</button> </td></tr>";
	
	}

	

	
?>
