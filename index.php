<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="images/icon/favicon.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>ÉducatifExpress</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>
		$(window).on('scroll', function(){
  			if($(window).scrollTop()){
  			  $('nav').addClass('black');
 			 }else {
 		   $('nav').removeClass('black');
 		 }
		})
	</script>
	<?php
	

	?>
</head>
<body class="all">
	
<!-- Navigation Bar -->
	<header id="header" >
		<nav>
			<!-- logo.png -->
			<div class="logo"><img src="images/icon/logoEE.png" alt="logo"></div>
			<ul>
				<li><a class="active" href="">Accueil</a></li>
				<li><a href="#about_section">À propos</a></li>
				<li><a href="#portfolio_section">ÉducatifExpress</a></li>
				<li><a href="#services_section">Services</a></li>
				<li><a href="#contactus_section">Contact</a></li>
			</ul>
			<div class="srch">
				<!-- <form action="index.php" method=" GET"> -->
				<input type="text" class="search" id="searchbar" onkeyup="search_e()" placeholder="Cherche ici..."><img src="images/icon/search.png" alt="search" onclick=slide()>
			               <!-- </form> -->
		    </div>
			<?php
				session_start();	
				if(!isset($_SESSION['login_user'])){	
					?>
						<a class="get-started" href="login.php">INSCRIPTION</a>
					<?php
				}else {
					?>	
						<button onclick="showMenu()" id= "buttonn" class="select-btn">
						    <img src="./images/icon/usee.png" alt="select" class="select-icon">
							<img src="./images/icon/select.png" alt="select" class="select-iconn">
						</button>
					<?php
				}
			?>
			<img src="images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
		</nav>

		<div class="menu-extended">
			<div class="menu-item">
				<a href="./logout.php" class="deconection">log out</a>
			</div>
		</div>	
		<div class="head-container" onclick="hideMenu()" id="divh"> 
			<div class="quote">
				<p>La beauté de l'apprentissage est que personne ne peut vous l'enlever</p>
				<h5>L'éducation est le processus qui facilite l'apprentissage ou l'acquisition de connaissances, de compétences, de valeurs, de croyances et d'habitudes. Les méthodes pédagogiques comprennent l'enseignement, la formation, la narration, la discussion et la recherche dirigée !</h5>
				<div class="play">
					<img src="images/icon/play.png" alt="play"><span><a href="#" target="_blank">Regarde Maintenant</a></span>
				</div>
			</div>
			<div class="svg-image">
				<img src="images/extra/svg1.jpg" alt="svg">
			</div>
		</div>
		<div class="side-menu" id="side-menu">
			<div class="close" onclick="sideMenu(1)"><img src="images/icon/close.png" alt=""></div>
			<div class="user">
				<img src="images/creator/Me for job.jpg" alt="Username">
				<p>MOUAD FANINE</p>
			</div>
			<ul>
				<li><a class="active" href="">Accueil</a></li>
				<li><a href="#about_section">À propos</a></li>
				<li><a href="#team_section">ÉducatifExpress</a></li>
				<li><a href="#services_section">Services</a></li>
				<li><a href="#contactus_section">Contact</a></li>
				<li><a href="#feedBACK">Feedback</a></li>
			</ul>
		</div>
	</header>


<!-- Some Popular Subjects -->
<?php
	if(isset($_SESSION['login_user'])){	
echo'
	<div class="title">
		<span>Sujets populaires sur ÉducatifExpress</span>
	</div>
	<br><br>
	<div class="course">
		<center><div class="cbox">
		<div class="det"><a href="subjects/jee.php"><img src="images/courses/book.png">JEE Preparation</a></div>
		<div class="det"><a href="subjects/gate.php"><img src="images/courses/d1.png">Gate préparation</a></div>
		<div class="det"><a href="subjects/jee.php#sample_papers"><img src="images/courses/paper.png">Exemples de papiers</a></div>
		<div class="det"><a href="subjects/quiz.php"><img src="images/courses/d1.png">Quizz quotidien</a></div>
		</div></center>
		<div class="cbox">
		<div class="det"><a href="subjects/computer_courses.php"><img src="images/courses/computer.png">Cours d\'informatique</a></div>
		<div class="det"><a href="subjects/computer_courses.php#data"><img src="images/courses/data.png">Structures de données</a></div>
		<div class="det"><a href="subjects/computer_courses.php#algo"><img src="images/courses/algo.png">Algorithme</a></div>
		<div class="det det-last"><a href="subjects/computer_courses.php#projects"><img src="images/courses/projects.png">Projets</a></div>
		</div>
	</div>';}
?>
	
<!-- ABOUT -->
	<div class="diffSection" id="about_section">
		<center><p style="font-size: 50px; padding: 100px">À propos</p></center>
		<div class="about-content">
				<div class="side-image">
					<img class="sideImage" src="images/extra/e3.jpg">
				</div>
				<div class="side-text">
					<h2>Que pensez-vous de nous ?</h2>
					<p>L'éducation est le processus qui facilite l'apprentissage ou l'acquisition de connaissances, de compétences, de valeurs, de croyances et d'habitudes. Les méthodes pédagogiques comprennent l'enseignement, la formation, la narration, la discussion et la recherche dirigée.<br> Le site Web éducatif peut inclure des sites Web proposant des jeux, des vidéos ou des ressources thématiques qui agissent comme des outils pour améliorer l'apprentissage et compléter l'enseignement en classe. Ces sites Web contribuent à rendre le processus d'apprentissage divertissant et attrayant pour l'étudiant, surtout à notre époque. <br>En utilisant HTML (HyperText Markup Language), CSS (Cascading Style Sheet), JavaScript, nous pouvons rendre l'apprentissage plus facile et intéressant.</p>
				</div>
		</div>
	</div>


<!-- PORTFOLIO -->
	<div class="diffSection" id="portfolio_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px;">ÉducatifExpress</p></center>
		<div class="content">
			<p>
			"L'éducation est le passeport pour l'avenir, car demain appartient à ceux qui s'y préparent aujourd'hui." "Votre attitude, pas votre aptitude, déterminera votre altitude." "Si vous pensez que l'éducation coûte cher, essayez l'ignorance." "La seule personne éduquée est celle qui a appris à apprendre... et à changer."
			</p>
		</div>
	</div>
	<div class="extra">
		<p>Nous augmentons ces données chaque année</p>
		<div class="smbox">
		<span><center><div class="data">154</div><div class="det">Étudiants inscrits</div></center></span>
		<span><center><div class="data">62</div><div class="det">Total des cours</div></center></span>
		<span><center><div class="data">56</div><div class="det">Étudiants placés</div></center></span>
		<span><center><div class="data">27</div><div class="det">Projets totaux</div></center></span>
		</div>
	</div>


<!-- TEAM -->
	<div class="diffSection" id="team_section">
		<center><p style="font-size: 50px; padding-top: 100px; padding-bottom: 60px;">le créateur de cette plateforme</p></center>
		<div class="totalcard">
			<div class="card">
				<center><img src="images/creator/Me for job.jpg"></center>
				<center><div class="card-title">Mouad Fanine</div>
				<div id="detail">
					<p>“ Vous pouvez enseigner à un étudiant une leçon pendant une journée ; mais si vous pouvez lui apprendre à apprendre en suscitant la curiosité, il poursuivra le processus d'apprentissage tant qu'il vivra “</p>
					<div class="duty"></div>
					<a href="https://www.linkedin.com/in/mouad-fanine-446ba6240/" target="_blank"><button class="btn-roshan">Suivre +</button></a>
				</div>
				</center>
			</div>
	</div>


<!-- SERVICES -->

	<div class="service-swipe">
		<div class="diffSection" id="services_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px; color: #fff;">Services</p></center>
		</div>
		<a <?php if(isset($_SESSION['login_user'])){echo' href="subjects/computer_courses.php"';}else{echo' href="login.php"';}?>><div class="s-card"><img src="images/icon/computer-courses.png"><p>Cours d\'informatique en ligne gratuits</p></div></a>

		<a <?php if(isset($_SESSION['login_user'])){echo' href="subjects/jee.php"';}else{echo' href="login.php"';}?> ><div class="s-card"><img src="images/icon/brainbooster.png"><p>Élaboration de concepts pour les concours</p></div></a>
		<a <?php if(isset($_SESSION['login_user'])){echo' href="#"';}else{echo' href="login.php"';}?> ><div class="s-card"><img src="images/icon/online-tutorials.png"><p>Conférences vidéo en ligne</p></div></a>
		<a <?php if(isset($_SESSION['login_user'])){echo' href="subjects/jee.php#sample_papers"';}else{echo' href="login.php"';}?> ><div class="s-card"><img src="images/icon/papers.jpg"><p>Exemples de documents de National BTS</p></div></a>
		<a <?php if(isset($_SESSION['login_user'])){echo' href="#"';}else{echo' href="login.php"';}?> ><div class="s-card"><img src="images/icon/p3.png"><p>Rapport de performance et de classement</p></div></a>
		<a <?php if(isset($_SESSION['login_user'])){echo' href="#contactus_section"';}else{echo' href="login.php"';}?> ><div class="s-card"><img src="images/icon/discussion.png"><p>Discussion avec nos tuteurs et mentors</p></div></a>
		<a <?php if(isset($_SESSION['login_user'])){echo' href="subjects/quiz.php"';}else{echo' href="login.php"';}?> ><div class="s-card"><img src="images/icon/q1.png"><p>Questions quotidiennes de taquineries cérébrales pour améliorer le QI</p></div></a>
		<a  <?php if(isset($_SESSION['login_user'])){echo' href="#contactus_section"';}else{echo' href="login.php"';}?>><div class="s-card"><img src="images/icon/help.png"><p>Assistance en ligne 24h/24 et 7j/7</p></div></a>
	
	
</div>

	

<!-- Reviews by Students -->
<div id="makeitfull">
	<a href="#review_section"><img src="images/icon/makeitfull.png"></a>
</div>
<div class="review">
	<div class="diffSection" id="review_section">
		<center><p style="font-size: 40px; padding: 100px; padding-bottom: 40px; color: #2E3D49;">Ce que les étudiants disent de nous ?</p></center>
	</div>
	<div class="rev-container">
		<div class="rev-card">
			<div class="identity">
				<img src="images/creator/souka.jpeg"><p>Soukayna mchaa</p>
				<h6>Java</h6>
				<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
				J'ai suivi le cours Java fondamentale. C'était une expérience géniale. Les casse-tête et les devoirs, en fait tout le contenu était vraiment bon. Certains problèmes étaient difficiles mais intéressants. A été très bien expliqué là où je me suis coincé...				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="images/creator/omar.jpeg"><p>Omar Bakkal</p>
				<h6>C/C++</h6>
				<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
				Quand je regardais "Fanine mouad", je pouvais relier . De la même manière que mouad fanine donnait des leçons de vie à bts, de la même manière qu'Arnav Bhaiya donnera des leçons de vie de codage qui vous guideront tout au long de votre vie de code...				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="images/creator/oum.jpg"><p>Oumayma Bajjou</p>
				<h6>JEE</h6>
				<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
				Educationexpress a été une expérience incroyable pour moi. J'appartiens au département d'électronique et j'ai eu une petite expérience dans le codage, mais je pense que cela m'a aidé à réfléchir de manière beaucoup plus analytique. Le codage est important, quelle que soit la branche dans laquelle vous vous trouvez. Il vous permet de mieux comprendre comment aborder un problème...				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="images/creator/aymane.jpg"><p>Aymane Bouzaidi</p>
				<h6>Python</h6>
				<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
				C'était mon premier cours complet sur les blocs de codage. J'ai suivi le cours Python à l'hiver 2020 et j'ai adoré, ce qui m'a fait rejoindre le cours complet. mouad fanine (TA) ont une bonne connaissance du domaine et ont été très utiles pour nous faire comprendre les concepts. Je le recommanderais certainement à tout le monde...				</p>
			</div>
		</div>
	</div>
</div>

<!-- CONTACT US -->
	<div class="diffSection" id="contactus_section">
		<center><p style="font-size: 50px; padding: 100px">Contactez-nous</p></center>
		<div class="csec"></div>
		<div class="back-contact">
			<div class="cc">
			<form action="mailto:faninemouad@gmail.com" method="post" enctype="text/plain">
				<label>Prénom <span class="imp">*</span></label><label style="margin-left: 185px">Nom de famille <span class="imp">*</span></label><br>
				<center>
				<input type="text" name="" style="margin-right: 10px; width: 175px" required="required"><input type="text" name="lname" style="width: 175px" required="required"><br>
				</center>
				<label>Email <span class="imp">*</span></label><br>
				<input type="email" name="mail" style="width: 100%" required="required"><br>
				<label>Message <span class="imp">*</span></label><br>
				<input type="text" name="message" style="width: 100%" required="required"><br>
				<label>Détails supplémentaires</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Envoyer le message</button>
			</form>
			</div>
		</div>
	</div>


<!-- FEEDBACK -->
	<div class="title2" id="feedBACK">
		<span>Give Feedback</span>
		<div class="shortdesc2">
			<p>Merci de nous faire part de vos précieux commentaires</p>
		</div>
	</div>

	<div class="feedbox">
		<div class="feed">
			<form action="mailto:faninemouad@gmail.com" method="post" enctype="text/plain">
				<label>Votre Nom</label><br>
				<input type="text" name="" class="fname" required="required"><br>
				<label>Email</label><br>
				<input type="email" name="mail" required="required"><br>
				<label>Détails supplémentaires</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Envoyer le message</button>
			</form>
		</div>
	</div>

<!-- Sliding Information -->
	<marquee style="background: linear-gradient(to right, #FA4B37, #DF2771); margin-top: 50px;" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="20"><div class="marqu">"L'éducation est le passeport pour l'avenir, car demain appartient à ceux qui s'y préparent aujourd'hui." "Votre attitude, pas votre aptitude, déterminera votre altitude." "Si vous pensez que l'éducation coûte cher, essayez l'ignorance." "La seule personne éduquée est celle qui a appris à apprendre... et à changer."</div></marquee>

<!-- FOOTER -->
	<footer>
		<div class="footer-container">
			<div class="left-col">
				<img src="images/icon/logoEE.png" style="width: 400px;">
				<div class="logo"></div>
				<div class="social-media">
					<a href="#"><img src="images/icon\fb.png"></a>
					<a href="#"><img src="images/icon\insta.png"></a>
					<a href="#"><img src="images/icon\tt.png"></a>
					<a href="#"><img src="images/icon\ytube.png"></a>
					<a href="https://www.linkedin.com/in/mouad-fanine-446ba6240/"><img src="images/icon\linkedin.png"></a>
				</div><br><br>
				<p class="rights-text">Copyright © 2023 Created By Fanine Mouad, EN-Natto All Rights Reserved.</p>
				<br><p><img src="images/icon/location.png"> BTS ibn_sina  <br>Morocco, Taounate-34000</p><br>
				<p><img src="images/icon/phone.png"> +212 6 39 58 52 14<br><img src="images/icon/mail.png">&nbsp; EN-natto112@gmail.com</p>
			</div>
			<div class="right-col">
				<h1 style="color: #fff">Notre bulletin</h1>
				<div class="border"></div><br>
				<p>Entrez votre e-mail pour recevoir nos nouvelles et mises à jour.</p>
				<form class="newsletter-form">
					<input class="txtb" type="email" placeholder="Entrer votre Email">
					<input class="btn" type="submit" value="Submit">
				</form>
			</div>
		</div>
	</footer>
</body>
</html>