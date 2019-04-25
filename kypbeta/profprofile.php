<?php


session_start();


if(!isset($_SESSION['username']))

{
    die("Please login");
}

$dbComment = mysqli_connect('localhost','root','','myfinaldb');

$testingValue = 50;
$totalPatience = 0;
$totalProfessionalism = 0;
$totalIntegrity = 0;

$profName = $_SESSION['profname'];
$profDepartment = $_SESSION['profdepartment'];
$profEmail = $_SESSION['profemail'];
$profStatus = $_SESSION['profstatus'];


$profCourse = "";

if(isset($_POST['putReview']))
{
    $_SESSION['reviewProf'] = $profName;
    header('location:reviewpanel.php');
    
}

///GET PROF STATUS FROM $profStatus
    
    $query = "SELECT StatusName FROM status WHERE StatusID = '$profStatus'";
    $queryResult = mysqli_query($dbComment,$query);
    $queryRow = mysqli_fetch_assoc($queryResult);
    $profStatus = $queryRow['StatusName'];

///GET DEPARTMENT NAME FROM $profDepartment

    
    $query = "SELECT DepartmentName FROM department WHERE DepartmentID = '$profDepartment'";
    $queryResult = mysqli_query($dbComment,$query);
    $queryRow = mysqli_fetch_assoc($queryResult);
    $profDepartment = $queryRow['DepartmentName'];





 //ATTRIBUTE PERCENTAGE ADDING STARTS HERE

    $query = "SELECT TeacherID FROM teacher WHERE TeacherName like '$profName'";
    $queryResult = mysqli_query($dbComment,$query);
    $queryRow = mysqli_fetch_assoc($queryResult);
    $profileTeacherID = $queryRow['TeacherID'];



//    ///FINDING CORUSES FOR THE TEACHER
//
//    $query = "SELECT * FROM junction_course_teacher WHERE TeacherID = '$profileTeacherID'";
//    $queryResult = mysqli_query($dbComment,$query);
//    while($queryRow = mysqli_fetch_assoc($queryResult))
//    {
//        $tempCourseID = $queryRow['CourseID'];
//        $tempQuery = "SELECT CourseName FROM course WHERE CourseID = $tempCourseID";
//        $tempQueryResult = mysqli_query($dbComment,$tempQuery);
//        $tempQueryRow = mysqli_fetch_assoc($tempQueryResult);
//        $tempCourseName = $tempQueryRow['CourseName'];
//        $profCourse .= $tempCourseName;
//        $profCourse.= " ";
//        
//    }


    




    
    ///FINDING TOTAL PATIENCE
    $tempAttributeID = 1;
    $query = "SELECT * FROM junction_teacher_attribute WHERE TeacherID = '$profileTeacherID' AND AttributeID = '$tempAttributeID'";
    $queryResult = mysqli_query($dbComment,$query);
    $rowCount = mysqli_num_rows($queryResult);

    if($rowCount != 0)
    {
    while($queryRow = mysqli_fetch_array($queryResult))
    {
        $totalPatience = $totalPatience + $queryRow['AttributeStatusID'];
    }

    $totalPatience = intval(($totalPatience/($rowCount * 3)) * 100);
    }

    ///ROW COUNT = 10; 10 * MAX PAITENCE (3) = 30;


    ///FINDING TOTAL INTEGRITY
    $tempAttributeID = 2;
    $query = "SELECT * FROM junction_teacher_attribute WHERE TeacherID = '$profileTeacherID' AND AttributeID = '$tempAttributeID'";
    $queryResult = mysqli_query($dbComment,$query);
    $rowCount = mysqli_num_rows($queryResult);
    if($rowCount != 0)
    {
    while($queryRow = mysqli_fetch_array($queryResult))
    {
        $totalIntegrity = $totalIntegrity + $queryRow['AttributeStatusID'];
    }

    $totalIntegrity = intval(($totalIntegrity/($rowCount * 3)) * 100);
    }




    ///FINDING TOTAL PROFESSIONALISM
    $tempAttributeID = 3;
    $query = "SELECT * FROM junction_teacher_attribute WHERE TeacherID = '$profileTeacherID' AND AttributeID = '$tempAttributeID'";
    $queryResult = mysqli_query($dbComment,$query);
    $rowCount = mysqli_num_rows($queryResult);
    if($rowCount != 0)
    {
    while($queryRow = mysqli_fetch_array($queryResult))
    {
        $totalProfessionalism = $totalProfessionalism + $queryRow['AttributeStatusID'];
    }

    $totalProfessionalism = intval(($totalProfessionalism/($rowCount * 3)) * 100);
    }
    
    











?>



<!doctype html>
<html lang="en">



<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link href="https://fonts.googleapis.com/css?family=Chela+One" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Chela+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Neuton" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/profprofile.css">
    <link rel="stylesheet" type="text/css" href="c_css/main.css">
    <link rel="stylesheet" href="b_css/bootstrap.css">
    <link rel="stylesheet" href="b_css/style.css">
    <link rel="stylesheet" href="b_css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/footer2.css">


    <title>Teachers Profile</title>
</head>







<body>

    <?php include('KYP-Header.php'); ?>



    <section class="home_banner_area">
        <div class="container box_1620">
            <div class="banner_inner d-flex align-items-center">
                <div class="banner_content">
                    <div class="media">
                        <div class="d-flex">
                            <img src="images/proflist.png" alt="">
                        </div>
                        <div class="media-body">
                            <div class="personal_text ">
                                <h3 class="" >
                                    <?php echo $_SESSION['profname']; ?>
                                </h3>
                                <h4 class="" >

                                    <?php echo $profStatus ?>
                                </h4>
                                <h4>
                                    <?php echo $profDepartment ?>
                                </h4>
                                <h4>
                                    <?php echo $profEmail ?>
                                </h4>



                                <?php
                                ///FINDING CORUSES FOR THE TEACHER
                                $empCourse = "";
                                $query = "SELECT * FROM junction_course_teacher WHERE TeacherID = '$profileTeacherID'";
                                $queryResult = mysqli_query($dbComment,$query);
                                if(mysqli_num_rows($queryResult) != 0)
                                {
                                while($queryRow = mysqli_fetch_assoc($queryResult))
                                {
                                $tempCourseID = $queryRow['CourseID'];
                                $tempQuery = "SELECT CourseName FROM course WHERE CourseID = $tempCourseID";
                                $tempQueryResult = mysqli_query($dbComment,$tempQuery);
                                $tempQueryRow = mysqli_fetch_assoc($tempQueryResult);
                                $tempCourseName = $tempQueryRow['CourseName'];
                                
                                $empCourse .= "<span class= 'badge badge-pill badge-dark'> $tempCourseName</span>";
                                $empCourse .= " ";

                                }
                                    
                                    echo $empCourse;
                                }
    
                                
                            
                                
                                
                                ?>








<!--
                                <ul class="list basic_info">
                                    <li><a href="#"><i class="lnr lnr-calendar-full"></i> 31st December, 1992</a></li>
                                    <li><a href="#"><i class="lnr lnr-phone-handset"></i> 44 (012) 6954 783</a></li>
                                    <li><a href="#"><i class="lnr lnr-envelope"></i> businessplan@donald</a></li>
                                    <li><a href="#"><i class="lnr lnr-home"></i> Santa monica bullevard</a></li>
                                </ul>
-->
                                <br><br>


                                    <form method="post" action="profprofile.php">

                                        <div class="button-holder  form-group ">

                                            <button type="submit" name="putReview" class="btn new-custom-btn">Put a Review yourself!</button>

                                        </div>
                                    </form>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Welcome Area =================-->
    <section class="welcome_area p_120">
        <div class="container">
            <div class="row welcome_inner">
                <div class="col-lg-6">

                    <div class="welcome_text">
                        <h4>About</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="wel_item">
                                    <i class="lnr lnr-database"></i>
                                    <h4>10</h4>
                                    <p>Projects</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wel_item">
                                    <i class="lnr lnr-book"></i>
                                    <h4>15</h4>
                                    <p>Publications</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wel_item">
                                    <i class="lnr lnr-users"></i>
                                    <h4>20</h4>
                                    <p>Social Work</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="tools_expert">
                        <div class="skill_main">
                            <div class="skill_item">
                                <h4>Patience <span class="counter">
                                        <?php echo $totalPatience; ?></span>%</h4> 
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $totalPatience; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>Integrity <span class="counter">
                                        <?php echo $totalIntegrity; ?></span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $totalIntegrity; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>Professionalism <span class="counter">
                                        <?php echo $totalProfessionalism; ?></span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $totalProfessionalism; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php
    
    $query = "SELECT TeacherID FROM teacher WHERE TeacherName like '$profName'";
    $queryResult = mysqli_query($dbComment,$query);
    $queryRow = mysqli_fetch_assoc($queryResult);
    $profileTeacherID = $queryRow['TeacherID'];
        
    
    $result = mysqli_query($dbComment,"SELECT * FROM comment WHERE TeacherID = '$profileTeacherID' ");
    $abc="";
     if(mysqli_num_rows($result) == 0)
        {
            $abc .= "
            <p class = 'NoCommentText text-center'>No Comments yet</p> ";
            echo $abc;
        }
                                    
      else
      {
          $cname = "";
        while($row = mysqli_fetch_array($result))
       {
            $temp = $row['UserID'];
            $query = "SELECT UserName FROM user WHERE UserID = '$temp'";
            $queryResult = mysqli_query($dbComment,$query);
            $queryRow = mysqli_fetch_assoc($queryResult);
            $cname = $queryRow['UserName'];
            
           $abc .=" 
   
    <section>
        <div class='container box_1170'>
            <div class='row justify-content-center'>
                <div class='col-lg-10'>
                    <div class='post-box mb-30'>
                        <div class='d-flex'>
                            <div>
                                <a href='#'>
                                    <img src='images/reviewuser.png' alt=''>
                                </a>
                            </div>
                            <div class='post-meta'>
                                <div class='meta-head'>
                                    <h4 class= 'ArnobsTextNormal'>$cname</h4>
                                </div>
                                <div class='meta-details'>
                                    <ul>
                                        <li>
                        

                                                <i class='fa fa-calendar' aria-hidden='true'></i> ".($row['CommentDate'])."
                                           
                                        </li>
                                        
                                        <li>
                        

                                                <i class='fa fa-book' aria-hidden='true'></i> ".($row['CName'])."
                                           
                                        </li>
                                       
                                        <br> <br>
                                        <h3>".($row['CommentText'])."</h3>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>";
        }
          
          echo $abc;
      }
    
    ?>







    <div class="MyNewEmptyDiv">


    </div>










    <?php include('KYP-Footer.php');?>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="b_js/jquery-3.3.1.min.js"></script>
    <script src="b_js/popper.js"></script>
    <script src="b_js/bootstrap.min.js"></script>
    <script src="b_js/stellar.js"></script>
    <script src="b_vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="b_vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="b_vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="b_vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="b_vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="b_vendors/popup/jquery.magnific-popup.min.js"></script>
    <script src="b_js/jquery.ajaxchimp.min.js"></script>
    <script src="b_vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="b_vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="b_js/mail-script.js"></script>
    <script src="b_js/theme.js"></script>
    <script src="sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>


</body>

</html>