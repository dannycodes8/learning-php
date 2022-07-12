<!--Cookies are a mechanism/a way for the browser to store user's data for tracking and identification purposes-->

<!--Cookies are stored on the client's side,e.g in the browser-->

<!--Setting a cookie-->

<!--Using setcookie()-->

<!-- setcookie('name','danny', time()+86400);-->
<!-- the first value is the name, and then the name of the cookie, and lastly expiration of the cookie-->

<?php

setcookie('name','danny',time()+84600);

//checking if the cookie has been declared with isset() and then printing out the name of the cookie to the browser

if(isset($_COOKIE['name'])){

    echo $_COOKIE['name'];
}


// Because cookies are stored in the browser, you can delete them using the browser it's self


// Unsetting a cookie
//To unset the cookie, we use the setcookie but change the name to nothing, and reduce the time to nothing

setcookie('name','', time()-84600);



?>