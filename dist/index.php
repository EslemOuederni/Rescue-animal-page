<?php include('database.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Rescue Animal</title>
</head>
<body>
    <head>
        <div class="container-fluid">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
              <a href="#" class="navbar-brand"><img class=" navbar-logo img-circle img-responsive" src="./img/logo.png" alt="logo" style="width: 4%;transform: translateY(-15px);"> Animal Rescue Association Tunisia</a>
                <!--button navbar lorsque l'ecran est petite-->
              <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" type="button">
                <span class="navbar-toggler-icon"></span>
              </button>

             <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto"> <!-- to put things on the left-->
                  <li class="nav-item">
                    <a href="#home" class="nav-link"> Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link"> App</a>
                  </li>
                  <li class="nav-item">
                    <a href="#sponsers" class="nav-link"> Sponsers</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link"> About</a>
                  </li>
                  <li class="nav-item">
                    <a href="#contact" class="nav-link"> Contact</a>
                  </li>
                  
               </ul>
             </div>
            </nav>
    </head>
    <main>
       <div class="home container">
           <h2>
            ARAT: The first animal rescue website in Tunisia.
           </h2>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Error eveniet sint quas temporibus maxime laboriosam amet quibusdam hic illum enim repudiandae qui
                asperiores repellat corrupti, voluptatibus eius eum placeat atque.</p>
            <img src="./img/undraw_good_doggy_4wfq.svg" alt="good dog" class="img-responsive">
        </div>
        <hr class="clear">
        <div class="app">
            <div class="description">
                <p>We want our users to use our app, because we believe 
                    that we can create a safe place for the animals out there.</p>
            </div>
                <div class="button">
                    <a href="account.php" class="btn btn-dark btn-lg active" role="button">Create An Account</a>
                </div>
        </div>
    <hr class="clear">
    <h2 class="text-center" id="sponsers">Our Dear Sponsers !</h2>

        <div class="container" id="sponser">

            <div class="card">
                <img class="card-img-bottom image-responsive" src="./img/250px-Peta_logo.svg.png" alt="peta">
                <div class="card-body">
                  <h5 class="card-title text-center">Peta Organization</h5>
                </div>
              </div>

              <div class="card mercy">
                <img class="card-img-bottom image-responsive mb-5" src="./img/mercy_for_animals_logo.png" alt="mercy animal">
                <div class="card-body">
                  <h5 class="card-title text-center mt-5">Mercy for Animals Organization</h5> 
                </div>
              </div>
        </div>
        <hr class="clear">

        <div class="row mt-sm-4 mt-md-0" id="about">
            <div class="col-sm-6 col-md-8 text-md-left">
                <h3>No more displaced animals</h3>
                <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam eos, facilis non temporibus,
                     exercitationem magni doloremque quo architecto obcaecati, quasi sit quo labore quae.</p>

            </div>
            <div class="col-sm-6 col-md-4">
                <img src="./img/undraw_decorative_friends_q2np.svg" alt="pet at home">
            </div>
        </div>
        <hr class="clear">

        <div id="contact">
            <div>
                <h3>Get In Touch</h3>
                <p>If you are also interested in our website,
                     make sure to contact us</p>
            </div>
            <form >
            <div class="form-group">
                <input type="email" class="form-control" placeholder="email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Full Name">
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="3" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
     </div>
    </main>
    <hr class="clear">
    <footer class="page-footer">
       <p> &copy; Animal Rescue Association of Tunisia</p> 
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>