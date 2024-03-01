<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I_C_I</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    include("connect.php");
    if(isset($_POST['iname'])){
    $iname=$_POST['iname'];
    $icompany=$_POST['icompany'];
    $iprice=$_POST['iprice'];
    $iqty=$_POST['iqty'];
    $image1=$_FILES['image1']['name'];
    $temp_image1=$_FILES['image1']['tmp_name'];
    if($iname=="" || $icompany=="" || $iprice==""  || $image1=="" ){
        ?>
        <script>alert('textboxes are empty')</script>
        <?php
    }else{
    move_uploaded_file($temp_image1,"imagesname/$image1");
    function add($price,$qty){

        $total=$price*$qty;
        return $total;
    }
    $net=add($iprice,$iqty);
    $insert="INSERT INTO insert_c_items VALUES(null,'$iname','$icompany',$iprice,$iqty,$net,'$image1',NOW())";
    $result=$pdo->query($insert);
    if($result){
        ?>
        <script>
            alert("Record has been added");
        </script>
        <?php
    }
    else{
    ?>
    <script>alert("Some Error Ocured")</script>
    <?php
    }
}
    }
    ?>
<div class="container">
    <div class="row shadow mt-5">
    <h2 style="height:1vm" class="text-center"><marquee behavior="" direction="right">Insert Computer Items</marquee></h2>
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
           
            <form method="post" enctype="multipart/form-data">
                <label for="name" class="form-label">Item Name</label>
                <input type="text" name="iname" class="form-control" placeholder="Enter Item name">
                <label for="for item company" class="form-label">Item_Company</label>
                <input type="text" name="icompany" class="form-control" placeholder="Enter company Name">
                <label for="for item price" class="form-label">Item price</label>
                <input type="text" name="iprice" class="form-control" placeholder="Enter item price">
                <label for="for item quentity" class="form-label">Item Quentity</label>
                <input type="text" class="form-control" name="iqty" placeholder="Enter item quentity">
                
                <div >

                </div>
                <label for="for image" class="form-label">Select file</label>
                <input type="file"  name="image1" class="form-control">
                <input type="submit" class="btn btn-info mt-3 mb-5" value="Add Records">

            </form>
        
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>    
</body>
</html>