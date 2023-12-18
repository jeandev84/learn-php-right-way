<?php
declare(strict_types=1);

namespace App\Services\Emailable;

class EmailValidationService
{

      private string $baseUrl = 'https://api.emailable.com/v1/';


      public function __construct(private string $apiKey)
      {
      }


      public function verify(string $email): array
      {
          $handle = curl_init();

          $params = [
              'api_key' => $this->apiKey,
              'email'   => $email
          ];

          $url = $this->baseUrl . 'verify?'. http_build_query($params);

          curl_setopt($handle, CURLOPT_URL, $url);
          curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
          # curl_setopt_array($handle, []);

          $content = curl_exec($handle);

          if ($content!== false) {
              return json_decode($content, true);
          }

          return [];
      }



    public function verifyFromCurl(string $email): array
    {
        $handle = curl_init();

        $apiKey = $_ENV['EMAILABLE_API_KEY'];

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
            return json_decode($content, true);
        }

        return [];
    }
}