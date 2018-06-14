<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>portofolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Bungee|Indie+Flower|Righteous" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/Index.css">
    <?php include '../css/Header.css'; ?>
    <?php include '../css/Footer.css'; ?>
  </head>
  <body>
    <?php include '../PHP/Header.php';?>
    <div id="video">
      <video autoplay muted loop>
       <source src="../Video's/movie.mp4" type="video/mp4">
     </video>
    </div>
    <div id="middleContent">
      <h2>My top projects.</h2>
    </div>
      <div class="responsive">
        <div class="gallery" onclick="location.href='Mythe.php';">
            <img src="../Pictures/1.jpg" alt="Trolltunga Norway" width="300" height="200" href="">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery" onclick="location.href='#';">
            <img src="../Pictures/2.jpg" alt="Trolltunga Norway" width="300" height="200">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery" onclick="location.href='#';">
            <img src="../Pictures/2.jpg" alt="Trolltunga Norway" width="300" height="200">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery" onclick="location.href='#';">
            <img src="../Pictures/2.jpg" alt="Trolltunga Norway" width="300" height="200">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery" onclick="location.href='#';">
            <img src="../Pictures/2.jpg" alt="Trolltunga Norway" width="300" height="200">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery" onclick="location.href='#';">
            <img src="../Pictures/2.jpg" alt="Trolltunga Norway" width="300" height="200">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>
      <div class="clearfix"></div>
    <?php include 'Footer.php';?>
  </body>
</html>
