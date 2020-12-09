<?php
    //echo date('d'); //Day
    //echo date('m'); // Month
    //echo date('Y'); // Year
    //echo date('1') //Day of the week

    //echo date('Y/m/d'); // print out the current date
    //echo date('m-d-Y');

    //echo date('h');
    //echo date('i');
    //echo date('s');
    //echo date('a');

    //Set Time Zone
    date_default_timezone_set('America/New_York');

    //echo date('h:i:sa')

    $timestamp = mktime(10,14,54, 9, 10, 1981);

    //echo $timestamp;
    //echo '<br>';
    //echo date('m/d/Y h:i:sa', $timestamp);

    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('Next Sunday');
    $timestamp5 = strtotime('+2 Months');
    $timestamp6 = strtotime('+2 Days');

    echo $timestamp3;
    echo "<br>";
    echo date('m/d/Y h:i:sa', $timestamp4);
?>