<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Blood Point</title>
</head>
<body>
    <!-- <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav> -->



      <!-- <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a href="#" class="navbar-brand">
                <img src="./Images/icon.jpg" alt="logo" style="width: 40px;">
            </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
          <a href="https://open.spotify.com/artist/1EMIk6EU1mAGDhxNlG4bIG" class="nav-link"><b> Home</a></li></b>
                <li class="nav-item"><a href="https://open.spotify.com/playlist/3X72BGeszeS5yM2Qh0Xsu3" class="nav-link"><b>My Music</a></li></b>
                <li class="nav-item"><a href="https://support.spotify.com/us/article/contact-us/?gad=1&gclid=CjwKCAjwwb6lBhBJEiwAbuVUSuwgUHnXYVBM8t9vnQxt82ZeKGw-9Nh1MoV2g2YB9KYmmk-R6eWXDRoCC7EQAvD_BwE&gclsrc=aw.ds" 
                class="nav-link"><b>Contact Us</a></li></b>
    
        </ul>
        <form method="post" class="form-inline my-2 my-lg-0">
         
          <input name='serCtrl' class="form-control mr-2 mb-2" type="search" placeholder="Search" aria-label="Search">
          <button name='serBtn' class="btn btn-success mr-2 mb-2" type="submit">Search</button>
          <input type="submit" name="signBtn" id="" value='signup' class="mr-2 mb-2 btn btn-success">
          <input type="submit" name="login_pageBtn" id="" value='Login' class="mr-2 mb-2 btn btn-success">
        </form>
      </div>
    </nav>
        </div>
        <?php
        extract($_POST);
        if(isset($login_pageBtn))
        {
           header("location:project_login.php");
        }
        ?>
    <?php
        extract($_POST);
        if(isset($signBtn))
        {
           
            header("location:project_registration_1.php");
        }
        ?>
             <style>
            .carousel-item img 
            {
                width: 100%;
                height: 300px;
            }
            ul > li
            {
                position: sticky;
                top: 0;
                list-style-type: none;
                padding: 0px;
            }
        </style>
             <div class="container mt-2">
            <div id="demo" class="carousel slide" data-ride="carousel" data-interval="2000">
                <div class="carousel-inner ">
                <div class="carousel-item active ">
                    <img src="./Images/arjitsong (1).jpg" alt="Error" class="img-fluid">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./Images/arjitsong (2).jpg" alt="Error" class="img-fluid">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./Images/arjitsong (3).jpg" alt="Error" class="img-fluid">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
    
            </ul>
            </div>
    
        </div>
         -->





         


      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>  

</body>
</html>
