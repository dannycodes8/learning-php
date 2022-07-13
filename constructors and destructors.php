<?php
echo "<h4>1.Class Cars</h4>";
// Classes with Constructors
// function__construct(){} constructor has two underscore, i.e(__)

class Cars{
    public $name;
    public $model;
    public $year_of_manufacture;


    function __construct($name,$model,$year_of_manufacture){

        $this->name=$name;
        $this->model=$model;
        $this->year=$year_of_manufacture;


    }

    function get_car_details(){
        echo "This is a ".$this->name, " of model ".$this->model,", and it was manufactured  in ".$this->year;
    }

}
$car1=new Cars("Lamborghini","Aaventador","2022");
echo $car1->get_car_details();


//Destructors
// class cArs{
//     public $name;
//     public $model;
//     public $year_of_manufacture;


//     function __construct($name,$model,$year_of_manufacture){

//         $this->name=$name;
//         $this->model=$model;
//         $this->year=$year_of_manufacture;


//     }

 

//     function __destruct(){
    
//     }

// }
// $car1=new cars("Lamborghini","Aaventador","2022");
// echo $car1->get_car_details();