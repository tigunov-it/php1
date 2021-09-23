<?php
function underscore($text) {
    return str_replace(' ', '_', $text);
}

echo underscore("Век живи - век учись");
