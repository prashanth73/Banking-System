<!DOCTYPE html>
<html>
    <head>
        <title>Basic Banking System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php 
            include 'header.php';
        ?>

        <div class="container-fluid">
            <div class="row main">
                <div class="col-sm-12 col-md">
                    <div class="heading text-center">
                        <h3>Welcome to</h3>
                        <h2>BUSINESS BANK</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md img text-center">
                    <img src="img/bank.png" alt="bank" class="img-fluid">
                </div>
            </div> 
            
            <div class="row text-center">
                <div class="col-md">
                    <img src="img/user.jpg" alt="user" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button>Create a User</button></a>
                </div>
                <div class="col-md">
                    <img src="img/transfer.jpg" alt="transfer" class="img-fluid">
                    <br>
                    <a href=""><button>Transfer Money</button></a>
                </div>
                <div class="col-md">
                    <img src="img/history.jpg" alt="history" class="img-fluid">
                    <br>
                    <a href="history.php"><button>Transaction History</button></a>
                </div>
            </div>
        </div>
        <footer class="text-center mt-5 py-3">
            <p>&copy;2021 By Prashanth Kumar</p>
            <h4>The Sparks Foundation</h4>
        </footer>
    </body>
</html>