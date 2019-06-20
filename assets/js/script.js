window.addEventListener('load',recargar);

//metodo recargar
function recargar() {
    var peticion = new XMLHttpRequest();
    peticion.onreadystatechange=function () {
        if (this.readyState== 4){
            document.getElementById('cuerpo').innerHTML=this.responseText;
            asignarEventos();
        }
    };
    peticion.open('GET', 'usuarios/recargar');
    peticion.send();
}

//controlador de eventos
function asignarEventos() {
    document.getElementById('btn_create').addEventListener('click', accion );
    var btnEdit= document.getElementsByClassName('btn_edit');
    var btnDelete= document.getElementsByClassName('btn_delete');

    for(var i=0; i<btnEdit.length; i++){
        btnEdit[i].addEventListener('click',actualizar);
        btnDelete[i].addEventListener('click',eliminar);
    }

}

function accion() {
    var nombre = document.getElementById('txtNombre').value;
    var apellido = document.getElementById('txtApellido').value;
    console.log(apellido);
    console.log(nombre)
    if(nombre == "" || apellido == ""){
        alert("LLENE LOS CAMPOS");
        return;
    }else {
        var peticion = new XMLHttpRequest();
        peticion.onreadystatechange = function () {
            if (this.readyState == 4) {
                document.getElementById('cuerpo').innerHTML = this.responseText;
                recargar();
                limpiar();
            }
        };
        peticion.open('POST', 'usuarios/ingresar');
        peticion.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        peticion.send('nombre=' + nombre + '&apellido=' + apellido);
    }
}

function actualizar() {
    alert('Boton actualizar');
}

function eliminar() {
    alert('Boton eliminar');
}

function limpiar() {
    document.getElementById('txtNombre').value='';
    document.getElementById('txtApellido').value='';
}