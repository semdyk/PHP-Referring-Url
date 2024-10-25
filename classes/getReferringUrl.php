<?php

if (!empty($_GET['ref_url'])) {
    $referringUrl = $_GET['ref_url'];

    if (!filter_var($referringUrl, FILTER_VALIDATE_URL)) {
        die('Invalid referring URL format.');
    }

    header("Location: $referringUrl");
    exit;
}