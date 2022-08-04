<?php
$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$middle_name = $_POST['second_name'];
$date_ = $_POST['date'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$race = $_POST['race'];
$origin = $_POST['origin'];
$hspt_name = $_POST['hspt_name'];
$hspt_city = $_POST['hspt_city'];
$hspt_county = $_POST['hspt_county'];
$hspt_state = $_POST['hspt_state'];
$hspt_phone = $_POST['hspt_phone'];
$hspt_med_record = $_POST['hspt_med_record'];
$submit = $_POST['submit'];
$facility = $_POST['facility'];
$p_street = $_POST['p_street'];
$p_city = $_POST['p_city'];
$p_county = $_POST['p_county'];
$p_state = $_POST['p_state'];

$host = '127.0.0.1';
$dbUsername = 'root';
$dbPassword = 'michaeus254';
$dbName = 'hospital';

$connect = new mysqli($host, $dbUsername, $dbPassword, $dbName);

	if(mysqli_connect_error()){
		echo "Connection to Database Failed";
		die();
	}
	else{
		Echo "Connection Successful.";
		$INSERT = "Insert into patients (Medical_Record_Number, First_Name, Last_Name, Sex, Age, Race, Origin, DOB) values(?,?,?,?,?,?,?,?)";
		$stmt = mysqli_stmt_init($connect);

		if (!mysqli_stmt_prepare($stmt, $INSERT)){
			die(mysqli_error($connect));
		}

		mysqli_stmt_bind_param($stmt, "ssssssss", $hspt_med_record, $first_name, $last_name, $sex, $age, $race, $origin, $date_);
		mysqli_stmt_execute($stmt);

		echo " Record Saved";
		$connect -> close();
	}
?>