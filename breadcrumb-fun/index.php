<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Breadcrumb Fun!</title>
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

    function get_the_title ($slug) {
      $arr = explode('-', $slug);
      $title = '';
      foreach($arr as &$el) {
        $title .= ucfirst($el) . ' ';
      }
      trim($title, ' ');
      return $title;
    }

    function convert_url_to_fragments ($url) {
      $full_slug = trim(str_replace(home_url(), '', $url), '/');
      $slug = trim($full_slug, '/');
      $fragments = explode('/', $slug);
      return $fragments;
    }

    function convert_url_to_breadcrumbs ($page_url, $self_reference = false, $top_level_h1 = false) {
      $fragments = convert_url_to_fragments($page_url);
      if ($top_level_h1) {
        $self_reference = true;
      }
      if (!$self_reference) {
        array_pop($fragments);
      }
      $breadcrumbs = [];
      $link = '/';
      $i = 1;
      $total_fragments = count($fragments);

      foreach($fragments as $fragment) {
        $link .= $fragment . '/';
        // $page = get_page_by_path($link);
        // $title = get_the_title($page);
        $title = get_the_title($fragment);
        if ($i == $total_fragments) {
          if ($self_reference) {
            $breadcrumbs[] = [
              'text' => $title,
              'link' => null,
              'has-h1' => $top_level_h1,
            ];
          } else {
            $breadcrumbs[] = [
              'text' => $title,
              'link' => $link,
              'has-h1' => $top_level_h1,
            ];
          }
        } else {
          $breadcrumbs[] = [
            'text' => $title,
            'link' => $link,
          ];
        }
        $i++;
      }
      return $breadcrumbs;
    }
  ?>

  <div id="container">
    <?php
    $breadcrumbs_1 = convert_url_to_breadcrumbs('https://curia.local:8890/research-development/discovery/synthetic-medicinal-chemistry', true);
    ?>
    <h2>Teh breadcrumbz</h2>
    <hr>
    <pre><?php print_r($breadcrumbs_1); ?></pre>
  </div>

</body>
</html>
