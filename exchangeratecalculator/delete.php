<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div id="app">
		<div class="container">
			<div class="row">

				<br><br>
				<div class="text-center">
					<img src="images/money.png">
				</div>
				<br>


<?php 
	require 'connect.php';
	$id = $_REQUEST['id'];
	$thb = $_REQUEST['thb'];
	$sql = "DELETE FROM exch081_history WHERE recordID = $id";
	$sql_exe = $conn -> query($sql);

	if($sql_exe) {
		echo "<div class='well text-center'><div class='text-info'>Delete complete</div> Delete ID $id <br>THB = $thb</div>";
		// echo "<br>"; 
		// echo "Delete ID ".$id;
		// echo "<br>"; 
		// echo "THB = ".$thb;
		// echo "<br>"; 
		header("location:index.php",true, 200);
	} else {
		echo "Delete failed";
	}

?>
				<div class="text-center">
					<a class="btn btn-info" href="index.php" role="button">Calculate</a>
					<br><br>
				</div>


			</div> <!-- row -->
		</div> <!-- con -->
	</div> <!-- app -->

</body>
</html>
