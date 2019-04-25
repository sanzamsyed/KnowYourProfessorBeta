<!doctype html>
<html lang="en">

<footer class="footer-distributed">

    <div class="footer-left">

        <span> <img src="images/proflist.png" height="100px" width="100px"> </span>

        <p class="footer-links">
            <a href="index.php" class="link-1 links-part">Home</a>

            <a href="ourteam.php" class="links-part">Our Team</a>

            <a href="contactus.php">Contact Us</a>

            <a href="listingpage.php">Professors</a>

            <?php


                   if(isset($_SESSION['text']) && !empty($_SESSION['text']) && $_SESSION['username'] =='admin')

                {


                    echo '<a href="adminpanel.php">Admin Panel</a>';
                }


                else if(isset($_SESSION['text']) && !empty($_SESSION['text']))

                {


                    echo '<a href="profilepage.php">Profile</a>';
                }


                    ?>

        </p>

        <p class="footer-company-name">YnowYourProf © 2018</p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>142-143 Love Road</span> Tejgaon Industrial Area, Dhaka</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p><span>System Enquiry</span>Cell:+8801777258585 +8801783611396</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:sanzamsyed71@gmail.com">sanzamsyed71@gmail.com</a></p>
          
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>Why do we exist?</span>This website takes inspiration from <a href="http://www.ratemyprofessors.com/">ratemyprofessor.com</a> We wanted to create a platform where a Student or anyone who cares enough can gather a basic perception of their Teachers as well as provide a feedback on them.  
        </p>

        <div class="footer-icons">

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>

        </div>

    </div>

</footer>



</html>
