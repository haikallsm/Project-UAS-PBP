<?php

require '../src/Core/Router.php';

$url = $_GET['url'] ?? '';

Router::route($url);
