<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Date and time stuff</title>
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
      font-size: 1.5rem;
      margin: 0 0 1rem 0;
    }
    h2 code {
      font-size: 2rem;
    }
    p, hr {
      margin: 0 0 2rem 0;
    }
    .convert-button {
      position: relative;
      display: block;
      padding: 0.5rem;
      color: #fff;
      background-color: #1067de;
      border-radius: 4px;
      font-size: 1.25rem;
      font-weight: 700;
      transition: background-color .3s linear;
      text-decoration: none;
      text-align: center;
      width: 200px;
      margin: 0 0 2rem 0;
    }
    .convert-button:hover {
      background-color: #2f7dfb;
    }
  </style>
</head>
<body>
  <?php
  ?>
  <div id="container">

    <?php
    $date = 'June 2, 2020';
    $tz_obj = timezone_open('America/Chicago');
    $date_obj = date_create($date, $tz_obj);
    $dst_active = date_format($date_obj, 'I');
    $time_zone_offset = ($dst_active == 1) ? 'CDT' : 'CST';
    $title_1 = '<code>$date_obj</code>';
    $title_2 = '<code>$tz_obj</code>';
    $title_3 = '<code>$dst_active: $time_zone_offset</code>';
    ?>
    <h2><?=$title_1;?></h2>
    <div>
      <pre><?php print_r($date_obj); ?></pre>
    </div>
    <hr>
    <h2><?=$title_2;?></h2>
    <div>
      <pre><?php print_r($tz_obj); ?></pre>
    </div>
    <hr>
    <h2><?=$title_3;?></h2>
    <div>
      <p><?=$dst_active . ': ' . $time_zone_offset;?></p>
    </div>
    
  </div>
  <script></script>
</body>
</html>