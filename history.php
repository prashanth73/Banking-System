<?php
    include 'connection.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Transaction History</title>
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
            <div class="col-md">
                <h2 style="text-align: center; margin-top:45px;">Transactions</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Sender_Name</th>
                            <th>Receiver_Name</th>
                            <th>Amount_sent</th>
                            <th>Date&Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query="SELECT * FROM transfers";
                            $result=mysqli_query($con,$query);
                            while($row=mysqli_fetch_assoc($result)){
                        ?>

                        <tr>
                            <td><?php echo $row['Id']; ?></td>
                            <td><?php echo $row['Sender_Name']; ?></td>
                            <td><?php echo $row['Receiver_Name']; ?></td>
                            <td><?php echo $row['Amount_sent']; ?></td>
                            <td><?php echo $row['datetime']; ?></td>
                        </tr>

                        <?php
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