<?php
$a = 4;

function fifteen($a) {
    $current = $a + 1;
    echo "$current";
    if ($current < 15)
        fifteen($current);
};

fifteen($a);