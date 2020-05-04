<?php

$dev = true;

function editable(){
        if (isset($dev) && $dev == true) {
            echo "data-editable";
        }
}
?>
<!DOCTYPE HTML>
<!--
Paradigm Shift by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Antoine Bonin | Portfolio</title>
		<link rel="stylesheet" href="css/main.min.css">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta name="description" content="Etudiant à Digital Campus Lyon,je suis aussi amateur de webdesign, développement et photographie !">
		<meta name="author" content="Antoine Bonin">
		<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
		<link rel="manifest" href="images/favicon/site.webmanifest">
		<link rel="shortcut icon" href="images/favicon/favicon.ico">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-config" content="images/favicon/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="../main.css">
		<!--link rel="stylesheet" type="text/css" href="../style.css"-->
		<script src="https://kit.fontawesome.com/5a25629c5a.js"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113871927-1"></script>
		<script>
window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-113871927-1');
		</script>
		<!-- Hotjar Tracking Code for antoinebonin.fr -->
		<script>
(function(h,o,t,j,a,r){
    h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
				h._hjSettings={hjid:1417179,hjsv:6};
				a=o.getElementsByTagName('head')[0];
				r=o.createElement('script');r.async=1;
				r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
				a.appendChild(r);
			})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
		</script>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section class="intro">
						<header>
							<div <? editable() ?> data-name="name">
								<?php echo($fields['name']) ?>
							</div>
							<div <? editable() ?> data-name="introduction">
                                <?php echo($fields['introduction']) ?>
							</div>
							<ul class="actions">
								<li><a href="#first" class="arrow scrolly"><span class="label">Suivant</span></a></li>
							</ul>
						</header>
						<div class="content">
							<span class="image fill" data-position="center" data-editable data-name="image"><img src="images/gif-header.gif" alt="" /></span>
						</div>
					</section>

				<!-- Section -->
					<section id="first"	 class="hideme">
						<header data-editable data-name="header_title">
							<h2>Qui suis-je ?</h2>
						</header>
						<div class="content">
							<div data-editable data-name="header_text">
								<p>Je suis <strong>Antoine Bonin</strong>, j'ai 19 ans et je suis actuellement en 2ème année de Bachelor chef de projet web à Digital Campus à Lyon.<br>J'ai suivi un parcours toujours orienté vers la <strong>technologie</strong> et le <strong>multimédia</strong>, en commençant par l'obtention d'un baccalauréat scientifique option ISN ( Informatique et Science du Numérique ) qui m'a permis d'accéder très tôt au monde du digital.<br>Déjà en 3ème, lors de mon stage obligatoire en entreprise, j'ai mis un pied dans le vaste monde du numérique. Simple observateur dans une petite <strong>agence de communication</strong> près de chez moi, cela m'a réconforté dans mon parcours post bac.<br>Une fois mon bac en poche, je suis rentré chez Digital Campus. Ici j'ai pu acquérir de nouvelles compétences ainsi qu'étoffer celles acquises de manière <strong>autodidacte</strong>. Par la suite j'ai fait un stage de 4 mois dans un magasin de vélo et scooter électrique en tant que <strong>producteur vidéo</strong>.</p>
							</div>
							<span class="image main" data-editable data-name="header_img"><img src="images/50882552_382637452294903_293874354020679680_o.jpg" alt="" /></span>
						</div>
					</section>

				<!-- Section -->
					<section class="hideme">
						<header>
							<h2>Mes compétences</h2>
						</header>
						<div class="content">
							<p>Après déjà 2 années d’études dans le domaine du web et plus de <strong>2 années d’expérience</strong> en autodidacte, je me sens désormais capable de mener à bien un <strong>projet web</strong> dans son ensemble, de la rédaction du cahier des charges à l’hébergement du site web.
								<br>Passionné de <strong>photo</strong> et de <strong>vidéo</strong>, je suis capable de produire du <strong>contenu multimédia</strong> pour tous vos supports.
								<br>Vous pouvez voir si dessous quelques technologies et logiciels que je maitrise !</p>
							<ul class="feature-icons">
								<li class="fab fa-html5"><strong>HTML5 / CSS3</strong></li>
								<li class="fab fa-wordpress"><strong>Wordpress</strong></li>
								<li class="fas fa-camera-retro"><strong>Photographie</strong></li>
								<li class="fab fa-windows"><strong>Pack Office</strong></li>
								<li class="fab fa-adobe"><strong>adobe</strong></li>
								<li class="fas fa-video"><strong>Vidéaste</strong></li>
							</ul>
							<p>Pour plus d'information, vous pouvez télécharger mon cv avec le bouton juste en dessous !</p>
							<a href="http://antoinebonin.fr/antoinebonin-cv.pdf" class="button primary large fas fa-download"><strong>Télécharger mon cv</strong></a>
						</div>
					</section>

				<!-- Section -->
					<section>
						<header>
							<h2>Quelques réalisations</h2>
						</header>
						<div class="content">

							<!-- Section -->
								<section class="hideme">
									<header>
										<h3>1ère année de bachelor</h3>
										<p>Lors de ma première année de Bachelor, j'ai pu apprendre à utiliser les outils de la suite Adobe comme par exemple Photoshop.
											<br>Voici quelques réalisations faites lors de cette première année</p>
									</header>
									<div class="content">
										<div class="gallery">
											<a href="images/doubleexpo.jpg" class="landscape"><img src="images/doubleexpo.jpg" alt="" /></a>
											<a href="images/forestdoubleexpo.jpg"><img src="images/forestdoubleexpo.jpg" alt="" /></a>
											<a href="images/couv.jpg"><img src="images/couv.jpg" alt="" /></a>
											<a href="images/GOT.jpg" class="landscape"><img src="images/GOT.jpg" alt="" /></a>
										</div>
									</div>
								</section>

							<!-- Section -->
								<section class="hideme">
									<header>
										<h3>travel</h3>
										<p>Depuis maintenant 3 ans, je possède un reflex afin d'immortaliser des instants via des photos ou de la vidéos.
											<br> Au début avec un Canon 100D puis avec un 80D, je passe chaque instant de mon voyage à photographier l'environnement qui m'entoure !</p>
									</header>
									<div class="content">
										<div class="gallery">
											<a href="images/37780465_459991797852440_1002783410877366272_n.jpg" class="landscape"><img src="images/37780465_459991797852440_1002783410877366272_n.jpg" alt="" /></a>
											<a href="images/44267058_298569317421549_7310752931029983111_n.jpg"><img src="images/44267058_298569317421549_7310752931029983111_n.jpg" alt="" /></a>
											<a href="images/42815502_280192399276724_2851809825452942066_n.jpg"><img src="images/42815502_280192399276724_2851809825452942066_n.jpg" alt="" /></a>
										</div>
									</div>
								</section>

							<!-- Section -->
								<!--section>
									<header>
										<h3>Lorem gravida</h3>
										<p>Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aenean ornare velit lacus, ac varius sed enim lorem ullamcorper dolore.  ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis.</p>
									</header>
									<div class="content">
										<div class="gallery">
											<a href="images/gallery/fulls/08.jpg" class="portrait"><img src="images/gallery/thumbs/08.jpg" alt="" /></a>
											<a href="images/gallery/fulls/09.jpg" class="portrait"><img src="images/gallery/thumbs/09.jpg" alt="" /></a>
											<a href="images/gallery/fulls/10.jpg" class="landscape"><img src="images/gallery/thumbs/10.jpg" alt="" /></a>
										</div>
									</div>
								</section-->

						</div>
					</section>

				<!-- Section -->
					<section class="hideme">
						<header>
							<h2>Me contacter</h2>
						</header>
						<div class="content">
							<p>Un <strong>projet</strong>, une question ou simplement envie d'échanger autour d'un café ? Envoyez-moi un message </p>
							<form action="https://formspree.io/contact@antoinebonin.fr" method="POST">
								<div class="fields">
									<div class="field half">
										<input type="text" name="nom" id="name" placeholder="Nom" />
									</div>
									<div class="field half">
										<input type="email" name="email" id="email" placeholder="Email" />
									</div>
									<div class="field">
										<input type="text" name="sujet" id="sujet" placeholder="Sujet du message" />
									</div>
									<div class="field">
										<textarea name="message" id="message" placeholder="Message" rows="7"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Envoyer le message" class="button primary" /></li>
								</ul>
							</form>
						</div>
						<footer>
							<ul class="items">
								<li>
									<h3>Email</h3>
									<a href="mailto:contact@antoinebonin.fr">contact@antoinebonin.fr</a>
								</li>
								<li>
									<h3>téléphone</h3>
									<a href="tel:+33635138577">06.35.13.85.77</a>
								</li>
								<li>
									<h3>Réseaux sociaux</h3>
									<ul class="icons">
										<li><a href="https://twitter.com/antoinebonin99" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="https://www.facebook.com/antoinebonin99/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="https://www.instagram.com/antoinebon1/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="https://www.linkedin.com/in/antoine-bonin/" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
									</ul>
								</li>
							</ul>
						</footer>
					</section>

				<!-- Copyright -->
					<div class="copyright">&copy; Antoine Bonin. All rights reserved. Design: <a href="https://html5up.net">HTML5 UP</a>.</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
		<script>
$(document).ready(function() {

    /* Every time the window is scrolled ... */
    $(window).scroll( function(){

        /* Check the location of each desired element */
        $('.hideme').each( function(i){

            var bottom_of_object = $(this).offset().top + ($(this).outerHeight())/5;
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){

                $(this).animate({'opacity':'1'},500);

                        }

        });

    });

});
		</script>

		<script src="https://cdn.jsdelivr.net/npm/ContentTools@1.6.1/build/content-tools.min.js"></script>
		<script
				src="https://code.jquery.com/jquery-3.4.1.min.js"
				integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
				crossorigin="anonymous">
		</script>

		<script src="../index.js"></script>

	</body>
</html>
