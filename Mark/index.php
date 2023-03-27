<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Calculation with </title>
</head>
<body>
    <?php

// use LDAP\Result;

//     $grade = "";
//     $point ;

//      function calculation($mark){
//         global $grade;
//         global $point;
//         if($mark >= 80 && $mark <=100){
//             return $grade = 'A+';
//             return $point = 5;
//         }
//         elseif($mark >= 70 && $mark <=79){
//             return $grade = 'A';
//             return $point = 4;
//         }
//         elseif($mark >= 60 && $mark <=69){
//             return $grade = 'A-';
//             return $point = 3;
//         }
//         elseif($mark >= 50 && $mark <=59){
//             return $grade = 'B';
//             return $point = 3;
//         }
//         elseif($mark >= 40 && $mark <=49){
//             return $grade = 'C';
//             return $point = 2;
//         }
//         elseif($mark >= 33 && $mark <=39){
//             return $grade = 'D';
//             return $point = 1;
//         }
//         elseif($mark >= 0 && $mark <=32){
//             return $grade = 'F';
//             return $point =  0;
//         }
    
//     }

//     if(isset($_POST['btn'])){
//         $a = $_POST['mark1'];
//         $b = $_POST['mark2'];
//         $c = $a+$b;
//         calculation($c);
//         echo $grade;
//         echo $point;
//     }


//     ?>
<!-- //     <table>
//         <tr>
//             <th>S.code</th>
//             <th>Mark-1</th>
//             <th>Mark-2</th>
//             <th>Total</th>
//             <th>Grade</th>
//             <th>Point</th>
//             <th>Action</th>
//         </tr>
//         <tr>
//             <form method="POST">
//                 <td>1001</td>
//                 <td><input type="text" name="mark1"></td>
//                 <td><input type="text" name="mark2"></td>
//                 <td><input type="text" name="total"></td>
//                 <td><input type="text" name="grade"></td>
//                 <td><input type="text" name="point"></td>
//                 <td><input type="submit" name="btn" value="result"></td>
                
//             </form>
//         </tr>

//     </table>         -->


   <?php
    class Car{
    public $name;
    public $price;

    function speed($main,$break){
        $total_speed = $main - $break;
        echo $total_speed;
    }
    
    }


    $buggati = new Car();
    $buggati->speed(150,20);

   include 'classes.php';


    if(isset($_POST['btn'])){
        $mark1= $_POST['mark1'];
        $mark2= $_POST['mark2'];
        $r = new Result();
        
    }
   
    
   ?>



   <form method="post">
    <input type="text" name="mark1"  >
    <input type="text" name="mark2"  >
    <input type="text" name="total" value="<?php if(isset($_POST['btn'])){
        echo $r->getresult($mark1,$mark2);
    } ?>" >

    <input type="submit" name="btn"  >


   </form>







</body>
</html>