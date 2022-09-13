<?php 
    $pass = $_POST['pass'];

    if (strlen($pass) < 12){
        $strong = FALSE;
    }else{
        // checking for 2 numbers
        $pattern = "/\d.*\d/";
        if (!preg_match($pattern,$pass)){
            $strong = FALSE;
        }
        // checking for 2 capital letters
        $pattern = "/[A-Z].*[A-Z]/";
        if (!preg_match($pattern,$pass)){
            $strong = FALSE;
        }
        // checking for 2 lower case letters
        $pattern = "/[a-z].*[a-z]/";
        if (!preg_match($pattern,$pass)){
            $strong = FALSE;
        }
        // checking for 2 symbols
        $pattern = "/\W.*\W/";
        if (!preg_match($pattern,$pass)){
            $strong = FALSE;
        }
    }
    // strong is only set if it is false so if it is not then it is true
    if (!isset($strong)){
        $strong = TRUE;
    }

    $returnArr = ["password" => $pass, "strong" => $strong];
    echo json_encode($returnArr);
?>