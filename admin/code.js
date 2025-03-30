// Funktion zum Abrufen von URL-Parametern
function getURLParameter(name) {
    return new URLSearchParams(window.location.search).get(name);
}

// Nachricht aus dem URL-Parameter abrufen
var message = getURLParameter('message');

// Infobox-Element
var infobox = document.getElementById('error');

// Überprüfen, ob der Parameter vorhanden ist
if (message) {
    infobox.textContent = "Falsche E-Mail oder Passwort!";
    infobox.style.display = 'block'; // Display auf flex setzen, um die Box anzuzeigen
} else {
    infobox.style.display = 'none'; // Infobox verstecken, wenn kein Parameter vorhanden ist
}