<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$to = 'contact@bialekrafal.pl'; 
		$subject = 'Message from bialekrafal.pl';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<p>Thank You! I will be in touch</p>';
	} else {
		$result='<p>Sorry there was an error sending your message. Please try again later.</p>';
	}
}
	}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Białek Rafał Portfolio</title>
	<meta name="author" content="Rafał Białek" />
	<meta name="description" content="Rafał Białek Portfolio" />
	<meta name="keywords"  content="Front-end,Portfolio,webdeveloper" />
	<meta name="Resource-type" content="Document" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles/fullpage.css" />
	<link rel="stylesheet" type="text/css" href="styles/styles.css"/>
</head>
<body>

<div id="fullpage">
	<div class="section " id="section0">
		<div class="intro">
			
			<p>This example will turn to normal scroll when the window size gets smaller than 900px width</p>
		</div>
	</div>
	<div class="section" id="section1">
			<div class="intro">
				
			</div>
			
	</div>
	<div class="section" id="section2">
		<div class="flex-container">
			<div class="flex-item">
				<h4>Chat</h4>
				<div class="miniature project1">
					<div class="layer">
						<div class="tech-icons">
							<span>React.js</span>
							<span>Node.js</span>
							<span>Express.js</span>
							<span>Socket.io</span>
						</div>
						<a href="https://github.com/Bialek/Kodilla-Bootcamp/tree/master/module-18-chat"><i class="fas fa-code"></i></a>
						<a href="https://limitless-fjord-29023.herokuapp.com/"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>		
			</div>
			<div class="flex-item">
				<h4>Countries DB</h4>
				<div class="miniature project2">
					<div class="layer">
						<div class="tech-icons">
							<span>React.js</span>
							<span>Redux</span>
							<span>React-router</span>
							<span>Api</span>
						</div>
						<a href="https://github.com/Bialek/Kodilla-Bootcamp/tree/master/module-20-react-router/Database-of-countries"><i class="fas fa-code"></i></a>
						<a href="./countriesdb/index.html"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="flex-item">
				
			</div>
			<div class="flex-item">
				<h4>Stopwatch</h4>
				<div class="miniature project4">
					<div class="layer">
						<div class="tech-icons">
							<span>React.js</span>
							<span>ES6</span>
						</div>
						<a href="https://github.com/Bialek/Kodilla-Bootcamp/tree/master/module-15-es6/15.7-react-stopwatch"><i class="fas fa-code"></i></a>
						<a href="./stopwatch/index.html"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="flex-item">
				
			</div>
			<div class="flex-item">
				
			</div>
		</div>
	</div>
	<div class="section" id="section3">
		<div class="flex-container">
			<div class="flex-item">
				<h3>Awax layout</h3>
				<div class="miniature psd1">
					<div class="layer">
						<div class="tech-icons">
							<span>Html</span>
							<span>Scss</span>
							<span>Bootstrap3</span>
							<span>JQuery</span>
						</div>
						<a href="https://github.com/Bialek/Awax-layout"><i class="fas fa-code"></i></a>
						<a href="https://bialek.github.io/Awax-layout/"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="flex-item">
				<h3>Golden layout</h3>
				<div class="miniature psd2">
					<div class="layer">
						<div class="tech-icons">
							<span>Html</span>
							<span>Scss</span>
							<span>Bootstrap4</span>
						</div>
						<a href="https://github.com/Bialek/golden-layout"><i class="fas fa-code"></i></a>
						<a href="https://bialek.github.io/golden-layout/"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="flex-item">
				<h3>Photo layout</h3>
				<div class="miniature psd3">
					<div class="layer">
						<div class="tech-icons">
							<span>Html</span>
							<span>Scss</span>
							<span>JQuery</span>
							<span>FullPage.js</span>
						</div>
						<a href="https://github.com/Bialek/Photo-layout-fullpage.js"><i class="fas fa-code"></i></a>
						<a href="https://bialek.github.io/Photo-layout-fullpage.js/"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>				
			</div>
		</div>
	</div>
	<div class="section" id="section4">
		<div class="flex-container">
			<div class="flex-item">
				<h3>Sudoku</h3>
				<div class="miniature game1">
					<div class="layer">
					<div class="tech-icons">
						<span>React</span>
						<span>NPM</span>
					</div>
						<a href="https://github.com/Bialek/sudoku-react"><i class="fas fa-code"></i></a>
						<a href="./sudoku/index.html"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="flex-item">
				<h3>Rock Paper Scissors Lizard Spock</h3>
				<div class="miniature game2">
					<div class="layer">
						<div class="tech-icons">
							<span>Html</span>
							<span>Css</span>
							<span>Bootstrap3</span>
							<span>JavaScript</span>
						</div>
						<a href="https://github.com/Bialek/rock-paper-scissors-lizard-spock"><i class="fas fa-code"></i></a>
						<a href="/rock-paper-scissors-lizard-spock/index.html"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="flex-item">
				<h3>Battleship</h3>
				<div class="miniature game3">
					<div class="layer">
						<div class="tech-icons">
							<span>Html</span>
							<span>Css</span>
							<span>JavaScript</span>
						</div>
						<a href="https://github.com/Bialek/Battleship"><i class="fas fa-code"></i></a>
						<a href="./battleship/index.html"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>				
			</div>
		</div>
	</div>
	<div class="section" id="section5">
		<div class="flex-container">
			<div class="flex-item">
				<h3>Amarant<br>Guesthouse in Pobierowo</h3>
				<div class="miniature order1">
					<div class="layer">
						<div class="tech-icons">
							<span>Html</span>
							<span>Css</span>
							<span>JavaScript</span>
						</div>
						<a href="http://pobierowo-amarant.pl/" target="_blank"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="flex-item">
				<h3>7 Żab<br>Camping in Pobierowo</h3>
				<div class="miniature order2">
					<div class="layer">
						<div class="tech-icons">
							<span>Html</span>
							<span>Css</span>
							<span>JavaScript</span>
						</div>
						<a href="http://7zab.com/" target="_blank"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="flex-item">
				<h3>Droplet<br>Handmake jewellery</h3>
				<div class="miniature order3">	
					<div class="layer">
						<div class="tech-icons">
							<span>WordPress</span>
							<span>WooCommerce</span>
						</div>
						<a href="http://www.e-droplet.com/" target="_blank"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>				
			</div>
		</div>
	</div>
	<div class="section" id="section6">
	<div class="flex-container">
			<div class="flex-item">
				<h4>Contact form</h4>
				<form class="contact" role="form" method="post" action="index.php#contact">
					<input type="text" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
					<?php echo "<p>$errName</p>";?>
					<input type="email" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
					<?php echo "<p>$errEmail</p>";?>
					<textarea  placeholder="Your message" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
					<?php echo "<p>$errMessage</p>";?>
					<input type="text" id="human" name="human" placeholder="2 + 3 = ?">
					<?php echo "<p>$errHuman</p>";?>
					<input id="submit" name="submit" type="submit" value="Send">
					<?php echo $result; ?>	
				</form> 
			</div>
			<div class="flex-item">
				<h4>Contact information</h4>
				<div class="contact">
                    <h2><i class="fas fa-user-alt"></i><a>Białek Rafał</a></h2>
                    <h2><a href="tel:607846422"><i class="fas fa-mobile-alt"></i>607846422</a></h2>
                    <h2><a href="mailto:contact@bialekrafal.pl"><i class="far fa-envelope"></i>contact@bialekrafal.pl</a></h2>
                    <h2><a href="https://github.com/Bialek"><i class="fab fa-github"></i>github.com/Bialek</a></h2>  
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="js/fullpage.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>