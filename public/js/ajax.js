function objetoAjax() {
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function crear_objeto() {
    /* Obtener elemento html donde introduciremos la recarga (datos o mensajes) */
    var message = document.getElementById("message")
        /* 
    Obtener elemento/s que se pasarán como parámetros: token, method, inputs... 
    var token = document.getElementById('token').getAttribute("content");
 
    Usar el objeto FormData para guardar los parámetros que se enviarán:
    var formData = new FormData();
    formData.append('_token', token);
    formData.append('clave', valor);
    */
    var token = document.getElementById('token').getAttribute("content");
    var method = document.getElementById('crear_objeto').value;
    var titulo = document.getElementById('titulo_objeto').value;

    message.innerHTML = titulo

    var formData = new FormData();
    formData.append('_token', token);
    formData.append('_method', method);

    /* Inicializar un objeto AJAX */
    var ajax = objetoAjax();
    /*
    ajax.open("method", "rutaURL", true);
    GET  -> No envía parámetros
    POST -> Sí envía parámetros
    true -> asynchronous
    */
    ajax.open("POST", "objetos/store", true);
    ajax.onreadystatechange = function() {
            if (ajax.readyState == 4 && ajax.status == 200) {
                var respuesta = JSON.parse(this.responseText);
                if (respuesta.resultado == "OK") {
                    message.innerHTML = "Creado"
                        /* creación de estructura: la estructura que creamos no ha de contener código php ni código blade*/
                        /* utilizamos innerHTML para introduciremos la recarga en el elemento html pertinente */
                } else {
                    message.innerHTML = "Creado mal"
                        /* creación de estructura: la estructura que creamos no ha de contener código php ni código blade*/
                        /* utilizamos innerHTML para introduciremos la recarga en el elemento html pertinente */
                }

            }
            filtro();
        }
        /*
        send(string)->Sends the request to the server (used for POST)
        */
    ajax.send(formData);
}

//En este caso al pasarse la variable como parámetro, aquí se define el nombre de la variable
function destroy(objeto_id) {
    /* Obtener elemento html donde introduciremos la recarga (datos o mensajes) */
    var message = document.getElementById("message")
        /* 
    Obtener elemento/s que se pasarán como parámetros: token, method, inputs... 
    var token = document.getElementById('token').getAttribute("content");
 
    Usar el objeto FormData para guardar los parámetros que se enviarán:
    var formData = new FormData();
    formData.append('_token', token);
    formData.append('clave', valor);
    */
    var token = document.getElementById('token').getAttribute("content");
    var method = document.getElementById('deleteObjeto').value;

    var formData = new FormData();
    formData.append('_token', token);
    formData.append('_method', method);

    /* Inicializar un objeto AJAX */
    var ajax = objetoAjax();
    /*
    ajax.open("method", "rutaURL", true);
    GET  -> No envía parámetros
    POST -> Sí envía parámetros
    true -> asynchronous
    */
    //En esta línea definimos que es lo que se pasará por url, url, variable definida en js, y true
    ajax.open("POST", "delete-object/" + objeto_id, true);
    ajax.onreadystatechange = function() {
            if (ajax.readyState == 4 && ajax.status == 200) {
                var respuesta = JSON.parse(this.responseText);
                if (respuesta.resultado == "OK") {
                    /* creación de estructura: la estructura que creamos no ha de contener código php ni código blade*/
                    /* utilizamos innerHTML para introduciremos la recarga en el elemento html pertinente */
                    message.innerHTML = "El registro # " + objeto_id + "se ha eliminado correctamente.";
                } else {
                    /* creación de estructura: la estructura que creamos no ha de contener código php ni código blade*/
                    /* utilizamos innerHTML para introduciremos la recarga en el elemento html pertinente */
                    message.innerHTML = "Ha habido un error: " + respuesta.resultado;
                }
                filtro();
            }
        }
        /*
        send(string)->Sends the request to the server (used for POST)
        */
    ajax.send(formData);
}