<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Destroy</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <div class="row ">
            <div class="shadow">
                <div>
                    <div class="row">
                        <div class="col-sm-4">
                        <h3 class="text-center">View Destroy Itme</h3>
                        </div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <div class="input-group mt-3 mb-3">
                            <input type="search" class="form-control"><button type="submit" style="background-color:cyan;color:black;border:0px">Search</button>
                        </div>
                        </div>
                    </div>
                    
                </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-11">
                <table class="table table-bordered table-hover text-center table-striped">
                 <tr>
                 <th>D_item_Name</th><th>Failure Type</th><th>Failure item company</th><th>Failure item price</th><th>failure item quentity</th><th>Image</th><th>Update</th><th>Delete</th>
                 </tr>
                 <?php
                 include_once('connect.php');
                    $select="SELECT * FROM destroyitem";
                    $execut=$pdo->query($select);
                    while($data=$execut->fetch()){
                        echo "<tr>";
                        echo "<td>".$data['ID']."</td>";
                        echo "<td>".$data['Name']."</td>";
                        echo "<td>".$data['Type']."</td>";
                        echo "<td>".$data['Company']."</td>";
                        echo "<td>".$data['price']."</td>";
                        echo "<td>".$data['qty']."</td>";
                        echo "<td><img src=imagesname/".$data['Image']."  hight='500px' width='70px' style='border-radius:100%'></td>";
                        echo "<td>".$data['data']."</td>";
                        echo "</tr>";
                    }
                 ?>
             </table>
            </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>