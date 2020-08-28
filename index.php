<?php declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

return function ($event) {
    // Do anything you want here
    // For example:
    return 'Hello ' . ($event['name'] ?? 'world');
};
