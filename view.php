<?php
    include 'connection.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Customer Info</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
        <style>
            footer{
                color: #586776;
                background-color: #EAF0F1;
                letter-spacing: 0.8px;
            }

            footer p{
                margin: 0px;
                font-size: 15px;
            }
        </style>
    </head>
    <body>

        <?php
            include 'header.php';
        ?>
        <div class="container-fluid row">
            <div class='col-md'>
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Balance</td>
                            <td></td>
                        </tr>
                    </thead>

                    <?php
                        $id=$_GET['id'];
                        $query="SELECT * from customers WHERE Id=$id";
                        $result=mysqli_query($con,$query);
                        while($row= mysqli_fetch_assoc($result)){
                    ?>

                    <tbody>
                        <tr>
                            <td><?php echo $row['Id'] ?></td>
                            <td><?php echo $row['Name'] ?></td>
                            <td><?php echo $row['Email'] ?></td>
                            <td><?php echo $row['Balance'] ?></td>
                            <td><a href="transfer.php?id=<?php echo $row['Id'] ?>">
                                <button class='btn btn-primary btn-block'>Transfer Money</button></a></td> 
                        </tr>

                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <hr>
                <h2 style="text-align: center;">Your Transactions</h2>
                <h3>Debit Transactions</h3>
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Sender_Name</td>
                            <td>Receiver_Name</td>
                            <td>Amount_sent</td>
                            <td>Date&Time</td>
                        </tr>
                    </thead>
                    <?php
                        $id=$_GET['id'];
                        $query="SELECT Name from customers WHERE Id=$id";
                        $result=mysqli_query($con,$query);
                        $row=mysqli_fetch_assoc($result);
                        $name=$row['Name'];

                        $debit_query="SELECT * from transfers WHERE Sender_Name= '$name' ";
                        $debit_execute=mysqli_query($con,$debit_query);
                        if(mysqli_num_rows($debit_execute)==0){
                    ?>
                    <div class="jumbotron">
                        <h4>Sorry!! NO Transactions</h4>
                    </div>
                    <?php
                        }else{
                            while ($row=mysqli_fetch_assoc($debit_execute)){
                    ?>
                    
                        <tbody>
                            <tr>
                                <td><?php echo $row['Id'] ?></td>
                                <td><?php echo $row['Sender_Name'] ?></td>
                                <td><?php echo $row['Receiver_Name'] ?></td>
                                <td><?php echo $row['Amount_sent'] ?></td>
                                <td><?php echo $row['datetime'] ?></td>
                            </tr>

                            <?php
                                }
                            }
                            ?>
                        </tbody>
                </table>
                <h3>Credit Transactions</h3>
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Sender_Name</td>
                            <td>Receiver_Name</td>
                            <td>Amount_sent</td>
                            <td>Date&Time</td>
                        </tr>
                    </thead>
                    <?php
                        $id=$_GET['id'];
                        $query="SELECT Name from customers WHERE Id=$id";
                        $result=mysqli_query($con,$query);
                        $row=mysqli_fetch_assoc($result);
                        $name=$row['Name'];

                        $credit_query="SELECT * from transfers WHERE Receiver_Name='$name' ";
                        $credit_execute=mysqli_query($con,$credit_query);
                        if(mysqli_num_rows($credit_execute)==0){
                    ?>
                    <div class="jumbotron">
                        <h4>Sorry!! NO Transactions</h4>
                    </div>
                    <?php
                        }else{
                            while ($row=mysqli_fetch_assoc($credit_execute)){
                    ?>
                
                        <tbody>
                            <tr>
                                <td><?php echo $row['Id'] ?></td>
                                <td><?php echo $row['Sender_Name'] ?></td>
                                <td><?php echo $row['Receiver_Name'] ?></td>
                                <td><?php echo $row['Amount_sent'] ?></td>
                                <td><?php echo $row['datetime'] ?></td>
                            </tr>

                            <?php
                                }
                            }
                            ?>
                        </tbody>
                </table>
            </div>
        </div>
        <footer class="text-center mt-5 py-3">
            <p>&copy;2021 By Prashanth Kumar</p>
            <h4>The Sparks Foundation</h4>
        </footer>
    </body>
</html>