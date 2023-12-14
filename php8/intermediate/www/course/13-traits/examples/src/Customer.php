<?php

class Customer
{

    use MailSender;

    public function updateProfile()
    {
        echo 'Profile Updated'. PHP_EOL;

        // send email
        $this->sendEmail();
    }
}