

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<style>




</style>
  <body style="background-color:#1f1f1f">
  

      <form action="" method="POST">

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 

    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="brand">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <img alt="img" style="top:-20px;left:-20px; position:relative;" src="Images/img.png" id="brand" width="200px">
    </div>
    </div>

<div class="navbar-change">
     <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="shop_home.php">Shop</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Information <span class="caret"></span></a>
          <ul class="dropdown-menu">
           
            <li><a href="contact.php">Contact us</a></li>
            
       
          </ul>
          
        </li>
  
      </ul>
      </div>
</nav>

   <div class="header" id="header">
  Your vision, our illustration.
  </div>

<script>

var container = document.querySelector("#header");
var mover = document.querySelector("#header");

container.addEventListener("mousemove", function(e) {
  mover.style.backgroundPositionX = -e.offsetX * 0.1 + "px";
  mover.style.backgroundPositionY = -e.offsetY + 1 + "px";
});

container.addEventListener("mouseenter", function() {
  
  setTimeout(function() {
    mover.classList.add("no-more-slidey");
    container.removeEventListener("mouseenter");
  }, 250);
  
});

// When the user scrolls down 50px from the top of the document, resize the header's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("header").style.fontSize = "30px";
  } else {
    document.getElementById("header").style.fontSize = "90px";
  }
}

</script>

   <!--
    <div class="col-lg-6">
    <div class="input-group">
   <div class="searchbar">
    <input type="text" class="form-control" placeholder="Search for...">
</input>
      <span class="input-group-btn">
      </span>
    </div>
  </div>
</div>

<div class="search_submit">
<input type="submit" name="search" value="Search"/>

</div> -->



<div class="btn btn-dark" role="group" aria-label="...">
<div class="shop_button"><button type="button" style="width:400px;height:80px" class="btn btn-info" id="shop_b"
onclick="smoothScroll_shop(document.getElementById('content'))">Shop</button>
</div>
</div>


<script>
window.smoothScroll_shop = function(target) {

  window.location.href = "shop_home.php";
}
</script>

  
 
<div class="btn btn-dark" role="group" aria-label="...">
<div class="gallery_button"><button type="button" style="width:400px;height:80px" class="btn btn-success" id="gallery_button"
onclick="smoothScroll(document.getElementById('content'))">Gallery</button>
</div>
</div>


<script>
window.smoothScroll = function(target) {
  $('html,body').animate({
        scrollTop: $(".scroll_from_here").offset().top},
        'slow');
}
</script>




<div class="btn btn-dark" role="group" aria-label="...">
<div class="services_button"><button type="button" style="width:150px;height:80px" class="btn btn-light" id="services_button"
onclick="smoothScroll2(document.getElementById('content'))">Our philosophy</button>
</div>
</div>


<script>
window.smoothScroll2 = function(target) {
  $('html,body').animate({
        scrollTop: $(".beschreibung").offset().top},
        'slow');
}
</script>




<script>
window.smoothScroll = function(target) {
  $('html,body').animate({
        scrollTop: $(".scroll_from_here").offset().top},
        'slow');
}
</script>




<div class="beschreibung" id="beschreibung">
<p class="text-justify" style="font-size:40px;margin-left:40px;margin-right:100px;position:center;">A Illustration is not just a simple image. Every Illustration tells a whole story. This makes every Design unique and every order special. Therefore, our work is always full of passion and effort to give you the best outcome and Illustration you want. We are not satisfied until your design is exactly like you want it. Let us help you to tell your story. Not here to draw but to create.</p>
</div>


<div class="btn btn-dark" role="group" aria-label="...">
<div class="gallery_2"><button type="button" style="width:150px;height:80px" class="btn btn-info" id="gallery_2"
onclick="smoothScroll3(document.getElementById('content'))">Gallery</button>
</div>
</div>


<script>
window.smoothScroll3 = function(target) {
  $('html,body').animate({
        scrollTop: $(".scroll_from_here").offset().top},
        'slow');
}
</script>


<div class="row">

  <div class="column">
    <img src="Images/Gallery/1.png" style="width: 110%">
   
  </div>
  <div class="scroll_from_here">
</div>
  <div class="column">
    <img src="Images/Gallery/2.png" style="width: 103%">
    
  </div>
  <div class="column">
    <img src="Images/Gallery/3.png" style="width: 110%">
    
  </div>
  <div class="column">
    
  </div>
</div>


  </form>
  </body>

</html>

