<?php

namespace SimpleAuth;

class SimpleAuthenticator
{
    public function simpleLogin($key, $token)
    {
        return "key: " . $key . " - token: " . $token;;
    }
}
