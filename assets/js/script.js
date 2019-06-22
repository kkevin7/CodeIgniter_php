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
    document.getElementById('btn').addEventListener('click', accion );
    var btnEdit= document.getElementsByClassName('btn_edit');
    var btnDelete= document.getElementsByClassName('btn_delete');

    for(var i=0; i<btnEdit.length; i++){
        btnEdit[i].addEventListener('click',actualizar);
        btnDelete[i].addEventListener('click',eliminar);
    }

}

function accion() {
    var id= document.getElementById('id_usuario').value;
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
                document.getElementById('btn').value="ingresar";
                document.getElementById('btn').innerHTML="Agregar";
            }
        };
        var datos = 'nombre=' + nombre + '&apellido=' + apellido;
        if(this.value == "editar"){
            datos+= "&id="+id;
        }

        peticion.open('POST', 'usuarios/'+this.value);
        peticion.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        peticion.send(datos);
    }
}

function actualizar() {
    var peticion = new XMLHttpRequest();
    peticion.onreadystatechange=function () {
        if (this.readyState== 4){
            document.getElementById('frm').innerHTML=this.responseText;
            recargar();
        }
    };
    peticion.open('GET', 'usuarios/getById/'+this.value);
    peticion.send();
}

function eliminar() {
    const confirm = window.confirm("¿Deseas eliminar el registro?");

    if (confirm) {
        var peticion = new XMLHttpRequest();
        peticion.onreadystatechange = function () {
            if (this.readyState == 4) {
                document.getElementById('cuerpo').innerHTML = this.responseText;
                recargar();
            }
        };
        peticion.open('DELETE', 'usuarios/delete/' + this.value);
        peticion.send();
    }
}

function limpiar() {
    document.getElementById('txtNombre').value='';
    document.getElementById('txtApellido').value='';
}