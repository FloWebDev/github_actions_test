<?php
date_default_timezone_set('Europe/Paris');

file_put_contents(__DIR__ . '/../file.txt', date('Y-m-d H:i:s') . "\n", FILE_APPEND);