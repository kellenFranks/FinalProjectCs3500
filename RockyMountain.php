
<!DOCTYPE html
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chapter 12</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
 
<style>
  body{
    background-image: url("images/Background/Wallpaper.jpg");
    background-size: auto;
    font-family: 'Open Sans',sans-serif;
  }
</style>

<body>
  <?php include 'header.inc.php'; ?>

  <div class = "col-sm-1"></div>

    <div class = "col-sm-10 mainPage">
      <div class = "mainPageBody">
          <div class="main-content container">
            <div class = "carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                  <img class = "carouselImage" src="images/RockyMountains/download1.jpg">
                </div>

                <div class="item">
                  <img class = "carouselImage" src="images/RockyMountains/download2.jpg">
                </div>

                <div class="item">
                <img class = "carouselImage"  src="images/RockyMountains/download3.jpg" alt="New York">
                </div>
                <div class="item">
                  <img class = "carouselImage" src="images/RockyMountains/download3.jpg" alt="Chicago">
                </div>

                <div class="item">
                <img class = "carouselImage"  src="images/RockyMountains/download4.jpg" alt="New York">
                </div>
                <div class="item">
                  <img class = "carouselImage" src="images/RockyMountains/download5.jpg" alt="Chicago">
                </div>

            </div>
             <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
        
      </div>

      <div class = paragraphPage>
        <h1>Rocky Mountains</h1>
        <p>The Rocky Mountains stretch some 3,000 miles from British Columbia and Alberta in Canada through Idaho, Montana, Wyoming, Colorado, and down to New Mexico in the U.S. The range offers dramatic wilderness, diverse wildlife and alpine lakes. Colorado’s Rocky Mountain National Park is traversed by numerous hiking trails and the famously scenic Trail Ridge Road, a 48-mile highway that reaches a high point of 12,183ft.</p>
      </div>

      <div class = "photoGallery">
        <div class = photoRow>
          <div class = "photo">
            <img src="" class="images/RockyMountains/download7.jpg" alt="Cinque Terre">
          </div>
          <div class = "photo">
            <img src="images/RockyMountains/download1.jpg" class="img-rounded photoGal" alt="Cinque Terre">
          </div>
          <div class = "photo">
            <img src="images/RockyMountains/download2.jpg" class="img-rounded photoGal" alt="Cinque Terre">
          </div>
          <div class = "photo">
            <img src="images/RockyMountains/download3.jpg" class="img-rounded photoGal" alt="Cinque Terre">
          </div>
          <div class = "photo">
            <img src="images/RockyMountains/download4.jpg" class="img-rounded photoGal" alt="Cinque Terre">
          </div>
          <div class = "photo">
            <img src="images/RockyMountains/download5.jpg" class="img-rounded photoGal" alt="Cinque Terre">
          </div>
          <div class = "photo">
            <img src="images/RockyMountains/download6.jpg" class="img-rounded photoGal" alt="Cinque Terre">
          </div>
        </div>
        
      </div>

    </div>
    
  </div>
</body>