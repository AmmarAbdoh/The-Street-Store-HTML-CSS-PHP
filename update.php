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

            $user_new_password=$_POST["psw-new"];

              
                   $q="update users_table SET user_id='$user_new_id',user_password='$user_new_password' 
                   where user_id='$user_id' and user_password='$user_password'  ";

                mysqli_query($db,$q);
            // step4
            mysqli_close($db);

            if($user_id=$user_new_id)
            echo " <script>alert('ur update is done ');  
            window.location='Main.html'
                  </script>";
            else{
                    echo " <script>alert('username or passsword is wrong');  
                            </script>";

            }
            

        ?>
</body>
</html>