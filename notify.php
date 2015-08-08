<?php
//using sql here will do the work
$t[0]="hey";
$t[1]="babe";
$t[2]="how are yu";
$t[3]="this is wprking";

$data_last=$_GET["last"];

$i=0;
while($data_last<count($t))
{

$datatosend["messages"][$i]=$t[$data_last];$data_last=$data_last+1;
$i++;
}
$datatosend["success"]=true;
$datatosend["last"]=$data_last;
$er=json_encode($datatosend);
print  $er;
?>
