<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 1rem;
    font-style: normal;
    font-weight: 400;
    line-height: 1.6;
  }
  .test-section {
    margin: 4rem auto;
    max-width: 1200px;
    position: relative;
    width: 75%;
    padding: 0 0 2rem 0;
  }
  .anchor-links-list li {
    font-size: 1.25rem;
  }
  </style>
</head>
<body>
  <?php
    /*
    https://www.futuresfundamentals.org/explore-the-marketplace/the-wide-world-of-futures-traders/
    https://www.futuresfundamentals.org/explore-the-marketplace/the-exchange-how-it-works/assess-market-conditions/
    https://www.futuresfundamentals.org/for-educators/
    https://www.futuresfundamentals.org/for-educators/
    https://www.futuresfundamentals.org/get-the-basics/economics-101/
    https://www.futuresfundamentals.org/get-the-basics/futures-and-options/
    https://www.futuresfundamentals.org/see-the-impact/the-ingredients-of-everyday-life/
    https://www.futuresfundamentals.org/see-the-impact/energy-futures/gas-prices-explained/
    */
    $ff_anchors = array(
      'bases' => array(
        'local' => 'http://localhost:8080',
        'test' => 'https://test-futures-fundamentals.herokuapp.com',
        'prod' => 'https://www.futuresfundamentals.org'
      ),
      'sections' => array(
        'explore-the-marketplace' => array(
          'subsections' => array(
            'the-wide-world-of-futures-traders' => array(
              't2_subsections' => null,
              'hashes' => []
            ),
            'the-exchange-how-it-works' => array(
              't2_subsections' => array(
                'assess-market-conditions' => array(
                  'hashes' => []
                )
              )
            )
          ),
          'hashes' => []
        ),
        'for-educators' => array(
          'subsections' => null,
          'hashes' => ['#ff-econ-essentials', '#ff-interactive-learning-modules']
        ),
        'get-the-basics' => array(
          'subsections' => array(
            'economics-101' => array(),
            'futures-and-options' => array(
              'hashes' => []
            )
          ),
          'hashes' => []
        ),
        'see-the-impact' => array(
          'subsections' => array(
            'the-ingredients-of-everyday-life' => array(
              't2_subsections' => null,
              'hashes' => []
            ),
            'energy-futures' => array(
              't2_subsections' => array(
                'gas-prices-explained' => array(
                  't3_subsections' => null,
                  'hashes' => []
                )
              )
            )
          ),
          'hashes' => null
        )
      ),
      'hashes' => []
    );
  ?>
  <section class="test-section">
      <h1>FF anchor links</h1>
      <p><em>09 Oct 2020</em></p>
      <ol class="anchor-links-list">
        <li><a href="<?=$ff_anchors['bases']['test'];?>/explore-the-marketplace/the-wide-world-of-futures-traders/#ff-intro-behavioral-econ" target="_blank">#EE Resources</a></li>
        <li><a href="<?=$ff_anchors['bases']['test'];?>/explore-the-marketplace/the-exchange-how-it-works/assess-market-conditions/#ff-question-of-choice" target="_blank">#EE Question of choice</a></li>
        <li><a href="<?=$ff_anchors['bases']['test'];?>/for-educators/#ff-econ-essentials" target="_blank">#Econ essentials</a></li>
        <li><a href="<?=$ff_anchors['bases']['test'];?>/for-educators/#ff-interactive-learning-modules" target="_blank">#Interactive Learning Modules</a></li>
        <li><a href="<?=$ff_anchors['bases']['test'];?>/get-the-basics/economics-101/#ff-foundations-of-finance" target="_blank">#Foundations of Finance</a></li>
        <li><a href="<?=$ff_anchors['bases']['test'];?>/get-the-basics/futures-and-options/#ff-intro-behavioral-econ" target="_blank">#EE Intro to behavioral econ</a></li>
        <li><a href="<?=$ff_anchors['bases']['test'];?>/see-the-impact/the-ingredients-of-everyday-life/#ff-food-fuel-finance" target="_blank">#Additional resource (Food, Fuel,and Finance)</a></li>
        <li><a href="<?=$ff_anchors['bases']['test'];?>/see-the-impact/energy-futures/gas-prices-explained/#ff-affected-by-price" target="_blank">#EE How we are affected by price</a></li>
      </ol>
  </section>

  <!-- <section class="test-section">
    <div style="position: relative; display: block; max-width: 100%;">
      <div style="padding-top: 56.25%;">
        <video data-video-id="ref:191205MUBouroudjian" 
          data-account="49919183001" 
          data-player="46f29b5c-718a-4f1f-aabc-37aadea1426c" 
          data-embed="default" 
          data-application-id 
          class="video-js" 
          controls 
          style="position: absolute; top: 0px; right: 0px; bottom: 0px; left: 0px; width: 100%; height: 100%;"></video>
        <script src="//players.brightcove.net/49919183001/46f29b5c-718a-4f1f-aabc-37aadea1426c_default/index.min.js"></script>
      </div>
    </div>
  </section> -->

  <!-- <section class="test-section">
    <iframe src="https://www.youtube.com/embed/videoseries?list=PL4lU2G2U2sBNIssNMdNnBa5bDNDcX0jEB" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="" style="width: 100%;"></iframe>
  </section> -->

  </body>
</html>