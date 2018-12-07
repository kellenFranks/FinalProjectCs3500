
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
        <form>
          <div class="form-row align-items-center formPages">
            <div class="col-sm-3 my-1">
              <label class="sr-only" for="inlineFormInputName">Name</label>
              <input type="text" class="form-control" id="inlineFormInputName" placeholder="Username">
            </div>
            <div class="col-sm-3 my-1">
              <label class="sr-only" for="inlineFormInputGroupUsername">password</label>
              <div class="input-group">
                <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
              </div>
            </div>
            <div class="col-auto my-1">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                <label class="form-check-label" for="autoSizingCheck2">
                  Remember me
                </label>
              </div>
            </div>
            <div class="col-auto my-1">
              <button href = "LandingPage.php" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>

        <div class = formNewPerson>
            <a href = "new-User.php">New? Create an account.</a>
        </div>
    </div>
</body>