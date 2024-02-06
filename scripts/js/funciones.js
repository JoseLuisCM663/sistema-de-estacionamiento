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

function registrarCajon(){
    var numero=$("#numero").val();


    $.post("registrarCajon.php",{
        "numero": numero
    },function(resp){
        alert(resp);
        $("#numero").val("");
    })
}

function registrarEmpleado(){
    var nombre=$("#nombre").val();
    var direccion=$("#direccion").val();
    var telefono=$("#telefono").val();
    var correo=$("#correo").val();
    var usuario=$("#usuario").val();
    var contra=$("#contra").val();

    
    $.post("registrarEmpleado.php",{
        "nombre":nombre,
        "direccion":direccion,
        "telefono":telefono,
        "correo":correo,
        "usuario":usuario,
        "contra":contra
    },function(res){
        alert(res);
        $("#nombre").val("");
        $("#direccion").val("");
        $("#telefono").val("");
        $("#correo").val("");
        $("#usuario").val("");
        $("#contra").val("");
    });
}

function registrarVehiculo(){
    var matricula=$("#matricula").val();
    var modelo=$("#modelo").val();
    var color=$("#color").val();
    var puertas=$("#puertas").val();
    var tipo=$("#tipo").val();
    var id_cliente=$("#id_cliente").val();


    $.post("registrarVehiculo.php",{
        "matricula":matricula,
        "modelo":modelo,
        "color":color,
        "puertas":puertas,
        "tipo":tipo,
        "id_cliente":id_cliente
    },function(res){
        alert(res);
        $("#matricula").val("");
        $("#modelo").val("");
        $("#color").val("");
        $("#puertas").val("");
        $("#tipo").val("");
        $("#id_cliente").val("");
    });
}

function registrarTarifa(){
    var tarifa=$("#tarifa").val();
    var monto=$("#monto").val();

    $.post("registrarTarifa.php",{
        "tarifa":tarifa,
        "monto":monto
    },function(res){
        alert(res);
        $("#tarifa").val("");
        $("#monto").val("");
    });
}

function registrarRegistro(){
    var id_cajon=$("#id_cajon").val();
    var id_vehiculo=$("#id_vehiculo").val();
    var id_tarifa=$("#id_tarifa").val();

    $.post("registrarRegistro.php",{
        "id_cajon":id_cajon,
        "id_vehiculo":id_vehiculo,
        "id_tarifa":id_tarifa,

    },
    function(res){
        alert(res);
        $("#id_cajon").val("");
        $("#id_vehiculo").val("");
        $("#id_tarifa").val("");
    });
}

function eliminarCajon(id){
    $.post("eliminarCajon.php",{
        "id":id
    },
    function(result){
        alert(result);
    })
    
}
function eliminarCliente(idt){
    $.post("eliminarCliente.php",{
        "idt":idt
    },
    function(result){
        alert(result);
    })
    
}
function eliminarTarifa(idtr){
    $.post("eliminarTarifa.php",{
        "idtr":idtr
    },
    function(result){
        alert(result);
    })
    
}

function eliminarVehiculo(idv){
    $.post("eliminarVehiculo.php",{
        "idv":idv
    },
    function(result){
        alert(result);
    })
    
}

function eliminarEmpleado(ide){
    $.post("eliminarEmpleado.php",{
        "ide":ide
    },
    function(result){
        alert(result);
    })
    
}

function editarCliente(idcliente){
    alert(idcliente);
    $.post("editarCliente.php",{
        "idcliente":idcliente
       
    },function(respuesta){
        contenido.innerHTML=respuesta;
    });
}

