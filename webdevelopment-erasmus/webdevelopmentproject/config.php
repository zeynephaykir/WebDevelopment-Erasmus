
<?php 

$link = mysqli_connect('localhost','root','','festivaldb');

if($link->connect_errno > 0){
   die('Unable to connect to the database ['. $db->conect_errno . ']');
}
echo 'Connected<br>';
?>
