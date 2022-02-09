<form id="formGestiones">
            <div class="modal-body">
              <label>Tickets # <strong id="strGestion"></strong> </label>
              <input type="hidden" id="txtIdGestion" name="txtIdGestion" value="">
              <button type="button" class="btn btn-success" id="btnActualizar" name="btnActualizar">Actualizar</button>
                <div class="row">

                    <div class="col-lg-4">
                    <div class="form-group">
                    <label for="" class="col-form-label">Nombre</label>
                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" value="">
                    </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="" class="col-form-label">Apellido</label>
                        <input type="text" class="form-control" id="txtApellido" name="txtApellido">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <div class="card-body" style=" overflow-x: scroll; ">
                          <table id="tblGestiones" class="table table-bordered table-striped" cellspacing="0" width="100%" >
                            <thead>
                            <tr>
                              <th>Seleccionar</th>
                              <th>No Ticket</th>
                              <th>Nombre de la Gestion</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                            <tr>
                              <th>Seleccionar</th>
                              <th>No Ticket</th>
                              <th>Nombre de la Gestion</th>
                            </tr>
                            </tfoot>
                          </table>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                    <div class="form-group">
                    <label for="" class="col-form-label">Direccion</label>
                    <input type="text" id="txtDireccion" name="txtDireccion" class="form-control" value="">
                    </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="" class="col-form-label">Telefono</label>
                        <input type="number" class="form-control" id="txtPhone" name="txtPhone">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">

                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="" class="col-form-label">Gestion Realizada</label>
                        <select class="form-control select2" id="cmbGestion" name="cmbGestion">

                        </select>
                      </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-lg-8">
                        <div class="form-group">
                        <label for="" class="col-form-label">Problema expuesto por el cliente</label>
                        <input type="text" class="form-control" id="txtProblema" name="txtProblema" value="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">

                      </div>
                    </div>

                </div>
                <div class="row">
                  <div class="col-lg-8">
                      <div class="form-group">
                      <label for="" class="col-form-label">Solucion brindada</label>
                      <input type="text" class="form-control" id="txtSolucion" name="txtSolucion" value="">
                      </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <button id="btnSave" type="button" class="btn btn-info" >Guardar Gestion</button>
                    </div>
                  </div>
                </div>

            </div>
            <div class="modal-footer">

            </div>
        </form>
