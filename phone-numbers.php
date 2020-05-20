<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Convert phone numbers to just the numbers</title>
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
    $title_1 = 'This is a formatted phone number';
    $title_2 = 'This is the converted number';
    ?>
    <h2><?=$title_1;?></h2>
    <p class="formatted-string">+44 7911 123456</p>
    <!-- uk +44 7911 123456    de +49 89 412 07 295    us +1 (212) 984-3456 -->
    <hr>
    <a class="convert-button" href="javascript:void(0);">Convert</a>
    <hr>
    <h2><?=$title_2;?></h2>
    <p class="converted-number"></p>
  </div>
  <script>
    function numberize(evt) {
      const inputString = document.querySelector(".formatted-string").innerText;
      const outputContainer = document.querySelector(".converted-number");
      const numberized = ("" + inputString).replace(/\D/g, "");
      outputContainer.innerText = numberized;
    }
    const convertButton = document.querySelector(".convert-button");
    convertButton.addEventListener("click", numberize, false)
  </script>
</body>
</html>