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
			<th>Date</th>
			<th></th>
			<th></th>
		</tr>


		<!-- loop index() -->
		<?php
		foreach ($list as $ls) { ?>
			<tr>
				<td>
					<?= $ls->title; ?>
				</td>
				<td>
					<?= $ls->regdate; ?>
				</td>
				<td><a href="/board/detail/<?= $ls->idx; ?>">Detail</a>
				</td>
				<td><a href="/board/edit/<?= $ls->idx; ?>">Edit</a>
				</td>
			</tr>
			<?php
		}
		?>

	</table>


	<a href="/board/create">Create New</a>
</body>

</html>