<html>
  <head>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <link href="https://unpkg.com/nanogallery2/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="https://unpkg.com/nanogallery2/dist/jquery.nanogallery2.min.js"></script>
    <style>
      body {
        background-color: black;
        color: white;
      }
    </style>
  </head>
  <body>
    <div ID="ngy2p" data-nanogallery2='{
        "itemsBaseURL": "",
        "thumbnailWidth": "200",
        "colorScheme": {
          "thumbnail": {
            "background": "rgba(0,0,0,1)"
          }
        },
        "thumbnailAlignment": "center"
      }'>
      <?php 
        $files = glob('img/*.{jpg,jpeg,png}', GLOB_BRACE);
        foreach($files as $file) {
          echo '<a href="', $file, '" data-ngthumb="thumb-', $file, '" data-ngdesc="">', $file, '</a>', "\n";
        }
      ?>
    </div>    
  </body>
</html>
