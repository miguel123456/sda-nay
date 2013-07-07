<?php
/**
 * Step 1: Require the Slim Framework
 *
 * If you are not using Composer, you need to require the
 * Slim Framework and register its PSR-0 autoloader.
 *
 * If you are using Composer, you can skip this step.
 */
require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

/**
 * Step 2: Instantiate a Slim application
 *
 * This example instantiates a Slim application using
 * its default settings. However, you will usually configure
 * your Slim application now by passing an associative array
 * of setting names and values into the application constructor.
 */
$app = new \Slim\Slim(array(
                            'mode' => 'development',
                            'debug' => true));

/**
 * Step 3: Define the Slim application routes
 *
 * Here we define several Slim application routes that respond
 * to appropriate HTTP request methods. In this example, the second
 * argument for `Slim::get`, `Slim::post`, `Slim::put`, and `Slim::delete`
 * is an anonymous function.
 */

// GET route
$app->get('/hello/:id', function ($id) use($app) {
    $app->response()->header('Content-Type', 'application/json');
 echo '[{
    "id":"1",
    "task":"Task A1",
    "project_id":"1",
    "date_created":"2012-07-10 00:00:00",
    "date_due":null,
    "status":"0"
},{
    "id":"2",
    "task":"Task A2",
    "project_id":"1",
    "date_created":"2012-07-17 00:00:00",
    "date_due":null,
    "status":"0"
},{
    "id":"4",
    "task":"Task A3",
    "project_id":"1",
    "date_created":"2012-07-18 00:00:00",
    "date_due":null,
    "status":"0"
},{
    "id":"5",
    "task":"Task A4",
    "project_id":"1",
    "date_created":"2012-07-29 17:28:51",
    "date_due":"2012-07-31 12:34:56",
    "status":"0"
}]';
});

// POST route
$app->post('/post', function () {
    echo 'This is a POST route';
});

// PUT route
$app->put('/put', function () {
    echo 'This is a PUT route';
});

// DELETE route
$app->delete('/delete', function () {
    echo 'This is a DELETE route';
});

/**
 * Step 4: Run the Slim application
 *
 * This method should be called last. This executes the Slim application
 * and returns the HTTP response to the HTTP client.
 */
$app->run();
