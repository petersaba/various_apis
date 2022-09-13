<?php
    if ($_GET["date"] == "christmas"){
        $current_year = date("Y");
        $christmas = "25-12-" . $current_year;
        $today = date("d-m-Y");
        
        $diff = strtotime($christmas) - strtotime($today);
        // if difference is negative then today is after christmas but before new year so the next christmas will be next year
        if($diff < 0){
            $current_year++;
            $christmas = "25-12-" . $current_year;
            $diff = strtotime($christmas) - strtotime($today);
        }
        // changing the difference from seconds to days
        $diff_in_days = $diff/(60*60*24);
        
        $result = ["today" => $today,
        "upcoming_christmas" => $christmas,
        "days_until_christmas" => $diff_in_days];
        
        echo json_encode($result);
    }
?>