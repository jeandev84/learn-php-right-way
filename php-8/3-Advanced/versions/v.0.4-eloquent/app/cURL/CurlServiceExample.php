<?php
declare(strict_types=1);

namespace App\cURL;

class CurlServiceExample
{
      public function callEmailableService(): void
      {
          # Doc : https://emailable.com/docs/api/#emails
          $handle = curl_init();

          $apiKey = $_ENV['EMAILABLE_API_KEY'];
          $email  = 'jeanyao@ymail.com';

          $params = [
              'api_key' => $apiKey,
              'email'   => $email
          ];

          $url = 'https://api.emailable.com/v1/verify?'. http_build_query($params);

          curl_setopt($handle, CURLOPT_URL, $url);
          curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
          # curl_setopt_array($handle, []);

          $content = curl_exec($handle);

          if ($content!== false) {
              $data = json_decode($content, true);
              echo '<pre>';
              print_r($data);
              echo '</pre>';
          }
      }



    private function example1WithoutReturnTransfer()
    {
        $handle = curl_init();

        $url    = 'https://example.com';

        curl_setopt($handle, CURLOPT_URL, $url);
        curl_exec($handle);

        curl_close($handle);
    }



    private function example2()
    {
        $handle = curl_init();

        $url    = 'https://example.com';

        curl_setopt($handle, CURLOPT_URL, $url);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        # curl_setopt_array($handle, []);

        $content = curl_exec($handle);

        # var_dump($content);
        # dump(curl_getinfo($handle));

        # echo strlen($content);

        if ($error = curl_error($handle)) {
            // do something
        }
    }
}