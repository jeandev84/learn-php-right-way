<?php
declare(strict_types=1);

namespace App\Services\Api\AbstractApi;

use Framework\Validation\Contracts\EmailValidationInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;


class EmailValidationService implements EmailValidationInterface
{

      private string $baseUrl = 'https://emailvalidation.abstractapi.com/v1/';


      public function __construct(private string $apiKey)
      {
      }


      /**
       * @inheritdoc
       *
       * @throws GuzzleException
      */
      public function verify(string $email): array
      {
          # https://app.abstractapi.com/api/avatars/tester (GET API KEY)
          # $stack  = new HandlerStack();
          $stack    = HandlerStack::create();
          $maxRetry = 3;

          $stack->push($this->getRetryMiddleware($maxRetry));

          $client = new Client([
              'base_uri' => $this->baseUrl,
              'timeout'  => 5,
              'handler'  => $stack
          ]);

          $params = [
              'api_key' => $this->apiKey,
              'email'   => $email
          ];

          $response = $client->get('', ['query' => $params]);

          return json_decode($response->getBody()->getContents(), true);
      }



      /**
       * @param int $maxRetry
       * @return callable
      */
      private function getRetryMiddleware(int $maxRetry): callable
      {
            return Middleware::retry(
                function (
                    int $retries,
                    RequestInterface $request,
                    ?ResponseInterface $response = null,
                    ?\RuntimeException $e = null
                ) use ($maxRetry) {

                    if ($retries >= $maxRetry) {
                        return false;
                    }

                    if ($response && in_array($response->getStatusCode(), [249, 429, 503])) {

                        # echo 'Retry ['. $retries . '], Status: '. $response->getStatusCode() . '<br/>';

                        return true;
                    }

                    if ($e instanceof ConnectException) {

                        # echo 'Retry ['. $retries . '], Connection Error<br/>';

                        return true;
                    }

                    # echo 'Not Retrying <br/>';

                    return false;
                }
            );
       }



       public function verifyUsingCurl(string $email): array
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