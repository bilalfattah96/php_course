<?php
// php code goes here
// echo 'hello';

//  $name = 'bilal';

// echo "my name is $name"; 

// $string = 'bilal';
// $int = 12;
// $float = 0.5; //double
// $bool = true;
// $array = array('bilal',27,true,);


// PHP built-in Function

$name = 'your name is maham';

// echo strlen($name);
// echo str_word_count($name);
// echo strrev($name);
// echo strpos('hello world','world');
// echo str_replace("your","my",$name);

// Php constant

// define("msg","welcome to my site");
// echo msg;

// variables
// $name;
// $namE;

// $num = -10;

// if($num > 0){
//     echo 'positive number';
// }
// else{
//     echo 'negative number';
// }

// $isLoggedIn = true;
// if($isLoggedIn){
//     echo 'Welcome Back';
// }else{
//     echo 'Please Log in';
// }

//Check For String Length

// $msg = 'asd';
// if(strlen($msg)>0){
//     echo 'msg is not empty';
// }else{
//     echo 'msg is empty';
// }


// if($msg != ''){
//     echo 'msg is not empty';
// }else{
//     echo 'msg is empty';
// }


// Checking Array Elements

// $names = array('anas','wahab','shaheer','tayab');

// $check = 'shaheer';

// if(in_array($check,$names)){
//     echo "$check is in the list";
// }else{
//     echo "$check is not in the list";
// }


// logical operators

// $age = 15;
// $hasId = true;

// if($age >=18 && $hasId){
// echo 'you are allowed to enter';
// }else{
//     echo 'you are not allowed to enter';
// }


//  $names = array('anas','wahab','shaheer','tayab');
// echo "$names[1]";
// foreach($names as $name){
// echo "<ul><li>$name</li></ul>";
// }

//Array

// Index Array - Array with a numeric index
// Associative Array - Array with named keys
// Multidimensional Array - array contain one or more array

// i like toyota,honda and Suzuki
// Index Array
// $cars = array("toyota","honda","Suzuki");
// echo "I like ".$cars[0].", ".$cars[1]." and ".$cars[2];

// Associative Array
// $age = array("wahab"=>"25","ahmed"=>"45","anas"=>"53");
// echo "wahab is ".$age["wahab"]." years old.";

// Multidimensional Array
// $cars = array(
// array("Toyoya",50,12),
// array("honda",20,2),
// array("Suzuki",30,22),
// array("BMW",70,32)
// );

// echo $cars[0][0] . ": In Stock: ".$cars[0][1].". sold: ".$cars[0][2]. ".<br>";
// echo $cars[1][0] . ": In Stock: ".$cars[1][1].". sold: ".$cars[1][2]. ".<br>";
// echo $cars[2][0] . ": In Stock: ".$cars[2][1].". sold: ".$cars[2][2]. ".<br>";
// echo $cars[3][0] . ": In Stock: ".$cars[3][1].". sold: ".$cars[3][2]. ".<br>";

// $people = [
//     ['name' => 'Joseph', 'age' => 25],
//     ['name' => 'Sarah', 'age' => 5],
//     ['name' => 'Anne', 'age' => 18],
//     ['name' => 'Pratham', 'age' => 23],
//     ['name' => 'Simon', 'age' => 30],
//     ['name' => 'Amir', 'age' => 28],
//     ['name' => 'Sabrina', 'age' => 22],
//     ['name' => 'Rana', 'age' => 24],
//     ['name' => 'Meet', 'age' => 21],
//     ['name' => 'Vitto', 'age' => 24],
//     ['name' => 'Rachel', 'age' => 9],
//     ['name' => 'Tom', 'age' => 3],
// ];
// $adultCount = 0;
// $childCount = 0;
// $applyForJob = [];

// foreach($people as $person){
//     $age = $person['age'];
//     if($age >=18){
//         $adultCount++;
//         //this is an adult
//         if($age >= 22 && $age <= 30){
//             //this person apply for job
//             $applyForJob[] = $person;
//         }
//     }else{
//         //this is a child
//         $childCount++;
//     }
// }
// echo "There are $adultCount adults in the cummunity <br>";
// echo "There are $childCount childs in the cummunity <br>";
// echo "There are list of people who apply for job <br>";
// var_dump($applyForJob);
?>



<!-- 3 ways -->

<?php
$names = array('anas','wahab','shaheer','tayab');
// $name = ['anas','wahab','shaheer','tayab'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Names</h1>
    <ul>
        
        <!-- first way  -->
        <?php
        // foreach($names as $name){
            // echo '<li>'.$name.'</li>'; 
        // } 
        ?>
        <!--  second way  -->
        <?php   
        foreach($names as $name) :
            ?>

        <li><?php echo $name ?></li>
        
        <?php endforeach ?>

 
        
    </ul>
</body>
</html>