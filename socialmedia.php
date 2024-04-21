
<?php
      // Cut and Paste PHP Code
      require 'vendor/autoload.php';    // Composer auto-loader
      
      $client = new GuzzleHttp\Client();
      $res = $client->request(
          'POST',
          'https://app.ayrshare.com/api/post',
          [
              'headers' => [
                  'Content-Type' => 'application/json',
                  // Live API Key
                  'Authorization' => 'Bearer 6SE1D66-15HMATA-N1FEG3J-ANY1AEG'
              ],
              'json' => [
                  'post' => 'Today is a great day!',
                  'platforms' => ['twitter', 'facebook', 'instagram', 'linkedin', 'telegram'],
                  'mediaUrls' => ['https://img.ayrshare.com/012/gb.jpg'],
              ]
          ]
      );
      
      echo json_encode(json_decode($res->getBody()), JSON_PRETTY_PRINT); ?>
      <!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> -->
