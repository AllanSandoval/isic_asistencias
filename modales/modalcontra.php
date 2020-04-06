<!-- Modal -->
<div class="modal fade" id="modalcontra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Actualiza contraseña</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" id="frmcontra">
          <div class="modal-body" >
            <div class="row">
              <div class="col-xs-12 col-ms-12 col-md-12 col-lg-12">
                <!-- for = conn -->
                    <center><h3><label for="conn">Nueva contraseña:</label></h3></center>

                    <!-- id = conn -->
                    <input type="password" name="password" id="conn"  class="form-control" placeholder="Escribe tu nueva contraseña"  autofocus required>

                    <button class="btn btn-secondary" type="button" onclick="MostrarContrasena()">Mostrar/Ocultar</button>
                </div>
                
                
                <!-- <div class="form-row">
                  <div class="col">
                    <input class="form-control" type="password" name="password" id="password">
                  </div>
                  <div class="col">
                    <button class="btn btn-primary" type="button" onclick="MostrarContrasena()">Mostrar contraseña</button>
                  </div>
                </div> -->

                <div class="col-xs-12 col-ms-12 col-md-12 col-lg-12">
                <br>
                    <center><h3><label for="reccn">Confirma contraseña:</label></h3></center>
                    <input type="password" name="password" id="reccn" class="form-control" placeholder="Confirma tu nueva contraseña" onkeyup="comparepsw();" disabled required>

                    <button class="btn btn-secondary" type="button" onclick="MostrarContrasena2()">Mostrar/Ocultar</button>
                </div>
                      <div id="pswd_info">
                        <center><h5>La contraseña debe cumplir con los siguientes requisitos:</h5></center>
                        <ul>
                            
                            <li id="length" class="invalid">Debe tener como mínimo 8 carácteres</li>
                            <li id="con" class="invalid">Las contraseñas deben coincidir</li>
                            
                        </ul>
                      </div>
            </div>
          </div>
          
          <div class="modal-footer centrar" >
          
            <button type="button" class="btn btn-danger col-xs-12 col-ms-12 col-md-4 col-lg-4"  data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary col-xs-12 col-ms-12 col-md-4 col-lg-4" onclick="generarcontra();">Aleatoria</button>
            <button type="button" class="btn btn-warning col-xs-12 col-ms-12 col-md-4 col-lg-4" onclick="cambiarPass();" id="btnguardar" disabled>Guardar</button>
            
          </div>
      </form>
    </div>
  </div>
</div>