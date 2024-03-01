<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroy Item</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    include('connect.php');
    if(isset($_POST['dname'])){
        $dname=$_POST['dname'];
        $fname=$_POST['fname'];
        $fcompany=$_POST['fcompany'];
        $fprice=$_POST['fprice'];
        $qty=$_POST['qty'];
        $file=$_FILES['file']['name'];
        $temp_files=$_FILES['file']['tmp_name'];
        if($dname=="" || $fname=="" || $fcompany=="" || $fprice=="" || $qty=="" || $file==""){
            ?>
            <script>alert("Textboxes are empty")</script>
            <?php
        
        }
        else{
            move_uploaded_file($temp_files,"imagesname/$file");
            $insert="INSERT INTO destroyitem VALUES(null,'$dname','$fname','$fcompany',$fprice,$qty,'$file',NOW())";
            $exectue=$pdo->query($insert);
            if($exectue){
                ?>
                <script>alert("Record has been added")</script>
                <?php
            }
        
        }
        
        
        }
        
        
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 shadow mt-2">
                <h6><h3>Add Destroy Item</h3>
                </h6>
                <hr/>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="for item name" class="form-label mt-2">D_item_name</label>
                    <input type="text" name="dname" placeholder="Enter destroy Item name" class="form-control">
                    <label for="for item failure" class="form-label">Failure type</label>
                    <input type="text" name="fname" placeholder="Enter failure type" class="form-control">
                    <label for="for failure item company" class="form-label">Failure Company</label>
                    <input type="text" name="fcompany" class="form-control" placeholder="Enter Failure item company">
                    <label for="for failure item price" class="form-label">Failure Item price</label>
                    <input type="text" name="fprice" class="form-control" placeholder="Enter Failuer Item price">
                    <label for="Failure item qty" class="form-label">Failuer Item Quentity</label>
                    <input type="text" name="qty" class="form-control" placeholder="Enter item quentity" >
                    <label for="for file" class="form-label">Choose File</label>
                    <input type="file" name="file" class="form-control" >
                    <input type="submit" class="btn btn-info mt-2 mb-2">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>