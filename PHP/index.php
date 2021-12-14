<?php
	define('__APP__', TRUE);
	
    session_start();
	
	include ("dbconn.php");
	
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
    include_once("functions.php");
print '
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0; maximum-scalable=0;user-scalable=0;">
    <meta name="description" content="Proffesional web ">
    <meta name="keywords" content="Web programmer,proffesional web,web ">
    <meta name="author" content="Ante Ramljak">
    <title>Ace Web | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">

  </head>
  <body>
    <header>
      <div class="hero-image" style="height: 200px;"></div>

      <nav>';
			include("menu.php");
		print '</nav>



    <header>


    <main>';
    if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("home.php"); } 
	
	# News
	else if ($_GET['menu'] == 2) { include("news.php"); }
	
	# Contact
	else if ($_GET['menu'] == 3) { include("contact.php"); }
	
	# About us
	else if ($_GET['menu'] == 4) { include("about-us.php"); }

    # Gallery
    else if ($_GET['menu'] == 5) { include("gallery.php"); }
    print '
      
      

    </main>
    <footer>
      <p>Copyright &copy; 2019 Ante Ramljak. <a href="https://github.com/Ante372?tab=repositories"><img src="img/github.png"title="Github" alt="Github"></a></p>

    </footer>

  </body>
</html>';
?>
