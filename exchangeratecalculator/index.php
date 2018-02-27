<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css”>
	<script src=”https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js”></script>

	
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

  	<script src="js/jquery-1.8.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/dd.css">
    <script src="js/jquery.dd.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/flags.css">

    <script language="JavaScript" type="text/JavaScript">
	   function check_key_number() {
		   use_key=event.keyCode
			   if (use_key != 13 && (use_key < 48) || (use_key > 57)) {
			   event.returnValue = false;
		   }
	   }
	</script>

  	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script> -->


</head>
<body>
	<div id="app">
		<div class="container">
			<div class="row">

				<div class="col-md-12 col-sm-12 text-center">
					<div class="row">
						<div>
							<form action="calculate-result.php" method="post">

								<br><br><br>

								<div class="text-info text-center">
									<img src="images/money.png">
									<h3>EXCHANGE RATE CALCULATE</h3>
								</div>
								
								<br>
								
									<label>จำนวนเงินไทย</label>
								
								<br>
								<div class="col-md-4 col-md-offset-4">
									<input class="form-control" type="text" name="thb" placeholder="กรอกตัวเลข" onkeypress="check_key_number();">
								</div>
								<br><br><br>
								<label>สกุลเงินที่ต้องการคำนวน</label>
								<br>
								<div class="col-md-4 col-md-offset-4">
									<select class="form-control" name="type" id="countries">
										<!-- <option value="usd">🇺🇸USD</option>
										<option value="jyp">🇯🇵JYP</option>
										<option value="krw">🇰🇷KRW</option>
										<option value="gbp">🇬🇧GBP</option>
										<option value="eur">🇪🇺EUR</option> -->
										<option value="usd" data-image="https://www.bot.or.th/english/_layouts/application/Images/flagUSD.png">USD</option>
										<option value="jyp" data-image="https://www.bot.or.th/thai/_layouts/application/Images/flagJPY.png">JYP</option>
										<option value="krw" data-image="https://www.bot.or.th/thai/_layouts/application/Images/flagKRW.png">KRW</option>
										<option value="gbp" data-image="https://www.bot.or.th/thai/_layouts/application/Images/flagGBP.png">GBP</option>
										<option value="eur" data-image="https://www.bot.or.th/thai/_layouts/application/Images/flagEUR.png">EUR</option>
									</select>
								</div>

								<br><br><br>

								<button type="submit" class="btn btn-info">Calculate</button>



							</form>
						</div>
					</div> <!-- row -->
					
				</div> <!-- col-md-12 -->


			</div> <!-- row -->
		</div> <!-- con -->
	</div> <!-- app -->

	<script src="js/vue.js"></script>
	<script src="js/app.js"></script>

	<script>
		$(document).ready(function() {
		$("#countries").msDropdown();
		 })
	</script>
	

</body>
</html>