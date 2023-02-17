function editar() {
    document.getElementById('mensaje_borrar').style.display = 'block';
    document.getElementById('eliminarCampo').style.display = 'none';
    document.getElementById('body').style.visibility = 'visible';
}

function closedialog() {
    document.getElementById('mensaje_borrar').style.display = 'none';
    document.getElementById('eliminarCampo').style.display = 'none';
    document.getElementById('body').style.visibility = 'hidden';
}

function deleteSpace() {
    document.getElementById('eliminarCampo').style.display = 'block';
    document.getElementById('mensaje_borrar').style.display = 'none';
    document.getElementById('body').style.visibility = 'visible';
}
