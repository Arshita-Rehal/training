<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="demo";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    // if(!$conn) {
    //    echo "error";
    // } 
    // else{
    //     echo "<br>";
    //     echo "succesful connection";
    // } 
    if(isset($_GET["name"])){
        $b=$_GET["name"];
        $sql = "DELETE FROM login WHERE name='$b'";
        $a= mysqli_query($conn, $sql);
        if($a){
           echo "<br>";
           header('location:table.php');
        }
        else{
            echo "unsuccess";

        }
    }
    else{
        echo"error!!11!!1!!";
    }    
?>