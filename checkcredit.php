<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'id8930489_spark');
$from=$_SESSION['name'];
$q="select credit from user where name='$from'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['credit']; 
$from=$_SESSION['name'];
//echo $var;
//echo $_POST["transfer"];
//echo $_SESSION['to'];
$to=$_SESSION['to'];
//echo $_SESSION['name'];
$q1="select credit from user where name='$to'";
$result1=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result1);
$var1=$row['credit'];
session_destroy();
if ( $var >= $_POST["transfer"] )
{   
    $credit = $_POST["transfer"];
    $history = "INSERT INTO `transfer`(Sender, Receiver, `credit`) VALUES ('$from','$to',$credit);";

    $sub=$var-$_POST["transfer"];
    $q="update user set credit='$sub' where name='$from'";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["transfer"];
    $q="update user set credit='$sum' where name='$to' ";
    $result=mysqli_query($con,$q);

    $history_result = mysqli_query($con, $history);
    
    $message="Successful transfer";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    include 'index.php';
    
}
else
{
    $message="Insufficient Balance";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    
    include 'index.php';

}
?>