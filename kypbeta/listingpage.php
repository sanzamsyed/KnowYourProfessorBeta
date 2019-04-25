<?php

        $searchName = "";
        include('serverconnection.php');
        session_start();
        $testDiv = "";
        if(isset($_POST['ViewProfileButton']))
        {

            if(!isset($_SESSION['text']) && empty($_SESSION['text']))
            {

                     echo '<script type="text/javascript">alert("You need to login first")</script>';

            }

            else
            {
                     $prac = $_POST['searchname'];
                     $resultNew = mysqli_query($db,"SELECT * FROM teacher WHERE TeacherName ='$prac' LIMIT 1");
                     $rowNew = mysqli_fetch_array($resultNew);
                     $_SESSION['profname'] = $rowNew['TeacherName'];
                     $_SESSION['profstatus'] = $rowNew['StatusID'];
                     $_SESSION['profdepartment'] = $rowNew['DepartmentID'];
                     $_SESSION['profemail'] = $rowNew['TeacherEmail'];





                     header('location:profprofile.php');
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Chela+One" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/listingpage.css">
        <link rel="stylesheet" type="text/css" href="css/footer2.css">

        <title>Professors</title>
    </head>

    <body>

        <?php include('KYP-Header.php'); ?>


        <div class='card-holder container'>
            <div class='row'>



                <?php


            $result = mysqli_query($db,"SELECT * FROM teacher ORDER BY TeacherName");
            $abc="";



       while($row = mysqli_fetch_array($result))
       {
           $abc .= "





<div class='col-md-4'>
<div class='our-team-main'>

<div class='team-front'>
<img src='images/professor.png'  alt=''>
<form action= '' method='post'>
<input type='text' name='searchname'value = '".($row['TeacherName'])."'>
<h3 class = 'professor-name'>".($row['TeacherName'])."</h3>



</div>

<div class='team-back'>
<span>
<div class = 'professor-button text-center'>

<button type='submit' name='ViewProfileButton' class='btn btn-primary professor-btn'>View Profile</button>
</span>
</form>
</div>

</div>
</div>
</div>";

}



echo $abc;

?>

            </div>
        </div>








                <?php
        
if(mysqli_num_rows($result) < 20)
{
    $testDiv = "
    <div class = 'trying'>
    
    </div>";
}
        
echo $testDiv;
        
        
?>


        <?php include('KYP-footer.php'); ?>





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>


    </html>
