<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台广告修改</title>
</head>
<body>
	<form action="/ads/1" method="post" >
		<input type="text" name="title" value="Kobe">
		<input type="text" name="content" value="666">
		{{csrf_field()}}
		{{method_field('PUT')}}
		<input type="submit" value="修改" >
	
	</form>
</body>
</html>