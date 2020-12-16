

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrierung</title>

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
  <body>

  <div class="header_verify" id="header_verify">
  Thank you, we will check your problem immediately and give you an update as soon as possible.

  
  </div>

  <div class="btn btn-dark" role="group" aria-label="...">
<div class="verify_done"><button type="button" style="width:400px;height:80px" class="btn btn-info" id="verify_done"
onclick="smoothScroll_shop(document.getElementById('content'))">Back</button>
</div>
</div>


<script>
window.smoothScroll_shop = function(target) {

  window.location.href = "contact.php";
}
</script>


  
<script>

var container = document.querySelector("#header_verify");
var mover = document.querySelector("#header_verify");

container.addEventListener("mousemove", function(e) {
  mover.style.backgroundPositionX = -e.offsetX * 1.8 + "px";
  mover.style.backgroundPositionY = -e.offsetY + 80 + "px";
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
    document.getElementById("header_verify").style.fontSize = "30px";
  } else {
    document.getElementById("header_verify").style.fontSize = "90px";
  }
}

</script>

  </body>