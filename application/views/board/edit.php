<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update</title>
</head>

<body>
	<h1>Update</h1>
	<table border="1">
		<form name="update" action="/board/update/<?= $edit->idx; ?>" method="post">
			<input type="hidden" name="_method" value="PUT">
			<table>
				<tr>
					<th>Title</th>
					<td>
						<input type="text" name="title" value="<?= $edit->title; ?>" />
					</td>
				</tr>
				<tr>
					<th>Contents</th>
					<td>
						<textarea type="text" name="content" rows="8"><?= $edit->content; ?></textarea>
					</td>
				</tr>
				<tr>
					<th colspan="2">
						<input type="submit" value="SAVE" />
						<a href="/board">Back to List</a>
					</th>

				</tr>
			</table>
		</form>
</body>

</html>