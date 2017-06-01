<html>
<head>
  <title>Nippon Japanese Language Institute</title>
  <!-- this is for favicon. -->
  <link rel="shortcut icon" href="src/images/favicon.ico" type="image/x-icon">
  <!-- this is for adding stylesheet css. -->
  <link rel="stylesheet" href="styles.css">
  <!-- this is for adding Jquery. -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/main_jquery_functions.js"></script>
  <!-- this is for making website responsive. -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="backgroundwrap">
    <video id="bgvid" playsinline autoplay muted loop poster="src/JapanesePhoto.png">
    <source src="src/JapaneseVideo.mp4" type="video/mp4">
    <source src="src/JapaneseVideo.webm" type="video/webm">
    </video>
  </div>

  <div class="bodywrapper">
    <header>
      <?php include 'header.php';?>
    </header>

    <div class="content">
      <div id="Dipesh">
      </div>
    </div>

    <footer>
      <?php include 'footer.php';?>
    </footer>
  </div>

</body>

</html>
