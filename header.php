<!DOCTYPE html>
<html>
    <head>
        <title>HomePage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
        <style>
            .nav-link{
                margin-right: 15px;
                color:#2F363F;
                letter-spacing: 0.5px;
                transition: 0.5s;
            }
            .navbar-brand{
                color: #4C4B4B;
                letter-spacing: 0.5px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light bg-light navbar-fixed-top">
            <a class="navbar-brand" href="index.php">BUSINESS BANK</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mynav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynav">
                <ul class="navbar-nav nav-pills ml-auto" type='none'>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customers.php">Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TransferMoney</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="history.php">TransactionHistory</a>
                    </li>
                </ul>
            </div>
        </nav>
    </body>
</html>