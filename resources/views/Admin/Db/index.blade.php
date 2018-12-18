<!-- @include("Admin.Vie.header"); -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>模板</title>
</head>
<body>
		<center>
			<form action="/db" method="get" accept-charset="utf-8">
				用户名:<input type="text" name="keyword" value="{{$request['keywords
				'] or ''}}">
				<input type="submit" value="查询">
			</form>
			<table width="400px" border="1px">
				<tr>
						<th>ID</th>
						<th>username</th>
						<th>password</th>
				</tr>
				@foreach($data as $row)
				<tr>
					<td>{{$row['id']}}</td>
					<td>{{$row['username']}}</td>
					<td>{{$row['password']}}</td>
				</tr>
				@endforeach
			</table>
			{{$data->appends($request)->render()}}
		</center>
		
</body>
</html>