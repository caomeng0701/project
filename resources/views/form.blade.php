<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="/doadd" method="post">
		用户名:	<input type="text" name="name" value="" ><br/>
		密码:	<input type="password" name="pwd" value="" ><br/>
			{{csrf_field()}}
			<input type="submit"  value="提交" >
		
	</form>
</body>
</html>