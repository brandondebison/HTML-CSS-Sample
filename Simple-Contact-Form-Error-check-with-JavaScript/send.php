<?php 
    //retrieve all fields into variables 
    //?field1="whatwasentered" the name used on site is what needs to go into square brackets. First $field is what we are calling it here 
    $firstName = $_POST["firstName"]; 
    $lastName = $_POST["lastName"]; 
    $streetAddress = $_POST["streetAddress"]; 
    $streetAddress2 = $_POST["streetAddress2"]; 
    $streetAddress3 = $_POST["streetAddress3"]; 
    $country = $_POST["country"]; 
    $provinceState = $_POST["provinceState"]; 
    $emailAddress = $_POST["emailAddress"]; 
    $password = $_POST["password"]; 
    $passwordConfirm = $_POST["passwordConfirm"]; 



    //set a flag
    $errors = 0;

    if (empty($firstName)) { $errors = 1;}
    if (empty($lastName)) { $errors = 2;}
    if (empty($streetAddress)) { $errors = 3;}
    if (empty($country)) { $errors = 4;}
    if (empty($provinceState)) { $errors = 5;}
    if (empty($emailAddress)) { $errors = 6;}
    if (empty($password)) { $errors = 7;}
    if (empty($passwordConfirm)) { $errors = 8;}

   

    if ($errors == 0) {
        echo "valid";
    } else {
        echo "There are errors: $errors";
    }



?>