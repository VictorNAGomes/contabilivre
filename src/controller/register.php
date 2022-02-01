<?php
    $finalStr = "";
    foreach($_POST['array'] as $array ) {
        $finalStr = $finalStr . " " . $array;
    }
    echo $finalStr;
?>