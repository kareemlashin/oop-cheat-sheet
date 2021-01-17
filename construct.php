<?php
class Grandpa 
{
    public function __construct()
    {

    }

}

class Papa extends Grandpa
{
    public function __construct()
    {
        // call Grandpa's constructor
        parent::__construct();
    }
}
