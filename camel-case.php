<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Title to Camel Case</title>
  <style>
    body {
      font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
      font-size: 1rem;
      color: #000;
      margin: 0;
      padding: 0;
      background-color: #ddd;
    }
    #container {
      box-sizing: border-box;
      position: relative;
      width: calc(100% - 6rem);
      padding: 3rem;
      margin: 3rem;
      background-color: #fff;
    }
    h2 {
      margin: 0 0 1rem 0;
    }
    p, hr {
      margin: 0 0 2rem 0;
    }
  </style>
</head>
<body>
  <?php
  function title_to_camel_case($title) {
    $title_arr = explode(' ', $title);
    $unsan_camel = strtolower($title_arr[0]);
    $camel = preg_replace("/[^a-zA-Z0-9]+/", "", $unsan_camel);
    for ($i = 1; $i < count($title_arr); $i++) {
      $unsan = $title_arr[$i];
      $san = preg_replace("/[^a-zA-Z0-9]+/", "", $unsan);
      $camel .= ucfirst($san);
    }
    return $camel;
  }
  ?>
  <div id="container">
    <?php
    $title_1 = 'This is a unique title';
    $camelized_1 = title_to_camel_case($title_1);
    $title_2 = 'She has a certain çingular qualité';
    $camelized_2 = title_to_camel_case($title_2);
    ?>
    <h2><?=$title_1;?></h2>
    <p>This is the camel case version of this title: <?=$camelized_1;?></p>
    <hr>
    <h2><?=$title_2;?></h2>
    <p>This is the camel case version of this title: <?=$camelized_2;?></p>

  </div>
</body>
</html>