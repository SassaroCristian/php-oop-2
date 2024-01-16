<?php

namespace MyApp;

class User
{
    private $userType;

    public function __construct($userType)
    {
        $this->userType = $userType;
    }

    public function getUserType()
    {
        return $this->userType;
    }


}
