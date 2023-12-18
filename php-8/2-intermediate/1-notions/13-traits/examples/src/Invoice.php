<?php

class Invoice
{

    use MailSender;

    public function process()
    {
        echo 'Processed invoice'. PHP_EOL;

        $this->sendEmail();
    }
}