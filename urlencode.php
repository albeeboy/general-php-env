<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>URL Encode stuff</title>
  <style>
    body {
      font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
      font-size: 1rem;
      color: #222;
      margin: 0;
      padding: 0;
    }
    #main_container {
      position: relative;
      padding: 2rem;
      width: 80%;
      max-width: 960px;
      margin: 0 auto;
    }
  </style>
</head>
<body>
  <div id="main_container">
    <?php
      $encoded = urlencode('https://cdn.fs.brandfolder.com/XGn5bbQS1jkI7ItXKZwc')
    ?>
    <pre><?=$encoded;?></pre>
  </div>
</body>
</html>