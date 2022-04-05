<?php
$default_config = __DIR__ . "/config.default.php";
$custom_config = __DIR__ . "/config/config.php";
if (file_exists($default_config)){
    include($default_config);
}

if (file_exists($custom_config)){
    include($custom_config);
}

