<?php

// Proper syntax (medyo long way)
// first gagawa ka ng function sa connection mo
// function connection(){
//     // gagawa ka muna ng variable name and dapat mag start ka using dollar sign "$"
//     $host = "localhost"; //yung localhost default nayan
//     $username = "root"; //yung root default nayan
//     $password = ""; // leave it blank kasi wala ka naman password sa localhost mo
//     $database = "infomation"; //name ng database mo sa loob ng phpmyadmin mo

//     $conn = new mysqli($host, $username, $password, $database); //ilalagay mo sa loob ng parenthesis yung mga ginawa mong variable name

//     // gagawa ka ng validation using if else statement
//     if($conn->connect_error){
//         echo $conn->connect_error;
//     } else {
//         return $conn;
//     } // yung situation dyan kapag ganito ng yare, tatawagin nya lang yung ganito then kapag mali iuulit niya lang

// }

$conn = new mysqli("localhost", "root", "", "information");

// echo "connected!"; //pan check if connected naba ang ating database sa html naten

?>
<!-- here in php, don't forget to the php tag, dollar sign "$", "echo" pantawag sa mga bagay sa php and semi-colon ";" -->