<?php

namespace src\AuthAdaptor;

use TokenAuth\TokenAuthenticator;

class TokenAuthAdaptor implements AuthInterface
{
    private $authenticator;

    public function __construct(TokenAuthenticator $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    public function login(array $data)
    {
        return $this->authenticator->tokenLogin($data['key'], $data['token']);
    }
}
