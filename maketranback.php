<?php
    include 'connect.php';
    $input = $_GET["f1"];
    $input2 = $_GET["f2"];
    $input3 = $_GET["f3"];
    $input4 = $_GET["f4"];
    $query1 = "SELECT Amount FROM customers WHERE Name='$input'";
    $result1 = mysqli_query($conn, $query1);
    $query2 = "SELECT Amount FROM customers WHERE Name='$input2'";
    $result2 = mysqli_query($conn, $query2);
    while( $rows = mysqli_fetch_assoc($result1) ){
        $int1 = (int)$rows["Amount"];
    }
    while( $rows = mysqli_fetch_assoc($result2) ){
        $int2 = (int)$rows["Amount"];
    }
    if ($int1 - $input3 < 0){
        echo '<script type="text/JavaScript"> alert("Transaction Unsuccessful , try again :( "); </script>';
    }
    else
    {
        $fi = $int1 - $input3;
        $fii = $int2 + $input3;
        $query1 = "UPDATE customers SET Amount = '$fi' WHERE Name='$input'";
        $result1 = mysqli_query($conn, $query1);
        $query2 = "UPDATE customers SET Amount = '$fii' WHERE Name='$input2'";
        $result2 = mysqli_query($conn, $query2);
    }
?>