<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<form action="/user/process" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
      	Name :
		<input type="text" name="name"> <br/>
		Adress :
		<input type="text" name="adress"> <br/>
		<input type="submit" value="Submit">
	</form>
 
</body>
</html>