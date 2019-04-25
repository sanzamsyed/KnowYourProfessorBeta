<?php

//    session_start();


    if (isset($_SESSION["LAST_ACTIVITY"]) && (time() - $_SESSION["LAST_ACTIVITY"] > 300)) 
    {
        header('location:index.php');
        session_destroy();  
        session_unset();  
    }
    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp



    $fullName = "";
    $userName = "";
    $email = "";
    $password = "";
    $rePassword ="";
    $demo = "";
    $role = "";



    $loginFullname = "";
    $loginUsername = "";
    $loginPassword = "";
    $loginEmail = "";
    $loginErrors = array();

    $db = mysqli_connect('localhost','root','','myfinaldb');

    if(!$db)
    {
        echo '<script type="text/javascript">alert("Database connection error")</script>';
    }


    $errors = array();

    if(isset($_POST["SignupButton"]))
    {
        $fullName = mysqli_real_escape_string($db,$_POST['SignupName']);
        $userName = mysqli_real_escape_string($db,$_POST['SignupUsername']);
        $email = mysqli_real_escape_string($db,$_POST['SignupEmail']);
        $password = mysqli_real_escape_string($db,$_POST['SignupPassword']);
        $rePassword = mysqli_real_escape_string($db,$_POST['SignupReenterpassword']);
        $role = mysqli_real_escape_string($db,$_POST['SelectRole']);
        
        


    if(empty($_POST["SignupName"]))
    {
        array_push($errors,"Your name is required");
    }

    if(empty($_POST["SignupUsername"]))
    {
      array_push($errors,"Your username is required");

    }

    if(empty($_POST["SignupEmail"]))
    {
        array_push($errors,"Your email is required");
    }

    if(empty($_POST["SignupPassword"]))
    {
        array_push($errors,"Your password is required");
    }

    if(empty($_POST["SignupReenterpassword"]))
    {
        array_push($errors,"Please retype your password");
    }


    if($password != $rePassword)
    {
        array_push($errors,"Passwords do not match");
    }





    $user_check_query = "SELECT * FROM user WHERE UserName='$userName' OR Email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);


    if ($user)
    {
        if ($user['UserName'] === $userName || $user['UserName'] === 'admin')
            {
                array_push($errors, "Username already exists");
            }

        if ($user['Email'] === $email)
            {
                array_push($errors, "email already exists");
            }
    }






    if(count($errors) == 0)
    {
        $password = md5($password);
        $sql = "INSERT INTO user (FullName,UserName,Email,Password,Role) VALUES ('$fullName','$userName','$email','$password','$role')";
        mysqli_query($db,$sql);
        // echo '<script type="text/javascript">alert("Congratulations! You are in.")</script>';
        header('location:welcome.php');
        session_destroy();

    }

    else
    {
         foreach ($errors as $error) :
        echo '<script type="text/javascript">alert("'.$error.'")</script>';
         endforeach;
//         session_destroy();
    }



    }



     if(isset($_POST["LoginButton"]))
     {

        $loginUsername = mysqli_real_escape_string($db, $_POST['login-username']);
        $loginPassword = mysqli_real_escape_string($db, $_POST['login-password']);


        if(empty($_POST["login-username"]))
        {
            array_push($loginErrors,"Username is required");
        }

        if(empty($_POST["login-password"]))
        {
            array_push($loginErrors,"Password is required");

        }


        if (count($loginErrors) == 0)
        {
            if($loginUsername ==='admin' && $loginPassword === 'arnob96')
            {
                    $_SESSION['username'] = 'admin';
                    $_SESSION['text'] = 'loggedin';

                    header('location: adminpanel.php');


            }

            else
            {

            $loginPassword = md5($loginPassword);
            $query = "SELECT * FROM user WHERE UserName='$loginUsername' AND Password='$loginPassword'";
            $loginResults = mysqli_query($db, $query);
            if (mysqli_num_rows($loginResults) == 1) {
            $user = mysqli_fetch_assoc($loginResults);


                    $_SESSION['username'] = $user['UserName'];
                    $_SESSION['fullname'] = $user['FullName'];
                    $_SESSION['role'] = $user['Role'];
                    $_SESSION['email'] = $user['Email'];
                    $_SESSION['text'] = 'loggedin';

                    header('location: profilepage.php');


            }

            else
            {
                array_push($loginErrors,"Wrong Username/Password combination!");
                foreach ($loginErrors as $loginerror) :
                echo '<script type="text/javascript">alert("'.$loginerror.'")</script>';
                endforeach;
//                session_destroy();
            }

            }





        }

        



     }





























?>
