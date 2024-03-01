<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Computer lab Management System</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="index.css" />
    <style>
      #id12 li{
        list-style-type: none;
        height:30px;
        width:100%;
        margin-left:-20px;
      }
    .add{
      box-shadow:1px 2px 3px lightgray;
    }
    .flhi{
      height:1000px;
    }

    </style>
  </head>
  <body>
    <?php

  include("connect.php");
?>
    <div class="container-fluid sticky-top">
      <div class="row bg-dark ">
        <div class="col-sm-4">
          <img
            src="images/a.jpg"
            height="80px"
            width="80px"
            style="border-radius: 100%"
            alt="logo"
          />
        </div>
        <div class="col-sm-4">
          <marquee behavior="" direction="left"><h4 class="text-center text-light mt-4" style="height: 1vm">
            Computer lab Managment System
          </h4></marquee>
        </div>
        <div class="col-sm-4">
          <div id="date" class="text-info"></div>
          <div id="clock" class="text-info"></div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 flhi">
          <ul id="id12" class="shadow">
            <li class="add">add items</li>
            <li class="add">add items</li>
            <li class="add">add items</li>
            <li class="add">add items</li>
            <li class="add">add items</li>
            <li class="add">add items</li>
            <li class="add">add items</li>
            <li class="add">add items</li>
            <li class="add">add items</li>
            <li class="add">add items</li>
            <li class="add">add items</li>
          </ul>
        </div>
        <div class="col-sm-9">
          show data
        </div>
      </div>
    </div>
      
    <script src="index.js"></script>
  </body>
</html>
