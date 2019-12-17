# Contact as form package

## Package demo


### Publish vendor

This package requires Laravel 5.8 and higher.

composer require kreait/laravel-firebase
If you don't use package auto-discovery, add the following service provider in config/app.php

// config/app.php
<?php

return [
    // ...
    'providers' => [
        // ...
        Kreait\Laravel\Firebase\ServiceProvider::class
    ]
    // ...   
];
