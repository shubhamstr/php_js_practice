<?php


include './main_config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="GET">
        <textarea id="text" cols="100" rows="15" name="text"></textarea>
        <input type="submit" value="submit" name="submit">
    </form>
    <input type="button" value="select" id="select">
    <input type="button" value="update" id="update">
    <input type="button" value="delete" id="delete">
    <input type="button" value="insert" id="insert">
    <input type="button" value="join" id="join">
    <input type="button" value="case" id="case">

    <?php 
    if(isset($_GET['text'])){
        $text = $_GET['text'];
        $q1 = mysqli_query($con,"$text");
        if($q1){echo "success";}else{echo "error";mysqli_error($con);
        
        }
       $cnt = mysqli_num_rows($q1);
       for($i=0; $i < $cnt; $i++){
        while($row = mysqli_fetch_array($q1)){
            echo "<pre>";
            print_r($row);
            echo "</pre>";
        }
    }
    
    }

?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    $('#select').click(function() {
        $('#text').text("SELECT column1, column2 FROM table_name;");
    });
    $('#update').click(function() {
        $('#text').text("UPDATE table_name SET column1 = value1, column2 = value2 WHERE condition;");
    });
    $('#delete').click(function() {
        $('#text').text("DELETE FROM table_name WHERE condition;");
    });
    $('#insert').click(function() {
        $('#text').text(
            "INSERT INTO table_name (column1, column2, column3, ...) VALUES(value1, value2, value3, ...); ");
    });
    $('#join').click(function() {
        $('#text').text(
            "SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate FROM Orders INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID;"
        );
    });
    $('#case').click(function() {
        $('#text').text(
            "SELECT OrderID, Quantity, CASE WHEN Quantity > 30 THEN 'The quantity is greater than 30'  WHEN Quantity = 30 THEN 'The quantity is 30' ELSE 'The quantity is under 30' END AS QuantityText FROM OrderDetails;"
        );
    });
    </script>
</body>

</html>