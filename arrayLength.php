<?php
$cars=array("volvo","BMW","Honda");
$cars[3]="Audi";
$arrayLength=count($cars);
for($x=0;$x<$arrayLength;$x++)
{
    echo $cars[$x];
    echo"\n";
}