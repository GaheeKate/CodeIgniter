<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<form name="new" action="/board/store" method="post">
		<table>
			<tr>
				<th>Title</th>
				<td>
					<input type="text" name="title" value="" />
				</td>
			</tr>
			<tr>
				<th>Content</th>
				<td>
					<textarea type="text" name="content" value="" rows="8"></textarea>
				</td>
			</tr>
			<tr>
				<th colspan="2">
					<input type="submit" value="SAVE" />
				</th>

			</tr>
		</table>
	</form>
</body>

</html>