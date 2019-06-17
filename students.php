<?php
include "sources.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
</head>
<body>

	<?php include "header.php"; ?>

	<table border="1" width="500">
		<tr>
			<td>Name</td>
			<td>Age</td>
			<td>College</td>
		</tr>
		<?php foreach ($students as $student): ?>
			
		
		<tr>
			<td> <?php echo $student['name'];?></td>
			<td>20 </td>
			<td>SXC </td>
		</tr>

		<?php endforeach ?>
	</table>

</body>
</html>