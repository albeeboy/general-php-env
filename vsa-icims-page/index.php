<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Connect Portal - Connect</title>
  <link rel="apple-touch-icon" sizes="180x180" href="https://static.vsapartners.com/assets/icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://static.vsapartners.com/assets/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://static.vsapartners.com/assets/icons/favicon-16x16.png">
  <link rel="manifest" href="https://static.vsapartners.com/assets/icons/site.webmanifest">
  <link rel="mask-icon" href="https://static.vsapartners.com/assets/icons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="https://static.vsapartners.com/assets/icons/favicon.ico">
  <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen">
</head>
<body>
  <div id="site">
    <div id="mainnav">
      <?php include 'vsa_logo_white_svg.php'; ?>
    </div>
    <div id="general" class="text terms-privacy">
      <div style="width: 100%; max-width: 1120px; margin: 0 auto; padding: 20px 25px;">
        <!-- BEGIN ICIMS -->
        <script type="text/javascript" src="https://cdn07.icims.com/a/images.icims.com/content/platform_112.1.0.200720-9eca0df-2/script/lib/domreplacement/domReplacement.js"></script>
        <script type="text/javascript" src="https://cdn07.icims.com/a/images.icims.com/content/platform_112.1.0.200720-9eca0df-2/script/common/icims.js"></script>
        <script type="text/javascript" src="https://cdn07.icims.com/a/images.icims.com/content/platform_112.1.0.200720-9eca0df-2/script/portal/utils.js"></script>
        <script type="text/javascript">var useAutoScrolling = false;</script>
        <script type="text/javascript">
          if (window.addEventListener) {
            window.addEventListener('message', icims_handlePostMessage, false);
          } else if (window.attachEvent) {
            window.attachEvent('onmessage', icims_handlePostMessage);
          }
          function icims_handlePostMessage(event) {
          // If this is not a message from an icims domain, ignore it.
            if (event.origin.indexOf('icims.com') == -1) return;
              var data = event.data;
              if (typeof data === "string") {
                try {
                  data = ICIMS.jsonDecode(data);
                } catch(e) {
                  data = event.data;
                }
              }
            try {
              if (data && data.height && !isNaN(data.height)) {
                document.getElementById('icims_content_iframe').height = parseInt(data.height);
              } else if ((data && 'x' in data && 'y' in data && !isNaN(parseInt(data.x)) && !isNaN(parseInt(data.y)))) {
                top.scrollTo(parseInt(data.x), parseInt(data.y));
              } else if(data && data.pageTitle){
                window.document.title = data.pageTitle;
              }
            } catch (e) {}
          }
          function getCookie(name) {
            var match = document.cookie.match(name + '=(.*?)(;|$)');
            if (match) return unescape(match[1]);
            else return "";
          }
          function updateUrl(url) {
            try {
            history.replaceState({}, '', url);
            } catch (e) {}
          }
          icimsAddOnload(function() {
            var icimsFrame = document.createElement('iframe');
            var iFrameHeight = 500;
            icimsFrame.id = 'icims_content_iframe';
            icimsFrame.name = 'icims_content_iframe';
            icimsFrame.src = 'https:\/\/careers-vsapartners.icims.com\/connect?mobile=false&width=1120&height=500&bga=true&needsRedirect=false&jan1offset=-300&jun1offset=-240&in_iframe=1';
            icimsFrame.setAttribute('style', 'width: 100%;border: none;margin: 0px');
            
            
            iFrameHeight = 500;
            
            icimsFrame.setAttribute('height', iFrameHeight);
            icimsFrame.setAttribute('title', 'iCIMS Content iFrame');
            icimsFrame.onload=function() {
              try {
              window.parent.parent.scrollTo(0,0);
              } catch (e) {}
            };
            document.getElementById('icims_iframe_span').appendChild(icimsFrame);
            try {
              var height = getCookie('cookie_icims_iframe_content_height');
              if (height > 0 && typeof style !== 'undefined') style.height = height + 'px';
            } catch(e) {}
            document.getElementById('icims_content_iframe').onreadystatechange = function() {
            try {
              if ('interactive' == this.readyState) {
                window.scroll(1,1);
              }
            } catch(e) {}
            };
            try {
              var height = 0;
              if (navigator.userAgent.indexOf("Firefox")!=-1) height = document.body.offsetHeight + 16;
              else height = document.body.scrollHeight;
              document.cookie="cookie_icims_iframe_content_height="+height+"; path=/;";
            } catch(e) {}
          });
        </script>
        <noscript>
          <iframe src="https://careers-vsapartners.icims.com/connect?mobile=false&amp;width=1120&amp;height=500&amp;bga=true&amp;needsRedirect=false&amp;jan1offset=-300&amp;jun1offset=-240&amp;in_iframe=1" id="noscript_icims_content_iframe" name="noscript_icims_content_iframe" title="Noscript iCIMS Content iFrame" width="100%" height="500">Your browser does not support inline frames or is currently configured not to display inline frames. Content can be viewed at the actual source page: _IFRAME_SRC_</iframe>
        </noscript>
        <span id="icims_iframe_span" role="main" aria-label="Career Portal"></span>
        <!-- END ICIMS -->
      </div>
    </div>
  </div>
  <footer>
    <!-- EMPTY FOOTER -->
  </footer>
</body>
</html>