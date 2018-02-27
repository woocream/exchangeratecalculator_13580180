<?php 
	//if (@_SERVER['HTTP_HOST']=='localhost') {
		$DB_SERVER = 'localhost';
		$DB_USER_READER = 'u13580180';
		$DB_PASS_READER = '9Ntc&OQIfO';
		$DB_NAME = 'db13580180';
		//echo "localhost";
	// } else {
	// 	// บน server imsu.co
	// 	$DB_SERVER = 'localhost';
	// 	$DB_USER_READER = '......';
	// 	$DB_PASS_READER = '123456';
	// 	$DB_NAME = 'db13580180';
	// }

	// คำสั่งที่ใช้ต่อกับฐานข้อมูล
	$conn = new mysqli($DB_SERVER,$DB_USER_READER,$DB_PASS_READER,$DB_NAME);

	//ตรวจสอบว่าต่อสำเร็จหรือไม่
	if (!$conn) {
		die("connection failed".mysqli_connect_error());
	}

	mysqli_set_charset($conn, "utf8");
?>