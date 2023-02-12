<?php 
require_once ('process/dbh.php');
$sql = "SELECT id, firstName, lastName FROM employee";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>Employee Feedback Management System</h1>
			<ul id="navli">
				<li><a class="homered" href="aloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homeblack" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="viewfeedback.php">Employee Feedback</a></li>
				<li><a class="homeblack" href="countfeedback.php">Feedback Analysis</a></li>
				<li><a class="homeblack" href="logout.php">Logout</a></li>
				
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Empolyee Records </h2>
    	<table>

			<tr bgcolor="#000">
				<th align = "center">Seq.</th>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				

			</tr>

			

			<?php
				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$seq."</td>";
					echo "<td>".$employee['id']."</td>";
					
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					
					$seq+=1;
				}


			?>

		</table>

		
	</div>
</body>
</html>