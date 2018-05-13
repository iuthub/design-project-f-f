<?php 
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <title>WpF BGness : Home page</title>

      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/superslides.css">
      <link rel="stylesheet" href="css/animate.css">
      <link href="css/slick.css" rel="stylesheet">
      <link id="switcher" href="css/themes/cyan-theme.css" rel="stylesheet">
      <link href="style.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

      <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">


    
 </head>
 <body>


	<div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" data-toggle="collapse"
					data-target=".navbar-collapse" class="navbar-toggle collapsed">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
			</div>
			<?php 
			$arr = explode("/",$_SERVER['REQUEST_URI']);
			$uri = end( $arr ); 
			?>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li <?php if($uri == 'home') echo "class='active'"; ?>><a href="home.php">Home</a></li>
					<li <?php if($uri == 'quiz-results') echo "class='active'"; ?>><a href="quiz-results.php">Quiz Results</a></li>
					<li <?php if($uri == 'start-quiz') echo "class='active'"; ?>><a href="start-quiz.php">Start New Quiz</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">
							Welcome

							
						<?php if($_SESSION['logged_in'])  ?>
							<?php echo $_SESSION['name']; ?>
							<span class="caret"></span>
						</a>
						<ul role="menu" class="dropdown-menu">
							<li> <a href="account.php">My Account</a> </li>
							<li class="divider"></li>
							<li style="background: #e67e22; color:#fff"> <a href="logout.php">Logout</a> </li>
						</ul>
						<?php  ?>
					</li>
					
				</ul>
			</div>

		</div>
	</div>