/*mensaje de confirmacion*/ 

function confirmacion(evento) {
    if (confirm("¿Esta seguro que desea eliminar este registro?")) {
        return true;
    }
    else{
        evento.preventDefault();
    }
}

let linkDelete = document.querySelectorAll(".table_delete");

for (var i = 0; i < linkDelete.length; i++) {
    linkDelete[i].addEventListener('click', confirmacion);
}