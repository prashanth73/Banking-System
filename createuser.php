<?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        $name=mysqli_real_escape_string($con,$_POST["Name"]);
        $email=mysqli_real_escape_string($con,$_POST["Email"]);
        $balance=mysqli_real_escape_string($con,$_POST["Balance"]);

        $query="INSERT INTO customers(Name,Email,Balance) VALUES(' " .$name. " ',' " .$email. " ',' " .$balance. " ')";
        $result=mysqli_query($con,$query);
        if($result){
            echo "  <script> 
                    alert('Hurray!! user created');
                    window.location='customers.php';
                    </script>";   
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Create User</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/user.css">
    </head>

    <body>
        <?php 
            include 'header.php'; 
        ?>
        <div class="background container">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h4>Please enter</h4>
                    <h2>User Information</h2>
                </div>
                <div class="panel-body">
                    <div class="panel-body-item">
                        <img src="img/user3.jpg" alt="user-profile" class="img-fluid">
                    </div>
                    <div class="panel-body-item">
                        <form method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Balance" name="Balance" required>
                            </div>
                            <div class="form-group button">
                                <button type="submit" name="submit" class="form-button">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="panel-footer text-center">
                    <p>&copy; BUSINESS BANK</p>
                    <a href="#" style="text-decoration: none;">privacy policy</a>
                </div>
            </div>
        </div>
        <footer class="text-center mt-5 py-3">
            <p>&copy;2021 By Prashanth Kumar</p>
            <h4>The Sparks Foundation</h4>
        </footer>
    </body>
</html>