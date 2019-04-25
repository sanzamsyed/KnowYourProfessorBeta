<?php


    session_start();


    $contactName = "";
    $contactEmail = "";
    $contactPhone = "";
    $contactMessage = "";
    $contactDate = "";

    $dbContact = mysqli_connect('localhost','root','','myfinaldb');

    $errorsContact = array();

    if(isset($_POST["contactSubmit"]))
    {


        $conactName = mysqli_real_escape_string($dbContact,$_POST['contactName']);
        $contactEmail = mysqli_real_escape_string($dbContact,$_POST['contactEmail']);
        $contactPhone = mysqli_real_escape_string($dbContact,$_POST['contactPhone']);
        $contactMessage = mysqli_real_escape_string($dbContact,$_POST['contactMessage']);
        $contactDate = date('Y-m-d H:i:s');



    if(empty($_POST["contactName"]))
    {
        array_push($errorsContact,"Your name is required");
    }

    if(empty($_POST["contactEmail"]))
    {
      array_push($errorsContact,"Your email is required");

    }

   

    if(empty($_POST["contactMessage"]))
    {
        array_push($errorsContact,"Your message is required");
    }

    if(count($errorsContact) == 0)
    {
        $sqlContact = "INSERT INTO Contact (Name,Email,PhoneNo,Message,Date) VALUES ('$conactName','$contactEmail','$contactPhone','$contactMessage','$contactDate')";
        mysqli_query($dbContact,$sqlContact);
        unset($_POST);

        echo '<script type="text/javascript">alert("Your message has been sent to us!")</script>';
    }

        else
        {
            foreach ($errorsContact as $errorContact) :

            endforeach;
            unset($_POST);
            echo '<script type="text/javascript">alert("'.$errorContact.'")</script>';
        }



    }





?>





<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Chela+One" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/contactus.css">
   <link rel="stylesheet" type="text/css" href="css/footer2.css">

    <title>Contact Us</title>
</head>





<body>


<?php include('KYP-Header.php');?>


    <div class="blank-div-1">



    </div>





    <div class="container">

        <div class="form-holder">

            <div class="owl-image-holder text-center">
            <img src="images/owl2.png" width = 90 height = 90 class="contact-us-owl" />
                </div>
                <br>

            <h3 class="text-center">Give us a Shout!</h3>
            <p class="text-center">If you have anything to say about the system, send us an owl!</p>


            <div class="form-holder-inner">

                <form method="post" action="contactus.php">



                    <div class="form-group col-md-6">

                        <div class="inner-addon left-addon">
                            <i class="fa fa-user"></i>
                            <input name="contactName" type="text" placeholder="Name" class="form-control" id="contactusFullname" required />
                        </div>
                    </div>


                    <div class="form-group col-md-6">

                        <div class="inner-addon left-addon">
                            <i class="fa fa-envelope"></i>
                            <input name="contactEmail" type="text" placeholder="Email" class="form-control" id="contactusEmail" required />
                        </div>
                    </div>


                    <div class="form-group col-md-6">

                        <div class="inner-addon left-addon">
                            <i class="fa fa-phone-square"></i>
                            <input name="contactPhone" type="text" placeholder="Contact no (Optional)" class="form-control" id="contactusPhone"  />
                        </div>
                    </div>


                    <div class="form-group col-md-6">

                        <div class="inner-addon left-addon">
                            <i class="fa fa-commenting"></i>
                            <textarea name="contactMessage" class="form-control" placeholder="Your message" id="contactusMessage" required></textarea>
                        </div>
                    </div>





                    <div class="button-holder col-md-6 form-group">

                        <button type="submit" name="contactSubmit" class="btn btn-primary contact-us-button">Fire Away!</button>

                    </div>

                </form>

            </div>

        </div>

    </div>
    
    
    
    


    <div class="blank-div-2">



    </div>


    <?php include('KYP-footer.php'); ?>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>


</html>
