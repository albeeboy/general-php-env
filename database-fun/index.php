<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fun with Databases</title>
  <style>
    body {
      font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
      font-size: 1rem;
      color: #000;
      line-height: 1.6;
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
    .database-table {
      border-collapse: collapse;
      margin: 0 0 2rem 0;
    }
    th {
      background-color: #eee;
      border: 1px solid #ccc;
      font-size: 0.75rem;
      height: auto;
      letter-spacing: 2px;
      padding: 0.5rem;
      text-align: left;
      text-transform: uppercase;
    }
    td {
      border: 1px solid #ccc;
      padding: 0.5rem;
    }
  </style>

</head>
<body>
  
<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';
$conn = new mysqli($servername,$username,$password);
?>

  <div id="container">
    <h2>Querying Databases with PHP</h2>
    <p>
      <?php
        if ($conn->connect_error) {
          die('Connection failed: ' . $conn->connect_error);
        }
        echo 'Connected successfully!';
      ?>
    </p>
    <pre>
      <?php
        print_r($conn);
      ?>
    </pre>

  </div>

</body>
</html>
