/*mensaje de confirmacion de eliminar archivo*/ 

function confirmacion(evento) {
    if (confirm("¿Esta seguro que desea eliminar este registro?")) {
        return true;
    }
    else{
        evento.preventDefault();
    }
}


let linkDelete = document.querySelectorAll(".table_edit_edit");

for (var i = 0; i < linkDelete.length; i++) {
    linkDelete[i].addEventListener('click', confirmacion);
}

