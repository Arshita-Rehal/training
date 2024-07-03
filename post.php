<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="demo";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    // if(!$conn) {
    //   echo "error";
    // } 
    // else{
    //    echo "<br>";
    //    echo "succesful connection";
    // } 
    $x=$_REQUEST["name"];
    $z=$_REQUEST["email"];
    $w=$_REQUEST["password"];
    $y=$_REQUEST["contact"];
    $sql = "INSERT INTO login VALUES('$x','$z','$w','$y')";

    $a= mysqli_query($conn, $sql);

    if($a){
      echo "succesful";
    }
?>  