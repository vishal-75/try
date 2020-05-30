<?php
$con=mysqli_connect('localhost','root');
if($con){
    echo"yes";
}else{
    echo "no0000000000000000";
}
mysqli_select_db($con,'xx');
$e=$_POST['e'];
$p=$_POST['p'];
$c =$_POST['c'];

$query="insert into vv(e,p,c)
values('$e','$p','$c')";

echo "$query";
mysqli_query($con,$query);

?>