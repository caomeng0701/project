<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件上传</title>
</head>
<body>
	<form action="/file" method="post" >
		<input type="file" name="pic" value="" enctype="multipart/form-data">
		{{csrf_field()}}
		<input type="submit" value="上传" >
	
	</form>
</body>
</html>