<!--Sessions are way to store information(in variables) to be used accross multiple page-->

<!--Unlike cookies, sessions are stored on the server-->

<!-- Sessions is where you would store a user's id, for example on a blog post, to get their blog-->

<!--Sessions are more secure than cookies-->

<!--by default sessions last untill the browser is closed-->


<!--
// session_start();

//$_SESSION["favcolor"]="green";
//$_SESSION["favanimal"]="dog";
//echo "sessions have been set";

//
 -->


<!DOCTYPE html>
<html>
    <head></head>
    <body>


    
    <form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post">

    username: <input type="text" name="user_name"></br></br>
    password: <input type="text" name="password"></br>
    <input type="Submit" value="Submit" name="SUBMIT">




    </form>
    </body>
</html>

<?php
session_start();

if(isset($_POST['Submi'])){

    $username=filter_input(INPUT_POST,$POST['user_name']);
    $password=$_POST['password123'];

    if($username=='danny'&& $password=='password123'){

        $_SESSION['username']=$username;
        header('Location:/learning php/hi.php');

    }else{
        echo "Incorrect Username/Password.Try Again!";
    }

}

?>

