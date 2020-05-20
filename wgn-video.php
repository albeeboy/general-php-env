<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom video controls (also, fun with sprites)</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php
    $color_class = 'white--';
  ?>
  <section id="main-container">
    <div class="video-container">
      <iframe scrolling="no" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen allow="autoplay; fullscreen" src="https://w3.cdn.anvato.net/player/prod/v3/anvload.html?key=eyJtIjoiTElOIiwidiI6IjU1MTg2NjkiLCJhbnZhY2siOiJ2THJvQkE5WkJHM0p3VHZhT2xpYmJ0b1BiNkw0anFKbCIsInNoYXJlTGluayI6Imh0dHBzOi8vd2dudHYuY29tL21vcm5pbmctbmV3cy9hcm91bmQtdG93bi9hcm91bmQtdGhlLWhvdXNlLXRha2VzLWEtbG9vay1hdC1zdXBwb3J0aW5nLXNtYWxsLWNoaWNhZ28tYnVzaW5lc3Nlcy1hbmQtc3ByZWFkcy1qb3ktb3V0LW9mLXBvc3QtaXQtYXJ0LyIsInBsdWdpbnMiOnsiY29tc2NvcmUiOnsiY2xpZW50SWQiOiI2MDM2NDM5IiwiYzMiOiJ3Z250di5jb20iLCJzY3JpcHQiOiIvL3czLmNkbi5hbnZhdG8ubmV0L3BsYXllci9wcm9kL3YzL3BsdWdpbnMvY29tc2NvcmUvY29tc2NvcmVwbHVnaW4ubWluLmpzIiwidXNlRGVyaXZlZE1ldGFkYXRhIjp0cnVlLCJtYXBwaW5nIjp7InZpZGVvIjp7ImMzIjoid2dudHYuY29tIiwibnNfc3Rfc3QiOiJ3Z24iLCJuc19zdF9wdSI6Ik5leHN0YXIiLCJuc19zdF9nZSI6Ik1vcm5pbmcgTmV3cyJ9LCJhZCI6eyJjMyI6IndnbnR2LmNvbSIsIm5zX3N0X3N0Ijoid2duIiwibnNfc3RfcHUiOiJOZXhzdGFyIiwibnNfc3RfZ2UiOiJNb3JuaW5nIE5ld3MifX19LCJkZnAiOnsiY2xpZW50U2lkZSI6eyJhZFRhZ1VybCI6Imh0dHBzOi8vcHViYWRzLmcuZG91YmxlY2xpY2submV0L2dhbXBhZC9hZHM%2Fc3o9MXgxMDAwJml1PS81Njc4L254LndnbnR2L21vcm5pbmdfbmV3cy9hcm91bmRfdG93biZpbXBsPXMmZ2RmcF9yZXE9MSZlbnY9dnAmb3V0cHV0PXZtYXAmdW52aWV3ZWRfcG9zaXRpb25fc3RhcnQ9MSZ2aWQ9c2hvcnRfb25lY3VlJmNtc2lkPTEyMzQmdXJsPWh0dHBzOi8vd2dudHYuY29tL21vcm5pbmctbmV3cy9hcm91bmQtdG93bi9hcm91bmQtdGhlLWhvdXNlLXRha2VzLWEtbG9vay1hdC1zdXBwb3J0aW5nLXNtYWxsLWNoaWNhZ28tYnVzaW5lc3Nlcy1hbmQtc3ByZWFkcy1qb3ktb3V0LW9mLXBvc3QtaXQtYXJ0LyZjaXVfc3pzPTcyOHg5MCwzMDB4MjUwJmFkX3J1bGU9MSZjdXN0X3BhcmFtcz12aWQlM0Q1NTE4NjY5JTI2Y21zaWQlM0QxNTIwODI3JTI2cGlkJTNEMTUyMDgyNyUyNnZpZGNhdCUzRCUyRm1vcm5pbmdfbmV3cyUyRmFyb3VuZF90b3duJTI2Ym9iX2NrJTNEJTVCYm9iX2NrX3ZhbCU1RCUyNmRlc2NyaXB0aW9uX3VybCUzRGh0dHBzJTNBJTJGJTJGd2dudHYuY29tJTJGbW9ybmluZy1uZXdzJTJGYXJvdW5kLXRvd24lMkZhcm91bmQtdGhlLWhvdXNlLXRha2VzLWEtbG9vay1hdC1zdXBwb3J0aW5nLXNtYWxsLWNoaWNhZ28tYnVzaW5lc3Nlcy1hbmQtc3ByZWFkcy1qb3ktb3V0LW9mLXBvc3QtaXQtYXJ0JTJGJTI2Y29ycmVsYXRvciUzRDE1ODk5MTY5ODUuNTA2NCUyNmRfY29kZSUzRG5hMDAzJTI2cGxheWVyd2lkdGglM0Q4NzYlMjZwbGF5ZXJoZWlnaHQlM0Q0OTMifSwibGlicmFyeVJlcXVlc3RlZCI6dHJ1ZX0sImdvb2dsZUFuYWx5dGljcyI6eyJ0cmFja2luZ0lkIjoiVUEtMzQxMzM4ODQtMTMiLCJldmVudHMiOnsiQURfU1RBUlRFRCI6eyJhbGlhcyI6IlZpZGVvLUFkIiwiY2F0ZWdvcnkiOiJWaWRlbyIsImxhYmVsIjoiW1tUSVRMRV1dIn0sIlZJREVPX1NUQVJURUQiOnsiYWxpYXMiOiJWaWRlby1QbGF5IiwiY2F0ZWdvcnkiOiJWaWRlbyIsImxhYmVsIjoiW1tUSVRMRV1dIn0sIlZJREVPX0ZJUlNUX1FVQVJUSUxFIjp7ImFsaWFzIjoiVmlkZW8tMjUlIiwiY2F0ZWdvcnkiOiJWaWRlbyIsImxhYmVsIjoiW1tUSVRMRV1dIn0sIlZJREVPX01JRF9QT0lOVCI6eyJhbGlhcyI6IlZpZGVvLTUwJSIsImNhdGVnb3J5IjoiVmlkZW8iLCJsYWJlbCI6IltbVElUTEVdXSJ9LCJWSURFT19USElSRF9RVUFSVElMRSI6eyJhbGlhcyI6IlZpZGVvLTc1JSIsImNhdGVnb3J5IjoiVmlkZW8iLCJsYWJlbCI6IltbVElUTEVdXSJ9LCJWSURFT19DT01QTEVURUQiOnsiYWxpYXMiOiJWaWRlby0xMDAlIiwiY2F0ZWdvcnkiOiJWaWRlbyIsImxhYmVsIjoiW1tUSVRMRV1dIn0sIlVTRVJfUEFVU0UiOnsiYWxpYXMiOiJQYXVzZSIsImNhdGVnb3J5IjoiVmlkZW8iLCJsYWJlbCI6IltbVElUTEVdXSJ9LCJVU0VSX1JFU1VNRSI6eyJhbGlhcyI6IlJlc3VtZSIsImNhdGVnb3J5IjoiVmlkZW8iLCJsYWJlbCI6IltbVElUTEVdXSJ9fX0sImhlYWx0aEFuYWx5dGljcyI6e319LCJodG1sNSI6dHJ1ZSwidG9rZW4iOiJleUowZVhBaU9pSktWMVFpTENKaGJHY2lPaUpJVXpJMU5pSjkuZXlKMmFXUWlPaUkxTlRFNE5qWTVJaXdpYVhOeklqb2lka3h5YjBKQk9WcENSek5LZDFSMllVOXNhV0ppZEc5UVlqWk1OR3B4U213aUxDSmxlSEFpT2pFMU9EazVNakExT0RWOS5vWnBlWEVHZG9pdi1fdm5UUUE4cnBGSnIwakU5ZFJjSFNSbHFuM1FKQ1NBIn0%3D"  width ="640" height="360"></iframe>
    </div>
  </section>
  
</body>
<script>
  /*
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
  */
</script>
</html>