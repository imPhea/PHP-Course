<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Day2</title>
</head>
<style>
   .box {
      width: 200px;
      height: 200px;
      float: left;
      background: blue;
      margin: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
      font-size: 2em;
   }
   .box2 {
      width: 50px;
      height: 50px;
      background: red;
      display: flex;
      justify-content: center;
      align-items: center;
   }
</style>

<body>

   <?php
   
      for($i=0; $i<5; $i++) {
         ?>
            <div class='box'>
               <?php 
                  ?>
                  <div class="box2">
                     <?php echo $i?>
                  </div>
               <?php
               ?>            
            </div>
         <?php
      }
         

   ?>


</body>
</html>

