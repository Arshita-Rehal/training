<html>
<head>
    <title> abc</title>
</head>
<body>
<style>
        *{
            background-color:burlywood;
            color: black;
        }
        table{
            margin-left: auto;
            margin-right: auto;
        }
        .red{color: red;}    
    </style>
</head>
<body>
    <p><center>WELCOME TO THE PAGE</center></p>
    <p><center>KINDLY FILL IN FOLLOWING DETAILS</center></p>
<form action="post.php" method="post">
    <table cellpadding="5"><center>
    <tr>
        <td>NAME:</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>EMAIL:</td>
        <td>
            <input type="email" name="email"></td> </td>
    </tr>
    <tr>
        <td>PASSWORD:<span class="red">*</span></td>
        <td><input type="password" name="password" required></td>
    </tr>
    <tr>
        <td> CONTACT:</td>
        <td>
            <input type="numbers" name="contact"> </td>
    </tr>
    
    <tr>
        <td><input type="submit" value="submit"></td>
    </tr>
    </center>
    </table>
</form>
</body>
</html>