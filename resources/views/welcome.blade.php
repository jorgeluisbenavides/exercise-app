<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        
        <script src="js/functions.js"></script>
        <title>Ejercicio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <!-- Styles -->
    

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .is-invalid {
                border-color: #dc3545 !important;
            }
            .error{ 
                color: #e3342f; 
            }
        </style>
    </head>
    <body>
        <div class="container py-2">
            <div class="row">
                <div class="col-6">
                    <h2>Contactos</h2>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-primary" id="myBtn">Agregar</button>
                </div>
            </div>
            
          
           

            <div class="row">
                <table class="table">
                    <thead>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Palíndromo en apellido</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Activo</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody id="contacts">
                    </tbody>
                </table>
            </div>


            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                    
                        <!-- Modal Header -->
                        <div class="modal-header">
                        <h4 class="modal-title">Datos de contacto</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body">

                            <div class="alert alert-danger" role="alert" id="errors">
                            </div>

                            <input type="hidden" name="1e3y" id="1e3y">
                            <div class="form-group row">
                                <div class="col-4"> <label>Nombre:</label> </div>
                                <div class="col-6">
                                    <input class="form-control" type="text" name="nombre" id="nombre" autocomplete="off" onkeypress="return validarInputs(event, 1)">
                                    <span id="nombre-v" class="error"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-4"> <label>Apellido:</label> </div>
                                <div class="col-6">
                                    <input class="form-control" type="text" name="apellido" id="apellido" autocomplete="off" onkeypress="return validarInputs(event, 1)">
                                    <span id="apellido-v" class="error"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-4"> <label>Correo electrónico:</label> </div>
                                <div class="col-6">
                                    <input class="form-control" type="email" name="correo" id="correo" autocomplete="off" onkeypress="return validarInputs(event, 4)">
                                    <span id="correo-v" class="error"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-4"> <label>Teléfono:</label> </div>
                                <div class="col-6">
                                    <input class="form-control" type="text" minlength="10" maxlength="10" name="telefono" id="telefono" autocomplete="off" onkeypress="return validarInputs(event, 2)">
                                    <span id="telefono-v" class="error"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12"> <label><input type="checkbox" name="activo" id="activo"> Activo</label> </div>
                            </div>
                        </div>
                        
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" id="save">Guardar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>
                        
                    </div>
                </div>
            </div>

            
        </div>
        
    </body>
</html>
