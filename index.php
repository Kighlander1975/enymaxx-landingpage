<?php
    // Basis-URL dynamisch generieren
    $baseURL = rtrim((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]" . dirname($_SERVER['PHP_SELF']), '/') . '/';
?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		      content="width=device-width, initial-scale=1.0">
		<title>EnymaxX - Energieberatung für Strom & Gas | EnymaxX GmbH</title>
		<meta name="description"
		      content="EnymaxX – Ihre professionelle Energieberatung für Strom, Gas, Wärmepumpen und Nachtspeicher: Unabhängiger Tarifvergleich, Wechselservice inkl. Kündigung, Laufzeitüberwachung und persönliche Beratung für Privat- und Geschäftskunden. Energiekosten senken – jetzt beraten lassen!">
		<meta name="author"
		      content="EnymaxX GmbH">
		<meta name="robots"
		      content="index, follow">
		<meta http-equiv="X-UA-Compatible"
		      content="IE=edge">
		<link rel="canonical"
		      href="https://enymaxx.de/">

		<!-- Favicon & App Icons -->
		<link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
		<link rel="icon" type="image/svg+xml" href="assets/images/favicon/favicon.svg">
		<link rel="shortcut icon" href="assets/images/favicon/favicon.ico">
		<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
		<link rel="manifest" href="assets/images/favicon/site.webmanifest">
		<meta name="theme-color" content="#ffffff">
		<link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicon/web-app-manifest-192x192.png">
		<link rel="icon" type="image/png" sizes="512x512" href="assets/images/favicon/web-app-manifest-512x512.png">

		<!-- Open Graph / Facebook -->
		<meta property="og:title" content="EnymaxX - Energieberatung für Strom & Gas">
		<meta property="og:description" content="Professionelle Energieberatung für Privat und Gewerbe. Jetzt Strom- und Gastarife optimieren und sparen!">
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://enymaxx.de/">
		<meta property="og:image" content="https://enymaxx.de/assets/images/og_image.jpg"><!-- Passe den Pfad ggf. an, z.B. Logo oder ein Banner -->

		<!-- Twitter -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="EnymaxX - Energieberatung für Strom & Gas">
		<meta name="twitter:description" content="Professionelle Energieberatung für Privat und Gewerbe. Jetzt Strom- und Gastarife optimieren und sparen!">
		<meta name="twitter:image" content="https://enymaxx.de/assets/images/og_image.jpg"><!-- Passe den Pfad ggf. an -->

		<link rel="stylesheet" href="assets/css/landing.css">
	</head>


	<body>
		<!-- Preloader -->
		<div id="preloader">
			<img src="assets/images/Logo-auf-weiß.png"
			     alt="Firmenlogo"
			     class="preloader-logo">
		</div>

		<div id="content-wrapper">
			<header class="hero">
				<div class="container">
					<div class="hero-content text-center">
						<img class="hero-logo"
						     src="assets/images/Logo-auf-weiß.png"
						     alt="">
						<h1>Willkommen bei EnymaxX</h1>
						<p class="lead">Ihre professionelle Energieberatung für optimierte Strom- und Gastarife</p>
						<div class="maintenance-hint">
							<strong>Hinweis:</strong> Unsere neue Website befindet sich derzeit im Aufbau. Schon bald finden Sie hier alle Informationen rund um unsere Energieberatung!
						</div>
						<button class="cta-button">Jetzt Kontakt aufnehmen</button>
					</div>
				</div>
			</header>

			<footer>
				<div class="container text-center">
					<div class="footerlinkscontainer">
						<div class="footer-links">
							<a href="#"
							   id="impressum-link"
							   data-modal-target="impressum-modal">Impressum</a>
							<span class="footer-divider">|</span>
							<a href="#"
							   id="datenschutz-link"
							   data-modal-target="datenschutz-modal">Datenschutz</a>
						</div>
						<p class="mt-3">© <?= date('Y') ?> EnymaxX. Alle Rechte vorbehalten.</p>
					</div>
				</div>
			</footer>
		</div>

		<!-- Modals einbinden -->
        <?php include 'includes/modals/impressum-modal.php'; ?>
        <?php include 'includes/modals/datenschutz-modal.php'; ?>

		<script src="assets/js/landing.js"></script>
	</body>
</html>