<?php
    function GET($key) {
        if (!isset($_GET[$key])) {
            return NULL;
        } 
        return $_GET[$key];
    } 
?>