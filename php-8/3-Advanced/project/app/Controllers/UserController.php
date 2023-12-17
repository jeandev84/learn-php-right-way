<?php

namespace App\Controllers;

use Framework\Routing\Attributes\Get;
use Framework\Routing\Attributes\Post;
use Framework\Templating\View;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

class UserController
{

      public function __construct(protected MailerInterface $mailer)
      {
      }

      #[Get('/users/create')]
      public function create(): View
      {
          return View::make('users/register');
      }



      #[Post('/users')]
      public function register(): View
      {
          $name  = $_POST['name'];
          $email = $_POST['email'];
          $firstName = explode(' ', $name)[0];

          $text = <<<Body
Hello $firstName,

Thank you for signing up!
Body;


          $html = <<<HTMLBody
<h1 style="text-align: center; color: blue;">Welcome</h1>
Hello $firstName,
<br/><br/>
Thank you for signing up!
HTMLBody;
           $email = (new Email())
                    ->from('support@example.com')
                    ->to($email)
                    ->subject('Welcome!')
                    ->attach('Hello World!', 'welcome.txt')
                    ->text($text)
                    ->html($html);

           $this->mailer->send($email);

           exit;
      }




      private function registerLogic(): void
      {
          $name  = $_POST['name'];
          $email = $_POST['email'];
          $firstName = explode(' ', $name)[0];

          $text = <<<Body
Hello $firstName,

Thank you for signing up!
Body;


          $html = <<<HTMLBody
<h1 style="text-align: center; color: blue;">Welcome</h1>
Hello $firstName,
<br/>
Thank you for signing up!
HTMLBody;
          $email = (new Email())
              ->from('support@example.com')
              ->to($email)
              ->subject('Welcome!')
              ->attach('Hello World!', 'welcome.txt')
              ->text($text)
              ->html($html);


          // Open your browser http://localhost:8025/
          $dsn       = 'smtp://mailhog:1025';
          $transport = Transport::fromDsn($dsn);
          $mailer    = new Mailer($transport);

          $mailer->send($email);

          exit;
      }
}