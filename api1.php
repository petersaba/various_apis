<?php 
    $input_name = $_GET['name'];
    // compare the first character to the last character and moving to the next untill we reach the middle
    for ($i = 0; $i<strlen($input_name)/2; $i++){
        if ($input_name[$i] != $input_name[strlen($input_name)-1-$i]){
            $result = FALSE;
        }
    }
    // result is only set if it is false so if it is not set then it should be true
    if(!isset($result)){
        $result = TRUE;
    }

    $return_data = ["name" => $input_name,
                    "result" => $result];

    echo json_encode($return_data);
?>