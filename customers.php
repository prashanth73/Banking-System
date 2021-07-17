<?php
    include 'connection.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CustomerDetails</title>
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

        <div class="row container-fluid">
            <div class="col-md">
                <table class="table table-striped">
                    <h2 style="text-align:center; margin-top:45px;">CUSTOMER DETAILS</h2>

                    <thead>
                        <tr>
                            <th>sno</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Balance</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                            $query="SELECT * FROM customers";
                            $result=mysqli_query($con,$query);

                            while ($row=mysqli_fetch_array($result)) {
                                echo
                                "<tr>
                                    <td> " . "#" . $row[0] ."</td>
                                    <td> "  . $row[1] ."</td>
                                    <td> "  . $row[2] ."</td>
                                    <td> "  . $row[3] ."</td>
                                    <td> "  . "<a href='view.php?id=$row[0]'>
                                        <button class='btn btn-primary btn-block'>view</button></a>" . "</td> 
                                </tr>";
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