<?php

require_once __DIR__ . '/../vendor/autoload.php';

use TicketManager\Application;
use TicketManager\Router;

// Start session
session_start();

// Initialize application
$app = new Application();

// Handle the request
$app->run();
