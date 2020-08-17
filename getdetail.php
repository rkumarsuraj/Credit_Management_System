<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
$q="select * from user ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
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
    <h1>User Information</h1>
    <table class="flat-table flat-table-1">
      <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Credit</th>
        
      </thead>
      <tbody>
        <tr>
          <?php
          
          $row=mysqli_fetch_array($result);
          ?>
          <td><?php echo  $row["name"]; ?></td>
          <td><?php echo  $row["email"]; ?></td>
          <td><?php echo  $row["credit"]; ?></td>
          
        </tr>
        <tr>
          <?php
          
          $row=mysqli_fetch_array($result);
          ?>
          <td><?php echo  $row["name"]; ?></td>
          <td><?php echo  $row["email"]; ?></td>
          <td><?php echo  $row["credit"]; ?></td>
          
        </tr>
        <tr>
          <?php
          
          $row=mysqli_fetch_array($result);
          ?>
          <td><?php echo  $row["name"]; ?></td>
          <td><?php echo  $row["email"]; ?></td>
          <td><?php echo  $row["credit"]; ?></td>
          
        </tr>
        <tr>
          <?php
          
          $row=mysqli_fetch_array($result);
          ?>
          <td><?php echo  $row["name"]; ?></td>
          <td><?php echo  $row["email"]; ?></td>
          <td><?php echo  $row["credit"]; ?></td>
          
        </tr>
        <tr>
          <?php
          
          $row=mysqli_fetch_array($result);
          ?>
          <td><?php echo  $row["name"]; ?></td>
          <td><?php echo  $row["email"]; ?></td>
          <td><?php echo  $row["credit"]; ?></td>
          
        </tr>
        <tr>
          <?php
          
          $row=mysqli_fetch_array($result);
          ?>
          <td><?php echo  $row["name"]; ?></td>
          <td><?php echo  $row["email"]; ?></td>
          <td><?php echo  $row["credit"]; ?></td>
          
        </tr>
        <tr>
          <?php
          
          $row=mysqli_fetch_array($result);
          ?>
          <td><?php echo  $row["name"]; ?></td>
          <td><?php echo  $row["email"]; ?></td>
          <td><?php echo  $row["credit"]; ?></td>
          
        </tr>
        <tr>
          <?php
          
          $row=mysqli_fetch_array($result);
          ?>
          <td><?php echo  $row["name"]; ?></td>
          <td><?php echo  $row["email"]; ?></td>
          <td><?php echo  $row["credit"]; ?></td>
          
        </tr>
        <tr>
          <?php
          
          $row=mysqli_fetch_array($result);
          ?>
          <td><?php echo  $row["name"]; ?></td>
          <td><?php echo  $row["email"]; ?></td>
          <td><?php echo  $row["credit"]; ?></td>
          
        </tr>
        <tr>
          <?php
          
          $row=mysqli_fetch_array($result);
          ?>
          <td><?php echo  $row["name"]; ?></td>
          <td><?php echo  $row["email"]; ?></td>
          <td><?php echo  $row["credit"]; ?></td>
          
        </tr>
        
      </tbody>
    </table>
    
    
    <br><br>
    <center>
      <a href="index.php">
      <button class="button" style="vertical-align:middle">
      <span>Home</span>
      </button>
    </a>
    </center>
    
  </body>
</html>