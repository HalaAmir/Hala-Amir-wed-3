<?php
$myname = ['Hala','loley','lola','lolo','halhola','halhol','lola'];


foreach ($myname as $myn) {
    echo "$myn <br>";
}
unset ($myname[6]);
print_r ($myname);