<?php
$q = $_GET['q'];
$conn = mysqli_connect("localhost","root","","recruitment");
$result = mysqli_query($conn,"SELECT * FROM posts where location='".$q."'");
echo " hi nivetha nice to meet you i am ajax";

while($row=mysqli_fetch_assoc($result)){
 echo $row['startdate'];
 echo $row['salary'];
 
}