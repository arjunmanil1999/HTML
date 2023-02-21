<?php
$servername="localhost";
$username="root";
$password="";
$database="mca";
$connection=mysqli_connect($servername,$username,$password,$database);
if($connection)
{
    echo "connected successfully";

}
else{
   die('ERROR');
}

$Name=$_POST['Name1'];
$Email=$_POST['Email1'];

$Phone_number=$_POST['Phone_number1'];
$Address=$_POST['Address1'];
$sql="INSERT INTO sem1(Name,Email,Phone_number,Address) VALUES('$Name','$Email','$Phone_number','$Address')";
mysqli_query($connection,$sql);
mysqli_close($connection);