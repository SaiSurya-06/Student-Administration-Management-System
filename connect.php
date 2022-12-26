<?php
    $firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$snumber = $_POST['snumber'];
	$aadharnumber = $_POST['aadharnumber'];
	$email = $_POST['email'];
	$FatherName = $_POST['FatherName'];
	$MotherName = $_POST['MotherName'];
	$Fathernumber = $_POST['Fathernumber'];
	$Mothernumber = $_POST['Mothernumber'];
	$Address = $_POST['Address'];
	$gender = $_POST['gender'];
	$DOB = $_POST['DOB'];
	$EmcetRank = $_POST['EmcetRank'];
	$JEERank = $_POST['JEERank'];
	$_10Board = $_POST['_10Board'];
	$_10Percentage = $_POST['_10Percentage'];
	$_12Board = $_POST['_12Board'];
	$_12Percentage = $_POST['_12Percentage'];
	$Course = $_POST['Course'];

	

	// Database connection
	$conn = new mysqli('localhost','root','','student');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, snumber, aadharnumber, email, FatherName, MotherName, Fathernumber, Mothernumber, Address, gender
		DOB, EmcetRank, JEERank, _10Board, _10Percentage, _12Board, _12Percentage, Course)) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiisssiissiiisisis", $firstName, $lastName, $snumber, $aadharnumber, $email, $FatherName, $MotherName, $Fathernumber, $Mothernumber, $Address, $gender
		$DOB, $EmcetRank, $JEERank, $_10Board, $_10Percentage, $_12Board, $_12Percentage, $Course);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>