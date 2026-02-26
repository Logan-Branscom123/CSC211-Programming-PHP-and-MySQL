<?php

$directory = "users";

if (!is_dir($directory)) {

    if (mkdir($directory)) {
        echo "Directory 'users' created successfully.";
    } else {
        echo "Failed to create directory.";
    }

} else {
    echo "Directory 'users' already exists.";
}

?>
