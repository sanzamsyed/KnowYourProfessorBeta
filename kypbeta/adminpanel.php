<?php


session_start();

if(!isset($_SESSION['username']))

{
    die("Please login");
}


    $professorName = "";
    $professorEmail = "";
    $professorDepartment = "";
    $professorStatus = "";
    $professordepartment = "";


    $dbAdmin = mysqli_connect('localhost','root','','myfinaldb');

    $errorsAdmin = array();

    if(isset($_POST["addProfessorButton"]))
    {


        $professorName = mysqli_real_escape_string($dbAdmin,$_POST['addProfessorName']);
        $professorEmail = mysqli_real_escape_string($dbAdmin,$_POST['addProfessorEmail']);
        $professorPhone = mysqli_real_escape_string($dbAdmin,$_POST['addProfessorPhone']);
        $selectedDepartment = $_POST['addProfessorDepartment'];
        $selectedStatus = $_POST['addProfessorStatus'];
        
        $query = "SELECT DepartmentID FROM department WHERE DepartmentName like '$selectedDepartment'";
        $queryResult = mysqli_query($dbAdmin,$query);
        $queryRow = mysqli_fetch_assoc($queryResult);
        $professorDepartmentId = $queryRow['DepartmentID'];
        
        
        $query = "SELECT StatusID FROM status WHERE StatusName like '$selectedStatus'";
        $queryResult = mysqli_query($dbAdmin,$query);
        $queryRow = mysqli_fetch_assoc($queryResult);
        $professorStatusId = $queryRow['StatusID'];
        
        $query = "INSERT INTO teacher (TeacherName,TeacherEmail,TeacherPhone,DepartmentID,StatusID) VALUES ('$professorName','$professorEmail','$professorPhone','$professorDepartmentId','$professorStatusId')";
        $result = mysqli_query($dbAdmin,$query);
        

        
        
    
        
        if($result)
        {
            echo '<script type="text/javascript">alert("Entry added successfully!")</script>';
            
        }
        
        else
        {
            echo '<script type="text/javascript">alert("Something went wrong :(")</script>';
        }
        
        
        
        
        unset($_POST);

        






    }



$blockedUser = "";

if(isset($_POST["removeUserButton"]))
    {


        $blockedUser = $_POST['selUser'];
      
            $queryDelete = "DELETE  FROM user WHERE UserName='$blockedUser' ";
            $result = mysqli_query($dbAdmin,$queryDelete);
            if($result)
                echo '<script type="text/javascript">alert("User removed successfully!")</script>';
            else
            {
                echo '<script type="text/javascript">alert("Deletion unsuccessful!")</script>';
            }

    }




if(isset($_POST["addDepartmentButton"]))
    {

        $newDepartment = mysqli_real_escape_string($dbAdmin,$_POST['addDepartment']);
        $query = "INSERT INTO department (DepartmentName) VALUES ('$newDepartment')";
        $result = mysqli_query($dbAdmin,$query);
        if($result)
        echo '<script type="text/javascript">alert("Insertion successful!")</script>';
        else 
            echo '<script type="text/javascript">alert("Insertion unsuccessful!")</script>';




    }


if(isset($_POST["addCourseButton"]))
    {

        $newCourse = mysqli_real_escape_string($dbAdmin,$_POST['addCourse']);
        $newCourseDepartment = mysqli_real_escape_string($dbAdmin,$_POST['addCourseDepartment']);
        $query = "INSERT INTO course (CourseName) VALUES ('$newCourse')";
        $result = mysqli_query($dbAdmin,$query);
    
        
    
    
        $findingDepartmentIdQuery = "SELECT DepartmentID FROM department WHERE DepartmentName LIKE '$newCourseDepartment'";
        $findingDepartmentIdQueryRow = mysqli_fetch_assoc(mysqli_query($dbAdmin, $findingDepartmentIdQuery));
        $newCourseDepartmentID = $findingDepartmentIdQueryRow['DepartmentID'];
    
    
    
    
        $findingCourseIdQuery = "SELECT CourseID FROM course WHERE CourseName LIKE '$newCourse'";
        $findingCourseIdQueryRow = mysqli_fetch_assoc(mysqli_query($dbAdmin, $findingCourseIdQuery));
        $newCourseID = $findingCourseIdQueryRow['CourseID'];
    
    
        ///INSERTING TO JUNCTION TABLE
    
    
        $queryJunction = "INSERT INTO junction_department_course (DepartmentID,CourseID) VALUES ('$newCourseDepartmentID','$newCourseID')";
        $queryJunctionResult = mysqli_query($dbAdmin,$queryJunction);
    
    
    
        /*if($result)
            echo '<script type="text/javascript">alert("Insertion successful!")</script>';
        else 
            echo '<script type="text/javascript">alert("Insertion unsuccessful!")</script>';*/
    
    
    
    
        if($queryJunctionResult)
            echo '<script type="text/javascript">alert("Insertion to junction table successful!")</script>';
        else 
            echo '<script type="text/javascript">alert("Insertion to junction table unsuccessful!")</script>';




    }








if(isset($_POST["assignProfessorCourseButton"]))
    {

    
        $assignedTeacherName = $_POST['assignProfessorName'];
        $findingIdQuery = "SELECT TeacherID FROM teacher WHERE TeacherName LIKE '$assignedTeacherName'";
        $findingIdQueryRow = mysqli_fetch_assoc(mysqli_query($dbAdmin, $findingIdQuery));
        $assignedTeacherID = $findingIdQueryRow['TeacherID'];
    
    
    
    
        $assignedCourseName = $_POST['assignProfessorCourse'];
        $findingCourseIdQuery = "SELECT CourseID FROM course WHERE CourseName LIKE '$assignedCourseName'";
        $findingCourseIdQueryRow = mysqli_fetch_assoc(mysqli_query($dbAdmin, $findingCourseIdQuery));
        $assignedCourseID = $findingCourseIdQueryRow['CourseID'];
    
    
        ///INSERTING TO JUNCTION TABLE
    
    
        $queryJunction = "INSERT INTO junction_course_teacher (TeacherID,CourseID) VALUES ('$assignedTeacherID','$assignedCourseID')";
        $queryJunctionResult = mysqli_query($dbAdmin,$queryJunction);
    
    
    
        /*if($result)
            echo '<script type="text/javascript">alert("Insertion successful!")</script>';
        else 
            echo '<script type="text/javascript">alert("Insertion unsuccessful!")</script>';*/
    
    
    
    
        if($queryJunctionResult)
            echo '<script type="text/javascript">alert("Insertion to cours_teacherjunction_cours_teacher table successful!")</script>';
        else 
            echo '<script type="text/javascript">alert("Insertion to junction_cours_teacher table unsuccessful!")</script>';




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

        <title>Admin Panel</title>
    </head>





    <body>


        <?php include('KYP-Header.php');?>


        <div class="blank-div-1"></div>


        <div class="container">

            <h1 class="text-center">Admin Panel</h1>
            <br><br>
            
            
            
            
            
            <div class="form-holder">



                <h3 class="text-center">Add Department</h3>



                <div class="form-holder-inner">

                    <form method="post" action="adminpanel.php">



                        <div class="form-group col-md-6">

                            <div class="inner-addon left-addon">

                                <input name="addDepartment" type="text" placeholder="Department Name" class="form-control" id="buser" required />
                            </div>
                        </div>

                        <div class="button-holder col-md-6 form-group">

                            <button type="submit" name="addDepartmentButton" class="btn btn-primary contact-us-button">Add</button>

                        </div>

                    </form>

                </div>

            </div>
            
            
            <div class="form-holder">



                <h3 class="text-center">Add Course</h3>



                <div class="form-holder-inner">

                    <form method="post" action="adminpanel.php">



                        <div class="form-group col-md-6">

                            <div class="inner-addon left-addon">

                                <input name="addCourse" type="text" placeholder="Course Name" class="form-control" id="buser" required />
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-6">

                            <div class="inner-addon left-addon">
                            
                            <select class='form-control' id='sel2' name='addCourseDepartment'>
                            
                            <?php
                                
                                $departmentString = "";
                                $departmentQuery = "SELECT * FROM department";
                                $departmentQueryResult = mysqli_query($dbAdmin,$departmentQuery);
                                while($departmentQueryRow = mysqli_fetch_array($departmentQueryResult))
                                {
                                    $departmentString .= "
                                    
                                        <option> ".$departmentQueryRow['DepartmentName']."</option>
                                        ";
                                        
                                        
                                    
                                }
                                
                                echo $departmentString;
                                
                                
                                
                                ?>
                                
                                </select> 
                            </div>
                        </div>
                            
                        

                        <div class="button-holder col-md-6 form-group">

                            <button type="submit" name="addCourseButton" class="btn btn-primary contact-us-button">Add</button>

                        </div>

                    </form>

                </div>

            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            

            <div class="form-holder">

                <h3 class="text-center">Add a Professor</h3>



                <div class="form-holder-inner">

                    <form method="post" action="adminpanel.php">



                        <div class="form-group col-md-6">

                            <div class="inner-addon left-addon">

                                <input name="addProfessorName" type="text" placeholder="Name" class="form-control" id="profname" required />
                            </div>
                        </div>


                        <div class="form-group col-md-6">

                            <div class="inner-addon left-addon">
                            
                            <select class='form-control' id='sel1' name="addProfessorStatus">
                            
                            <?php
                                
                                $statusString = "";
                                $statusQuery = "SELECT * FROM status";
                                $statusQueryResult = mysqli_query($dbAdmin,$statusQuery);
                                while($statusQueryRow = mysqli_fetch_array($statusQueryResult))
                                {
                                    $statusString .= "
                                    
                                        <option> ".$statusQueryRow['StatusName']."</option>
                                        ";
                                        
                                        
                                    
                                }
                                
                                echo $statusString;
                                
                                
                                
                                ?>
                                
                                </select> 

                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        <div class="form-group col-md-6">

                            <div class="inner-addon left-addon">
                            
                            <select class='form-control' id='sel2' name='addProfessorDepartment'>
                            
                            <?php
                                
                                $departmentString = "";
                                $departmentQuery = "SELECT * FROM department";
                                $departmentQueryResult = mysqli_query($dbAdmin,$departmentQuery);
                                while($departmentQueryRow = mysqli_fetch_array($departmentQueryResult))
                                {
                                    $departmentString .= "
                                    
                                        <option> ".$departmentQueryRow['DepartmentName']."</option>
                                        ";
                                }
                                
                                echo $departmentString;
                                ?>
                                
                                </select> 
                            </div>
                        </div>
                            
                             <div class="form-group col-md-6">

                            <div class="inner-addon left-addon">

                                <input name="addProfessorEmail" type="text" placeholder="Email" class="form-control" id="profemail" required />
                            </div>
                            
    
                            
                            
                        </div>
                        
                        <div class="form-group col-md-6">

                            <div class="inner-addon left-addon">

                                <input name="addProfessorPhone" type="text" placeholder="Contact No" class="form-control"  required />
                            </div>
                            
    
                            
                            
                        </div>





                        <div class="button-holder col-md-6 form-group">

                            <button type="submit" name="addProfessorButton" class="btn btn-primary contact-us-button">Add</button>

                        </div>

                    </form>

                </div>

            </div>
            
            
            
            
            
            
            
            <div class="form-holder">



                <h3 class="text-center">Assign Professor</h3>



                <div class="form-holder-inner">

                    <form method="post" action="adminpanel.php">
                        
                        <div class="form-group col-md-6">

                            <div class="inner-addon left-addon">
                            
                            <select class='form-control' id='sel2' name='assignProfessorName'>
                            
                            <?php
                                
                                $string = "";
                                $query = "SELECT * FROM teacher ORDER BY TeacherName";
                                $queryResult = mysqli_query($dbAdmin,$query);
                                while($queryRow = mysqli_fetch_array($queryResult))
                                {
                                    $string .= "
                                    
                                        <option> ".$queryRow['TeacherName']."</option>
                                        ";
                                }
                                
                                echo $string;
                                ?>
                                
                                </select> 
                            </div>
                        </div>
                           
                           <div class="form-group col-md-6">

                            <div class="inner-addon left-addon">
                            
                            <select class='form-control' name='assignProfessorCourse'>
                            
                            <?php
                                
                                $string = "";
                                $query = "SELECT * FROM course ORDER BY CourseName";
                                $queryResult = mysqli_query($dbAdmin,$query);
                                while($queryRow = mysqli_fetch_array($queryResult))
                                {
                                    $string .= "
                                    
                                        <option> ".$queryRow['CourseName']."</option>
                                        ";
                                }
                                
                                echo $string;
                                ?>
                                
                                </select> 
                            </div>
                        </div>
                            
                        

                        <div class="button-holder col-md-6 form-group">

                            <button type="submit" name="assignProfessorCourseButton" class="btn btn-primary contact-us-button">Assign</button>

                        </div>

                    </form>

                </div>

            </div>
            
            
            
            
            
            
            
            
            
            
            
    
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            


            <div class="form-holder">



                <h3 class="text-center">Block User</h3>



                <div class="form-holder-inner">

                    <form method="post" action="adminpanel.php">



                        <div class="form-group col-md-6">

                            <div class="inner-addon left-addon">
                                

                                <select class='form-control' name='selUser'>
                            
                            <?php
                                
                                $string = "";
                                $query = "SELECT * FROM user ORDER BY UserName";
                                $queryResult = mysqli_query($dbAdmin,$query);
                                while($queryRow = mysqli_fetch_array($queryResult))
                                {
                                    $string .= "
                                    
                                        <option> ".$queryRow['UserName']."</option>
                                        ";
                                }
                                
                                echo $string;
                                ?>
                                
                                </select> 
                                
                                
                                
                                
                                
                                
                                
                                
                            </div>
                
                        </div>

                        <div class="button-holder col-md-6 form-group">

                            <button type="submit" name="removeUserButton" class="btn btn-primary contact-us-button">Remove</button>

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
