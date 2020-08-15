<?php include('./database.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Animal Rescue Tunisia</title>
</head>
<body>
    <div class="container" id="account">
        <div class="logotitle row">
            <img class="logo img-responsive" src="./img/logo.png" alt="logo">
            <h1 class="text-center" id="title">ARAT</h1>
    </div>
        <div class="row" id="socialmedia">
            <div class="col">
                <a href="#" class="fb btn-lg" role="button">
                    <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                </a>
            </div>
            <div class="col">
                <a href="#" class="google btn-lg">
                    <i class="fa fa-google fa-fw"></i> Login with Google+ &nbsp;
                </a>
            </div>
        </div>
        <div class="hr-sect">Or</div>
        <form id="art" method="post" action="./database.php" novalidate>
                <?php include('./errors.php'); ?>
                <div class="form-group">
                    <label for="firstname"> <h4>First Name </h4></label>
                    <input type="text" class="form-control" placeholder="First Name" name="firstname" id="firstname" onfocusout="validateFirstName()">
                    <span class="error-message"></span>
                </div>
                <div class="form-group">
                    <label for="lastname"><h4>Last Name</h4></label>
                    <input type="text" class="form-control"  Name="lastname" placeholder="Last Name" id="lastname" onfocusout="validateLastName()">
                    
                    <span class="error-message"></span>
                </div>
                <div class="form-group">
                    <label for="email"><h4>Email</h4> </label>
                    <input type="email" class="form-control" placeholder="Email" id="email" name="email" onfocusout="validateEmail()">
                    
                    <span class="error-message"></span>
                </div>
                <div class="form-group">
                    <label for="pwd"><h4>Password</h4> </label>
                    <input type="password"  class="form-control" placeholder="Password" id="pwd" name="password" onfocusout="validatePassword()" required/>
                    
                    <span class="error-message"></span>
                </div>
                <div class="adopt">

                <div class="form-check">
                    <h4> Animals you want to adopt</h4>
                    <input class="form-check-input" type="checkbox" value="dog" id="dog" checked>
                    <label class="form-check-label" for="dog">
                      Dog
                    </label>

                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="cat" id="cat">
                    <label class="form-check-label" for="defaultCheck1">
                      Cat
                    </label>
                    
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="other" id="other">
                    <label class="form-check-label" for="other">
                      Other
                    </label>
                    
                  </div>
                </div>
                <br>
                    <div class="lastform">
                        <p>By clicking this button, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.</p>
                        <button name="register" type="submit" class="btn btn-primary">Create a free account</button> </div>               
            </div>
        </form>
        <div class="container">
            <p id="login" class="text-center">Already have a <img class="img-circle img-responsive" src="./img/logo.png" alt="logo"><span style="color: #000">ARAT</span> account? <a href="./login.php" class="link">Log in</a> </p>
        </div>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="./js/account.js"></script>
</html>