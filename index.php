<?php

// GET Request
if(isset($_GET['old']) && isset($_GET['new'])) {
    $tax = 4581;
    $tarifa1 = 33;
    $tarifa2 = 72;
    $tarifa3 = 86;
    $tarifa4 = 114;
    $tarifa5 = 158;
    $tarifa6 = 188;
    $tarifa7 = 265;
    $oldValue = $_GET['old'];
    $newValue = $_GET['new'];
    $total = $newValue - $oldValue;
    $cost = 0;
    $overCost = 0;

    if (($total>=1)&&($total<=160)){
        $cost = $tarifa1*$total;
    }
    else if (($total>=161)&&($total<=300)){
        $overCost =$tarifa1*160;
        $cost = $tarifa2*($total-160); 
    }
    else if (($total>=301)&&($total<=500)){
        $overCost = ($tarifa1*160)+($tarifa2*140);
        $cost = $tarifa3*($total-300);   
    }
    else if (($total>=501)&&($total<=600)){
        $overCost = ($tarifa1*160)+($tarifa2*140)+($tarifa3*200);
        $cost = $tarifa4*($total-500);
    }
    else if (($total>=601)&&($total<=750)){
        $overCost =($tarifa1*160)+($tarifa2*140)+($tarifa3*200)+($tarifa4*100);
        $cost = $tarifa5*($total-600);
    }
    else if (($total>=751)&&($total<=1000)){
        $overCost = ($tarifa1*160)+($tarifa2*140)+($tarifa3*200)+($tarifa4*100)+($tarifa5*150);
        $cost = $tarifa6*($total-750);
    }
    else if (($total>=1001)){
        $overCost = ($tarifa1*160)+($tarifa2*140)+($tarifa3*200)+($tarifa4*100)+($tarifa5*150)+($tarifa6*250);
        $cost = $tarifa7*($total-1000);
    }
    else {
        $tarifa = 0;
    }
    $finalCost = ($cost+$overCost+$tax)/1000;
    echo $finalCost;

 }else if(isset($_GET['old']) || isset($_GET['new'])){
    echo 'Missing old or new';
 }


// POST Request
if(isset($_POST['old']) && isset($_POST['new'])) {
    $tax = 4581;
    $tarifa1 = 33;
    $tarifa2 = 72;
    $tarifa3 = 86;
    $tarifa4 = 114;
    $tarifa5 = 158;
    $tarifa6 = 188;
    $tarifa7 = 265;
    $oldValue = $_GET['old'];
    $newValue = $_GET['new'];
    $total = $newValue - $oldValue;
    $cost = 0;
    $overCost = 0;

    if (($total>=1)&&($total<=160)){
        $cost = $tarifa1*$total;
    }
    else if (($total>=161)&&($total<=300)){
        $overCost =$tarifa1*160;
        $cost = $tarifa2*($total-160); 
    }
    else if (($total>=301)&&($total<=500)){
        $overCost = ($tarifa1*160)+($tarifa2*140);
        $cost = $tarifa3*($total-300);   
    }
    else if (($total>=501)&&($total<=600)){
        $overCost = ($tarifa1*160)+($tarifa2*140)+($tarifa3*200);
        $cost = $tarifa4*($total-500);
    }
    else if (($total>=601)&&($total<=750)){
        $overCost =($tarifa1*160)+($tarifa2*140)+($tarifa3*200)+($tarifa4*100);
        $cost = $tarifa5*($total-600);
    }
    else if (($total>=751)&&($total<=1000)){
        $overCost = ($tarifa1*160)+($tarifa2*140)+($tarifa3*200)+($tarifa4*100)+($tarifa5*150);
        $cost = $tarifa6*($total-750);
    }
    else if (($total>=1001)){
        $overCost = ($tarifa1*160)+($tarifa2*140)+($tarifa3*200)+($tarifa4*100)+($tarifa5*150)+($tarifa6*250);
        $cost = $tarifa7*($total-1000);
    }
    else {
        $tarifa = 0;
    }
    $finalCost = ($cost+$overCost+$tax)/1000;
    echo $finalCost;

 }else if(isset($_POST['old']) || isset($_POST['new'])){
    echo 'Missing old or new';
 }



?>
