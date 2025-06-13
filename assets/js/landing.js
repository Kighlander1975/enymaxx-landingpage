// File: assets/js//landing.js
document.addEventListener('DOMContentLoaded', function() {
	// Preloader ausblenden nach Animation
	const preloader = document.getElementById('preloader');

	if (preloader) {
		// Nach 4 Sekunden (Dauer der Animation) ausblenden
		setTimeout(() => {
			preloader.style.opacity = '0'; // Preloader verblasst
			setTimeout(() => {
				preloader.style.display = 'none'; // Preloader entfernen
			}, 1000); // Nach 1 Sekunde Fade-Out komplett entfernen
		}, 4000); // 4 Sekunden für die Animation
	}

	// Modal-Funktionen
	function openModal(modal) {
		if (!modal) return;
		modal.style.display = 'block';
		setTimeout(() => {
			modal.classList.add('show');
		}, 10);
	}

	function closeModal(modal) {
		if (!modal) return;
		modal.classList.remove('show');
		setTimeout(() => {
			modal.style.display = 'none';
		}, 300);
	}

	// Event-Listener für Modal-Öffner
	document.addEventListener('click', function(event) {
		if (event.target.matches('[data-modal-target]')) {
			event.preventDefault();
			const modalId = event.target.getAttribute('data-modal-target');
			const modal = document.getElementById(modalId);

			if (modal) {
				openModal(modal);
			} else {
				console.error(`Modal mit ID "${modalId}" nicht gefunden.`);
			}
		}
	});

	// Event-Listener für Modal-Schließen
	document.addEventListener('click', function(event) {
		// Schließen bei Klick auf Schließen-Symbol
		if (event.target.matches('.close-btn')) {
			const visibleModal = document.querySelector('.modal.show');
			if (visibleModal) {
				closeModal(visibleModal);
			}
		}

		// Schließen bei Klick auf OK-Button
		if (event.target.matches('.btn-ok')) {
			const visibleModal = document.querySelector('.modal.show');
			if (visibleModal) {
				closeModal(visibleModal);
			}
		}

		// Schließen bei Klick außerhalb des Modals
		if (event.target.classList.contains('modal')) {
			const visibleModal = document.querySelector('.modal.show');
			if (visibleModal && !visibleModal.hasAttribute('data-nocloseoutside')) {
				closeModal(visibleModal);
			}
		}
	});

	// Event-Listener für Escape-Taste
	document.addEventListener('keydown', function(event) {
		if (event.key === 'Escape') {
			const visibleModal = document.querySelector('.modal.show');
			if (visibleModal) {
				closeModal(visibleModal);
			}
		}
	});

	// CTA-Button-Funktionalität (hier können Sie Ihre eigene Logik hinzufügen)
	const ctaButton = document.querySelector('.cta-button');
	if (ctaButton) {
		ctaButton.addEventListener('click', function() {
			// E-Mail-Adresse und Betreff anpassen
			const email = 'info@enymaxx.de'; // Empfängeradresse
			const subject = 'Anfrage via Homepage'; // Der gewünschte Betreff
			// Mailto-Link zusammensetzen
			const mailtoLink = `mailto:${email}?subject=${encodeURIComponent(subject)}`;
			// Das Standard-Mailprogramm öffnen
			window.location.href = mailtoLink;
		});
	}

});