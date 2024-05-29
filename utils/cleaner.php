<?php
    // Sanitize the URL to prevent XSS attacks
    function cleaner($data) {
        return htmlentities(strip_tags(stripslashes(trim($data))));
    }