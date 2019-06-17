<?php

$students=[
[
	'name' =>"Ram Sharma",
	'age' => 10,
	'college' => "abc"
],
[
	'name' =>"Hari Sharma",
	'age' => 11,
	'college' => "abc",
],
[

	'name' =>"Rita Sharma",
	'age' => 12,
	'college' => "abc"
],
[

	'name' =>"Raita Sharma",
	'age' => 14,
	'college' => "abc"
]

];


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
			<td>Name</td>
			<td>Age </td>
			<td> College</td>
		</tr>

<?php
foreach ($students as $student) { ?>
		<tr>

			<td><?php echo $student['name']; ?> </td>
			<td><?php echo $student['age']; ?> </td>
			<td><?php echo $student['college']; ?> </td>
		</tr>
		<?php } ?>
	</table>

</body>
</html>