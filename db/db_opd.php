<?php
    foreach($_REQUEST['Timing'] as $m)
    {
        echo $m;
    }
    if(isset($_REQUEST['print']))
    {
       header("Location: ../php/opd.php?data=print");
       exit;        
    }
?>