function msjErrorUser(){
    alert("Usuario incorrecto");
    location.href="index.php";
}
function msjErrorPassword(){
    alert("Contraseña incorrecta")
    location.href="index.php";
}

function graciasGenio(div,url){
    $(div).load(url);
}

function registrarCliente(){
    var nombre=$("#nombre").val();
    var direccion=$("#direccion").val();
    var telefono=$("#telefono").val();
    var correo=$("#correo").val();

    alert(nombre+direccion+telefono+correo);
    
    $.post("registrarcliente.php",{
        "nombre":nombre,
        "direccion":direccion,
        "telefono":telefono,
        "correo":correo
    },function(respuesta){
        alert(respuesta);
        $("#nombre").val("");
        $("#direccion").val("");
        $("#telefono").val("");
        $("#correo").val("");
    });
}