<div class="modal fade" id="myModalRegistro" role="dialog"> 
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button> 
            </div>
            <div class="modal-body">

                <div class="form-group"> 
                    <input type="text" class="form-control" id="matricula" placeholder="Matricula">
                </div> 
                
                  <div class="form-group">
                    <input class="topcoat-combo-input" type="text" list="marca" placeholder="Marca">
                    <datalist id="marca" name="marca">
                    </datalist>
                </div>
                
                <div class="form-group"> 
                    <select class="form-control" id="sel1">
                        <option disabled="" selected="">Tipo de coche</option>
                        <option>Pequeño</option>
                        <option>Mediano</option>
                        <option>Grande</option>
                    </select>    
                </div> 
              
                <div class="form-group"> 
                    <input type="email" class="form-control" id="color" placeholder="Color">
                </div> 
                <div class="form-group"> 
                    <input type="text" class="form-control" id="plazas" placeholder="Plazas disponibles">
                </div>
            </div>
            <div class="modal-footer"> 
                <button type="button" class="btn btn-default" data-dismiss="modal">Enviar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> 
            </div>
        </div>
    </div>
</div>

