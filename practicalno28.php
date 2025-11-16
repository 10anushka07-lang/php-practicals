<?php
if (
    (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] === 'on' || $_SERVER['HTTPS'] === '1'))
    || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)
) {
    echo "The page was called via HTTPS.";
} else {
    echo "The page was called via HTTP.";
}
?>
