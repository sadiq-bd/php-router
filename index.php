<?php

require __DIR__ . '/Router.php';

$router = new Router;

$router->get('/', function() {
    return 'Home Page';
});

$router->get('/test/{int:id}/{str:myString}', function($params) {
    return 'Hello world';
});

$router->get('/user/{int:id}', function($params) {
    return 'User view page ; id =' . $params['id'];
});

$router->post('/user/insert/{int:id}', function($params) {
    print_r($params);
    return 'Hello world3 ';
});

$router->default(function() {
    return '404';
});


$router->run();

