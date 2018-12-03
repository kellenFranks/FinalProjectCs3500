
<!DOCTYPE html
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MountPhotoEmporium</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <?php
    	include 'travel-data.inc.php';
    ?>

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
						      <img class = "carouselImage" src="<?php 	carouselPictures(0)?>" alt="Los Angeles">
						    </div>

						    <div class="item">
						      <img class = "carouselImage" src="<?php 	carouselPictures(1)?>" alt="Chicago">
						    </div>

						    <div class="item">
								<img class = "carouselImage"  src="<?php 	carouselPictures(2)?>" alt="New York">
						    </div>
						    <div class="item">
						      <img class = "carouselImage" src="<?php 	carouselPictures(3)?>" alt="Chicago">
						    </div>

						    <div class="item">
								<img class = "carouselImage"  src="<?php 	carouselPictures(0)?>" alt="New York">
						    </div>
						    <div class="item">
						      <img class = "carouselImage" src="<?php 	carouselPictures(0)?>" alt="Chicago">
						    </div>

						    <div class="item">
								<img class = "carouselImage"  src="<?php 	carouselPictures(0)?>" alt="New York">
						    </div>
						    <div class="item">
						      <img class = "carouselImage" src="<?php 	carouselPictures(0)?>" alt="Chicago">
						    </div>

						    <div class="item">
								<img class = "carouselImage"  src="<?php 	carouselPictures(0)?>" alt="New York">
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
				<!-- 
				<div class = "LocationInformation">
					<div class = "locationName">
						<h><?php
							echo $andesMountains['name'];
						?></h>
					</div>
					<div class = "description">
						<p><?php
							echo $andesMountains['caption'];
						?>
							
						</p>
					</div>
					<div class = "Elevation">
						<p>Elevation: 14,439</p>
					</div>
					
				</div> -->
			</div>
			<div class = "photoGallery">
				<div class = photoRow>
					<div class = "photo">
						<img src="" class="img-rounded photoGal" alt="Cinque Terre">
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
					<div class = "photo">
						<img src="images/RockyMountains/download7.jpg" class="img-rounded photoGal" alt="Cinque Terre">
					</div>
				</div>
				
			</div>

		</div>
		
	</div>
 
</body>