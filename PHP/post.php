<?php include "base.php"; ?>  
     
    <html >  
		<head>
		<title>Welcome to POST page (3330)</title>  
		</head>  
		<body>  
		
		
			<h1>Posting a profile</h1>  
		   <p>Please enter your profile detail below:</p>  
			<form method="post" action="upload.php" ENCTYPE="multipart/form-data">  
			<fieldset>  
				Name:<input type="varchar" name="name" required /><br /> 
				Phone1:<input type="int" name="phone1"  /><br /> 
				Phone2:<input type="int" name="phone2"  /><br /> 
				Email:<input type="varchar" name="email"  /><br />
				School:<input type="varchar" name="school"  /><br />
				Company:<input type="varchar" name="company"  /><br />
				Job Title:<input type="varchar" name="jobtitle"  /><br />
				Photo: <input type="varchar" name="photo" /><br />  
				
		
				<input type="submit"  name="submit" value="post" />  
			    <p><a href="index.php">click here back to admin channel</a>.</p>
			</fieldset>  
			</form> 

			
		</body>  
</html>  