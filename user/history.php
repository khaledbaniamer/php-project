<?php 
require "connect.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/profile.css">
    <title>Document</title>
</head>
<body>

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">

            <div class="mt-3 text-center">
                <a class="btn btn-primary profile-button" href="profile.php">Profile</a>
                </div>

                <div class="mt-3 text-center">
                    <a class="btn btn-primary profile-button" href="history.php">History</a>
                </div>

            <span> </span></div>
        </div>

      
        <div class="col-sm-9 border-right">
            <div class="p-3 py-5">
             
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Order ID</th>
                        <td scope="col">202001554</td>
                        <th scope="col">Order Date</th>
                        <td scope="col">25-2-2019</td>
                    </tr>
                </thead> 
                <thead>  
                    <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">QTY</th>
                        <th scope="col">Price</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody>    
                    <tr>
                        <td >product 1</td>
                        <td >3</td>
                        <td >25$</td>
                        <td >75$</td>
                    </tr>
                    <tr>
                        <td >product 2</td>
                        <td >2</td>
                        <td >20$</td>
                        <td >40$</td>
                    </tr>
                    <tr>
                        <td >product 3</td>
                        <td >4</td>
                        <td >15$</td>
                        <td >60$</td>
                    </tr>
                    <tr>
                        <th scope="col">Totla QTY</th>
                        <td scope="col">9</td>
                        <th scope="col">Total Price</th>
                        <td scope="col">175$</td>
                    </tr>
                </tbody> 
               
            </table>  
        </div>
    </div>
    <div class="col-md-3 border-right"></div>
    <div class="col-md-9 border-right ">
            <div class="p-3 py-1">
             
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Order ID</th>
                        <td>202001554</td>
                        <th scope="col">Order Date</th>
                        <td>25-2-2019</td>
                    </tr>
                </thead> 
                <thead>  
                    <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">QTY</th>
                        <th scope="col">Price</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody>    
                    <tr>
                        <td >product 1</td>
                        <td >3</td>
                        <td >25$</td>
                        <td >75$</td>
                    </tr>
                    <tr>
                        <td >product 2</td>
                        <td >2</td>
                        <td >20$</td>
                        <td >40$</td>
                    </tr>
                    <tr>
                        <td >product 3</td>
                        <td >4</td>
                        <td >15$</td>
                        <td >60$</td>
                    </tr>
                    <tr>
                        <th scope="col">Totla QTY</th>
                        <td scope="col">9</td>
                        <th scope="col">Total Price</th>
                        <td scope="col">175$</td>
                    </tr>
                </tbody> 
               
            </table>  
        </div>
    </div>
</div>

</div>

</div>
    
</body>
</html>

