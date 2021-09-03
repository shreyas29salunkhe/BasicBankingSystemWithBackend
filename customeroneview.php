<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer view</title>
</head>
<body>
    <?php
        $servername = 'localhost';
        $username = 'root';
        $password = 'admin';
        $dbname = 'mywebsite';

        //create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        //check connection
        if($conn->connect_error){
            die("Connection failed".$conn->connect_error);
        }

        $id = $_GET['id'];
        //echo $id;
        $sql = "SELECT * FROM customers WHERE id='$id'";
        $result = $conn->query($sql);
        
        while($row = $result->fetch_row()){
            ?>
            <h1 style="text-align:center;">Details of cutomer <?php echo $row[1]." ".$row[2]?></h1>
            <table width="400px" border='1' cellspacing='0' cellpadding="10" align='center'>
  
                <tr>
                    <td>ID</td>
                    <td><?php echo $row[0];?></td>
                </tr>
                <tr>
                    <td>First name</td>
                    <td><?php echo $row[1];?></td>
                </tr>
                <tr>
                    <td>Last name</td>
                    <td><?php echo $row[2];?></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><?php echo $row[3];?></td>
                </tr>
                <tr>
                    <td>Bank Balance</td>
                    <td><?php echo $row[4];?></td>
                </tr>
                <tr>
                <td></td>
                <td><a href="customerview.php"><input type="submit" value="Back"></a></td>
                </tr>
            </table>
            
            <?php
        }

        ?>

        

</body>
</html>