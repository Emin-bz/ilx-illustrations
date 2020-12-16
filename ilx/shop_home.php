
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <body style="background-color:white">
  

      <form action="" method="POST">

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 

    <nav class="navbar navbar-default">
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
      
      <img alt="img" style="top:-20px;left:-20px; position:relative;" src="Images/title_shop.png" id="brand" width="190px">
    </div>
    </div>

<div class="navbar-change">
     <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="shop_home.php">Shop</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Information <span class="caret"></span></a>
          <ul class="dropdown-menu">
           
            <li><a href="contact.php">Contact us</a></li>
           
       
          </ul>
          
        </li>
     
      </ul>
      </div>
</nav>

   <div class="header_shop" id="header_shop">
  Tell your story.
  </div>




  <div class="btn btn-dark" role="group" aria-label="...">
<div class="shop_button_shop"><button type="button" style="width:400px;height:80px" class="btn btn-warning" id="shop_b_shop"
onclick="smoothScroll_shop(document.getElementById('content'))">What we offer</button>
</div>
</div>

<script>
window.smoothScroll_shop = function(target) {

  $('html,body').animate({
        scrollTop: $(".shop_content").offset().top},
        'slow');
}
</script>

<script>

var container = document.querySelector("#header_shop");
var mover = document.querySelector("#header_shop");

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
</script>
<script>
function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("shop_content").style.fontSize = "30px";
  } else {
    document.getElementById("shop_content").style.fontSize = "90px";
  }
}

</script>


<div class="row_shop_grid">
<div class="shop_content">


  <div class="column">
    <div class="card">
      <img src="Images/shop_logos/CUSTOM DESIGNS.png" alt="Custom Designs" style="width:100%">
      <div class="container">
        
        <p class="title">Professional illustration made on your request.</p>
        <p></p>
        
        <p><button type="button" class="button" onclick="purchase(document.getElementById('content'))"/>Order</button></p>
        <script>
window.purchase = function(target) {

  window.location.href = "shop_purchase.php";
}
</script>
      </div>

    

    </div>
  </div>

 








               
 
     </div><!--end row-->
</section>
 


  </form>
  </body>

</html>


