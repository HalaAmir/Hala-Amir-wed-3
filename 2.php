<?php

$x =4;
$msg=match($x) {
    1=>'one',
    2=>'two',
    3=>'three',
    4=>'four',
    default=>'not valid',
};
echo $msg;