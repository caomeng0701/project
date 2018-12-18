<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台广告添加</title>
</head>
<body>
	<form action="/ads" method="post" >
		<input type="text" name="name" value="" placeholder="输入广告标题">
		<input type="text" name="content" value="" placeholder="输入广告内容">
		{{csrf_field()}}
		<input type="submit" value="添加" >
	
	</form>
</body>
</html>