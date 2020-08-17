<?php
session_start();
?>
<html>
  <head>
    <title>
    viewUser
    </title>
    <link rel="stylesheet" href="Assets/css/style.css">
  </head>
  <body>
    <h1>Transfer History</h1>
    <table class="flat-table flat-table-1">
      <thead>
        <th>SlNo</th>
        <th>Sender</th>
        <th>Receiver</th>
        <th>Credit</th>
        
      </thead>
      <tbody>
        <?php
        $con=mysqli_connect('localhost','root','','company');
        $q="select * from transfer";
        $query = mysqli_query($con,$q);
        while($res = mysqli_fetch_array($query))
        {
          ?>
        <tr>

          <td> <?php echo $res['id'] ;?></td>
          <td> <?php echo $res['Sender'] ;?></td>
          <td><?php echo $res['Receiver'] ;?></td>
          <td><?php echo $res['credit'] ;?></td>
          
        </tr>
        <?php
        }
        ?>
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