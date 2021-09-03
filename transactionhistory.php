<?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'admin';
    $dbname = 'mywebsite';

    //create connetion
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if($conn->connect_error){
        die("Connection Fail".$conn->connect_error);
    }

    $sql = "SELECT * FROM history";
    $result = $conn -> query($sql);
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
            if($result -> num_rows > 0){
                while($row = $result -> fetch_assoc()){
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