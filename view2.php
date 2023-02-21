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
    die(' ERROR ');
}
$sql="SELECT * FROM sem1";
$result=mysqli_query($connection,$sql);
if(mysqli_num_rows($result)>0)
{

    echo "<table  border=2 cellspacing=4 >
    <tr><th>Name</th>";
   
    echo "<th>Email</th>";
    echo "<th>phonenumber</th>";
    echo "<th>Address</th></tr>";
    while($row=mysqli_fetch_assoc($result))
{
   
    echo "<tr><td>$row[Name]</td>";
    echo "<td>$row[Email]</td>";
    echo "<td>$row[Phone_number]</td>";
       echo "<td>$row[Address]</td></tr>";

}
}
 