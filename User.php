<?php

namespace MyApp;

class User
{
    private $userType; // Proprietà per il tipo di utente

    public function __construct($userType)
    {
        $this->userType = $userType;
    }

    public function getUserType()
    {
        return $this->userType;
    }


}
