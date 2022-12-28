<?php 
include_once('connection.php'); 
$query="select * from form"; 
$conn = new mysqli('localhost','root','','student');
$result=mysqli_query($conn,$query);
?> 

<!DOCTYPE html>
<html>
	<title>
		Student Data
	</title>
	<body>
		
		<table aligen="center" border="1px" style="width:600px; line-height:40px;">
		<tr>
			<th colspan="4"><h2>Student Record</h2></th>
		</tr>
		<t>
			<th>firstName</th>
			<th>lastName</th>
			<th>snumber</th>
			<th>aadharnumber</th>
			<th>email</th>
			<th>FatherName</th>
			<th>MotherName</th>
			<th>Fathernumber</th>
			<th>Mothernumber</th>
			<th>Address</th>
			<th>DOB</th>
			<th>EmcetRank</th>
			<th>JEERank</th>
			<th>_10Board</th>
			<th>_10Percentage</th>
			<th>_12Board</th>
			<th>_12Percentage</th>
			<th>Course</th>
		</t>
		<?php
				while($rows=mysqli_fetch_assoc($result))
				{
		?>
			<tr>
				<td><?php echo $rows['firstName']; ?></td>
				<td><?php echo $rows['lastName']; ?></td>
				<td><?php echo $rows['snumber']; ?></td>
				<td><?php echo $rows['aadharnumber']; ?></td>
				<td><?php echo $rows['email']; ?></td>
				<td><?php echo $rows['FatherName']; ?></td>
				<td><?php echo $rows['MotherName']; ?></td>
				<td><?php echo $rows['Fathernumber']; ?></td>
				<td><?php echo $rows['Mothernumber']; ?></td>
				<td><?php echo $rows['Address']; ?></td>
				<td><?php echo $rows['DOB']; ?></td>
				<td><?php echo $rows['EmcetRank']; ?></td>
				<td><?php echo $rows['JEERank']; ?></td>
				<td><?php echo $rows['_10Board']; ?></td>
				<td><?php echo $rows['_10Percentage']; ?></td>
				<td><?php echo $rows['_12Board']; ?></td>
				<td><?php echo $rows['_12Percentage']; ?></td>
				<td><?php echo $rows['Course']; ?></td>
			</tr>
		<?php
			}
		?>
		</table>	

	</body>

</html>