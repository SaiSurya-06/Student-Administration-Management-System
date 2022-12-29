<?php 
include_once('connection.php'); 
$query="select * from form"; 
$conn = new mysqli('localhost','root','','student');
$result=mysqli_query($conn,$query);
?> 

<!DOCTYPE html>
<html>
	<head>

	<title>
		Student Data
	</title>
	<link rel="icon" type="image/x-icon" href="images\svit-logo.png">

	<style>
		h1{

			font-family:serif;
			font-size:xx-large;
			color:green;
			align:center;
		


		}
		th{
			font-family:bold;
			color:navy;
			font-size:large;
            border:1px solid red;

			


		}
		body{
			
			border:green;
			background-color:white;
		}
		
		td{
			border:1px solid red;
		
		}
		div{
			align:center;
		}
		img{
			position: relative;
			left:650px;
		}
		
		
		</style>
</head>

	<body>
		<img src="images\svit-logo.png">
		<table   style="width:600px; line-height:40px; border:2px solid red ;align:center;">
		<tr>
			<h1 style="text-align:center">Student Record</h1>
		</tr>
	
		<t>
			<th>firstname</th>
			<th>lastname</th>
			<th>snumber</th>
			<th>aadharnumber</th>
			<th>email</th>
			<th>Fathername</th>
			<th>Mothername</th>
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
				<td><?php echo $rows['firstname']; ?></td>
				<td><?php echo $rows['lastname']; ?></td>
				<td><?php echo $rows['snumber']; ?></td>
				<td><?php echo $rows['aadharnumber']; ?></td>
				<td><?php echo $rows['email']; ?></td>
				<td><?php echo $rows['Fathername']; ?></td>
				<td><?php echo $rows['Mothername']; ?></td>
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

	<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>