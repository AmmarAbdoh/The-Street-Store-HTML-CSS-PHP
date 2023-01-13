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

            // step3
            $user=$_POST["user_name"];
            $p=$_POST["pws"];
            $q="select * from users_table where user_id='$user' and user_password='$p' ";
            $r=mysqli_query($db,$q);
            
            // step4
            mysqli_close($db);
        
            if(mysqli_num_rows($r)>0)
            header("location:http://localhost/Main.html");
            else{
                    echo " <script>alert('username or passsword is wrong');  
                                    window.location='http://localhost/login.html'
                            </script>                                                     ";

            }



            // header("location:http://localhost/login.html");
           
           
        ?>



</body>
</html>