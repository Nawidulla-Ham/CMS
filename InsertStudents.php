<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insertion form</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="index.css" />
    <style>
      
    </style>
  </head>
  <body>
    <?php
    include("connect.php");
      if(isset($_POST['sname'])){
        $sname=$_POST['sname'];
        $lname=$_POST['slname'];
        $fname=$_POST['fname'];
        $snumber=$_POST['snumber'];
        $subject=$_POST['subject'];
        $program=$_POST['program'];
        $image1=$_FILES['image1']['name'];
        $image2=$_FILES['pictur']['name'];
         if($sname=="" || $lname=="" || $fname=="" || $snumber=="" || $subject=="" || $program=="" || $image1=="" || $image2==""){
          ?>
          <script>alert("Please fill out the filed")</script>
          <?php
         }  
         else{
          $temp_image1=$_FILES['image1']['tmp_name'];
        
        $temp_image2=$_FILES['pictur']['tmp_name'];
        move_uploaded_file($temp_image1,"imagesname/$image1");
        move_uploaded_file($temp_image2,"imagesname/$image2");
          $insert="INSERT INTO Insert_students VALUES(null,'$sname','$lname','$fname','$snumber','$subject','$program','$image1','$image2',NOW())";
        $result=$pdo->query($insert);
        if($result){
          ?>
          <script>alert('Record has been added')</script>
          <?php
        }


         }

        


        
      }
      


    ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
         <h4>Please Add Reocrds</h4>
        </div>
        <div class="col-sm-4"></div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-sm-1"></div>
  <div class="col-sm-10">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="shadow">
        <div style="width: 100%;">
        <h4 class="text-center text-shadow-info">Insert Students</h4>
        </div>
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-5">
            <label class="form-label">Name</label>
            <input
              type="text"
              class="form-control"
              name="sname"
              placeholder="Enter your name"
            />
          </div>
          <div class="col-sm-5">
            <label class="form-label">Last Name</label>
            <input
              type="text"
              class="form-control"
              name="slname"
              placeholder="Enter your name"
            />
          </div>
          <div class="col-sm-1"></div>
        </div>
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-5">
            <label class="form-label">Father Name</label>
            <input
              type="text"
              name="fname"
              class="form-control"
              placeholder="Enter your father Name"
            />
          </div>
          <div class="col-sm-5">
            <label class="form-label">Mobile Number</label>
            <input
              type="text"
              name="snumber"
              class="form-control"
              placeholder="Enter your father Name"
            />
          </div>
          <div class="col-sm-1"></div>
        </div>
      
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <label class="form-label">Subject</label>
            <select class="form-select" name="subject">
                <?php
                $squery="SELECT * FROM subject";
                $select=$pdo->query($squery);
                while($data=$select->fetch()){
                  echo "<option value=".$data['ID'].">".$data["S_name"]."</option>"."<br/>";
                }
                ?>
            </select>
        </div>
        <div class="col-sm-5">
            <label class="form-label">Program</label>
            <select class="form-select" name="program">
            <?php
                $squery="SELECT * FROM programm";
                $select=$pdo->query($squery);
                while($data=$select->fetch()){
                  echo "<option value=".$data['id'].">".$data["P_name"]."</option>"."<br/>";
                }
                ?>
            </select>
        </div>
        <div class="col-sm-1"></div>
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-4"></div>
              <div class="col-sm-4">
                 <?php
            if(isset($_POST['image1'])){
              $file=$_POST['image1'];
              echo "<img src=imagename/".$file." alt='this is Students image'>";
            }
            ?>
              </div>
              <div class="col-sm-4">
                <?php
              if(isset($_POST['pictur'])){
              $file=$_POST['pictur'];
              echo "<img src=imagename/".$file.">";
            }
            ?>
              </div>
            </div>
           
          </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5">
                <label class="form-label">Bill Image</label>
                <input type="file" name="image1" class=" form-control" >
            </div>
            <div class="col-sm-5">
                <label for="Students image" class="form-label">Students Image</label>
                <input type="file" class="form-control" name="pictur">
            </div>
            <div class="col-sm-1"></div>
            <input type="submit" class="btn btn-outline-primary mt-4 mb-5" value="Add Record"/>
        </div>
       
       
      </div>

      
    </form>
    </div>
      </div>
      <div class="col-sm-1"></div>
    </div>
  </body>
  <script src="index.js"></script>
</html>
