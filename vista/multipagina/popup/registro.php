<form role="form" method="POST" action="../../controlador/controlador_registro.php" >
<div id="registroPopUp" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <label>Datos de cuenta</label>   
                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="contrasena" placeholder="Contraseña" name="contrasena">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="contrasena" placeholder="Confirma tu ontraseña">
                </div>
                <label>Datos personales</label>  
                <div class="form-group">
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="contrasena" placeholder="Apellido" name="apellido">
                </div> 
                <div class="form-group">
                     <input class="topcoat-combo-input" type="text" list="poo" placeholder="Paso por...">
                            <datalist id="poo" name="municipio_paso">
                            </datalist>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="telefono" placeholder="Telefono" name="telefono">
                </div>
                <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                    <input type="date" class="form-control" id="fecha_nacimiento" placeholder="Fecha de nacimiento" name="fecha">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" >Enviar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
</form>