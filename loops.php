
<!--For Loop-->
<?php
//For Loop
// for-loop syntax
// for(initializer; condition; increment){

    //Code to be executed
// }
for($x=0; $x<=10; $x++){

    echo 'Number is: '.$x;
    echo "<br>";
    echo "<br>";
      

}




//While loop
// while-loop syntax
//write the variable outside
// while(condition){
    //Code to be executed
    //and then an increment to prevent an infinte loop from happening
// }

$U=1;
while($U<=15){
    echo 'Number is: ' .$U. '<br>';
    $U++;
    echo "<br>";
}




//do-while loop
// do {
    // code to be executed;
//   } while (condition is true);

$Z=6;
do{
    echo 'Number is: '.$x.'<br>';
    $Z++;   

}while($Z<=6);
echo "<br>";
echo "<br>";


// foreach ($array as $value) {
    // code to be executed;
//   }

$my_activities_today=['learning conditional statems in php','learning loops in php'];
foreach($my_activities_today as $index => $my_activities_today){
    echo $index. '=>' .$my_activities_today. '<br>';
}

?>

