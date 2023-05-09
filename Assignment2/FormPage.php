
<!DOCTYPE html>
<?php
require_once 'DatabaseConnection.php';
$sneaky = $_POST('sneaky');
$fname = $_POST('FirstName');
$lname = $_POST('LastName');
$email = $_POST('Email');
$birthdate = $_POST('Bday');
$password = $_POST('Password');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Player Form</title>
        <!-- Custom fonts for this theme -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Theme CSS -->

        <link href="../../../css/freelancer.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8"><header class="h2">Make a New Player</header></div>
                <div class="col-sm-2"></div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                     Planets currently in DB
                    <table><th>Name</th><tr><td>Ares</td></tr><tr><td>Ariel</td></tr><tr><td>Arrakis</td></tr><tr><td>Beaumonde</td></tr><tr><td>Bellerophon</td></tr><tr><td>Demos</td></tr><tr><td>Galifrey</td></tr><tr><td>haha</td></tr><tr><td>Haven</td></tr><tr><td>Hera</td></tr><tr><td>Higgins&apos; Moon</td></tr><tr><td>Jiangyin</td></tr><tr><td>Lilac</td></tr><tr><td>lkfjlskdjf</td></tr><tr><td>Miranda</td></tr><tr><td>Osiris</td></tr><tr><td>Persephone</td></tr><tr><td>Regina</td></tr><tr><td>Santo</td></tr><tr><td>St. Albans</td></tr><tr><td>Triumph</td></tr><tr><td>Vulcan</td></tr><tr><td>Whitefall</td></tr></table>                </div>
                <div class="col-sm-8">
                    <form method = "post" action = "ResultPage.php" class="form-horizontal">
                        <div class="form-group">
                           
                                 <fieldset>

                                <!-- Form Name -->
                                <legend>Player Form</legend>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="FirstName">Planet Name</label>  
                                    <div class="col-md-4">
                                        <input id="FirstName" name="FirstName" type="text" placeholder="John" class="form-control input-md" required="">
                                        <span class="help-block">Name of the Player/span>  
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Last Name">Last Name</label>  
                                    <div class="col-md-4">
                                        <input id="LastName" name="LastName" type="text" placeholder="Cena" class="form-control input-md" required="">
                                        <span class="help-block">Last Name</span>  
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Email">Email</label>  
                                    <div class="col-md-4">
                                        <input id="PosY" name="Email" type="text" placeholder="abc123@...com" class="form-control input-md" required="">
                                        <span class="help-block">Must be unique</span>  
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="BDay">Birthdate</label>  
                                    <div class="col-md-4">
                                        <input id="BDay" name="BDay" type="text" placeholder="0" class="form-control input-md" required="">
                                        <span class="help-block"> Enter birthdate</span>  
                                    </div>
                                </div>

                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Password">Password</label>
                                    <div class="col-md-4">                     
                                        <textarea class="form-control" id="Password" name="Password">Enter password for Player</textarea>
                                    </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Action">Select One</label>
                                    <div class="col-md-4">
                                        <select id="Action" name="Action" class="form-control">
                                            <option value="Search">Search</option>
                                            <option value="Insert">Add</option>
                                            <option value="Update">Update</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Submit">Submit</label>
                                    <div class="col-md-4">
                                        <input id="submit" name="Submit" class="btn btn-primary" type="submit"></input>
                                    </div>
                                </div>                                
                                <input type="hidden" value=1 name="sneaky"></input>
                            </fieldset>
                        </div>
                    </form>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript -->
        <script src="../../../vendor/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>

        <!-- Plugin JavaScript -->
        <script src="../../../vendor/jquery-easing/jquery.easing.min.js" type="text/javascript"></script>

        <!-- Contact Form JavaScript -->
        <script src="../../../js/jqBootstrapValidation.min.js" type="text/javascript"></script>
        <script src="../../../js/contact_me.min.js" type="text/javascript"></script>

        <!-- Custom scripts for this template -->
        <script src="../../../js/freelancer.min.js" type="text/javascript"></script>
    </body>
</html>

