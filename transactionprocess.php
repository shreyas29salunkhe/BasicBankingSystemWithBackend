<?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'admin';
    $dbname = 'mywebsite';

    
    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if($conn -> connect_error){
        die("Connection failed".$conn -> connect_error);
    }
    if(isset($_GET["msg"])){
        if($_GET["msg"] == true)
            echo "Transaction Succesfull";
    }
    // $id = $_GET['id'];

    // $sql = "SELECT * FROM customers WHERE id='$id'";
    // $result = $conn->query($sql);

    // while($row = $result->fetch_row()){
    //     $firstname = $row[1];
    //     $lastname = $row[2];
    //     $email = $row[3];
    //     $balance = $row[4];
    // }
    ?>
    <h1 style="text-align:center;"> Enter Your Account Details</h1>
    <form action="transfer.php" mathod="post">
        
            <table width="300px" cellspacing="0" cellpadding="5" align="center">
            <tr>
                    <td>Bank ID</td>
                    <td><input type="text" name="from"></td>
                </tr>
                <tr>
                    <td>First name</td>
                    <td><input type="text" name="fname" ></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="lname"></td>
                </tr>
                
                <tr>
                    <td><h2 style="text-align:center;">Transfer money to</h2></td>
                </tr>
                <tr>
                    <td>Bank ID</td>
                    <td><input type="text" name="to"></td>
                </tr>
                <tr>
                    <td>First name</td>
                    <td><input type="text" name="fname1"></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="lname1"></td>
                </tr>
                <tr>
                    <td>Amount to be transfer</td>
                    <td><input type="text" name="amount1"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name ='submit' value="Transfer Money"></td>
                </tr>
            </table>
    </form>



    
