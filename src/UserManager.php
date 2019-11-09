<?php

declare(strict_types=1);

namespace ExampleApp;

use Mailer;

class UserManager
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function register($email, $password)
    {
        // The user just registered, we create his account
        // ...

        // We send him an email to say hello!
        
        $this->mailer->mail($email, 'Hello and welcome!');
    }
}