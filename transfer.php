<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'test');
$q="select name from user";
$result=mysqli_query($con,$q);
//echo $_POST["transfer"];
$_SESSION['to']=$_POST["transfer"];
?>
<html>
  <head>
    <title>
    viewUser
    </title>
    <link rel="stylesheet" href="Assets/css/style.css">
    <style>
    
    input[type=text]
    {
    margin-top: 5px;
    width:14em;
    height:3em;
    font-size:15px;
    
    font-weight: bold;
    }
    input[type=submit]
    {
    display: inline-block;
    border-radius: 5px;
    background-color: #002db3;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 200px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    
    }
    
    </style>
  </head>
  <body>
    <form action="checkcredit.php" method="post"  style="position: relative; top:10%; margin-left: 20px ">
      <div class="view">
        <strong>Transfer Amount:</strong>
        <br>
        <br>
        <input type="text" name="transfer"><br>
        <br>
        <button class="button" style="vertical-align:middle">
        <span>Submit</span>
        </button>
        
      </div>
    </form>
    
  </body>
</html>