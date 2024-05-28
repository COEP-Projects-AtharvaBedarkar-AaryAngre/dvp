<?php
      include_once("validate.php");
      session_start();
          if (!isset($_SESSION["Name"])) {
            $_SESSION["Name"] = "Guest Visitor";
      }
  ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <style>
    html{
      padding-top: 20px;
      padding-bottom: 20px;
    }
    main{
      padding-left: 20px;
    }
div{
	padding-left:5px;
	padding-right:5px;
	padding-top: 5px;
      padding-bottom: 5px;
}
  </style>
<head>
  <meta charset="UTF-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                  <title>Beyond the Boost - Data Visualisation Project</title>
              </head>
              <body>
                  <h1 style = "text-align:center; color:white;" class = "bg-dark"> Beyond the Boost - Data Visualization and Preprocessing </h1>
                  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                  <div class="d-flex flex-row">
                    <div class="p-2"><a class="navbar-brand" href="#"> <?php echo "Hello " . (isset($_SESSION["Name"])) ? $_SESSION["Name"] : "Guest Visitor" . ",";?> </a></div>
                    <div class="p-2"><form action="logout.php" method="post" style = "display: flex;
      flex-flow: row wrap;
      align-items: center;"><button type="submit" class="btn btn-outline-danger">Logout</button></form></div>
                    <div class="p-2">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="about.php">About <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.php ">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="<?php echo ($_SESSION["Name"] == "Guest Visitor")? "nav-link disabled":"nav-link";?> href="index.php">Dashboard</a>
                    </li>
                  </ul>
                  </form>
</div>
</div>      
</div>
 </div>
 </nav>
</html>
</body>