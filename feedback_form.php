<!DOCTYPE html>
<html>
    <head>
        <title>
            EMPLOYEE FEEDBACK FORM
        </title>
        <link rel="stylesheet" href="feedback_form.css?v=<?php echo time(); ?>" type="text/css">
    </head>
    <body>
        <div class="main">
            <div class="feedback">
                <h2><u>FEEDBACK FORM</u></h2>
                <form action="feedback1.php" method="POST"></b>
                    <div class="emp">
                    <label><b>Employee Name</b></label>
                    <input type="text" placeholder="Enter your name" name="employeename">
                    </div>
                    <div class="q1-form">
                        <label><b>1. How is the Environment in the company?</b> </label><br>
                        <input type="radio" id="outstanding" name="q1" value="5">
                        <span for="outstanding"><b>Outstanding</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="good" name="q1" value="4">
                        <span for="good"><b>Good</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="average" name="q1" value="3">
                        <span for="average"><b>Average</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="poor" name="q1" value="2">
                        <span for="poor"><b>Poor</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="bad" name="q1" value="1">
                        <span for="bad"><b>Bad</b></span>

                    </div>
                    <br>
                    <div class="q2-form">
                        <label><b>2.How good are the facilities given to the employees?</b> </label><br>
                        <input type="radio" id="outstanding" name="q2" value="5">
                        <span for="outstanding"><b>Outstanding</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="good" name="q2" value="4">
                        <span for="good"><b>Good</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="average" name="q2" value="3">
                        <span for="average"><b>Average</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="poor" name="q2" value="2">
                        <span for="poor"><b>Poor</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="bad" name="q2" value="1">
                        <span for="bad"><b>Bad</b></span>

                    </div>
                    <br>
                    <div class="q3-form">
                        <label><b>3.How is the superior's behavior towards employees?</b> </label><br>
                        <input type="radio" id="outstanding" name="q3" value="5">
                        <span for="outstanding"><b>Outstanding</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="good" name="q3" value="4">
                        <span for="good"><b>Good</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="average" name="q3" value="3">
                        <span for="average"><b>Average</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="poor" name="q3" value="2">
                        <span for="poor"><b>Poor</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="bad" name="q3" value="1">
                        <span for="bad"><b>Bad</b></span>

                    </div>
                    <br>
                    <div class="q4-form">
                        <label><b>4.How are the other employee's nature towards the new employees? </b></label><br>
                        <input type="radio" id="outstanding" name="q4" value="5">
                        <span for="outstanding"><b>Outstanding</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="good" name="q4" value="4">
                        <span for="good"><b>Good</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="average" name="q4" value="3">
                        <span for="average"><b>Average</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="poor" name="q4" value="2">
                        <span for="poor"><b>Poor</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="bad" name="q4" value="1">
                        <span for="bad"><b>Bad</b></span>

                    </div>
                    <br>
                    <div class="q5-form">
                        <label><b>5.How was the growth rate of company this year? </b></label><br>
                        <input type="radio" id="outstanding" name="q5" value="5">
                        <span for="outstanding"><b>Outstanding</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="good" name="q5" value="4">
                        <span for="good"><b>Good</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="average" name="q5" value="3">
                        <span for="average"><b>Average</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="poor" name="q5" value="2">
                        <span for="poor"><b>Poor</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="bad" name="q5" value="1">
                        <span for="bad"><b>Bad</b></span>

                    </div>
                    <br>
                        <div class="q6-form">
                        <label><b>6.How was is your work with the company going so far?</b> </label><br>
                        <input type="radio" id="outstanding" name="q6" value="5">
                        <span for="outstanding"><b>Outstanding</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="good" name="q6" value="4">
                        <span for="good"><b>Good</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="average" name="q6" value="3">
                        <span for="average"><b>Average</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="poor" name="q6" value="2">
                        <span for="poor"><b>Poor</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="bad" name="q6" value="1">
                        <span for="bad"><b>Bad</b></span>

                    </div>
                    <br>
                        <div class="q7-form">
                        <label><b>7.How good has been your contribution to company so far?</b> </label><br>
                        <input type="radio" id="outstanding" name="q7" value="5">
                        <span for="outstanding"><b>Outstanding</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="good" name="q7" value="4">
                        <span for="good"><b>Good</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="average" name="q7" value="3">
                        <span for="average"><b>Average</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="poor" name="q7" value="2">
                        <span for="poor"><b>Poor</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="bad" name="q7" value="1">
                        <span for="bad"><b>Bad</b></span>

                    </div>
                    <br>
                        <div class="q8-form">
                        <label><b>8.How do You rate the company?</b> </label><br>
                        <input type="radio" id="outstanding" name="q8" value="5">
                        <span for="outstanding"><b>Outstanding</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="good" name="q8" value="4">
                        <span for="good"><b>Good</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="average" name="q8" value="3">
                        <span for="average"><b>Average</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="poor" name="q8" value="2">
                        <span for="poor"><b>Poor</b></span>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" id="bad" name="q8" value="1">
                        <span for="bad"><b>Bad</b></span>

                    </div>
                    <br>
                    <div class="comments">
                        <label><b>Any comments</b></label><br>
                        <textarea name="reviews" rows="5" cols="53"></textarea>
                    </div>
                    <br>
                    <div class="submit-form">
                        <input type="submit" name="submit" value="Submit">
                    </div>

                </form>

            </div>
        </div> <!-- end of main div-->
    </body>
</html>