<?php 
require_once('process/dbh.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Employee Feedback
        </title>
        <link rel="stylesheet" type="text/css" href="styleemplogin.css?v=<?php echo time(); ?>">
        
    </head>
    <body>
    
    <div class="h2"><h2>EMPLOYEE FEEDBACKS </h2></div>
    
    	<table>

			<tr bgcolor="#000">
				<th align = "center">id</th>
                <th align = "center">Employee Name</th>
				<th align = "center">Ques1</th>
				<th align = "center">Ques2</th>
                <th align = "center">Ques3</th>
                <th align = "center">Ques4</th>
                <th align = "center">Ques5</th>
                <th align = "center">Ques6</th>
                <th align = "center">Ques7</th>
                <th align = "center">Ques8</th>
                <th align = "center">Reviews</th>
				

			</tr>

			

			<?php
				 $sql = "SELECT * FROM feedback;";
                 $result = mysqli_query($conn, $sql);
                 $resultcheck = mysqli_num_rows($result);
                 if($resultcheck>0){
                     while($row = mysqli_fetch_assoc($result)){
                         echo "<tr>";
                         echo "<td>".$row['id']."</td>" ;
                         echo "<td>".$row['name']."</td>" ;
                         echo "<td>".$row['q1']."</td>" ;
                         echo "<td>".$row['q2']."</td>" ;
                         echo "<td>".$row['q3']."</td>" ;
                         echo "<td>".$row['q4']."</td>" ;
                         echo "<td>".$row['q5']."</td>" ;
                         echo "<td>".$row['q6']."</td>" ;
                         echo "<td>".$row['q7']."</td>";
                         echo "<td>".$row['q8']."</td>" ;
                         echo "<td>".$row['remarks']."</td>" ;
                     }
         
                 }


			?>

		</table>


       








    </body>
</html>