<?php

namespace Capo\Test\Event;

use Capo\EventAbstraction;

class UserRegisterEvent extends EventAbstraction
{
    protected $username;
    protected $email;

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email    = $email;
    }

    public function getName() : string
    {
    	return 'event.user.register';
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
