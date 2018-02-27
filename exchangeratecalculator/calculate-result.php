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
					<br><br><br>
<?php 
	
	//แบบที่1.รับค่ามาจากหน้าที่แล้ว
	//ส่งค่ามาเป็น POST
	//$thb = $_POST['attribute name'];
	$thb = $_POST['thb'];
	$type = $_POST['type'];

	echo "<div class='p-3 mb-2 text-dark'>ค่าที่กรอก คือ <kbd>$thb<kbd></div>";
	echo "<br>";
	echo "<div class='p-3 mb-2 text-white'>สกุลเงินที่ใช้คำนวน <kbd>$type</kbd></div>";
	echo "<br><br>";

	if ($type=="usd") {
		$result = $thb/31.2273;
	} elseif ($type=="jyp") {
		$result = $thb/28.9814;
	} elseif ($type=="krw") {
		$result = $thb/0.0293;
	} elseif ($type=="gbp") {
		$result = $thb/43.3292;
	} elseif ($type=="eur") {
		$result = $thb/38.2737;
	}

	echo "<div class='well text-info'>Result = $result</div>";
	//echo "<br>";

	require 'connect.php';

	$sql = "INSERT INTO exch081_history(thb, calculated, currency) VALUES($thb, $result, '$type')";
	$sql_exe=$conn -> query($sql);

	//print($sql_exe);

	//แบบที่2
	// if ($type=="usd") {
	// 	$rate = 0.31;
	// } elseif ($type=="jyp") {
	// 	$rate = 0.21;
	// } elseif ($type=="krw") {
	// 	$rate = 0.11;
	// } elseif ($type=="gbp") {
	// 	$rate = 0.50;
	// } elseif ($type=="eur") {
	// 	$rate = 0.40;
	// }

	// echo "Result = ".thb*rate;

	//แบบที่3
	// switch ($type) {
	// 	case 'usd':
	// 		$rate=0.31;
	// 		break;
	// 	case 'jyp':
	// 		$rate=0.29;
	// 		break;	
	// 	case 'krw':
	// 		$rate=0.31;
	// 		break;
	// 	case 'gbp':
	// 		$rate=0.31;
	// 		break;	
	// 	case 'eur':
	// 		$rate=0.31;
	// 		break;	

		
	// 	default:
	// 		$rate=0;
	// 		break;	
	// }

	// echo "Result = ".thb*rate;

?>
	
				<div>
					<a class="btn btn-info" href="index.php" role="button">Calculate</a>
					<br><br><br>
				</div>

	</div>
				
   		<div class="text-center">
   			

			<?php 
		     $sql = "SELECT * FROM exch081_history ORDER BY dateRecord DESC";
		     $sql_exe = $conn -> query($sql);
		    ?>

		  <table class="table table-striped table-hover">
		   <thead>
		    <tr>
		     
		    </tr>
		    <tr>
		     <th class="text-center">THB</th>
		     <th class="text-center">Currency</th>
		     <th class="text-center">Calculated</th>
		     <th class="text-center">Time Record</th>
		     <th class="text-center">Delete</th>
		    </tr>
		   </thead>

		  <?php 
		   

		   while ($row = mysqli_fetch_assoc($sql_exe)) {
		         // $array['key/field name'];
		    echo "<tr>
		         <td>".$row['thb']."</td>
		      <td>"." exchage to ".$row['currency']."</td>
		      <td>".$row['calculated']."</td>
		      <td>".$row['dateRecord']."</td>";

		  ?>
		  <td><a class="btn btn-danger"  href="delete.php?id=<?php echo $row['recordID']?> &thb=<?php echo $row['thb'] ?>">Delete</a></td>
		  </tr>
		  <?php

		   }
		   $conn->close();
		  ?>
		  </table>

		</div>

			</div> <!-- row -->
		</div> <!-- con -->
	</div> <!-- app -->

</body>
</html>





