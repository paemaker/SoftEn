<?php include "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>
<body>



    <form action="insert.php" method="post">    
        <!-- ID : <input type="number" name="id"><br>     -->
        Username : <input type="text" name="username"><br>    
        Password : <input type="text" name="password"><br>
        Firstname : <input type="text" name="firstname"><br>
        Lastname : <input type="text" name="lastname"><br>
        Sex : <input type="text" name="sex"><br>
        Department : <input type="text" name="department"><br>
        Status : <input type="text" name="personal_status"><br>
        Email : <input type="text" name="email"><br>
        Phone : <input type="text" name="phon"><br>

        <input type="submit" name="submit" value="Submit">
    </form> 
</body>
</html>