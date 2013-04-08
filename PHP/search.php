<?php include "base.php"; ?>  
     
    <html >  
		<head>
		<title>Welcome to search page (3330)</title>  
		</head>  
		<body>  
		
		
			<h1>Search a profile</h1>  
		   <p>Please enter a profile name below:</p>  
			<form method="GET" action="display.php" ENCTYPE="multipart/form-data">  
			<fieldset>  
				Name:<input type="varchar" name="name" required /><br /> 

				<input type="submit"  name="submit" value="get" />  
			    <p><a href="index.php">click here back to admin channel</a>.</p>
			</fieldset>  
			</form> 

			
		</body>  
</html>  