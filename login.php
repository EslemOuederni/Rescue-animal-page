<?php include('database.php')?>
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
            <h1 class="text-center" id="title">ART</h1>
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
                <div class="form-group">
                    <label for="email"><h4>Email</h4> </label>
                    <input type="email" class="form-control" value="<?php echo $email; ?>" placeholder="Email" id="email" name="email" onfocusout="validateEmail()">
                    
                    <span class="error-message"></span>
                </div>
                <div class="form-group">
                    <label for="pwd"><h4>Password</h4> </label>
                    <input type="password" value="<?php echo $password; ?>" class="form-control" placeholder="Password" id="pwd" name="password" onfocusout="validatePassword()" required/>
                    
                    <span class="error-message"></span>
                </div>
                <div class="adopt">

                
                <br>
                    <div class="lastform">
                        <button name="login" type="submit" class="btn btn-primary">Sign in</button> </div>               
            </div>
        </form>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="./js/account.js"></script>
</html>