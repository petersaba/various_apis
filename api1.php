<?php 
    $input_name = $_GET['name'];

    for ($i = 0; $i<strlen($input_name)/2; $i++){
        if ($input_name[$i] != $input_name[strlen($input_name)-1-$i]){
            $result = FALSE;
        }
    }
    if(!isset($result)){
        $result = TRUE;
    }

    $return_data = ["name" => $input_name,
                    "result" => $result];

    echo json_encode($return_data);
?>