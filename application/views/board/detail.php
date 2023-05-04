<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>List</title>
</head>

<body>
	<h1>This is the list of this board</h1>
	<table border="1">
		<tr>
			<th>Title</th>
			<td>
				<?= $detail->title; ?>
			</td>
		</tr>
		<tr>
			<th>Contents</th>
			<td>
				<?= $detail->content; ?>
			</td>
		</tr>
		<tr>
			<th>Date</th>
			<td>
				<?= $detail->regdate; ?>
			</td>
		</tr>

		<tr>
			<th colspan="2"><a href="/board">Back to List</a></th>

		</tr>

	</table>

	<!-- </td>
				<td><a href="/board/detail/<?= $ls->idx; ?>">Detail</a>
				</td>
				<td><a href="/board/edit/<?= $ls->idx; ?>">Edit</a>
				</td>
	<a href="/board/create">Create New</a> -->
</body>

</html>