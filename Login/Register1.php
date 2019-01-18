<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login form</title>
<link rel="stylesheet" href="style.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>


<div class="loginBox" class="user">
<img src="anatol-lem-186853.jpg" class="avatar">
<h2>Registration</h2>
<p><span class="error">* Required</span></p>
<form method="post" action="project.php">
	<p>Username</p>
	<input type="text" name="name">
  <span class="error"></span>

	
        
        <p>Email</p>
	<input type="text" name="email" >
  
        <p>Contact number</p>
	<input type="text" name="phno" required="">
         <p>Club &nbsp &nbsp &nbsp &nbsp
         <select name="club">
    <option value="Music">Music</option>
    <option value="Dance">Dance</option>
    <option value="Astronomy">Astronomy</option>
    <option value="Writer's">Writer's</option>
    <option value="Samvedna">Samvedna</option>
    <option value="Photography">Photography</option>
    <option value="Drama">Drama</option>
    <option value="Art and Craft">Art and Craft</option>
  </select>
</p>
  </br>
	

	<input type="submit" name="submit" value="Submit">  
		
</form>	
</body>
</html>
