<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Team</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/ourteam.css">
    <link href="https://fonts.googleapis.com/css?family=Chela+One" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/ourteam.css">
    <link rel="stylesheet" type="text/css" href="css/footer2.css">
</head>

<body>

    <?php include('KYP-Header.php');?>



    <main class="ourteam-main">
        <div>
            <div class="creators" id="creator-1">
                <div class="creators__image-container">
                    <img src="images/arnob.png"  class="creators__image">
                </div>
                <div class="creators__info">
                    <h1 class="creators__name">Syed Sanzam</h1>
                    <h2 class="creators__subtitle">Department of CSE<br>16.01.04.042
                    </h2>
                    
                    <p class="creators__text">Email:sanzamsyed71@gmail.com <br>Phone:01777258585<br></p>
                </div>
            </div>
            <div class="creators" id="creator-2">

                <div class="creators__info">
                    <h1 class="creators__name">Nusrat Anika</h1>
                    <h2 class="creators__subtitle">Department of CSE<br>16.01.04.045
                    </h2>
                    <p class="creators__text">Email:nusratanika04@gmail.com <br>Phone:01783611396<br>
                    </p>
                </div>
                <div class="creators__image-container">
                    <img src="images/ani.jpg"  class="creators__image">
                </div>
            </div>
        </div>
    </main>


    <?php include('KYP-Footer.php'); ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>

</html>
