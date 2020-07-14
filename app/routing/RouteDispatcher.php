<?php

namespace App;

use AltoRouter;

class RouteDispatcher
{
    protected $match;
    protected $controller;
    protected $method;

    public function __construct(AltoRouter $router)
    {
        $this->match = $router->match();

        if ($this->match) {
            list($controller, $method) = explode('@', $this->match['target']);
            $this->controller = $controller;
            $this->method = $method;
            if (is_callable([new $this->controller(), $this->method])) {
                call_user_func_array(
                    [new $this->controller(), $this->method],
                    [$this->match['params']]
                );
            } else {
                echo 'Böyle Bir Method {$this->method} u {$this->controller} içerisinde yazmamışşınız ki dostum ';
            }
        } else {
            header($_SERVER['SERVER_PROTOCOL'].'Sayfa Bulunamadı');
            view('errors/404');
        }
    }
}
