<?php

namespace src\AuthAdaptor;

use SimpleAuth\SimpleAuthenticator;

class SimpleAuthAdaptor implements AuthInterface
{
    private $authenticator;

    public function __construct(SimpleAuthenticator $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    public function login(array $data)
    {
        return $this->authenticator->simpleLogin($data['username'], $data['password']);
    }
}
