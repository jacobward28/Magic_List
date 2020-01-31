<html>
<head>
</head>
<body>
<Title>Logged In </Title>
<form action="loggedin" method="POST">
	<input type="hidden" name="_token"
	value="<?php echo csrf_token();?> "/>
	
	<input name="display" value="display" type="submit"><br>
	</form>


</body>


</html>