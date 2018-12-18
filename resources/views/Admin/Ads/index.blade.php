<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台广告列表</title>
</head>
<body>
	<center>
		<table border="1px" width="400px">
			<tr>
				<td>ID</td>
				<td>标题</td>
				<td>内容</td>
				<th>操作</th>
			</tr>
			<tr>
				<td>1</td>
				<td>Kobe</td>
				<td>666</td>
				<td><form action="/ads/1" method="post" accept-charset="utf-8">
					<button type="submit">删除</button>
					{{csrf_field()}}
					{{method_field('DELETE')}}
					|<a href="/ads/1/edit">修改</a></td>
				</form>
					
			</tr>
			<tr>
				<td>2</td>
				<td>姚明</td>
				<td>亚洲巨人</td>
				<td><form action="/ads/2" method="post" accept-charset="utf-8">
					<button type="submit">删除</button>
					{{csrf_field()}}
					{{method_field('DELETE')}}
					|<a href="/ads/2/edit">修改</a></td>
				</form>
					
			</tr>
		
		</table>






	</center>
</body>
</html>