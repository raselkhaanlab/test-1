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
	<link rel="stylesheet" href="datatable/css/jquery.dataTables.min.css">
</head>
<body>

<div class="container-fluid">
	<div class="row mt-2">
		
		<div class="col-md-10 mx-auto">
			
				<div class="card">
					<div class="card-header text-uppercase text-center bg-primary text-white">
						<h3 >question</h3>
						 <p class="test-justify">Write a php program that prints the numbers from 1 to 100. But for
multiples of three print "Reformed" instead of the number and for the
multiples of five print "Tech". For numbers which are multiples of both three
and five print "ReformedTech". Strings “Reformed”, “Tech”,
“ReformedTech” can come from the user. So if the user inputs for example
“Buzz”, “Fizz”, “BuzzFizz” it still should work. Use OOP and typehint.
Note: no need to take the input from user. But make sure it will still work if
different Strings are provided</p> 
					</div>
					<div class="card-body">
						<table class="table table-bordered table-hover table-striped table-responsive-md table-responsive-md" id="my-table">
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
				</div>
		</div>

		

	</div>
</div>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="datatable/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function(){

			$('#my-table').dataTable();

	});
</script>
</body>
</html>
