<?php
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    $expression = pow($a,3) + $b*$c - $a/$b;

    // returning the passed passed variables to show what variables the api worked on
    $result = ["a" => $a,
                "b" => $b,
                "c" => $c,
                "result" => $expression];

    echo json_encode($result);
?>