var server = 'http://127.0.0.1:8000/api/free/';

$(document).ready(function() {
    $("#errors").hide();
    $("#errorsC").hide();
    $("#myBtn").click(function() {
        $("#myModal").modal();
        $("#correo").removeAttr('disabled');
        $("#save").attr('onclick', 'guardar()');
        $("#save").text("Guardar");
        $("#errors").hide();
        limpiarVariables();
    });

    cargarTabla();
});

function limpiarVariables() {
    $("#1e3y").val("");
    $("#nombre").val("");
    $("#apellido").val("");
    $("#correo").val("");
    $("#telefono").val("");
    $("#activo").prop('checked', false);
}

function llenarContacto(contacto) {
    $("#myModal").modal();
    $("#save").attr('onclick', 'actualizar()');
    $("#save").text("Actualizar");
    $("#1e3y").val(contacto.id);
    $("#nombre").val(contacto.attributes.name);
    $("#apellido").val(contacto.attributes.surname);
    $("#correo").val(contacto.attributes.email);
    $("#correo").attr('disabled', 'disabled');
    $("#telefono").val(contacto.attributes.telephone);
    if (contacto.attributes.active === 1) {
        $("#activo").prop('checked', true);
    } else {
        $("#activo").prop('checked', false);
    }
    $("#errors").hide();
}

function cargarTabla() {

    fetch(server + 'contacts', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        .then(function(response) {
            switch (response.status) {
                case 200:
                    var contentType = response.headers.get("content-type");
                    if (contentType && contentType.indexOf("application/vnd.api+json") !== -1) {
                        return response.json().then(function(data) {
                            console.log(data);
                            var contacts = $("#contacts");
                            contacts.empty();
                            $.each(data.data, function(i, d) {
                                var v = d.attributes;
                                var activo = (v.active === 1) ? 'Si' : 'No';
                                //var contacto = "<tr><td>" + v.name + "</td><td>" + v.surname + "</td><td>" + v.palabra + "</td><td>" + v.email + "</td><td>" + v.telephone + "</td><td>" + activo + "</td><td><button class='btn btn-warning' onclick='llenarContacto(" + JSON.stringify(v) + ")'><i class='fa fa-pencil'></i></button><button class='btn btn-danger' onclick='eliminar(" + v.id + ")'><i class='fa fa-trash'></i></button></td></tr>";
                                var contacto = "<tr><td>" + v.name + "</td><td>" + v.surname + "</td><td>       N/A      </td><td>" + v.email + "</td><td>" + v.telephone + "</td><td>" + activo + "</td><td><button class='btn btn-warning' onclick='llenarContacto(" + JSON.stringify(d) + ")'><i class='fa fa-pencil'></i></button><button class='btn btn-danger' onclick='eliminar(" + d.id + ")'><i class='fa fa-trash'></i></button></td></tr>";
                                contacts.append(contacto);
                            });
                        });
                    } else {
                        console.log("Oops, we haven't got JSON!");
                        console.log(contentType, contentType.indexOf("application/vnd.api+json"));
                    }
                    break;
                case 204:

                    console.log('204 No Content');

                    break;
                default:
                    console.log(response);
                    break;
            }
        })
        .catch(function(err) {
            console.log("Conexión inestable: Error al cargar los datos de respuesta");
        });
}

function validarFormulario() {
    var i = 0;
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var telefono = $("#telefono").val();
    var correo = $("#correo").val();
    $("#nombre").removeClass('is-invalid');
    $("#nombre-v").text('');
    $("#apellido").removeClass('is-invalid');
    $("#apellido-v").text('');
    $("#telefono").removeClass('is-invalid');
    $("#telefono-v").text('');
    $("#correo").removeClass('is-invalid');
    $("#correo-v").text('');

    if (nombre.length == 0) {
        i = 1;
        $("#nombre").addClass('is-invalid');
        $("#nombre-v").text('Campo requerido');
    }
    if (nombre.length > 50) {
        i = 1;
        $("#nombre").addClass('is-invalid');
        $("#nombre-v").text('Excede de caraceteres permitidos');
    }

    if (apellido.length == 0) {
        i = 1;
        $("#apellido").addClass('is-invalid');
        $("#apellido-v").text('Campo requerido');
    }
    if (apellido.length > 50) {
        i = 1;
        $("#apellido").addClass('is-invalid');
        $("#apellido-v").text('Excede de caraceteres permitidos');
    }

    if (!validarExpr('telefono', v_telefono)) {
        i = 1;
        $("#telefono").addClass('is-invalid');
        $("#telefono-v").text('Ingresa un teléfono válido');
    } else if (telefono.length < 10) {
        i = 1;
        $("#telefono").addClass('is-invalid');
        $("#telefono-v").text('Ingresa al menos 10 dígitos');
    }

    if (correo.length == 0) {
        i = 1;
        $("#correo").addClass('is-invalid');
        $("#correo-v").text('Campo requerido');
    } else if (!validarExpr('correo', v_correo)) {
        i = 1;
        $("#correo").addClass('is-invalid');
        $("#correo-v").text('Ingresa un correo válido');
    }
    return i;
}

function guardar() {
    var object = {};
    var active = 0;
    if ($("#activo").is(':checked')) {
        active = 1;
    }
    object = 
    {
        "data":{
            "type":"contacts",
            "attributes":{
                'name': $("#nombre").val(),
                'surname': $("#apellido").val(),
                'email': $("#correo").val(),
                'telephone': $("#telefono").val(),
                'active': active
            }
        }
    }
    var esValido = validarFormulario();
    if (esValido == 0) {
        fetch(server + 'contacts', {
                method: 'POST',
                body: JSON.stringify(object),
                headers: {
                    //'Content-Type': 'application/json',
                    'Content-Type': 'application/vnd.api+json',
                    'Accept': 'application/vnd.api+json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            .then(function(response) {
                switch (response.status) {
                    case 201:
                        $("#errors").removeClass("alert-danger");
                        $("#errors").addClass("alert-success");
                        var errors = $("#errors");
                        errors.empty();
                        var msg = "<li>Registro con exito</li>";
                        errors.append(msg);
                        limpiarVariables();
                        cargarTabla();
                        $("#errors").show();
                        break;
                    case 200:
                        var contentType = response.headers.get("content-type");
                        if (contentType && contentType.indexOf("application/json") !== -1) {
                            return response.json().then(function(data) {
                                console.log(data);
                                $("#errors").removeClass("alert-danger");
                                $("#errors").addClass("alert-success");
                                var errors = $("#errors");
                                errors.empty();
                                var msg = "<li>" + data.message + "</li>";
                                errors.append(msg);
                                limpiarVariables();
                                cargarTabla();
                                $("#errors").show();
                            });
                        } else {
                            console.log("Oops, we haven't got JSON!");
                            console.log(contentType, contentType.indexOf("application/json"));
                        }
                        break;
                    case 422:
                        var contentType = response.headers.get("content-type");
                        if (contentType && contentType.indexOf("application/json") !== -1) {
                            return response.json().then(function(data) {
                                console.log(data);
                                $("#errors").removeClass("alert-success");
                                $("#errors").addClass("alert-danger");
                                var errors = $("#errors");
                                errors.empty();
                                var error = "<li>" + data.message + "</li>";
                                errors.append(error);
                                /* $.each(data.errors, function(i, v) {
                                    var error = "<li>" + v + "</li>";
                                    errors.append(error);
                                }); */
                                $("#errors").show();
                            });
                        } else {
                            console.log("Oops, we haven't got JSON!");
                            console.log(contentType, contentType.indexOf("application/json"));
                        }
                        break;
                    default:
                        console.log(response);
                        break;
                }
            })
            .catch(function(err) {
                console.log("Conexión inestable: Error al cargar los datos de respuesta");
            });
    }
}

function actualizar() {
    var object = {};
    var active = 0;
    if ($("#activo").is(':checked')) {
        active = 1;
    }
    var id = $("#1e3y").val();
    object = 
    {
        "data":{
            "type":"contacts",
            "id":id,
            "attributes":{
                'name': $("#nombre").val(),
                'surname': $("#apellido").val(),
                'telephone': $("#telefono").val(),
                'active': active
            }
        }
    }
    var esValido = validarFormulario();
    if (esValido == 0) {
        fetch(server + 'contacts/' + id, {
                method: 'PATCH',
                body: JSON.stringify(object),
                headers: {
                    'Content-Type': 'application/vnd.api+json',
                    'Accept': 'application/vnd.api+json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            .then(function(response) {
                switch (response.status) {
                    case 200:
                        var contentType = response.headers.get("content-type");
                        if (contentType && contentType.indexOf("application/vnd.api+json") !== -1) {
                            return response.json().then(function(data) {
                                console.log(data);
                                $("#errors").removeClass("alert-danger");
                                $("#errors").addClass("alert-success");
                                var errors = $("#errors");
                                errors.empty();
                                var msg = "<li>Registro actualizado</li>";
                                errors.append(msg);
                                limpiarVariables();
                                cargarTabla();
                                $("#errors").show();
                            });
                        } else {
                            console.log("Oops, we haven't got JSON!");
                            console.log(contentType, contentType.indexOf("application/vnd.api+json"));
                        }
                        break;
                    case 404:
                        var contentType = response.headers.get("content-type");
                        if (contentType && contentType.indexOf("application/json") !== -1) {
                            return response.json().then(function(data) {
                                $("#errors").removeClass("alert-success");
                                $("#errors").addClass("alert-danger");
                                var errors = $("#errors");
                                errors.empty();
                                var error = "<li>" + data.message + "</li>";
                                errors.append(error);
                                /* $.each(data.errors, function(i, v) {
                                    var error = "<li>" + v + "</li>";
                                    errors.append(error);
                                }); */
                                $("#errors").show();
                            });
                        } else {
                            console.log("Oops, we haven't got JSON!");
                            console.log(contentType, contentType.indexOf("application/json"));
                        }
                        break;
                    default:
                        console.log(response);
                        break;
                }
            })
            .catch(function(err) {
                console.log("Conexión inestable: Error al cargar los datos de respuesta");
            });
    }
}

function eliminar(id) {

    fetch(server + 'contacts/' + id, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        .then(function(response) {
            switch (response.status) {
                case 200:
                    var contentType = response.headers.get("content-type");
                    if (contentType && contentType.indexOf("application/json") !== -1) {
                        return response.json().then(function(data) {
                            console.log(data);

                            cargarTabla();
                        });
                    } else {
                        console.log("Oops, we haven't got JSON!");
                        console.log(contentType, contentType.indexOf("application/json"));
                    }
                    break;
                case 204:
                    cargarTabla();
                    break;
                case 400:

                    console.log('200 BAD REQUEST');
                    if (contentType && contentType.indexOf("application/json") !== -1) {
                        return response.json().then(function(data) {
                            console.log(data.errors);

                        });
                    } else {
                        console.log("Oops, we haven't got JSON!");
                        console.log(contentType, contentType.indexOf("application/json"));
                    }
                    break;
                default:
                    console.log(response);
                    break;
            }
        })
        .catch(function(err) {
            console.log("Conexión inestable: Error al cargar los datos de respuesta");
        });
}

function validarInputs(e, tipo) {
    tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
        return true;
    }
    //patron = /[A-Za-z0-9]/;
    switch (tipo) {
        case 1:
            patron = /^[a-zA-ZàáâäãåaceèéêëìíîïlnòóôöõøùúûüÿýzzñcšžÀÁÂÄÃÅACEÈÉÊËÌÍÎÏLNÒÓÔÖÕÙÚÛÜŸÝZZÑ ']+$/;
            break;
        case 2:
            patron = /[1234567890]/g;
            break;
        case 3: //text
            patron = /^[a-zA-ZàáâäãåaceèéêëìíîïlnòóôöõùúûüÿýzzñcÀÁÂÄÃÅACEÈÉÊËÌÍÎÏLNÒÓÔÖÕÙÚÛÜÝZZÑß¿?¡!@#$%"°ð ,.'-1234567890]+$/;
            break;
        case 4: //email
            patron = /^[a-zA-Z@._1234567890]+$/;
            break;
        default:
            break;
    }

    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function validarExpr(nombre_item, expre) {
    var txt;
    var msj;
    if (obtElemento(nombre_item) == null) { return false; }
    txt = obtElemento(nombre_item).value;
    txt = trim(txt);
    if (!expre.test(txt)) { return false; } else { return true; }
}

function obtElemento(elemento) { return window.document.getElementById(elemento) }

function trim(stringToTrim) { return stringToTrim.replace(/^\s+|\s+$/g, ""); }
/* validaciones */
var v_correo = /^[^@\s]+@[^@\.\s]+(\.[^@\.\s]+)+$/;
var v_entero = /^\d+$/;
var v_telefono = /^[0-9\s\-]+$/;
var v_nombres = /^[a-zA-ZàáâäãåaceèéêëìíîïlnòóôöõøùúûüÿýzzñçcÀÁÂÄÃÅACEÈÉÊËÌÍÎÏLNÒÓÔÖÕØÙÚÛÜÝZZÑßÇÆC?ð ,.'-]+$/;
/* validaciones */