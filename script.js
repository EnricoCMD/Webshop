// person click event auf andere seite // SELECTOR MUSS DURCH DIE AKTUELLE KLASSE ERSETZT WERDEN
document.querySelector('.icon person').addEventListener('click', function() {
    window.location.href = 'profile.html';
});

document.querySelector('.icon cart').addEventListener('click', function() {
    window.location.href = 'Warenkorb.html';
});
document.querySelector('.icon heart').addEventListener('click', function() {
    window.location.href = 'Favoriten.html';
});


// Das Script ändert die Schriftfarbe des Textes im Intervall von 1 Sekunde zwischen Rot und Schwarz.
setInterval(function() {
    var werbung = document.getElementById('werbung');
    var currentColor = window.getComputedStyle(werbung).color;
    if (currentColor === 'rgb(255, 0, 0);') {
        werbung.style.color = 'rgb(0, 0, 0)';
    } else {
        werbung.style.color = 'rgb(255, 0, 0)';
    }
}, 1000); // 1000 Millisekunden = 1 Sekunde

