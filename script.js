// person click event auf andere seiten
document.querySelector('.icon.person').addEventListener('click', function() {
    window.location.href = 'profile.html';
});

document.querySelector('.icon.cart').addEventListener('click', function() {
    window.location.href = 'Warenkorb.html';
});
document.querySelector('.icon.heart').addEventListener('click', function() {
    window.location.href = 'Favoriten.html';
});



// Das Skript ändert die Farbe des Textes im Element "werbung" alle 0,2 Sekunden mit einer zufälligen Verzögerung von bis zu 0,1 Sekunden.
setInterval(function() {
    var werbung = document.getElementById('werbung');
    var currentColor = window.getComputedStyle(werbung).color;
    
    if (currentColor === 'rgb(255, 0, 0)') {
        werbung.style.color = '#000'; // Textfarbe auf Schwarz ändern, wenn sie Rot ist
    } else {
        werbung.style.color = '#ff0000'; // Textfarbe auf Rot ändern, wenn sie Schwarz ist
    }
}, Math.random() < 0.5 ? 250 : 2500 + Math.random() * 200); // Entweder alle 0,25 Sekunden oder nach einer zufälligen Verzögerung von bis zu 2,5 Sekunden





