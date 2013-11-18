<?php
/* dispatcher for php internal server */
if (preg_match('#^/(rest|bin)(/.*|)$#', $_SERVER["REQUEST_URI"], $matches) === 1) {
    if ($matches[1] === "rest") {
        $_REQUEST["REST_PATH"] = $matches[2];
        include "rest.php";
    } else {
        header('HTTP/1.0 403 Forbidden');
    }
} else {
    return FALSE;
}
?>