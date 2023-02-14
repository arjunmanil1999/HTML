<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <form method="post" action="index.php">
        <table>
            <tr>

        <td><label>consumer id</label></td>
       <td> <input type="number" name="consumerid"/></td>

</tr>
<tr>

<td><label>consumer name</label></td>
<td> <input type="text" name="consumername"/></td>

</tr>
<tr>
        <td><label>previous reading</label></td>
        <td><input type="number" name="previous"/></td>
    </tr>
<tr>
    <td><label>present reading</label></td>
    <td><input type="number" name="presentreading"/></td>
</tr>

<tr>

       <td><input type="submit"></td>
</tr>
</table>
</form>
<?php

$id=$_POST['consumerid'];
$name=$_POST['consumername'];
$prevr=$_POST['previous'];
$presnt=$_POST['presentreading'];
$unit=$presnt-$prevr;

echo "cosumer id is".$id."<br>";
echo "consumer name is".$name."<br>";
echo "previous reading".$prevr."<br>";
echo "present reading ".$presnt."<br>";
echo $unit;

if($unit<100)
{
    $amt=$unit*3;
}
else if($unit>100 && $unit<200)
{
    $amt=$unit*4;
}

else if($unit>200 && $unit<300)
{
    $amt=$unit*5;
}
else{
    $amt=$unit*5; 
}

echo "total amout is",$amt;
?>    
</body>
</html>