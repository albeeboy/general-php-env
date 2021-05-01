<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sass Experiments</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/uzr4whm.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>

  <nav id="main-nav">
    <div class="container-fluid  h-100">
      <div class="row h-100">
        <div class="d-flex align-items-center col-12 col-md-8 offset-md-2 h-100">
          <h6 class="in-nav-header text--uc text--ls-1">Nav links go up in here</h6>
        </div>
      </div>
    </div>
  </nav>

  <div role="main" id="main-content">

    <section class="skew-section">
      <div class="container-fluid content-container">
        <div class="row">
          <div class="col-12 col-md-8 offset-md-2">

            <div class="row">
              <div class="col-12">
                <h5 class="eyebrow">Fun with skew transformations</h5>
              </div>
            </div>
            <div class="d-flex align-items-baseline row">
              <div class="col-12 col-md-9">
                <h1>Doin&rsquo; it with skews!</h1>
              </div>
              <div class="col-12 col-md-3">
                <p><a href="./downloads/download.php">Download link</a></p>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium aperiam iste ad vitae modi velit officiis voluptas molestias ratione incidunt, aut eius, voluptatum aliquam nisi! Harum cumque tenetur quaerat officiis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, quisquam ipsa repudiandae assumenda itaque deserunt blanditiis molestias illo! Vitae modi ex debitis rem ratione repellendus omnis iusto officia, a mollitia!</p>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="gap-fill"></div>
    </section>

    <section class="background-svgs">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-md-6 offset-md-2">
            <h2>Illustrating how to incorporate SVGs as background images</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-8 offset-md-2">
            <div>
              <h3>Standard <code>&lt;img&gt;</code> implementation</h3>
              <div><img src="./images/dino.svg" alt="Dino"></div>
            </div>
          </div>
        </div>
      </div>

      
    </section>

  </div>

</body>
</html>