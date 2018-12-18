<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
</head>
<body>
	<form action="/req" method="post" >
		<input type="text" name="name" value="{{old('name')}}" placeholder="输入用户名">
		<input type="text" name="phone" value="{{old('phone')}}" placeholder="输入电话或手机号">
		<input type="text" name="email" value="{{old('email')}}" placeholder="输入邮箱">
		{{csrf_field()}}		
		<input type="submit" value="登录" >
		</form>
</body>
</html>