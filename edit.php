<!-- Itong edit file na ito ay parang function lang din sya sa Add.php file kaso may onting pinag kaiba -->
<?php

require "connection.php";

// gagawa ka ng syntax na $_get na kung saan kukunin mo yung id mula sa database, na galing sa index file mo sa line 50
$id = $_GET['id'];

// same with sa delete, may condition siya na kung saan kukunin niya lang yung id na ginet mula sa index file na galing s database
$sql = "SELECT * FROM information_db WHERE data_id = '$id'";
$result = $conn->query($sql); //same as sa mga pinaliwanag ko sa ibang file
$rows = $result->fetch_assoc(); //kukunin nya yung data sa may database

// itong condition na ito ay katulad lang sa add.php syntax function
// kinuha yung name ng add button sa baba
if(isset($_POST['edit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    // dito lang nag kaiba dahil UPDATE naman ang gagawin naten, meron nitong guide sa may SQL tab sa may phpymyadmin 
    $sql = "UPDATE information_db SET `full_name` = '$name', `age` = '$age', `gender` = '$gender' WHERE data_id = '$id'";
    $conn->query($sql);

    // dito naman sa may header, tinawag natin yung file na gustong puntahan after the execution ng user input kaso ginawa natin ng as a new variable then equal dapat sa id na inedit natin mula sa index file kaya may .$id sa huli
    header("location: index.php?=" .$id);

    // itong syntax naman na ito ay para sa cancel button, kinuha yung name ng cancel.
} else if(isset($_POST['cancel'])){
    header("location: index.php?=" .$id);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <h1>Edit Record</h1><br><br>
    <form action="" method="post">
        <Label>Full Name</Label>
        <!-- dito naman compare sa add.php file, nag dadag lang tayo ng pag tawag ng data mula sa database natin which gumamit tayo ng value tag -->
        <input type="text" name="name" value="<?php echo $rows['full_name']?>" required>
        <Label>Age</Label>
        <input type="number" name="age" value="<?php echo $rows['age']?>" required>
        <Label>Gender</Label>
        <input type="text" name="gender" value="<?php echo $rows['gender']?>" required>
        <br><br>
        <!-- button function -->
        <button type="submit" name="edit">Edit</button>&nbsp; 
        <button type="submit" name="cancel">Cancel</button>
    </form>
</body>
</html>