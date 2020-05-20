<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>General PHP Environment - A place to experiment!</title>
  <style>
    body {
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 1rem;
      color: #fff;
      margin: 0;
      padding: 0;
      font-size: 1rem;
      line-height: 1.5;
      margin: 0;
      padding: 0;
      background-color: #011c2c;
    }
    h2 {
      margin: 0 0 1rem 0;
    }
    .main {
      position: relative;
      width: 80%;
      max-width: 960px;
      margin: 0 auto;
      padding: 2rem;
    }
    .bigly {
      font-size: 6rem;
    }
    .page-index-list {
      color: #fff;
      list-style: none;
      margin: 0;
      padding: 0;
    }
    .page-index-list li {
      line-height: 2;
      font-size: 1.25rem;
    }
    .page-index-list li:before {
      content: "- ";
    }
    .page-index-list li a {
      color: #fff;
      transition: color 0.3s linear;
      text-decoration: none;
    }
    .page-index-list li a:hover {
      color: #aaa;
    }
  </style>
</head>
<body>
    <?php
      $smileys = array('😃', '😊', '🙂', '🙃', '🤓', '😎', '😶', '🤡', '🤠', '😸');
      $random_smiley_index = rand(0, (count($smileys) - 1));
    ?>
  <section class="main">
    <h1><span class="bigly"><?=$smileys[$random_smiley_index];?></span></h1>
    <h2>Experiments</h2>
    <ul class="page-index-list">
      <li><a href="./camel-case.php">Title- to camel-case</a></li>
      <li><a href="./countries.php">Official Pardot select input options of all countries</a></li>
      <li><a href="./custom-video-controls.php">Custom video controls (also, fun with sprites)</a></li>
      <li><a href="./info.php">PHP info (it&rsquo;s handy, alright?)</a></li>
      <li><a href="./search-selector.php">Search selector</a></li>
      <li><a href="./urlencode.php">URL encode stuff</a></li>
      <li><a href="./phone-numbers.php">Phone numbers to just numbers</a></li>
    </ul>
  </section>
</body>
</html>