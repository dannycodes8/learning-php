
<?php

//Arrays are Data structures and variables that hold more values


?>



<?php
// the first method of creating an array, by using square brackets, e.g:
$today_activities=["php numbers","php math","arithmetic operators","arrays"];
print_r($today_activities);
var_dump($today_activities);

// the second methd of creating arrays is by using the "array" keyword, e.g:
$activities_of_today=array("php numbers","php math","arithmetic operators","arrays");
 print_r($activities_of_today);

 //accessing an element in an array, we use it's index, e.g:
 print_r($activities_of_today[1]);

//Associative Arrays
// these let you dictate the position of each element, e.g:

$Activities_of_today=[

    1=>'php_numbers',
    2=>'php math',
    3=>'arithmetic operators',
    4=>'arrays'

];

print_r($Activities_of_today);
print_r($Activities_of_today[1]);


//Multi-dimensional arrays
// Arrays with-in arrays
// written in square brackets and 
//seperated by commas
$personal_details=[

[
    
    'first_name'=>'niwenyesiga',
    'last_name'=>'daniel',
    'age'=>'10000',
],

[

    'hobby'=>'codding',
    'girl_friend'=>'no',
    'email'=>'danielniwe8@gmail.com'
]


];

 print_r($personal_details[1]);

?>

