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
        echo '<h1> Transaction Unsuccessful , try again :( </h1>';
    }
    if ($input3 == 0){
        echo '<h1> Amount to be transferred cannot be zero :( </h1>';
    }
    if ($input3 < 0){
        echo '<h1> Amount to be transferred cannot be Negative :( </h1>';
    }
    else
    {
        $fi = $int1 - $input3;
        $fii = $int2 + $input3;
        $query1 = "UPDATE customers SET Amount = '$fi' WHERE Name='$input'";
        $result1 = mysqli_query($conn, $query1);
        $query2 = "UPDATE customers SET Amount = '$fii' WHERE Name='$input2'";
        $result2 = mysqli_query($conn, $query2);
        echo '<h1> Transaction Successful :) </h1>';
        $stmt = $conn->prepare("INSERT INTO transactions VALUES (?, ?, ? , ?)");
        $stmt->bind_param("ssis", $input,$input2,$input3,$input4);
        $stmt->execute();
        
    }
?>