<?php 
	declare(strict_types=1);
 	require_once 'TestClassController.php';
 	$obj=new TestClassController('Reformed','Tech');
 	$executing_data=$obj->execution();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Answer for question 1</title>
</head>
<body>
	<table border="1px solid">
		<thead>
			<tr><th colspan="2"> Executing result form 1-100 </th></tr>
			<tr>
				<th>For key</th>
				<th> executing value</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($executing_data as $key =>$execute_value):?>
				<tr>
					<td><?= $key ?></td>
					<td><?= $execute_value ?></td>

				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>
