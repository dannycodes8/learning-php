<!--Conditional Statements in PHP-->
<!--These are used to perform different operations depending on the condition that is set-->



<!--1).IF STATEMENTS-->
<!--If statement executes a block of code if one condition is true-->

<?php
$age=20;
if($age>=20){
 echo 'you are eligible to vote';
 echo '<br> ';
 echo "<br>";


$Age=7;
if($Age==7){

    echo 'you are  ' .$Age. 'years old';
    echo '<br>';
    echo '<br>';
 
}


}


?>



<!--IF-ELSE STATEMENTS-->
<!--if else-->
<!--if-else executes a block of code,if a condition is true and another if the condition is false-->
<?php
$aGE=20;
if($aGE>=20){

    echo 'You are eligible to vote';



}else{
    echo 'Sorry, go back to school!';
}

echo "<br>";
echo "<br>";


$t=date("H");
// the date function, formats a local date and time, 
if($t<"20"){

    echo 'have a good day';
}else{
    echo 'have a good night';
}
echo "<br>";
echo '<br>';

$AGE=16;
if($AGE>-16){

    echo 'Sorry.You are not old enough';
}else{
    echo 'Wear your diapers';
}
echo '<br>';
echo '<br>';


?>



<!--Else-if statement--->
<!--Else-if is used to execute code with more than one condition-->

<?php

$agE=20;
if($agE>=20){

    echo 'you are old enough to vote';
}elseif($agE>=16){

    echo 'abit old, but not that old, just focus on your studies';


}elseif($agE<20){

    echo 'hahaha, kati gwe ne ku polling station tolinya yyo';


}else{

    echo 'Just stay home or Go back to school, ebyekulonda biveeko';
}


echo "<br>";
echo "<br>";

?>




<!-- SWITCH STATEMENTS -->
<!--Switch works on the same principle as the previous statements, but here we
use case for comparisions rather than if, else, elseif.-->
<!--A switch statement begins with an expression which is a variable that is
 passed inside parenthesis, the expression is then passed through different cases,
 and if there's a match found with the expression, the block of code with the case is
 executed. Break is used to prevent the code from running into the next case. Default 
 used if there's no relationship found.-->

 <?php
$favourite_color="grey";

switch($favourite_color){
    case "red":
        echo "your favourite color is red";
        break;

    case "green":
        echo "your favourite color is green";
        break;
    
    case "blue":
        echo "your favourite color is blue";
        break;

    case "indigo":
        echo "your favourite color is indigo";
        break;

    case "grey":
        echo "your favourite color is grey";
        break;

    default: 

    echo "Your favourite color is not red,green,blue,indigo or grey";

}
echo "<br>";
echo "<br>";

?>





