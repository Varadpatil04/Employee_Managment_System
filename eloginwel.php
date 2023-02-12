<?php 
include('process/dbh.php');
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbh.php');
	 $sql1 = "SELECT * FROM `employee` where id = '$id'";
	 $result1 = mysqli_query($conn, $sql1);
	 $employeen = mysqli_fetch_array($result1);
	 $empName = (isset($employeen['firstName']));

	$sql = "SELECT id, firstName, lastName FROM employee";
	

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Employee Panel</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
</head>
<body>
	
	<header>
		<nav>
			<h1>Employee Feedback Management System</h1>
			<ul id="navli">
				<li><a class="homered" href="eloginwel.php?id=<?php echo $id?>">HOME</a></li>
				<li><a class="homeblack" href="myprofile.php?id=<?php echo $id?>">My Profile</a></li>
				<li><a class="homeblack" href="feedback_form.php">Feedback Form</a></li>
				<li><a class="homeblack" href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
	<div>
		<!-- <h2>Welcome <?php echo "$empName"; ?> </h2> -->

		    	<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Empolyee Leaderboard </h2>
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


		


		
		
	</div>
</body>
</html>