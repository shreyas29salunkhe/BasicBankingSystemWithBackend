<?php
    $servernae = 'localhost';
    $username = 'root';
    $password ='admin';
    $dbname = 'mywebsite';

    //create connection
    $conn = new mysqli($servernae, $username, $password, $dbname);

    //check connection
    if($conn->connect_error){
        die("Connection Fail".$conn->connect_error);
    }

    $from = $_GET['from'];
    $to = $_GET['to'];
    $amount = $_GET['amount'];
    

    $sql1 = "SELECT * FROM customers WHERE id = '$from'";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_row();

    $senderfname = $row1[1];
    $senderlname = $row1[2];
    $senderid = $row1[0];

    $sql2 = "SELECT * FROM customers WHERE id = '$to'";
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_row();

    $receiverfname = $row2[1];
    $receiverlname = $row2[2];
    $receiverid = $row2[0];


    //Insert Values into table history
    $sql = "INSERT INTO history(Srno, senderID, senderFname, senderLname, amountSent, receiverID, receiverFname, receiverLname)
            VALUES(NULL, '$senderid', '$senderfname', '$senderlname', '$amount', '$receiverid', '$receiverfname', '$receiverlname')";
    $result = $conn->query($sql);

    if($result === TRUE){
        echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    

    //Select values from table history
    $sql_select = "SELECT * FROM history ORDER BY Srno DESC LIMIT 1";
    $result_select = $conn -> query($sql_select);
    ?>
        <h1 style="text-align:center;">History</h1>
        <table width='600px' border='1' cellspacing='0' cellpadding='10' align="center">
            <tr>
                <td>SrNo</td>
                <td>senderID</td>
                <td>senderFname</td>
                <td>senderLname</td>
                <td>amountSent</td>
                <td>receiverID</td>
                <td>receiverFname</td>
                <td>receiverLname</td>
            </tr>

        <?php
            if($result_select -> num_rows > 0){
                while($row = $result_select -> fetch_assoc()){
        ?>
        <tr>
                <td><?php echo $row['Srno'];?></td>
                <td><?php echo $row['senderID'];?></td>
                <td><?php echo $row['senderFname'];?></td>
                <td><?php echo $row['senderLname'];?></td>
                <td><?php echo $row['amountSent'];?></td>
                <td><?php echo $row['receiverID'];?></td>
                <td><?php echo $row['receiverFname'];?></td>
                <td><?php echo $row['receiverLname'];?></td>
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
    $conn -> close();
    ?>
