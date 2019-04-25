<?php


session_start();

if(!isset($_SESSION['username']))

{
    die("Please login");
}


$loginFullname = $_SESSION['fullname'];
$loginFullname2 = "Hey there brown cow";
$loginUsername = $_SESSION['username'];
$loginRole = $_SESSION['role'];
$loginEmail = "A";

//echo "profile page : ".$_SESSION['username'];
//echo "profile page : ".$_SESSION['fullname'];



//echo "loginfullname ". $loginFullname;

//if (isset($_SESSION['fullname']))
//{
//    $loginFullname = $_SESSION['fullname'];
//}
//if (isset($_SESSION['username']))
//{
//    $loginUsername = $_SESSION['username'];
//}
//if (isset($_SESSION['username']))
//{
//    $loginEmail = $_SESSION['email'] ;
//}




?>


<!doctype html>
<html lang="en">



<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link href="https://fonts.googleapis.com/css?family=Chela+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Neuton" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Chela+One" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/profprofile.css">
    <link rel="stylesheet" type="text/css" href="c_css/main.css">
    <link rel="stylesheet" href="b_css/bootstrap.css">
    <link rel="stylesheet" href="b_css/style.css">
    <link rel="stylesheet" href="b_css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/footer2.css">


    <title>Profile</title>
</head>







<body>

    <?php include('KYP-Header.php'); ?>





<section class="home_banner_area">
        <div class="container box_1620">
            <div class="banner_inner d-flex align-items-center">
                <div class="banner_content">
                    <div class="media">
                        <div class="d-flex">
                            <img src="images/userprofile.png" alt="">
                        </div>
                        <div class="media-body">
                            <div class="personal_text">
                                <h3 class="">
                                    <?php echo $_SESSION['fullname']; ?>
                                </h3>
                                <h4>

                                    <?php echo $_SESSION['username']; ?>
                                </h4>
                                <h4>
                                    <?php echo $_SESSION['email']; ?>
                                </h4>
                                <h4>
                                    <?php echo $_SESSION['role']; ?>
                                </h4>

                                <ul class="list basic_info">
                                    <li><a href="#"><i class="lnr lnr-calendar-full"></i>Mon Mrittika</a></li>
                                    <li><a href="#"><i class="lnr lnr-phone-handset"></i> 61 Alormela</a></li>
                                    <li><a href="#"><i class="lnr lnr-envelope"></i> Kishoreganj</a></li>
                                    <li><a href="#"><i class="lnr lnr-home"></i>A bunch of other related information about the user</a></li>
                                </ul>

    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    


    <?php include('KYP-Footer.php'); ?>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>


    </body>
</html>
