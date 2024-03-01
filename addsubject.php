<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Add subject</title>
</head>
<body>

<?php
include("connect.php");
if(isset($_POST['subject'])){
    $subject=$_POST['subject'];
    $insert="INSERT INTO Subject VALUES(null,'$subject')";
    $execut=$pdo->query($insert);
    if($execut){
        echo"added";
    }
}

if(isset($_POST['program'])){
    $program=$_POST['program'];
    $in="INSERT INTO Programm VALUES(null,'$program')";
    $execut=$pdo->query($in);
    if($execut){
        echo"added";
    }
}

?>
    <div class="container">
        <h3>Add Subject</h3>
        <hr/>
        <div class="row shadow mt-5">
            <div class="col-sm-1"></div>
            <div class="col-sm-9">
                <form method="post">
                <input type="text" name="subject" class="form-control mt-5" placeholder="Add Subject">
            <input type="submit" class="btn btn-info btn-lg mt-4 mb-5">
            </form>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <h3>Add program</h3>
        <hr/>
        <div class="row shadow mt-5">
            <div class="col-sm-1"></div>
            <div class="col-sm-9">
                <form method="post">
                <input type="text" name="program" class="form-control mt-5" placeholder="Add Subject">
            <input type="submit" class="btn btn-info btn-lg mt-4 mb-5">
            </form>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

    
</body>
</html>