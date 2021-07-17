<?php
    include 'connection.php';
    if(isset($_POST['submit']))
    {
        $from = $_GET['id'];
        $to = $_POST['to'];
        $amount = $_POST['amt'];

        $sql = "SELECT * from customers where id=$from";
        $query = mysqli_query($con,$sql);
        $sql1 = mysqli_fetch_array($query); 
        // returns array or output of user from which the amount is to be transferred.

        $sql = "SELECT * from customers where id=$to";
        $query = mysqli_query($con,$sql);
        $sql2 = mysqli_fetch_array($query);



        // constraint to check input of negative value by user
        if (($amount)<0)
        {
            echo '<script type="text/javascript">';
            echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
            echo '</script>';
        }

        // constraint to check insufficient balance.
        else if($amount > $sql1['Balance']) 
        {
            
            echo '<script type="text/javascript">';
            echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
            echo '</script>';
        }

        // constraint to check zero values
        else if($amount == 0){

            echo "<script type='text/javascript'>";
            echo "alert('Oops! Zero value cannot be transferred')";
            echo "</script>";
        }


        else {
        
            // deducting amount from sender's account
            $newbalance = $sql1['Balance'] - $amount;
            $sql = "UPDATE customers set Balance=$newbalance where id=$from";
            mysqli_query($con,$sql);
             

            // adding amount to reciever's account
            $newbalance = $sql2['Balance'] + $amount;
            $sql = "UPDATE customers set Balance=$newbalance where id=$to";
            mysqli_query($con,$sql);
                
            $sender = $sql1['Name'];
            $receiver = $sql2['Name'];
            $sql = "INSERT INTO transfers(`Sender_Name`, `Receiver_Name`, `Amount_Sent`) VALUES ('$sender','$receiver','$amount')";
            $query=mysqli_query($con,$sql);

            if($query){
                echo "<script> alert('Transaction Successful');
                    window.location='customers.php';
                    </script>";   
            }

            $newbalance= 0;
            $amount =0;
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Transfer Page</title>
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

        <div class="container row">
            <div class="col-md" style="margin-top:50px;">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>TRANSFER MONEY</h2>
                    </div>
                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group">
                                <?php
                                    $id=$_GET['id'];
                                    $result=mysqli_fetch_array(mysqli_query($con,"SELECT Balance from customers Where Id=$id"));

                                    echo
                                    "
                                    <label for='bal'>Available Balance:</label>
                                    <p name='bal'>$result[0]</p>
                                    ";
                                ?>
                            </div>
                            <div class="form-group">
                                <label>Select Benificiary Name:</label>
                                <select name="to">
                                    <option value="0">--select--</option>
                                    <?php

                                        $id=$_GET['id'];
                                        $i=0;
                                        $query="SELECT * from customers";
                                        $result=mysqli_query($con,$query);
                                        while($row=mysqli_fetch_array($result))
                                        {
                                            $i=$i+1;
                                            if($i==$id){
                                                continue;
                                            }
                                            echo "<option value='$row[0]'>$row[1]</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <label>Enter Amount:</label>
                                <input name="amt" type="textfield">
                            </div>
                            <div>
                                <button name="submit" type="submit" class="btn btn-primary">TRANSFER</button>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <p style="text-align:center;">Copyright &copy; BUSINESS BANK</p>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center mt-5 py-3">
            <p>&copy;2021 By Prashanth Kumar</p>
            <h4>The Sparks Foundation</h4>
        </footer>
    </body>
</html>