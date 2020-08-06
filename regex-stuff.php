<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regex stuff</title>
  <style>
    body {
      font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
      font-size: 1rem;
      color: #000;
      margin: 0;
      padding: 0;
      background-color: #ddd;
      line-height: 1.4;
    }
    code {
      font-size: 1.375rem;
    }
    #container {
      box-sizing: border-box;
      position: relative;
      width: calc(100% - 6rem);
      padding: 3rem;
      margin: 3rem;
      background-color: #fff;
    }
    h1 {
      margin: 0 0 2rem 0;
    }
    h2 {
      font-size: 1.5rem;
      margin: 0 0 1rem 0;
    }
    h2 code {
      font-size: 2rem;
    }
    p {
      margin: 0 0 1rem 0;
    }
    hr {
      margin: 2rem 0;
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
  <?php $total_tests = 6; ?>
  <div id="container">
    <h1>RegEx JavaScript tests</h1>
    <?php for ($i = 1; $i <= $total_tests; $i++) : ?>
      <h2><?='RegEx Test ' . $i;?></h2>
      <div>
        <p>Testing string: <code id="string_<?=$i;?>"></code></p>
        <p>Regex: <code id="test_<?=$i;?>"></code></p>
        <p>Result: <code id="result_<?=$i;?>"></code></p>
      </div>
      <?=$i < $total_tests ? '<hr>' : '';?>
    <?php endfor; ?>
    <hr>
    <h2>Capital H-bar: &#x0126;</h2>
  </div>
  <script>
    const regExTest = "/[a-zA-Z\\u0080-\\u00FF]+(?:(?:\\. |[' \\u2019-])[a-zA-Z\\u0080-\\u00FF]+)*/um";
    const re = /[a-zA-Z\u0080-\u00FF]+(?:(?:\. |[' \u2019-])[a-zA-Z\u0080-\u00FF]+)*/um;
    const testStrings = [
      "Alexandria Ocasio-Cortez",
      "Václav Havel",
      "Catherine O'Leary",
      "Catherine O\u2019Leary",
      "Anyakönyvekről \u0126ázasságkötési Névviselésről",
      "Ånyakönyvekrol Házaçágkötési Névviselésrol"
    ];
    testStrings.forEach((string, i) => {
      let stringContainer = document.getElementById("string_" + (i + 1));
      console.log("stringContainer", stringContainer);
      let testContainer = document.getElementById("test_" + (i + 1));
      let resultContainer = document.getElementById("result_" + (i + 1));
      let result = re.test(string);
      stringContainer.textContent = string;
      testContainer.textContent = regExTest;
      resultContainer.textContent = result;
    });    
  </script>
</body>
</html>