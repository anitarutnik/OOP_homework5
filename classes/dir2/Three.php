<?php

namespace classes\dir2;
require_once 'interfaces/ActionInterface.php';
use interfaces\ActionInterface;

class Three implements ActionInterface
{

    public function viewAction()
    {
       return "Name of the class is " . get_class($this);
    }
}