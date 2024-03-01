<?php
include("connect.php");
function insertion(){

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

}

insertion();


?>