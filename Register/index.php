<!DOCTYPE html>
<html>
<head>
	<title>New User | Register </title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" >
	<link rel="stylesheet" type="text/css" href="style1.css">
	<meta charset="utf-8">
</head>
<body>
<div class="giris">
	<h2>Register</h2>
	
	<form method="POST" action="database.php">
		<div class="pc">
			<input type="text" required="" name="username">
			<span>Username</span>
		</div>
		<div class="pc">
			<input type="text" required="" name="displayname">
			<span>Display Name</span>
		</div>
		<div class="pc">
			<input type="text" required="" name="phone">
			<span>Phone</span>
		</div>
		<div class="pc">
			<input type="text" required="" name="email">
			<span>Email</span>
		</div>
		<div class="pc">
		<select>
   			 <option>Select User Roles...</option>
   			 <option>Guest</option>
    		 <option>Admin</option>
    		 <option>SuperAdmin</option>
		</select>
		</div>
		<div class="pc">
			
			<input type="checkbox" name="enabled" value="true" checked>
			
				Enabled
				</span>
			<input type="checkbox" name="enabled" value="false" >
		
				Not Enabled
			</span>
		</div>
		<div class="pc">
			<input type="submit" value="save" onclick="alert('User information has been saved.')";>
 
		</div>
	</form>	
	<a href="#">If you want to see the database,<span> <a href="http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=dbase&table=dbase&pos=0" target="_blank"><b>Click here!</b></a></span></a>

</div>
</body>
</html>