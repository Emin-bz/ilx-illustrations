<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>

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
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="shop_home.php">Shop</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Information <span class="caret"></span></a>
          <ul class="dropdown-menu">
            
            <li class="active"><a href="contact.php">Contact us</a></li>
            
       
          </ul>
          
        </li>
  
      </ul>
      </div>
</nav>

   <div class="header_contact" id="header_contact">
   
   <div class="btn btn-dark" role="group" aria-label="...">
<div class="contact_button"><button type="button" style="width:400px;height:80px" class="btn btn-info" id="contact_button"
onclick="smoothScroll_shop(document.getElementById('content'))">Contact us</button>
</div>
</div>
    

  </div>

<script>
window.smoothScroll_shop = function(target) {

  window.location.href = "contact_formular.php";
}
</script>


  <script>

var container = document.querySelector("#header_contact");
var mover = document.querySelector("#header_contact");

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
    document.getElementById("header_contact").style.fontSize = "30px";
  } else {
    document.getElementById("header_contact").style.fontSize = "90px";
  }
}

</script>