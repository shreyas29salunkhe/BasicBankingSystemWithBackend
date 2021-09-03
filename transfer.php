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
   
    $from = $_GET['from'];
    $to = $_GET['to'];
    $amount = $_GET['amount1'];

    //echo $amount;
    $sql_from = "SELECT * FROM customers WHERE id='$from'";
    $result_from = $conn->query($sql_from);
    $row_from = $result_from->fetch_row();
    $senderamount = $row_from[4];
    //echo $senderamount;

    $sql_to = "SELECT * FROM customers WHERE id='$to'";
    $result_to = $conn->query($sql_to);
    $row_to = $result_to->fetch_row();
    $receiveramount = $row_to[4];
    //echo $receiveramount;
    // while($row = $result->fetch_row()){
    //     $firstname = $row[1];
    //     $lastname = $row[2];
    //     $email = $row[3];
    //     $balance = $row[4];
    // }
      

        // $sql = "SELECT * from users where id=$to";
        // $query = mysqli_query($conn,$sql);
        // $sql2 = mysqli_fetch_array($conn,$query);

        if(($amount)<0){
             echo "OOPs negative values cannit be transfered";
         }

         else if($amount > $row_from[4]){
             echo "Bad Luck! INsufficient Balance";
         }

         else if($amount == 0){
             echo "OOPs!Zero Value cannot be transfered";
         }

         else{
            //senders account
             $newbalance = $row_from[4] - $amount;
             $sql1 = "UPDATE customers SET balance='$newbalance' WHERE id ='$from'";
             $result1 = $conn->query($sql1); 

             //receivers account
             $newbalance = $row_to[4] + $amount;
             $sql2 = "UPDATE customers set balance=$newbalance where id=$to";
             $result2 = $conn->query($sql2);
             
             echo "Transaction Successfull";
         }
         ?>
         <a href="history.php?from=<?php echo $from?> && to=<?php echo $to?> && amount=<?php echo $amount?>"><input type="submit" value="history"></a>

         <?php
         $newbalance = 0;
         $amount = 0;

        $conn->close();
        ?>
