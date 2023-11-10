<?php
$firstName =    $_POST['firstName'];
$lastName =     $_POST['lastName'];
$email =        $_POST['email'];
$errors = [
    'firstNameErrors' => '',
    'lastNameErrors' => '',
    'emailErrors' => ''
];

if(isset($_POST['submit'])){


    if(empty($firstName)){
        $errors['firstNameErrors'] = 'Please Enter Your First Name';
    }

    if(empty($lastName)){
        $errors['lastNameErrors'] = 'Please Enter Your Last Name';
    }

    if(empty($email)){
        $errors['emailErrors'] = 'Please Enter Your Email';
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailErrors'] = 'Email Is Not Correct';
    }

    if(!array_filter($errors)){
        $firstName =    mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName =     mysqli_real_escape_string($conn, $_POST['lastName']);   
        $email =        mysqli_real_escape_string($conn, $_POST['email']);
    
        $sql =  "INSERT INTO users(firstName, lastName, email)
        VALUES ('$firstName', '$lastName', '$email')";

        if(mysqli_query($conn, $sql)){
            header('Location: ' .  $_SERVER['PHP_SELF'] );
        }
        else{
            echo "error" . mysqli_error($conn);
        }  
    }
    

    
}