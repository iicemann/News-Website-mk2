<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./style.css">
 <title>Sky News Home</title>

<style>
  .nav-item {
    padding: 0px 0px 0px 20px;
}
.navbar{
  float: right;

}

.nav-item{
  margin: 10px;
  padding-right: 30px;
  font-size: 20px;

}
.btn-secondary{
     background-color: #ffcc03 !important;
}
.button1 {
  font-size: 20px;
   margin-right:20px;
border-radius: 12px;
 border: 2px solid white;
}
.button:hover {
  background-color: #ffcc03;
  color: white;
}
.card{
  margin: 5% 0%;
}

.card-body{
  margin: 0% 0% 0% 3%;
  padding: 6% 0%;
}


</style>


</head>






<body style="background-color:black;">

 <nav class="navbar navbar-dark navbar-expand-sm navbar-fixed-top ">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link " href="About_Us.php"><span class="fa fa-info fa-lg " style= "color:#ffcc03";></span> About Us</a></li>
                <li class="nav-item"><a class="nav-link " href="Contact_Us.php"><span class="fa fa-address-card fa-lg" style= "color:#ffcc03";></span> Contact Us</a></li>
            </ul>
            
            <span >
                       <a href="login1.htm" ><button type="button" class="btn btn-warning button1">Subscribe</button></a>

            </span>
          
         </div>
        </div>

    </nav>
<img src="logo.png" width="200" height="130">

       <div class="container">

<!-- Card deck -->
<div class="card-deck row">

  <div class="col-xs-12 col-sm-6 col-md-4">
  <!-- Card 1-->
  <div class="card">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="National Card.jpg" alt="Card image cap">
      <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">National</h4>
      <!--Text-->
      <p class="card-text">Be on top of your toes for these city and country updates.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <a href="National.php"><button type="button" class="btn btn-light-blue btn-md">Read more...</button></a>

    </div>

  </div>
  <!-- Card -->
  </div>
 <div class="col-xs-12 col-sm-6 col-md-4">
  <!-- Card 2-->
  <div class="card">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="Entertainment Card1.jpg" alt="Card image cap">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Entertainment</h4>
      <!--Text-->
      <p class="card-text">Access behind-the-scenes of your favourite stars.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <a href="Entertainment.php"><button type="button" class="btn btn-light-blue btn-md">Read more...</button></a>

    </div>

  </div>
  <!-- Card -->
</div>

<div class="col-xs-12 col-sm-6 col-md-4">
  <!-- Card 3-->
  <div class="card">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="Business Card1.jpg" alt="Card image cap">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Business</h4>
      <!--Text-->
      <p class="card-text">See what the tech giants and their nerdy wizards are upto.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <a href="Business.php"><button type="button" class="btn btn-light-blue btn-md">Read more...</button></a>

    </div>

  </div>
  <!-- Card -->
</div>

<div class="col-xs-12 col-sm-6 col-md-4">
  <!-- Card 4-->
  <div class="card">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="Science Card.jpg" alt="Card image cap">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Science</h4>
      <!--Text-->
      <p class="card-text">Read on more about the scientific advancements.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <a href="Science.php"><button type="button" class="btn btn-light-blue btn-md">Read more...</button></a>

    </div>

  </div>
  <!-- Card -->
</div>
 
<div class="col-xs-12 col-sm-6 col-md-4">
  <!-- Card 5-->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="Sports Card.jpg" alt="Card image cap">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Sports</h4>
      <!--Text-->
      <p class="card-text">Take a sneak peek into what your favourite sports team has been doing.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <a href="Sports.php"><button type="button" class="btn btn-light-blue btn-md">Read more...</button></a>

    </div>

  </div>
  <!-- Card -->
</div>

<div class="col-xs-12 col-sm-6 col-md-4">  
  <!-- Card 6-->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="Technology Card.jpg" alt="Card image cap">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Technology</h4>
      <!--Text-->
      <p class="card-text">Gear up for some interesting smart devices that'll revolutionize the future.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <a href="Technology.php"><button type="button" class="btn btn-light-blue btn-md">Read more...</button></a>

    </div>

  </div>
  <!-- Card -->
</div>
<div class="col-xs-12 col-sm-6 col-md-4">
  <!-- Card 4-->
  <div class="card">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="World Card.jpg" alt="Card image cap">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">World</h4>
      <!--Text-->
      <p class="card-text">Grab some quick updates on what goes on around the globe.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <a href="World.php"><button type="button" class="btn btn-light-blue btn-md">Read more...</button></a>

    </div>

  </div>


  
</div>
<!-- Card deck -->
  
</div>










<br>
      </br>


  </table>
   <footer class=" footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2 ">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="Home.php">Home</a></li>
                        <li><a href="About_Us.php">About Us</a></li>
                        <li><a href="Contact_Us.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address:</h5>
                    <address>
                  BSK 2nd stage<br>
                  Banglore <br>
                  Karnataka<br>
                    <i class="fa fa-phone fa-lg"></i>: +91 8927258572<br>
                    <i class="fa fa-fax fa-lg"></i>: +91 9981516116<br>
                    <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:confusion@food.net">skynews@media.net</a>
               </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-google" href="mailto:"><i class="fa fa-envelope-o fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p style="color: black";>© Copyright 2020 Sky News</p>
                </div>
           </div>
        </div>
    </footer>

</body>
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>