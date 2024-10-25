<?php

// Check if ref_url is empty, if not continue.
if (!empty($_GET['ref_url'])) {
    // Set the referring URL from the query parameter.
    $referringUrl = $_GET['ref_url'];

    // Validate the referring URL format using filter_var() function.
    if (!filter_var($referringUrl, FILTER_VALIDATE_URL)) {
        die('Invalid referring URL format.');
    }

    // Redirect the user to the referring URL.
    header("Location: $referringUrl");
    exit;
}
