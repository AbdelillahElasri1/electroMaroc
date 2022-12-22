<?php
 require_once __DIR__ . '/vendor/autoload.php';
    use app\core\application;
    $app = new application();

$app->router->get('/',function(){
    return 'hello world';
});

    $app->router->get('/contact',function(){
        return 'contact world';
    });

    $app->run();