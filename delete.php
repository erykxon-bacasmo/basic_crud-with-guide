<?php

require "connection.php";


// going back sa index file na line 48 pababa eto yung function na mang yayari sa delete
// sa una sa button kukunin muna naten yung name non then ilalagay naten siya sa loob ng $_post sa if statement
if(isset($_POST['delete'])){
    // then dito gagawa tayo ng variable kahit ano na makukuha natin yung id dun sa may line 52 ng index file
    $id = $_POST['erase'];

    // then follow this syntax, itong syntax gumamit ng WHERE ibig sabihin nyan may condition yung line nato na kung saan idedelete nya sa data_id yung id na makukuha nya kapag clinick yung delete button
    $sql = "DELETE FROM information_db WHERE data_id = '$id'";
    $conn->query($sql); //sa loob ng query nilagay yung variable name na $sql dahil ieexecute nya yung function nayon

    //then gumamit tayo ng syntax na after ng execution na to san sya mapupunta that's why we use header syntax
    header("location: index.php");

}

?>