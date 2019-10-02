<?php

namespace RacunStudioIcarus;

class Bootstrap
{
    public function start()
    {
        (new Admin)->start();
        (new Enqueuer)->start();

        (new Router)->catch('blogs')->load('blogs.php');
    }
}