function deleteRepresentante(id) {
    if (!confirm('¿Desea eliminar este registro?')) {
        return;
    }
    fetch('index.php?action=delete', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'id=' + id
    })
    .then(response => response.json())
    .then(() => {
        location.reload();
    });
}
