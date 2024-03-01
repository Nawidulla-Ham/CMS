<?php
$conn=mysqli_connect("localhost","root","","CLMS") or die("connection are failed")
$first_name=$_POST['name'];
$last_name=$_POST['lname'];
$sql="INSERT INTO test(first_name,last_name) VALUES('{$first_name}','{$last_name}')";
if(mysqli_query($conn,$sql)){
    echo 1;

}
else{
    echo 0;
}


?>