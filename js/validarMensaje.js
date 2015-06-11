var validarMensaje = function (){
    var nombre = document.getElementById("nombre").value;
    var destinatario = document.getElementById("destino").value;
    var mensaje = document.getElementById("mensaje").value;

    if(nombre =="")´{
        alert("Debes de indicar el nombre");
        return;
    }
    if(destino =="")´{
        alert("Debes escoger un destinatario");
        return;
    }
    if(mensaje =="")´{
        alert("Debes escribir un mensaje");
        return;
    }
    document.getElementById("enviar");

}