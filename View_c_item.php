<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Computer Item</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12"><h1 class="text-center">View All Computer Items</h1></div>
            <div class="col-sm-11 shadow">
                <div class="row">
                    <div class="col-sm-3"></div>
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="input-group mt-3 mb-3">
                    <input type="search" class="form-control" placeholder="Search Item"><input type="submit" value="Search" style="background-color:cyan;color:black;border-raduis:4px">
                </div>
            </div>
                </div>
            
                <table class="table table-striped table-hover table-bordered text-center">
                    <tr>
                        <th>ID</th><th>Item_name</th><th>Item_Company</th><th>Item_Price</th><th>Item_qty</th><th>Total Price</th><th>Image</th><th>Date</th><th>Update</th><th>Delete</th>
                    </tr>
                    <?php
                    include_once("connect.php");
                    $select="SELECT * FROM insert_c_items";
                    $result=$pdo->query($select);
                    while($choose=$result->fetch()){
                        echo "<tr>";
                        echo "<td>".$choose['ID']."</td>";
                        echo "<td>".$choose['Item_name']."</td>";
                        echo "<td>".$choose['Item_company']."</td>";
                        echo "<td>".$choose['Item_price']."</td>";
                        echo "<td>".$choose['Item_qty']."</td>";
                        echo "<td>".$choose['total_price']."</td>";
                        echo "<td>".$choose['Image']."</td>";
                        echo "<td>".$choose['Data']."</td>";
                        echo "<td>Update</td>";
                        echo "<td>Delete</td>";
                        echo "</tr>";
                    }
                    
                    ?>
                </table>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    
</body>
</html>