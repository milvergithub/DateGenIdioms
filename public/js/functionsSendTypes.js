/**
 * Created by milver on 02-02-15.
 */
function progress(e){
    if(e.lengthComputable){
        var max = e.total;
        var current = e.loaded;
        var Percentage = (current * 100)/max;
        console.log(Percentage);
        if(Percentage >= 100)
        {
            // process completed
        }
    }
}
function before(){
    $("#mensajes").html("PROCESANDO...");
    $("#mensajes").show();
}
function success(data){
        $("#mensajes").html(data);
}
function error() {
    $("#mensajes").text("FALLO LA CONEXION...!!!")
}
function sendTypeRango(datos){
    $.ajax({
        type: "POST",
        url: "controller/sendRangoController.php",
        enctype: 'multipart/form-data',
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        mimeType: 'multipart/form-data',
        beforeSend:before,
        success: success,
        error: error
    });
}
function sendTypeBooleano(datos){
    $.ajax({
        type: "POST",
        url: "controller/sendBooleanoController.php",
        enctype: 'multipart/form-data',
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        mimeType: 'multipart/form-data',
        beforeSend: before(),
        success: success,
        error:error
    });
}
function sendTypeForanea(datos){
    $.ajax({
        type: "POST",
        url: "controller/sendForaneaController.php",
        enctype: 'multipart/form-data',
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        mimeType: 'multipart/form-data',
        xhr: function() {
            var myXhr = $.ajaxSettings.xhr();
            if(myXhr.upload){
                myXhr.upload.addEventListener('progress',progress, false);
            }
            return myXhr;
        },
        beforeSend: before(),
        success: success,
        error:error
    });
}
function sendTypeBytea(datos){
    $.ajax({
        type: "POST",
        url: "controller/sendByteaController.php",
        enctype: 'multipart/form-data',
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        mimeType: 'multipart/form-data',
        beforeSend: before(),
        success: success,
        error:error
    });
}
function sendTypeLista(datos){
    $.ajax({
        type: "POST",
        url: "controller/sendListaController.php",
        enctype: 'multipart/form-data',
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        mimeType: 'multipart/form-data',
        beforeSend: before(),
        success: success,
        error:error
    });
}
function sendTypeAlgoritmoText(datos){
    $.ajax({
        type: "POST",
        url: "controller/sendAlgoritmoTextController.php",
        enctype: 'multipart/form-data',
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        mimeType: 'multipart/form-data',
        beforeSend: before(),
        success: success,
        error:error
    });
}
function sendTypeDateTime(datos){
    $.ajax({
        type: "POST",
        url: "controller/sendDateTimeController.php",
        enctype: 'multipart/form-data',
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        mimeType: 'multipart/form-data',
        beforeSend: before(),
        success: success,
        error:error
    });
}
function sendTypeEnterosDecimales(datos){
    $.ajax({
        type: "POST",
        url: "controller/sendEnterosDecimalesController.php",
        enctype: 'multipart/form-data',
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        mimeType: 'multipart/form-data',
        beforeSend: before(),
        success: success,
        error:error
    });
}