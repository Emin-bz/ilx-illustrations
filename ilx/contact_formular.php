<?php

// TODO: Verbindung zur Datenbank einbinden

include('connector.inc.php');

// Initialisierung
$error = $message =  '';
$email = $title = $text = '';

// Wurden Daten mit "POST" gesendet?
if($_SERVER['REQUEST_METHOD'] == "POST"){
  // Ausgabe des gesamten $_POST Arrays
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";

}
 

  // emailadresse vorhanden, mindestens 1 Zeichen und maximal 100 zeichen lang
  if(isset($_POST['email']) && !empty(trim($_POST['email'])) && strlen(trim($_POST['email'])) <= 100){
    $email = htmlspecialchars(trim($_POST['email']));
    // korrekte emailadresse?
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){
      $error .= "Geben Sie bitte eine korrekte Email-Adresse ein<br />";
    }
  } 


  // benutzername vorhanden, mindestens 6 Zeichen und maximal 30 zeichen lang
  if(isset($_POST['title']) && !empty(trim($_POST['title'])) && strlen(trim($_POST['title'])) <= 30){
    $title = trim($_POST['title']);
    // entspricht der benutzername unseren vogaben (minimal 6 Zeichen, Gross- und Kleinbuchstaben)
		if(!preg_match("/(?=.*[a-z])[a-z]{6,}/", $title)){
			$error .= "Please use valid characters..<br />";
		}
  } 

    // benutzername vorhanden, mindestens 6 Zeichen und maximal 30 zeichen lang
    if(isset($_POST['text']) && !empty(trim($_POST['text'])) && strlen(trim($_POST['text'])) <= 30){
        $text = trim($_POST['text']);
        // entspricht der benutzername unseren vogaben (minimal 6 Zeichen, Gross- und Kleinbuchstaben)
            if(!preg_match("/(?=.*[a-z])[a-z]{6,}/", $text)){
                $error .= "Der Benutzername entspricht nicht dem geforderten Format.<br />";
            }
      } 


//----------------------------------------------------------------------------------------------------------------------------------------¨

$issue = $title . "<br>" . $text;

if(isset($_POST['button']) && $_POST['email'] != null && $_POST['title'] && $_POST['text']) {

  mail('goku.bossekip@gmail.com', 'Support Request', $issue);

    header("Location: contact_formular_verify.php");

}






?>


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

  <nav aria-label="Back_to_home">
  <ul class="pager">
    <li class="previous"><a href="contact.php" style="margin-left: 30px;"><span aria-hidden="true">&larr;</span> Back</a></li>
    
  </ul>
</nav>


<?php

if(isset($_POST['Home'])) {

header("Location: contact.php");

}

?>

<form action="" method="post">

<div id="header_register">
<header style="background-color:#f1f1f1;">Support-Center</header>
</div>
<div class="color_change">
    <div class="container">
      
     <div class="space">
      <p>
        <div class="sign_up_message">
        Please tell us your problem:
</div>
      </p>
      <?php
        // Ausgabe der Fehlermeldungen
        if(!empty($error)){
          echo "<div class=\"alert alert-danger\" role=\"alert\">" . $error . "</div>";
        } else if (!empty($message)){
          echo "<div class=\"alert alert-success\" role=\"alert\">" . $message . "</div>";
        }
      ?>


      <!-- Email -->
        <div class="form-group">
          <label for="email">Email *</label>
          <input type="email" name="email" class="form-control" id="email"
                  value="<?php echo $email ?>"
                  placeholder="Geben Sie Ihre Email-Adresse an."
                  maxlength="100"
                  required="true">
        </div>
        <!-- Title -->
        <div class="form-group">
          <label for="title">Title *</label>
          <input type="text" name="title" class="form-control" id="title"
                  value="<?php echo $title ?>"
                  placeholder="Gross- und Keinbuchstaben, min 6 Zeichen."
                  maxlength="30" required="true"
                  pattern="(?=.*[a-z])[a-z]{6,}"
                  title="Gross- und Keinbuchstaben, min 6 Zeichen.">
        </div>
            <!-- Text -->
            <div class="form-group">
          <label for="text">Text *</label>
          <textarea name="text" style="margin-bottom: 20px;" class="form-control" id="text"
                  value="<?php echo $text ?>"
                  placeholder="Gross- und Keinbuchstaben, min 6 Zeichen."
                  maxlength="30" required="true"
                  pattern="(?=.*[a-z])[a-z]{6,}"
                  title="6 Upper case and low case characters."></textarea>
        
        

        <button type="submit" name="button" value="submit" class="btn btn-info">Send</button>
        

        </form>
        </div>
        </div>
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>

