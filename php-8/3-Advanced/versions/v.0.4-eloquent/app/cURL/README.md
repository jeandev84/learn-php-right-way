HTTP Protocol: HTTP/HTTPS


### cURL 

cURL
```
$ curl -s https://example.com
```




Example1
```
$handle = curl_init();

$url    = 'https://example.com';

curl_setopt($handle, CURLOPT_URL, $url);
curl_exec($handle);

curl_close($handle);
```


Example2:
```
$handle = curl_init();

$url    = 'https://example.com';

curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
# curl_setopt_array($handle, []);

$response = curl_exec($handle);

# var_dump($response);
# dump(curl_getinfo($handle));

# echo strlen($response);

if ($error = curl_error($handle)) {
   // do something
}
```


API (Application Programming Interface)

Example API Authentication
```
API Keys/Tokens
oAuth
Other or no auth
```


API Response 
```
HTTP Status Code
Response Body

JSON (JavaScript Object Notation)
```

SDK (Software Development Kit)

Use Emailable API Integration
- https://emailable.com/docs/api#authentication


HTTP Client Guzzle PHP
```
https://docs.guzzlephp.org/en/stable
```