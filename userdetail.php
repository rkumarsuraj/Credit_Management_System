<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
$name=$_POST['name'];
$q="select * from user where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;
//echo $_SESSION['name'];
?>
<html>
  <head>
    <title>
    viewUser
    </title>
    <link rel="stylesheet" href="Assets/css/style.css">
  </head>
  <body>
    <div class="view">
      <h2>User Information</h2>
      <table class="flat-table flat-table-1">
        
        <th>Name</th>
        <th>Email</th>
        <th>Credit</th>
        <tr>
          <?php
          
          $row=mysqli_fetch_array($result);
          ?>
          <td><?php echo  $row["name"]; ?></td>
          <td><?php echo  $row["email"]; ?></td>
          <td><?php echo  $row["credit"]; ?></td>
          
        </tr>
      </table>
    </div>
    <br>
    <a href="viewuser.php">
      <button class="button" style="vertical-align:middle">
      <span>Transfer To</span>
      </button>
    </a>
    <br> <br> <br> <br> <br>
    <a href="selectuser.php">
      <button class="button" style="vertical-align:middle">
      <span>Back</span>
      </button>
    </a>
    
  </body>
</html>