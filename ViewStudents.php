<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Students</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
        <marquee behavior="" direction="right"> <h3>View Students</h3></marquee>  
       </div>
        <div class="col-sm-5"></div>
        <div class="col-sm-4">
          
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row shadow">
        <div class="col-sm-6">
          <h4 class="mt-3  mb-5">All information about students</h4>
        </div>
        <div class="col-sm-6">
        <div class="input-group mt-4 mb-4">
            <input type="text" class="form-control" placeholder="Search items"><button type="submit" style="background-color:cyan;color:black;border:0"  >Search</button>
          </div>
        </div>
        <div class="col-sm-12 shadow">
          
          <div class="overflow-y-scroll">
          <table
            class="table table-bordered table-striped table-hover text-center"
          >
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Last Name</th>
              <th>Father Name</th>
              <th>Mobile No</th>
              <th>Subject</th>
              <th>Program</th>
              <th>Bills image</th>
              <th>Students image</th>
              <th>Data</th>
              <th>Updata</th>
              <th>Delete</th>
            </tr>
            <?php
            // include("connect.php");
            // $select="SELECT * FROM insert_students";
            // $executed=$pdo->query($select);
            // while($data=$executed->fetch()){
            //   $id=$data['S_id'];
            //   $s_name=$data['S_name'];
            //   $lname=$data['L_name'];
            //   $Fname=$data['F_name'];
            //   $smobile=$data['S_moblie'];
            //   $subject=$data['S_subject'];
            //   $program=$data['S_program'];
            //   $bills=$data['S_bill_image'];
            //   $studentimage=$data['Student_image'];
            //   $data=$data['Data'];
            //   echo"<tr>";
            //   echo "<td>".$id."</td>";
            //   echo "<td>".$s_name."</td>";
            //   echo "<td>".$lname."</td>";
            //   echo "<td>".$Fname."</td>";
            //   echo "<td>".$smobile."</td>";
            //   echo "<td>".$subject."</td>";
            //   echo "<td>".$program."</td>";
            //   echo "<td> <img src=imagesname/".$bills."  hight='200px' width='70px' style='border-radius:100%'></td>";
            //   echo "<td> <img src=imagesname/".$studentimage." hight='200px' width='70px' style='border-radius:100%'></td>";
            //   echo "<td>".$data."</td>";
            //   echo "<td><a href='#'>Update</a></td>";
            //   echo "<td><a href='#'>Delete</a></td>";

             
            //   echo "</tr>";
            // }
            
            
            ?>
          </table>
        </div>
        </div>
        <div class="col-sm-1"></div>
      </div>
    </div>
  </body>
</html>
