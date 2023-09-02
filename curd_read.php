<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin:0px;
        padding:0px;
        box-sizing:border-box;
        background:linear-gradient(120deg,#2980b9,#8e44ad);
        overflow:hidden;
    }
    .navbar{
        display:flex;
        flex-direction:row;
        font-size:16px;
        padding:10px;
        height:20px;
        background:white;
        justify-content:space-evenly;

    }
    .corner{
        justify_content:end;
    }
    a{
        text-decoration:none;
          color:solid b; 

    }
   
    .center{
        
        position:absolute;
        top:50%;
        left:50%;
        width:100vh;
        transform:translate(-50%,-50%);
        background:white;
        margin:10px;
        padding:5px;
        border-radius:10px;
    
       
    }
    .center table{
        position:relative;
        padding: 0 40px;
        box-sizing:border-box;
   
      
        
    }
    .center h1{
        text-align:center;
        border-bottom:2px  solid silver;

    }
    .content{
    
       align-content:stretch;
    }
    .content tr{
        text-align:center;
        height:20px;
        padding:10px;
        border:2px black;
        justify-content:space-around;
    }
   
</style>
<body>
    <?php
    $conn=mysqli_connect("localhost","root","","curd_read1") or die("Connection Failed");
    $sql="SELECT* FROM curd_read11";
       $result=mysqli_query($conn,$sql) or die("Query Failed");
       if(mysqli_num_rows($result)>0){

       
    ?>
  <div  class="navbar">
    <a href="#">HOME</a>
    <a href="curd_read.php">READ</a>
    <a href="curd_create.php">CREATE</a>
    <a href="curd_update.php">UPDATE</a>
    <a href="curd_delete.php">DELETE</a>
    <div class="corner">
   <input type="submit" value="LOGIN">
   <input type="submit" value="SIGNUP">
</div>
    </div>
    <div class="center">
        <h1>Table</h1>
        <table class="table_1">
         <thead class=content>
            <tr>
           <th >Sr no</th>
           <th>Name</th>
           <th>Class</th>
           <th>Address</th>
           <th>Phone </th>
            </tr>
         </thead>
         <tbody class="content"><?php
            while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
            <td>1</td>
            <td>Sweety</td>
            <td>btech</td>
            <td>Lucknow</td>
            <td>23457898</td>
             </tr>
             <tr>
                <td><?php echo  $row['sid'];?></td>
                <td><?php echo $row['sname'] ;?></td>
                <td><?php echo $row['sclass'];?></td>
                <td><?php echo $row['saddress'];?></td>
                <td><?php echo $row['sphone'];?></td>
             </tr> 
            <?php
            }
            ?>
         </tbody>

        </table>

    </div> 
    

   <?php
       }else{
        echo ("No record Found");
       }
   ?>
</body>
</html>