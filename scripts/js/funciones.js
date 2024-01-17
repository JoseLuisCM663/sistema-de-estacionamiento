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