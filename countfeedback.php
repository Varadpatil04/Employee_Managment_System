<?php 
include_once 'process/dbh.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Feedback Analysis</title>
        <link rel="stylesheet" type="text/css" href="count.css">
    </head>
    <body>
        <div class="container">
        <?php 
        $sql = "SELECT COUNT(q1) as outstanding from feedback where q1 = 5;";
        $sql1 = "SELECT COUNT(q1) as good from feedback where q1 = 4;";
        $sql2 = "SELECT COUNT(q1) as average from feedback where q1 = 3;";
        $sql3 = "SELECT COUNT(q1) as poor from feedback where q1 = 2;";
        $sql4 = "SELECT COUNT(q1) as bad from feedback where q1 = 1;";
        $sql5 = "SELECT COUNT(q2) as outstanding from feedback where q2 = 5;";
        $sql6 = "SELECT COUNT(q2) as good from feedback where q2 = 4;";
        $sql7 = "SELECT COUNT(q2) as average from feedback where q2 = 3;";
        $sql8 = "SELECT COUNT(q2) as poor from feedback where q2 = 2;";
        $sql9 = "SELECT COUNT(q2) as bad from feedback where q2 = 1;";
        $sql10 = "SELECT COUNT(q3) as outstanding from feedback where q3 = 5;";
        $sql11 = "SELECT COUNT(q3) as good from feedback where q3 = 4;";
        $sql12 = "SELECT COUNT(q3) as average from feedback where q3 = 3;";
        $sql13 = "SELECT COUNT(q3) as poor from feedback where q3 = 2;";
        $sql14 = "SELECT COUNT(q3) as bad from feedback where q3 = 1;";
        $sql15 = "SELECT COUNT(q4) as outstanding from feedback where q4 = 5;";
        $sql16 = "SELECT COUNT(q4) as good from feedback where q4 = 4;";
        $sql17 = "SELECT COUNT(q4) as average from feedback where q4 = 3;";
        $sql18 = "SELECT COUNT(q4) as poor from feedback where q4 = 2;";
        $sql19 = "SELECT COUNT(q4) as bad from feedback where q4 = 1;";
        $sql20 = "SELECT COUNT(q5) as outstanding from feedback where q5 = 5;";
        $sql21 = "SELECT COUNT(q5) as good from feedback where q5 = 4;";
        $sql22 = "SELECT COUNT(q5) as average from feedback where q5 = 3;";
        $sql23 = "SELECT COUNT(q5) as poor from feedback where q5 = 2;";
        $sql24 = "SELECT COUNT(q5) as bad from feedback where q5 = 1;";
        $sql25 = "SELECT COUNT(q6) as outstanding from feedback where q6 = 5;";
        $sql26 = "SELECT COUNT(q6) as good from feedback where q6 = 4;";
        $sql27 = "SELECT COUNT(q6) as average from feedback where q6 = 3;";
        $sql28 = "SELECT COUNT(q6) as poor from feedback where q6 = 2;";
        $sql29 = "SELECT COUNT(q6) as bad from feedback where q6 = 1;";
        $sql30= "SELECT COUNT(q7) as outstanding from feedback where q7 = 5;";
        $sql31 = "SELECT COUNT(q7) as good from feedback where q7 = 4;";
        $sql32 = "SELECT COUNT(q7) as average from feedback where q7 = 3;";
        $sql33 = "SELECT COUNT(q7) as poor from feedback where q7 = 2;";
        $sql34 = "SELECT COUNT(q7) as bad from feedback where q7 = 1;";
        $sql35 = "SELECT COUNT(q8) as outstanding from feedback where q8 = 5;";
        $sql36 = "SELECT COUNT(q8) as good from feedback where q8 = 4;";
        $sql37 = "SELECT COUNT(q8) as average from feedback where q8 = 3;";
        $sql38 = "SELECT COUNT(q8) as poor from feedback where q8 = 2;";
        $sql39 = "SELECT COUNT(q8) as bad from feedback where q8 = 1;";
        $result = mysqli_query($conn, $sql);
        $result1 = mysqli_query($conn, $sql1);
        $result2 = mysqli_query($conn, $sql2);
        $result3 = mysqli_query($conn, $sql3);
        $result4 = mysqli_query($conn, $sql4);
        $result5 = mysqli_query($conn, $sql5);
        $result6 = mysqli_query($conn, $sql6);
        $result7 = mysqli_query($conn, $sql7);
        $result8 = mysqli_query($conn, $sql8);
        $result9 = mysqli_query($conn, $sql9);
        $result10 = mysqli_query($conn, $sql10);
        $result11 = mysqli_query($conn, $sql11);
        $result12 = mysqli_query($conn, $sql12);
        $result13 = mysqli_query($conn, $sql13);
        $result14 = mysqli_query($conn, $sql14);
        $result15 = mysqli_query($conn, $sql15);
        $result16 = mysqli_query($conn, $sql16);
        $result17 = mysqli_query($conn, $sql17);
        $result18 = mysqli_query($conn, $sql18);
        $result19 = mysqli_query($conn, $sql19);
        $result20 = mysqli_query($conn, $sql20);
        $result21 = mysqli_query($conn, $sql21);
        $result22 = mysqli_query($conn, $sql22);
        $result23 = mysqli_query($conn, $sql23);
        $result24 = mysqli_query($conn, $sql24);
        $result25 = mysqli_query($conn, $sql25);
        $result26 = mysqli_query($conn, $sql26);
        $result27 = mysqli_query($conn, $sql27);
        $result28 = mysqli_query($conn, $sql28);
        $result29 = mysqli_query($conn, $sql29);
        $result30 = mysqli_query($conn, $sql30);
        $result31 = mysqli_query($conn, $sql31);
        $result32 = mysqli_query($conn, $sql32);
        $result33 = mysqli_query($conn, $sql33);
        $result34 = mysqli_query($conn, $sql34);
        $result35 = mysqli_query($conn, $sql35);
        $result36 = mysqli_query($conn, $sql36);
        $result37 = mysqli_query($conn, $sql37);
        $result38 = mysqli_query($conn, $sql38);
        $result39 = mysqli_query($conn, $sql39);
        
        echo"<div class='box-1 box'>";
        echo"<b><u>Feedback Analysis For Question 1</u></b> ";
        echo"<br>";
        
        while($row = mysqli_fetch_assoc($result)){
                echo $row['outstanding']." "." Employee gave Outstanding as feedback ";
        }
        echo"<br>";
        while($row1 = mysqli_fetch_assoc($result1)){
            echo $row1['good']." "." Employee gave good as feedback ";

        }
        echo"<br>";
        while($row2 = mysqli_fetch_assoc($result2)){
            echo $row2['average']." "." Employee gave average as feedback ";

        }
        echo"<br>";
        while($row3 = mysqli_fetch_assoc($result3)){
            echo $row3['poor']." "." Employee gave poor as feedback ";

        }
        echo"<br>";
        while($row4 = mysqli_fetch_assoc($result4)){
            echo $row4['bad']." "." Employee gave bad as feedback ";

        }
        echo"</div>";
        echo"<br>";
        echo"<br>";

        echo"<div class='box-2 box'>";
        echo"<b><u>Feedback Analysis For Question 2</u></b>";
        echo"<br>";
        

        while($row5 = mysqli_fetch_assoc($result5)){
            echo $row5['outstanding']." "." Employee gave Outstanding as feedback ";
    }
    echo"<br>";
    while($row6 = mysqli_fetch_assoc($result6)){
        echo $row6['good']." "." Employee gave good as feedback ";

    }
    echo"<br>";
    while($row7 = mysqli_fetch_assoc($result7)){
        echo $row7['average']." "." Employee gave average as feedback ";

    }
    echo"<br>";
    while($row8 = mysqli_fetch_assoc($result8)){
        echo $row8['poor']." "." Employee gave poor as feedback ";

    }
    echo"<br>";
    while($row9 = mysqli_fetch_assoc($result9)){
        echo $row9['bad']." "." Employee gave bad as feedback ";

    }
    echo"</div>";
    echo"<br>";
    echo"<br>";

    echo"<div class='box-3 box'>";
    echo"<b><u>Feedback Analysis For Question 3</u></b>";
    echo"<br>";
       
        while($row10 = mysqli_fetch_assoc($result10)){
            echo $row10['outstanding']." "." Employee gave Outstanding as feedback ";
    }
    echo"<br>";
    while($row11 = mysqli_fetch_assoc($result11)){
        echo $row11['good']." "." Employee gave good as feedback ";

    }
    echo"<br>";
    while($row12 = mysqli_fetch_assoc($result12)){
        echo $row12['average']." "." Employee gave average as feedback ";

    }
    echo"<br>";
    while($row13 = mysqli_fetch_assoc($result13)){
        echo $row13['poor']." "." Employee gave poor as feedback ";

    }
    echo"<br>";
    while($row14 = mysqli_fetch_assoc($result14)){
        echo $row14['bad']." "." Employee gave bad as feedback ";

    }
    echo"</div>";
    echo"<br>";
    echo"<br>";

    echo"<div class='box-4 box'>";
    echo"<b><u>Feedback Analysis For Question 4</u></b>";
        echo"<br>";
        

        while($row15 = mysqli_fetch_assoc($result15)){
            echo $row15['outstanding']." "." Employee gave Outstanding as feedback ";
    }
    echo"<br>";
    while($row16 = mysqli_fetch_assoc($result16)){
        echo $row16['good']." "." Employee gave good as feedback ";

    }
    echo"<br>";
    while($row17 = mysqli_fetch_assoc($result17)){
        echo $row17['average']." "." Employee gave average as feedback ";

    }
    echo"<br>";
    while($row18 = mysqli_fetch_assoc($result18)){
        echo $row18['poor']." "." Employee gave poor as feedback ";

    }
    echo"<br>";
    while($row19 = mysqli_fetch_assoc($result19)){
        echo $row19['bad']." "." Employee gave bad as feedback ";

    }
    echo"</div>";
    echo"<br>";
    echo"<br>";

    echo"<div class='box-5 box'>";
    echo"<b><u>Feedback Analysis For Question 5</u></b>";
        echo"<br>";
        

        while($row20 = mysqli_fetch_assoc($result20)){
            echo $row20['outstanding']." "." Employee gave Outstanding as feedback ";
    }
    echo"<br>";
    while($row21 = mysqli_fetch_assoc($result21)){
        echo $row21['good']." "." Employee gave good as feedback ";

    }
    echo"<br>";
    while($row22 = mysqli_fetch_assoc($result22)){
        echo $row22['average']." "." Employee gave average as feedback ";

    }
    echo"<br>";
    while($row23 = mysqli_fetch_assoc($result23)){
        echo $row23['poor']." "." Employee gave poor as feedback ";

    }
    echo"<br>";
    while($row24 = mysqli_fetch_assoc($result24)){
        echo $row24['bad']." "." Employee gave bad as feedback ";

    }
    echo"</div>";
    echo"<br>";
    echo"<br>";
    echo"<div class='box-6 box'>";
    echo"<b><u>Feedback Analysis For Question 6</u></b>";
        echo"<br>";
        

        while($row25 = mysqli_fetch_assoc($result25)){
            echo $row25['outstanding']." "." Employee gave Outstanding as feedback ";
    }
    echo"<br>";
    while($row26 = mysqli_fetch_assoc($result26)){
        echo $row26['good']." "." Employee gave good as feedback ";

    }
    echo"<br>";
    while($row27 = mysqli_fetch_assoc($result27)){
        echo $row27['average']." "." Employee gave average as feedback ";

    }
    echo"<br>";
    while($row28 = mysqli_fetch_assoc($result28)){
        echo $row28['poor']." "." Employee gave poor as feedback ";

    }
    echo"<br>";
    while($row29 = mysqli_fetch_assoc($result29)){
        echo $row29['bad']." "." Employee gave bad as feedback ";

    }
    echo"</div>";
    echo"<br>";
    echo"<br>";

    echo"<div class='box-7 box'>";
    echo"<b><u>Feedback Analysis For Question 7</u></b>";
        echo"<br>";
        

        while($row30 = mysqli_fetch_assoc($result30)){
            echo $row30['outstanding']." "." Employee gave Outstanding as feedback ";
    }
    echo"<br>";
    while($row31 = mysqli_fetch_assoc($result31)){
        echo $row31['good']." "." Employee gave good as feedback ";

    }
    echo"<br>";
    while($row32 = mysqli_fetch_assoc($result32)){
        echo $row32['average']." "." Employee gave average as feedback ";

    }
    echo"<br>";
    while($row33 = mysqli_fetch_assoc($result33)){
        echo $row33['poor']." "." Employee gave poor as feedback ";

    }
    echo"<br>";
    while($row34 = mysqli_fetch_assoc($result34)){
        echo $row34['bad']." "." Employee gave bad as feedback ";

    }
    echo"</div>";
    echo"<br>";
    echo"<br>";
    echo"<div class='box-8 box'>";
    echo"<b><u>Feedback Analysis For Question 8</u></b>";
        echo"<br>";
        

        while($row35 = mysqli_fetch_assoc($result35)){
            echo $row35['outstanding']." "." Employee gave Outstanding as feedback ";
    }
    echo"<br>";
    while($row36 = mysqli_fetch_assoc($result36)){
        echo $row36['good']." "." Employee gave good as feedback ";

    }
    echo"<br>";
    while($row37 = mysqli_fetch_assoc($result37)){
        echo $row37['average']." "." Employee gave average as feedback ";

    }
    echo"<br>";
    while($row38 = mysqli_fetch_assoc($result38)){
        echo $row38['poor']." "." Employee gave poor as feedback ";

    }
    echo"<br>";
    while($row39 = mysqli_fetch_assoc($result39)){
        echo $row39['bad']." "." Employee gave bad as feedback ";

    }
    echo"</div>";
    echo"<br>";
    echo"<br>";
?>
</div>



        <!-- <form action="logout.php">
            <button type="submit" class="button" value="Logout">Log Out</button>
            
        </form> -->

    
    </body>
</html>