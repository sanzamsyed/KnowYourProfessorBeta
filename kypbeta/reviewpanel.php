<?php


    session_start();
    
    
$commentUser = $_SESSION['username'];
$commentProf = $_SESSION['reviewProf'];
$commentText = "";
$commentWords = "";
$commentDateTime = "";
$badWordFound = false;
$errorContant = "";
$strictTeacherID = "";


$firstSelectOption = "";
$secondSelectOption = "";
$thirdSelectOption = "";





$dbComment = mysqli_connect('localhost','root','','myfinaldb');

$errorsComment = array();

if(isset($_POST["commentSubmit"]))
{
    $commentText = mysqli_real_escape_string($dbComment,$_POST['profComments']);  
    $commentWords = preg_split('/\s+/', $commentText);
   
    
    
    
    
    $profanityQuery =  mysqli_query($dbComment,"SELECT * FROM profanity");
        
    while($profanityRow = mysqli_fetch_array($profanityQuery))
    {
        foreach($commentWords as $cw)
        {
            if ($cw === $profanityRow['word'])
            {
                $badWordFound = true;
                break;
                     
            }
            
        }
             
             if($badWordFound == true) break;

             
             
         }




    if(empty($_POST["profComments"]))
    {
        array_push($errorsComment,"Say what you want to say");
    }
    
       if($badWordFound == true)
        {
            echo '<script type="text/javascript">alert("We do not use this kind of language around here")</script>';
        }


    if(count($errorsComment) == 0 && $badWordFound == false)
    {
        
        $query = "SELECT UserID FROM user WHERE UserName like '$commentUser'";
        $queryResult = mysqli_query($dbComment,$query);
        $queryRow = mysqli_fetch_assoc($queryResult);
        $commentUserID = $queryRow['UserID'];
        
        
        
        $query = "SELECT TeacherID FROM teacher WHERE TeacherName like '$commentProf'";
        $queryResult = mysqli_query($dbComment,$query);
        $queryRow = mysqli_fetch_assoc($queryResult);
        $commentTeacherID = $queryRow['TeacherID'];
        
        $strictTeacherID = $queryRow['TeacherID'];
        
        
        $commentDateTime = date('Y-m-d H:i:s');
        $tRCourse = $_POST['selCourse'];
        
        
        $sqlComment = "INSERT INTO comment (TeacherID,UserID,CommentText,CommentDate,CName) VALUES ('$commentTeacherID','$commentUserID','$commentText','$commentDateTime','$tRCourse')";
        
        if (mysqli_query($dbComment,$sqlComment))
        {
            echo '<script type="text/javascript">alert("Posted successfully!")</script>';
        }
        
        else
        {
             echo '<script type="text/javascript">alert("Something went wrong!")</script>';
        }
        
        
        
        $firstSelectOption = $_POST['sel1'];
        $secondSelectOption = $_POST['sel2'];
        $thirdSelectOption = $_POST['sel3'];
        
        $firstSelectPoint = "";
        $secondSelectPoint = "";
        $thirdSelectPoint = "";
        
        
        $query = "SELECT AttributeStatusID FROM teacher_attribute_status WHERE AttributeStatusName like '$firstSelectOption'";
        $queryResult = mysqli_query($dbComment,$query);
        $queryRow = mysqli_fetch_assoc($queryResult);
        $firstSelectPoint = $queryRow['AttributeStatusID'];
        
        $query = "SELECT AttributeStatusID FROM teacher_attribute_status WHERE AttributeStatusName like '$secondSelectOption'";
        $queryResult = mysqli_query($dbComment,$query);
        $queryRow = mysqli_fetch_assoc($queryResult);
        $secondSelectPoint = $queryRow['AttributeStatusID'];
        
        
        $query = "SELECT AttributeStatusID FROM teacher_attribute_status WHERE AttributeStatusName like '$thirdSelectOption'";
        $queryResult = mysqli_query($dbComment,$query);
        $queryRow = mysqli_fetch_assoc($queryResult);
        $thirdSelectPoint = $queryRow['AttributeStatusID'];
        
        
        
        $attributeID = 1;
        $sqlReview = "INSERT INTO junction_teacher_attribute (TeacherID,AttributeID,AttributeStatusID) VALUES ('$commentTeacherID','$attributeID','$firstSelectPoint')";
        if(mysqli_query($dbComment,$sqlReview))
        {
           // echo '<script type="text/javascript">alert("Attribute insertion okay")</script>';
        }
        
        else
        {
             //echo '<script type="text/javascript">alert("Attribute insertion not okay")</script>';
        }
        
        
        $attributeID = 2;
        $sqlReview = "INSERT INTO junction_teacher_attribute (TeacherID,AttributeID,AttributeStatusID) VALUES ('$commentTeacherID','$attributeID','$secondSelectPoint')";
        if(mysqli_query($dbComment,$sqlReview))
        {
            //echo '<script type="text/javascript">alert("Attribute insertion okay")</script>';
        }
        
        else
        {
             //echo '<script type="text/javascript">alert("Attribute insertion not okay")</script>';
        }
        
        
        $attributeID = 3;
        $sqlReview = "INSERT INTO junction_teacher_attribute (TeacherID,AttributeID,AttributeStatusID) VALUES ('$commentTeacherID','$attributeID','$thirdSelectPoint')";
        if(mysqli_query($dbComment,$sqlReview))
        {
            //echo '<script type="text/javascript">alert("Attribute insertion okay")</script>';
        }
        
        else
        {
             //echo '<script type="text/javascript">alert("Attribute insertion not okay")</script>';
        }
    
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        unset($_POST);

        
    }

        else
        {
            foreach ($errorsComment as $errorComment) :

            endforeach;
            unset($_POST);
           
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

    <title>Review Panel</title>
</head>





<body>


    <?php include('KYP-Header.php');?>



    <div class="blank-div-1">



    </div>




    <div class="container">

        <div class="form-holder">

            <div class="owl-image-holder text-center">
                <img src="images/owl2.png" width=90 height=90 class="contact-us-owl" />
            </div>
            <br>

            <h3 class="text-center">
                <?php echo $_SESSION['reviewProf'] ?>
            </h3>
            <p class="text-center">Tell us what you want to</p>


            <div class="form-holder-inner">

                <form method="post" action="reviewpanel.php">
                
                
                <div class="form-group col-md-6">
                        <text>Select Course</text>
                        <select class="form-control" name="selCourse">
                        <?php
    
                                $query = "SELECT TeacherID FROM teacher WHERE TeacherName like '$commentProf'";
                                $queryResult = mysqli_query($dbComment,$query);
                                $queryRow = mysqli_fetch_assoc($queryResult);
                                $commentTeacherID = $queryRow['TeacherID'];
    
                                    
                                
                                $string = "";
                                $query = "SELECT * FROM junction_course_teacher where TeacherID = '$commentTeacherID'";
                                $queryResult = mysqli_query($dbComment,$query);
                                while($queryRow = mysqli_fetch_array($queryResult))
                                {
                                    $cID = $queryRow['CourseID'];
                                    $q = "SELECT * FROM course WHERE CourseID = '$cID'";
                                    $qResult = mysqli_query($dbComment,$q);
                                    $qRow = mysqli_fetch_assoc($qResult);
                                    $string .= "
                                    
                                        <option> ".$qRow['CourseName']."</option>
                                        ";
                                }
                                
                                echo $string;
                                ?>
           
                        </select>
                        

                    </div>



                    <div class="form-group col-md-6">
                        <text>Patience :</text>
                        <select class="form-control" name="sel1">
                            <option>Little</option>
                            <option>Moderate</option>
                            <option>Excellent</option>
                        </select>

                    </div>

                    <div class="form-group col-md-6">
                        <text>Integrity:</text>
                        <select class="form-control" name="sel2">
                            <option>Little</option>
                            <option>Moderate</option>
                            <option>Excellent</option>
                        </select>

                    </div>


                    <div class="form-group col-md-6">
                        <text>Professionalism:</text>
                        <select class="form-control" name="sel3">
                            <option>Little</option>
                            <option>Moderate</option>
                            <option>Excellent</option>
                        </select>

                    </div>

                    <div class="form-group col-md-6">
                        <textarea name="profComments" class="form-control" placeholder="Enter your comment" id="comment" required></textarea>

                    </div>




                    <div class="button-holder col-md-6 form-group">

                        <button type="submit" name="commentSubmit" class="btn btn-primary contact-us-button">Post!</button>

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