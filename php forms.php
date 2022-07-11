<!DOCTYPE html>
<html>

<body>


<!--Sample HTML form for practice-->

<!--Fetching Form data using the get method-->
<form action="hi.php" method="get"> <!--Data entered in the form is sent to a php file named "hi.php" which i created by using the get method-->

Name: <input type="text" name="name"></br></br>
Email: <input type="text" name="email"></br>
<input type="submit">



</form><br><br> <!--End of form 1-->

<!--Form Validation-->
<!--Form 2-->
<form action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Name:<input type="text" name="Name"><br><br>
    Email:<input type="text" name="Email"><br><br>
    Comment:<textarea name="comment" rows="5" cols="40"></textarea><br><br>

    Gender:<br>
    <input type="radio" name="gender" value="female">Male<br>
    <input type="radio" name="gender" value="male">Female<br>
    <input type="radio" name="gender" value="other">Other<br>

    <input type="Submit">



</form>


</body>

</html>