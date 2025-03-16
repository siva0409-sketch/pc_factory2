<?php
$HOSTNAME='wp.kongu.edu';
$USERNAME='24dsc17';
$PASSWORD='24dsc17';
$DATABASE='24dsc17';
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if($con){
    echo "";
}
else{
    die(mysqli_error($con));
}
?>
