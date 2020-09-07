<?php
$n1=$_GET['nombre1'];
$n2=$_GET['nombre2'];
$op=$_GET['operateur'];

if ($op=="+")
    echo "$n1 + $n2 = ",$n1+$n2;
elseif ($op== "-")
    echo "$n1 - $n2 = ",$n1-$n2;
elseif ($op=="*")
    echo "$n1 * $n2 = ",$n1*$n2;
elseif ($op== "/")
    echo "$n1 / $n2 =",$n1/$n2;
?>