<?php
function underscore($text) {
    $replaced = str_replace(' ', '_', $text);
    echo $replaced;
}

underscore("Век живи - век учись");
