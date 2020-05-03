<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom Video Controls</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php
    $color_class = 'white--';
  ?>
  <section id="main-container">
    <div class="video-container">
      <video src="video/arity_platform_hero.mp4" loop autoplay muted playsinline></video>
      <div class="play-pause" data-state="playing"><a href="javascript:void(0);">
        <svg class="icon-svg" title="" role="presentation">
          <use href="#accessibility-pause" class="<?=$color_class;?>"></use>
        </svg>
      </a></div>
    </div>
  </section>
  
</body>
<script>
  window.onload = (evt) => {
    let getXMLFile = function (path, callback) {
      let request = new XMLHttpRequest();
      request.open("GET", path);
      request.setRequestHeader("Content-Type", "text/xml");
      request.onreadystatechange = function () {
        if (request.readyState === 4 && request.status === 200) {
          callback(request.responseXML);
        }
      };
      request.send();
    };
    getXMLFile("svg/sprite.svg", function (xml) {
      loadSVGIcons(xml);
    });
    function loadSVGIcons (svg) {
      console.log(svg);
      var div = document.createElement("div");
      div.className = "svg-sprite no-display";
      div.innerHTML = new XMLSerializer().serializeToString(svg);
      document.body.insertBefore(div, document.body.childNodes[0]);
    }
    function playPause (e) {
      const iconSVG = this.querySelector(".icon-svg");
      const colorClass = iconSVG.querySelector("use").getAttribute("class");
      const pauseHTML = '<use href="#accessibility-pause" class="' + colorClass + '"></use>';
      const playHTML = '<use href="#accessibility-play" class="' + colorClass + '"></use>';

      if (vid.paused) {
        this.setAttribute("data-state", "playing");
        iconSVG.innerHTML = pauseHTML;
        vid.play();
      } else {
        this.setAttribute("data-state", "paused");
        iconSVG.innerHTML = playHTML;
        vid.pause();
      }
    }
    const vid = document.getElementsByTagName("video")[0];
    const playPauseBtn = document.querySelector(".play-pause");
    playPauseBtn.addEventListener("click", playPause, false);
  } 
</script>
</html>