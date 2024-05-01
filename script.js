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



// Das Skript ändert die Farbe des Textes
setInterval(function() {
    var werbung = document.getElementById('werbung');
    var currentColor = window.getComputedStyle(werbung).color;
    
    if (currentColor === 'rgb(255, 0, 0)') {
        werbung.style.color = '#ffffff'; // Textfarbe auf weiß ändern, wenn sie Rot ist
    } else {
        werbung.style.color = '#ff0000'; // Textfarbe auf Rot ändern, wenn sie weiß ist
    }
}, Math.random() < 0.5 ? 250 : 500 + Math.random() * 200); // Entweder alle 0,25 Sekunden oder nach einer zufälligen Verzögerung von bis zu 2,5 Sekunden


//fotos kommen von unten nach oben

document.addEventListener('DOMContentLoaded', function() {
    var products = document.querySelectorAll('.product');
    products.forEach(function(product) {
        product.classList.add('active');
    });
});
