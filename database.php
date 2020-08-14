<?php
 
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'registration');

    $firstname = '';
    $lastname ="";
    $email="";
    $password="";
    $id ="";
    $errors = array();
    $update = false;       

    if(isset($_POST['register'])){
        $firstname = $_POST['first name'];
        $lastname =$_POST['last name'];
        $email = $_POST['email'];
        $password =$_POST['password'];

        if (empty($firstname) && empty($lastname)){
            array_push($errors, "username is required");
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email']= "Email adress is invalid";
        }
        if (empty($email) ){
            array_push($errors, "email is required");
        }
        if (empty($password) ){
            array_push($errors, "password is required");
        }

        //si aucun erreur n'est detecter

        if(count($errors) == 0){
            $password = md5($password);
            $sql = "INSERT INTO users (first_name, last_name, email, password)
                            VALUES ('$firstname', '$lastname', '$email', '$password')";
            mysqli_query($db, $sql);
            $_SESSION['firstname']= $firstname;
            $_SESSION['success'] = "Tu es connecté";
            header("Location: ./index.php");
        }
    }
    //deconnecter

?>