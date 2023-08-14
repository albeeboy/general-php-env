<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NEU Founders | Home Layout</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,400;1,6..12,400;1,6..12,700&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="./style.css" rel="stylesheet">
<style>
  :root {
    --color-primary: #18a3b7;
    --color-secondary: #000;
  }
</style>
</head>
<body>

  <div class="header">
    <div class="sitewidth flex flex--space-between flex--vertical-center">
      <div class="header-logo"><a href="#"><img src="./images/fo-logo@2x.png" height="100%" alt="Founders Optical logo"></a></div>
      <div class="main-nav-desktop flex flex--left flex--vertical-center">
        <nav class="menu-wrap">
          <ul class="neu-menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Shipping</a></li>
            <li><a href="#">Ordering</a></li>
          </ul>
        </nav>
        <div class="ctas flex flex--left">
          <div class="menu-button-wrapper"><a href="#" class="button button--primary"><span>Become a Customer</span></a></div>
          <div class="menu-button-wrapper"><a href="#" class="button button--primary"><span>Contact Us</span></a></div>
        </div>
      </div>
      <div class="main-nav-mobile">
        <a class="hamburger-menu--button" href="javascript:void(0);" role="button">
          <div class="hamburger-menu--icon">
            <div class="hamburger-menu--rule hamburger-menu--rule-1"></div>
            <div class="hamburger-menu--rule hamburger-menu--rule-2"></div>
            <div class="hamburger-menu--rule hamburger-menu--rule-3"></div>
          </div>
        </a>
        <!-- <div class="menu-wrap--mobile"></div> -->
      </div>
    </div>
  </div>

  <div class="hero hero--with-title-and-cta">
    <div class="hero-circle hero-circle--mobile"><img src="./images/mobile-circle.svg" alt=""></div>
    <div class="hero-circle hero-circle--desktop"><img src="./images/desktop-circle.svg" alt=""></div>
    <div class="sitewidth hero-content-container">
      <div class="row">
        <h1 class="heading h1">Founders Optical</h1>
        <h4 class="heading h4">Founded on Optical Excellence.</h4>
        <div class="button-wrapper"><a href="#" class="button button--secondary">Call to action</a></div>
      </div>
    </div>
  </div>
  
</body>
<script type="text/javascript" src="./main.js"></script>
</html>
