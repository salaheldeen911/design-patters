<?php

namespace TokenAuth;

class SimpleAuthenticator
{
    public function SimpleLogin(string $username, string $password)
    {
        return "username: " . $username . " - password: " . $password;
    }
}
