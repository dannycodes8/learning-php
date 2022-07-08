<!--Functions are blocks of code you can name and then run anywhere-->
<!--To create a function we use the function keyword, and then the name of the function-->
<!--Functions syntax,-->
<?php

function register_user(){ //Defining a function register_user()

    echo "User registered"; // Code to be executed

}
register_user(); //Calling the function,

echo "<br>";
echo "<br>";



?>

<!--Using a global variable inside a function-->
<?php

$J="hello";

// to use a global variable, use the keyword global, e.g;
function danny_test (){

global $J;
echo $J;


}
danny_test();
echo "<br>";


?>

<!--Functions with arguments-->
<?php
function product_details($pd_name,$pd_category,$pd_price){
    echo "Product ".$pd_name." of category ".$pd_category." costs ".$pd_price." shillings ";

}
product_details("Smart Tv","Electronics and Appliances","1,400,000");
echo "<br>";
echo "<br>";
?>

<?php
// Calculating Area of a Circle using a function
$r=5;
function area_of_circle(){
    global $r;
    $area_of_circle=pi()*$r*$r;
    echo "The area of the circle is:  ".$area_of_circle."<br>"."<br>";

}
area_of_circle();



?>


<?php

//Calculating area of a triangle using a function
$base=45;
$height=60;
function area_of_triangle(){
    global $base;
    global $height;

    $area_of_triangle=(1/2*$base*$height);
    echo "The area of a triangle is: ".$area_of_triangle."<br>"."<br>   ";
}
area_of_triangle();


?>

<?php
//returning from a function
function sum_of($n1,$n2){

    return $n1+$n2;

}
$final_sum=sum_of(5,5);
echo $final_sum;
echo "<br>";
echo "<br>";

?>

<?php

//Functions without names
//Anonymus functions
$multiply=function($n1,$n2){

    return $n1*$n2;
};
echo $multiply(6,8);

?>

<?php



?>

