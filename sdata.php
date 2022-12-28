<?php
include_once('connection.php');
$query="select * from form";
$result=mysql_query($query);
?>

<!DOCTYPE html>
<html>
	<title>
		<head>Student Data</head>
	</title>
	<body>
		
		<table aligen="center" border="1px" style="width:600px; line-height:40px;">
		<tr>
			<th colspan="4"><h2>Student Record</h2></th>
		</tr>
		<t>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Student Number</th>
			<th>Aadhar Number</th>
			<th>Email Id</th>
			<th>Father Name</th>
			<th>Mother Name</th>
			<th>Father Number</th>
			<th>Mother Number</th>
			<th>Address</th>
			<th>Gender</th>
			<th>DOB</th>
			<th>Emcet Rank</th>
			<th>JEE Rank</th>
			<th>10th Board</th>
			<th>10th Percentage</th>
			<th>12th Board</th>
			<th>12th Percentage</th>
			<th>Course</th>
		</t>
		<?php
				whille($rows=mysql_fech_assoc($result))
				{
		?>
			<tr>
				<td><?php echo $rows['FirstName']; ?></td>
				<td><?php echo $rows['LastName']; ?></td>
				<td><?php echo $rows['StudentNumber']; ?></td>
				<td><?php echo $rows['AadharNumber']; ?></td>
				<td><?php echo $rows['Email Id']; ?></td>
				<td><?php echo $rows['Father Name']; ?></td>
				<td><?php echo $rows['Mother Name']; ?></td>
				<td><?php echo $rows['Father Number']; ?></td>
				<td><?php echo $rows['Mother Number']; ?></td>
				<td><?php echo $rows['Address']; ?></td>
				<td><?php echo $rows['Gender']; ?></td>
				<td><?php echo $rows['DOB']; ?></td>
				<td><?php echo $rows['Emcet Rank']; ?></td>
				<td><?php echo $rows['10th Board']; ?></td>
				<td><?php echo $rows['10th Percentage']; ?></td>
				<td><?php echo $rows['12th Board']; ?></td>
				<td><?php echo $rows['12th Percentage']; ?></td>
				<td><?php echo $rows['Course']; ?></td>
			</tr>
		<?php
			}
		?>
		</table>	

	</body>

</html>