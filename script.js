// person click event
document.querySelector('.person').addEventListener('click', function() {
    window.location.href = 'profile.html';
});

document.querySelector('.cart').addEventListener('click', function() {
    window.location.href = 'Warenkorb.html';
});

// Selektiere das Element
const werbung = document.getElementById('werbung');

// Füge den Eventlistener hinzu
werbung.addEventListener('mouseenter', function() {
    // Ändere die Hintergrundfarbe auf Schwarz
    this.style.backgroundColor = 'black';
});

// Füge den Eventlistener hinzu, um die ursprüngliche Hintergrundfarbe wiederherzustellen
werbung.addEventListener('mouseleave', function() {
    // Ändere die Hintergrundfarbe auf Transparent
    this.style.backgroundColor = 'rgb(158, 158, 158)';
});
