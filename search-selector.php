<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select search engine</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
      font-size: 1rem;
    }
    img {
      border: 0;
    }
    #main-container {
      position: relative;
      width: 100%;
      padding: 3rem;
    }
    select option {
      font-size: 1.5rem;
    }
  </style>
</head>
<body>
  <div id="main-container">
    <select name="search-engines" id="search-options">
      <option value="none" selected disabled>Select a search engine</option>
      <option value="https://www.google.com">Google</option>
      <option value="https://www.duckduckgo.com">DuckDuckGo</option>
      <option value="https://www.bing.com">Bing</option>
    </select>
  </div>
</body>
<script>
  window.onload = function () {
    const searchSelector = document.getElementById('search-options');
    searchSelector.addEventListener('change', function () {
      window.open(this.value, '_blank');
    });
  }
</script>
</html>