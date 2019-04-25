
<?php

//session_start();
include('serverconnection.php');
?>

<!doctype html>
<html lang="en">
<header>
    
    
</header>

<div class="headerr">
        

        <!-- NAVBAR STARTS HERE -->
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="index.php">
    <img src="images/proflist.png" width="40" height="40" class="d-inline-block align-top" alt="">
     <p class="web-name d-inline-block align-top">Know</p><p class="web-name-2 d-inline-block align-top">Your</p><p class="web-name d-inline-block align-top">Prof </p>
  </a>
  
  

<?php


                if(!isset($_SESSION['text']) && empty($_SESSION['text']))

                {


                    echo '<button class="btn header-btn btn-primary my-2 my-sm-0" type="submit" data-toggle="modal" data-target=".my-modal">Login/Sign Up</button>';
                }

                else
                {


                  echo '<a href= "logout.php"> <button class="btn header-btn btn-primary my-2 my-sm-0" type="submit">Logout </button> </a>';

                }
?>

        </nav>



        <div class="modal fade show my-modal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title secondary-font">Join the family!</h5>
                    </div>
                    <div class="modal-body">
                        <main class="head-section-main">
                            <input id="tab1" type="radio" name="tabs" checked>
                            <label for="tab1">Login</label>
                            <input id="tab2" type="radio" name="tabs">
                            <label for="tab2">Sign Up</label>
                            <input id="tab3" type="radio" name="tabs">
                            <label for="tab3">Why?</label>
                            <section id="content1">
                                <form method="post" action="index.php" class="form-horizontal ">
                                    <div class="form-group">
                                        <div class="inner-addon left-addon">
                                            <i class="fa fa-user"></i>
                                            <input type="text" placeholder="Username"  class="form-control" id="loginusername" name="login-username"  onkeyup="this.value = this.value.toLowerCase();" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="inner-addon left-addon">
                                            <i class="fa fa-key"></i>
                                            <input type="password" placeholder="Password" class="form-control" id="loginpassword" name="login-password" />
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="form-group">
                                        <button id="signin" name="LoginButton" class="btn btn-primary">Login</button>
                                    </div>
                                </form>
                            </section>
                            <section id="content2">
                                <form method="post" action="index.php" class="form-horizontal">
                                    <fieldset>
                                        <!-- Sign Up Form -->
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <input id="signup-username" name="SignupName" class="form-control" type="text" placeholder="Full Name" class="input-large" pattern="[a-zA-Z\s]+" title="Invalid Name" maxlength="30" required>
                                        
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <input id="signup-userid" name="SignupUsername" class="form-control" type="text" placeholder="Username" class="input-large" onkeyup="this.value = this.value.toLowerCase();" pattern="^[a-z\d\.]{5,}$" maxlength="20" required>
                                            <em>5 or More Characters</em>
                                        </div>
                                        <div class="form-group">
                                            <input id="signup-email" name="SignupEmail" class="form-control" placeholder="Email" type="text" class="input-large" onkeyup="this.value = this.value.toLowerCase();" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Invalid Email" required >
                                        </div>
                                        <!-- Password input-->
                                        <div class="form-group">
                                            <input id="signup-password" name="SignupPassword" class="form-control" type="password" placeholder="Password" class="input-large" required>
                                            <em>1-8 Characters</em>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <input id="signup-reenterpassword" class="form-control" name="SignupReenterpassword" type="password" placeholder="Retype Password" class="input-large" required>
                                        </div>
                                        
                                        <!--Role -->
                                        
                                        
                                        <div class="form-group">
                                           
                                           <text>I am a</text> <br>
                                           
                                           
                                           
                                           
                                           
                                           
                                           <!--<label class="radio-inline"><input type="radio" data-backdrop="static" data-keyboard="false" id="role-button" name="RoleStudent" class="btn btn-primary show-modal "checked> Student</label>
                                           
                                           
<label class="radio-inline"><input type="radio" data-backdrop="static" data-keyboard="false" id="role-button" name="RoleVisitor" class="btn btn-primary show-modal "> Visitor</label>-->
                                          
                                          <div class="form-group">

  <select class="form-control" id="sel1" name="SelectRole">
    <option value="Student">Student</option>
    <option value="Guardian">Guardian</option>
  </select>
</div>       
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        <!-- Button -->
                                        <div class="form-group">
                                            <button type="submit" data-backdrop="static" data-keyboard="false" id="signup-btn" name="SignupButton" class="btn btn-primary show-modal">Sign Up</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </section>
                            <section id="content3">
                                <p>We need this information so that you can receive access to the site and its content. Rest assured your information will not be sold, traded, or given to anyone.</p>
                                <br>
                                <p>Please contact our <a href="mailto:sanzamsyed71@gmail.com">Service Provider</a> for any other inquiries.</p>
                            </section>
                        </main>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary modal-btn-close modal-close" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Thank you for pre-registering!</h4>
                    </div>
                    <div class="modal-body">
                        <p>Thanks for getting in touch!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</html>
