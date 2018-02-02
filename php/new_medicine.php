<?php
session_start();
    $total = $_SESSION["total_new_medicine"];
foreach ($_POST['Medicine_Name'] as $value) 
{
    echo $value.'<br>';
}
foreach ($_POST['Type'] as $value) 
{
    echo $value.'<br>';
}
foreach ($_POST['Quantity'] as $value) 
{
    echo $value.'<br>';
}
//for ($i=0 ; $i<$total ;$i++)
//    {
//        echo $_REQUEST['Medicine_Name'][$i];
//        echo $_REQUEST['Type'][$i];
//        echo $_REQUEST['Quantity'][$i];
//    }
?>