<?php

$ip = $_GET['ip'];

if (filter_var($ip, FILTER_VALIDATE_IP)) {
    echo("$ip is valid");
} else {
    echo("$ip is invalid");
}
?>