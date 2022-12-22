<?php

    namespace app\core;
class application
{
    public Router $router;
    public Request $request;

    /**
     * application constructor.
     */
    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);

    }

    public function run()
    {
        //to do
        $this->router->resolve();
    }

}