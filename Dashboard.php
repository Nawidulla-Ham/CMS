<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
          <h5 style="text-shadow: steelblue 1px 2px 3px">Admain Dashboard</h5>
          <hr />
          <div class="container">
            <div class="row">
              <div class="col-sm-4">
                <div id="first">
                  <h4 id="for">4</h4>
                  <h4 id="admin">admain</h4>
                </div>
              </div>
              <div class="col-sm-4">
                <div id="second">
                  <h4 id="for">
                    <?php
                   

                   
                    ?>
                  </h4>
                  <h4>
                    <?php
                    // include('connect.php');
                    // $select="SELECT COUNT(S_id) FROM insert_students";
                    // $result=$pdo->query($select);
                    // $value;
                    // while($data=$result->fetch()){
                    //   $value=$value+$data;
                    // }
                    // echo $value;
                    ?>
                  </h4>
                  <h4 id="admin">Total Students</h4>
                </div>

              </div>
              <div class="col-sm-4">
                <div id="third">
                  <h4 id="for">10</h4>
                  <h4 id="admin">Total fees</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <br />
                <?php
                include("connect.php");
               $sql="SELECT  COUNT(S_id) FROM insert_students";
               $execute=$pdo->query($sql);
               $processdcount=0;
               $totalCount=1;
               while($row=$execute->fetch()){
                $processdcount++;
                $progress=($processdcount/$totalCount)*100;
               
                echo "<div class='progress ' style='width: 800px;background-color:blue'>".round($progress)."%</div>";
                ob_flush();
                flush();
               }
               $pdo=null;
                ?>
                <label class="form-label">Total Students Fees</label>
                
                
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-1"></div>
      </div>
    </div>
  </body>
</html>
