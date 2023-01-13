<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            // step1
             $db=mysqli_connect("localhost","root","12345678") ;
            // step2
            mysqli_select_db($db,"users");

            // step3 q
            $user_id=$_POST["username"];
            $user_password=$_POST["psw"];

                $q="insert into users_table(user_id,user_password)values('$user_id','$user_password')";

                mysqli_query($db,$q);
            // step4
            mysqli_close($db);

           
            header("location:Main.html");

        ?>
</body>
</html>