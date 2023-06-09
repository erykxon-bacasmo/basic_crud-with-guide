<?php

require "connection.php"; // don't forget to put this connection in your file

// ganito yung gagawin na syntax code sa $_POST, if statement siya
// yung nakapaloob sa $_POST ayun yung name ng button ng add sa baba
if(isset($_POST['add'])){
    $name = $_POST['name']; // gumawa ako ng variable name then sa loob ng $_POST nilagay ko yung name ng unang user input sa baba which is yung sa full name
    $age = $_POST['age']; // same lang sa logic ng nasa itaas at ganun din sa baba yung gagawin
    $gender = $_POST['gender'];

    // dito gagamit tayo ulet ng variable name na $sql then yung sumunod na syntax dyan ay makikita naman sa database mo sa may php my admin dun sa may SQL tab sa taas, change mo nalang yung mga nakalagay don
    // then yung sa VALUES ilalagay mo lang yung mga ginawa mong variable name sa taas dahil ayun yung sa user input na ginawa mo
    $sql = "INSERT INTO information_db(`full_name`, `age`, `gender`) VALUES('$name', '$age', '$gender')";
    $conn->query($sql); //sa loob ng query nilagay yung variable name na $sql dahil ieexecute nya yung function nayon

    // echo "add success!"; // pang check if nakakapag add ka ng data sa database mo
    header ("location: index.php");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Record</title>
    <link rel="stylesheet" href="stylesheet.css">
    <!-- connect mo lang yung css file mo -->
</head>
<body>
    <h1>Add Record</h1><br><br>
    <!-- gagawa tayo ng form action na kung saan mag eexecute ng user input -->
    <!-- wag kakalimutan ilagay ang method post dahil isa yan sa function para gumana yung mga user input function sa php -->
    <form action="" method="post">
        <Label>Full Name</Label>
        <!-- wag kakalimutan yung required function -->
        <!-- about sa type anong type ng user input gagawin mo -->
        <!-- about sa name, anong name gusto mo ipangalan sa input na ginawa mo, which gagamitin naten mamaya sa pag gawa ng post syntax sa taas -->
        <input type="text" name="name" required>
        <Label>Age</Label>
        <input type="number" name="age" required>
        <Label>Gender</Label>
        <input type="text" name="gender" required>
        <br><br>
        <!-- gagawa tayo ng button na kung saan kapag pinindot ito, lahat ng input tag sa taas nito ay mag kakaroon ng validation execution sa php syntax -->
        <button type="submit" name="add">Add Record</button>&nbsp; 
        <!-- gawa ka din ng cancel button na a href para pede ka makabalik sa index file mo -->
        <a href="index.php">Cancel</a>
    </form>
</body>
</html>