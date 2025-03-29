<?php

declare(strict_types=1);

require_once __DIR__ . '/../bootstrap.php';


session_start();



// handel the requset           --- php -S localhost:8000 index.php
dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
