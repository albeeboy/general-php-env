<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MP4 video poster</title>
  <style>
    body {
      font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
      font-size: 1rem;
      color: #222;
      margin: 0;
      padding: 0;
    }
    img {
      border: 0;
    }
    .main {
      position: relative;
      box-sizing: border-box;
      width: 100%;
      padding: 3rem;
      background-color: #ddd;
    }
    .main video {
      display: block;
      width: 960px;
      position: relative;
      margin: 0 auto;
    }
  </style>
</head>
<body>
  <div class="main">
    <video controls width="960" poster="./images/video_poster.jpg">
      <source src="./video/cum_through_my_window_big-1080.mp4" type="video/mp4">
      Sorry your browser doesn’t support the video codecs available.
    </video>
  </div>
</body>
</html>