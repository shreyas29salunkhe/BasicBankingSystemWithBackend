<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = 'admin';
    $dbname = 'mywebsite';

    //create connection
    $conn = new mysqli($hostname, $username, $password, $dbname);

    //check connection
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    
    $sql = "SELECT id,firstname,lastname,email,balance FROM customers";
    $result = $conn->query($sql);

    ?>

    <table width='600px' border='1' cellspacing='0' cellpadding='10' align="center">
    <h1 style="text-align:center;">All Customers</h1>
        <tr>
            <td><h3>ID</h3></td>
            <td><h3>Firstname</h3></td>
            <td><h3>lastname</h3></td>
            <td><h3>Email</h3></td>
            <td><h3>Balance</h3></td>
            <td><h3>Operation</h3></td>
        </tr>
    <?php
    
    if($result -> num_rows > 0){
        while($row = $result -> fetch_assoc()){

    ?>
    
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['firstname'];?></td>
        <td><?php echo $row['lastname'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['balance'];?></td>
        <td><a href="customeroneview.php?id=<?php echo $row["id"]?>">view</a>
        <br><a href="transactionprocess.php">Transfer money</a></td>
    </tr>
    <?php
        }
    ?>
    </table>
    <?php
        }
        else{
            echo "0 results";
        }
        $conn->close();
    ?>