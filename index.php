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
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			
				<table class="table table-bordered table-hover table-striped table-responsive-md table-responsive-md">
		<thead class="thead-dark">
			<tr><th colspan="2" class="text-center"> Executing result form 1-100 </th></tr>
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
		</div>

		<div class="col-md-2"></div>

	</div>
</div>


<script src="js/bootstrap.min.js"></script>
</body>
</html>
