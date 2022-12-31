<?php

class defaultController
{
    public function display()
    {
        $page = 'home';
        require_once('./view/default.php');
    }
}
