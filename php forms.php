
<!DOCTYPE html>
<html>

<body>


<!--Sample HTML form for practice-->

<!--Fetching Form data using the get method-->
<!--Get you can fetch data through url's and forms-->




<h4>Form 1</h4>
<form action="hi.php" method="get"> <!--Data entered in the form is sent to a php file named "hi.php" which i created by using the get method-->

Name: <input type="text" name="name"></br></br>
Email: <input type="text" name="email"></br>
<input type="submit" >
</form>




</form><br><br> <!--End of form 1-->



<!--Form Validation-->
<!--Form 2-->
<!--Post you can fetch data through forms-->

<h4>Form 2</h4>


<form action="<?php  echo $_SERVER['PHP_SELF'];?>" method="post">
    Name:<input type="text" name="Name"><br><br>
    Email:<input type="text" name="Email"><br><br>
    Comment:<textarea name="comment" rows="5" cols="40"></textarea><br><br>

    Gender:<br>
    <input type="radio" name="gender" value="female">Male<br>
    <input type="radio" name="gender" value="male">Female<br>
    <input type="radio" name="gender" value="other">Other<br>

    <input type="Submit">







</form><br>



<h4>Form 3</h4>
<!--Form Security-->
<!--Sanitization-->








</body>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post">

NAME: <input type="text" name="NAME"></br></br>
EMAIL: <input type="text" name="EMAIL"></br>
<input type="Submit" value="Submit" name="SUBMIT">




</form>

<?php

//form 2

if(isset($_POST['Name'])){

    echo "welcome, ".$_POST['Name'];
    echo "<br>";
}

?>













<?php
// form 3




// Method 1, using htmlspecialchars


if(isset($_POST['SUBMIT'])){

    $NAME=htmlspecialchars($_POST['NAME']);
    $EMAIL=htmlspecialchars($_POST['EMAIL']);
    echo $NAME;

}


//Using the filter input function


if(isset($_POST['SUBMIT'])){

    $NAME=filter_input(INPUT_POST,'NAME');
    $EMAIL=filter_input(INPUT_POST,'EMAIL');
    echo $NAME;

}


?>

<!--Required Fields in forms-->
<h4>Form 4</h4>
<form action="<? echo $_SERVER['PHP_SELF']?>" method='POST'>

FULL NAMES: <input type="text" name="full_names"><br><br>
AGE: <input type="number" name="age"><br><br>
GENDER: <input type="text" name="gender"><br><br>
NATIONALITY: <input type="text" name="nationality"><br><br>
OCCUPATION:  <input type="text" name="occupation"><br><br>
<input type="submit">

</form>

<?php

$FULL_NAMES="";
$AGE="";
$GENDER="";
$NATIONALITY="";
$OCCUPATION="";

$name_error="";
$email_error="";
$age_error="";
$nationality_error="";
$occupation_error="";

//function for sanitization od data
function sanitize_data($data){

    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);

    return $data;
}


if(isset($_POST["submit"])){
    $FULL_NAMES=sanitize_data($_POST["FULL_NAMES"]);
    $AGE=sanitize_data($_POST["AGE"]);
    $GENDER=sanitize_data($_POST["GENDER"]);
    $NATIONALITY=sanitize_data($_POST["NATIONALITY"]);
    $OCCUPATION=sanitize_data($_POST["OCCUPATION"]);
    
}

// applying the function
// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     $FULL_NAMES=sanitize_data($_POST["FULL_NAMES"]);
//     $AGE=sanitize_data($_POST["AGE"]);
//     $GENDER=sanitize_data($_POST["GENDER"]);
//     $NATIONALITY=sanitize_data($_POST["NATIONALITY"]);
//     $OCCUPATION=sanitize_data($_POST["OCCUPATION"]);
    
// }


//determinin the required fields
if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(empty($_POST["FULL_NAMES"])){
        $name_error="Full names required";
    }else{
        $FULL_NAMES=sanitize_data($_POST["FULL_NAMES"]);
    }


    if(empty($_POST["AGE"])){
        $age_error="age is required";
    }else{
        $AGE=sanitize_data($_POST["AGE"]);
    }


    if(empty($_POST["GENDER"])){
        $GENDER="Please specify your gender";
    }else{
        $FULL_NAMES=sanitize_data($_POST["FULL_NAMES"]);
    }


    if(empty($_POST["OCCUPATION"])){
        $occupation_error="occupation required";
    }else{
        $OCCUPATION=sanitize_data($_POST["OCCUPATION"]);
    }

    if(empty($_POST["NATIONALITY"])){
        $nationality_error="Your Nationality";
    }else{
        $FULL_NAMES=sanitize_data($_POST["FULL_NAMES"]);
    }

}









?>








</html>