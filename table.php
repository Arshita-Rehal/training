<html>
<head>
<title>table</title>
</head>
<body>
<table border="1"  cellspacing="0"  cellpadding="20">
<tr>
<td>name</td>
<td>email</td>
<td>password</td>
<td>contact</td>
<td>delete</td>
<td>update</td>
</tr>
<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="demo";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn) {
      echo "error";
    } 
    else{
       echo "suceesful";
    }
    
    $sql="SELECT * FROM login ";
    $a=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($a)){
       $name=$row["name"];
       $email=$row["email"];
       $password=$row["password"];
       $contact=$row["contact"];
       echo '<tr>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td>'.$contact.'</td>
        <td><a href="delete.php?name='.$name.'">delete</a></td>
        <td><a href="update.php?name='.$name.'">update</a></td>
       </tr>';
   }
       
?> 
</table>   
</body>
</html>