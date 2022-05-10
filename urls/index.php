<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fun with URL parsing</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div id="main-container">
    <section class="url-rendering">
      <h1>URL parts</h1>
    </section>
  </div>
  
</body>
<script>
  // WHATWG URL API cf. https://url.spec.whatwg.org/
  const theURL = "https://www.codeelement.com/business/web/fees/developer/?id=42&level=3&name=Jimmy%20Olsen";
  const url = new URL(theURL);
  const urlParts = ["href", "origin", "protocol", "username", "password", "host", "hostname", "port", "pathname", "path", "search", "hash"];

  urlParts.forEach((part) => {
    const elContainer = document.querySelector(".url-rendering");
    const elH = document.createElement("h2");
    const elP = document.createElement("p");
    const hTxt = document.createTextNode("URL." + part);
    const pTxt =  document.createTextNode(url[part]);
    elP.classList.add("url-render", part + "-render");
    elH.appendChild(hTxt);
    elP.appendChild(pTxt);
    elContainer.appendChild(elH);
    elContainer.appendChild(elP);
  });
</script>
</html>
