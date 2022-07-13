<!--A Class is a template of an object-->
<!--An Object is an instance of a class-->

<!--Defining a class-->
<!--syntax:-->

<!-- /**
  //class food {
    //code goes here
//   }
// -->


<?php 
echo "<h4>1.Class Person</h4>";

class person{

    //Properties
    public $name; //public access modifiers
    public $age;
    public $location;

    //Methods
    function get_full_info($name,$age,$occupation){ //writting a function to display full details when called

        $this->name=$name; // "$this"  refers to an object

        $this->age=$age;
        $this->occupation=$occupation;

        echo "Hello,my name is ".$name,", and iam ".$age, " years old."." I work as a ".$occupation;
        echo "<br>";
        echo "<br>";
        

    

    }

    // function get_full_details($age,$name,$occupation){


    //     echo "hello,".$name,$this->age,$this->occupation;
     


    // }

    





}

// creating an object with the "new" keyword.
$person1=new person(); 
echo $person1->get_full_info("Daniel","20","sales man"); //Initializing the properties(as defined in get_full_info fnction)of the object person1 

$person2=new person();
echo $person2->get_full_info("John","18","sales executive");

$person3=new person();
echo $person3->get_full_info("Captain America","30","super hero");








?>









