window.addEventListener('load',recargar);

//metodo recargar
function recargar() {
    var peticion = new XMLHttpRequest();
    peticion.onreadystatechange=function () {
        if (this.readyState== 4){
            document.getElementById('cuerpo').innerHTML=this.responseText;
        }
    };
    peticion.open('GET', 'usuarios/recargar');
    peticion.send();
}