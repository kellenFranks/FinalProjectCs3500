
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
	<?php include 'header.inc.php'; 
    include 'test.php'?>
    <div class = "col-sm-2"></div>

    <div class = "col-sm-8 mainPage">
        <div class = "titlePageName">
            <h1>MountPhotoEmporium<br><br>Favorites</h1>
        </div>  
        <div class = "mainPageBody">
            <div class = miniItem">
                            <div class = col-sm-2>
                                    <img class = "carouselImageMini"  src="<?php echo $favorites[0]  ?>">
                                </div>
                                <div class = col-sm-2>
                                    <img class = "carouselImageMini"  src="<?php echo $favorites[1]  ?>">
                                </div>
                                <div class = col-sm-2>
                                    <img class = "carouselImageMini"  src="<?php echo $favorites[2]  ?>">
                                </div>
                                <div class = col-sm-2>
                                    <img class = "carouselImageMini"  src="<?php echo $favorites[3]  ?>">
                                </div>
                                <div class = col-sm-2>
                                    <img class = "carouselImageMini"  src="<?php echo $favorites[4]  ?>" >
                                </div>
                                <div class = col-sm-2>
                                    <img class = "carouselImageMini"  src="<?php echo $favorites[5]  ?>">
                                </div>
                            </div>
        </div>
</body>