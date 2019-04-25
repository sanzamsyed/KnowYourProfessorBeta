<?php

$searchText = "";
include('serverconnection.php');
session_start();

if(isset($_POST['searchButton']))
{
    $searchText = $_POST['searchText'];
    $_SESSION['searchText'] = $searchText;
    header("location:searchPage.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Chela+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Neuton" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/footer2.css">

    <title>Home</title>
</head>









<body>

    <?php include('KYP-Header.php'); ?>



     <div class="hero-image">
  <div class="hero-text">
    <h1 class="frontpage-text">"A teachers affects eternity. He can never tell where his influence stops. "</h1>
      <br>
      <h3 class="quote-text">-Henry Adams</h3>
      <br> <br>
     	 <a href="listingpage.php" class="btn btn-lg animated-button sandy-three">See all our Teachers!</a>
      
  </div>
</div>

    <div class="blank-div-1"
         ></div>



    <div class="middle-section">

        <div class="middle-sectioin-items">

            <br><br>
            <form method="post" action="index.php">
            <div class="input-group col-md-3 search-holder">

                <input name="searchText" type="text" class="form-control input-lg" placeholder="Search..." />
                <span class="input-group-btn">
                        <button name="searchButton" class="btn btn-info btn-lg" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>

            </div>
                </form>


        </div>

    </div>


    <div class="blank-div-1">
        <p class="more-from-us text-center">More From Know Your Professor </p>

    </div>

    <br> <br>


    <div class="container">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="https://www.youtube.com/user/dipmessi10">
                    <img class="d-block w-100 carousel-image" src="images/carousel1.jpg" alt="First slide">

                    <div class="carousel-caption ">
                        <h5 class="carousel-text-1">Love to Code? Start today.</h5>
                        <p class="carousel-text-2">Find the best tutorials here!</p>
                    </div>
                        </a>
                </div>
                <div class="carousel-item">
                    <a href="https://cirt.gcu.edu/teaching3/tips/groupwork">
                    <img class="d-block w-100 carousel-image" src="images/carousel4.jpg" alt="Second slide">
                    <div class="carousel-caption ">
                        <h5 class="carousel-text-1">Be a Teammate.</h5>
                        <p class="carousel-text-2">Expand yourself while you prepare for the world of work.</p>
                    </div>

                        </a>
                </div>
                <div class="carousel-item">
                    <a href="https://www.theodysseyonline.com/15-fun-things-to-do-on-college-budget">
                    <img class="d-block w-100 carousel-image" src="images/carousel3.jpg" alt="Third slide">
                    <div class="carousel-caption ">
                        <h5 class="carousel-text-1">Fun things to do with a college budget</h5>
                        <p class="carousel-text-2">Read,watch and travel!</p>
                    </div>
                        </a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
        </div>

    </div>

    <div class="blank-div-2"
         ></div>


         <?php include('KYP-footer.php'); ?>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>


</html>
