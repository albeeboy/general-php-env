<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch Statement Hijinks</title>
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
  </style>
</head>
<body>
  <?php
    function home_url () {
      return 'https://curia.local:8890';
    }

    function convert_url_to_fragments ($url) {
      $full_slug = trim(str_replace(home_url(), '', $url), '/');
      $slug = trim($full_slug, '/');
      $fragments = explode('/', $slug);
      return $fragments;
    }

    function convert_fragment_to_section ($url_fragment) {
      $raw_sections = explode('-', $url_fragment);
      $section = '';
      foreach ($raw_sections as &$sec) {
        $processed_word = ucwords(strtolower($sec));
        $section .= $processed_word . ' ';  
      }
      $trimmed = trim($section, ' ');
      $output = process_section_exceptions($trimmed);
      return $output;
    }
  
    function process_section_exceptions ($section) {
      $partial_output = '';
      $output = '';
      switch ($section) {
        case 'Research Development':
          $output = substr_replace($section, '&amp; ', 9, 0);
          break;
        case 'Synthetic Medicinal Chemistry':
          $output = substr_replace($section, '&amp; ', 10, 0);
          break;
        case 'Accelerated Orphan':
          $output = substr_replace($section, '/ ', 12, 0);
          break;
        case 'Chemical Process R D':
          $output = substr_replace($section, '&amp; ', 19, 0);
          break;
        case 'Kilo Lab Small Scale Manufacturing':
          $partial_output = substr_replace($section, '-', 14, 1);
          $output = substr_replace($partial_output, '&amp; ', 9, 0);
          break;
        case 'Method Development Material Science':
          $output = substr_replace($section, '/ ', 19, 0);
          break;
        case 'Batch Release Stability Lot Testing':
          $output = substr_replace($section, '&amp; ', 14, 0);
          break;
        case 'Method Development Validation':
          $output = substr_replace($section, '&amp; ', 19, 0);
          break;
        case 'Package Device Testing':
          $output = substr_replace($section, '&amp; ', 8, 0);
          break;
        case 'Pharmacology Toxicology Support':
          $output = substr_replace($section, '&amp; ', 13, 0);
          break;
        case 'Custom Api Manufacturing':
          $output = substr_replace($section, 'API', 7, 3);
          break;
        case 'Stability Release Testing':
          $output = substr_replace($section, '&amp; ', 10, 0);
          break;
        case 'Apis Intermediates Catalog':
          $partial_output = substr_replace($section, 'APIs', 0, 4);
          $output = substr_replace($partial_output, '&amp; ', 5, 0);
          break;
        default:
          $output = $section;
      }
      return $output;
    }
  ?>
  <div id="container">
    <?php
    $frags_1 = convert_url_to_fragments('https://curia.local:8890/research-development/discovery/synthetic-medicinal-chemistry');
    $i = 1;
    foreach($frags_1 as $frag) {
      ${'section_1_' . $i} = convert_fragment_to_section($frag);
      $i++;
    }

    $frags_2 = convert_url_to_fragments('https://curia.local:8890/research-development/development/kilo-lab-small-scale-manufacturing');
    $j = 1;
    foreach($frags_2 as $frag) {
      ${'section_2_' . $j} = convert_fragment_to_section($frag);
      $j++;
    }
    ?>
    <h2><?=join(', ', $frags_1);?></h2>
    <hr>
    <h2>Fragment 1 - 1</h2>
    <p><?=$section_1_1;?></p>
    <hr>
    <h2>Fragment 1 - 2</h2>
    <p><?=$section_1_2;?></p>
    <hr>
    <h2>Fragment 1 - 3</h2>
    <p><?=$section_1_3;?></p>
    <hr>
    <h2><?=join(', ', $frags_2);?></h2>
    <hr>
    <h2>Fragment 2 - 1</h2>
    <p><?=$section_2_1;?></p>
    <hr>
    <h2>Fragment 2 - 2</h2>
    <p><?=$section_2_2;?></p>
    <hr>
    <h2>Fragment 2 - 3</h2>
    <p><?=$section_2_3;?></p>

  </div>
</body>
</html>