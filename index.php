<?php

require "connection.php"; //require is a default to use para iconnect yung php connection file mo sa html mo
// then sa loob ng cotation dun mo ilalagay yung file name ng php connection mo

$sql = "SELECT * FROM information_db";
$result = $conn->query($sql); // yung $result pede din siyang $list nag gawa lang ako ng sarili kong variable name, then sa loob ng query nilagay yung variable name na $sql dahil ieexecute nya yung function nayon
$rows = $result->fetch_assoc(); // dito sa fetch assoc, kinukuha nya yung mga data sa database kaya gumawa tayo ng panibagong variable name

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample CRUD</title>
    <link rel="stylesheet" href="stylesheet.css">
     <!--lalagay mo name yung link ng css file mo  -->
</head>
<body>
    <!-- Eto yung mga palatandaan mo kung anong file na ng CRUD yung napupuntahan mo -->
    <h1>Sample Records</h1><br><br>
    <!-- mag gagawa ng add button using href para ma direct tayo sa file na kung saan ieexecute yung function ng pag add ng data -->
    <a href="add.php">Add Record</a><br><br>
    <!-- gagawa ka ng table -->
    <table>
        <!-- thead para syang header pero header siya sa table -->
        <thead>
            <tr>
                <!-- gumawa ako ng header at inilagay ko yung mga ito, dapat related siya sa collumn ng database mo sa phpmyadmin -->
                <th>Full Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>More Actions</th>
            </tr>
        </thead>
        <!-- sa tbody dito mag aappear yung mga data na meron sa loob ng datatable mo sa database mo sa phpmyadmin -->
        <tbody>
            <!-- gagawa na tayo ng validation dito para mag appear na yung mga data na nasa data table naten sa database natin -->
            <?php do {?>
                <tr>
                    <!-- dito tatawagin natin yung mga nasa loob ng column sa database na ginawa sa phpmyadmin -->
                    <td><?php echo $rows['full_name']?></td>
                    <td><?php echo $rows['age']?></td>
                    <td><?php echo $rows['gender']?></td>
                    <td>
                        <!-- gagawa ka ng form para sa delete function at sa loob non nandyan din ang edit function nagagamitan ng method post -->
                        <form action="delete.php" method="post">
                            <!-- dito ginawa ko yung sa edit.php?id = gumawa lang ako ng parang variable na equal dun sa php echo $rows['data_id] para matawag sa edit.php-->
                            <a href="edit.php?id= <?php echo $rows['data_id']?>">Edit</a>
                            <button type="submit" name="delete">Delete</button>
                            <input type="hidden" name="erase" value="<?php echo $rows['data_id']?>">
                            <!-- yung syntax nato kinukuha nya yung id ng data na mismong idedelete -->
                            <!-- naka type hidden yan para hindi makita yung container ng input nayan -->
                        </form>
                    </td>
                </tr>
                <!-- kinopya ko lang yung syntax sa itaas at nilagay ko sa loob ng while parenthesis -->
            <?php }while($rows = $result->fetch_assoc())?> 
            <!-- nag rerepresent ito nang kapag ganito yung resulta ng logic, yung do function ayun yung gagawin nya sa table mo -->
        </tbody>
    </table>
</body>
</html>
<!-- PAALALA LAHAT NG MGA NAKA COMMENT SA IBANG SYNTAX AY PWEDENG GAMITIN PERO YUNG COMMENT NA GUIDE HINDI PEDE HAHAHAHAHA -->