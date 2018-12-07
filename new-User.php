
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

  <div class = "col-sm-2"></div>

  <div class = "col-sm-8 mainPage">
        <form action = "new-U.php" method = "post">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputEmail4">First Name</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-4">
              <label for="inputPassword4">Last Name</label>
              <input type="text" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
            <div class="form-group col-md-4">
              <label for="inputPassword4">Username</label>
              <input type="text" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
            <div class="form-group col-md-4">
              <label for="inputEmail4">Password</label>
              <input type="password" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-4">
              <label for="inputPassword4">Password Repeat</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>

          </div>
          
          
          <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</body>