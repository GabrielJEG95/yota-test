<div class="card">
  <h5 class="card-header">Gestiones</h5>
  <div class="card-body">
    <h5 class="card-tittle">Tickets # <strong id="strGestion"></strong></h5>
    <form id="formGestiones">
                <div class="modal-body">
                  <input type="hidden" id="txtIdGestion" name="txtIdGestion">
                    <div class="container col-lg-12">
                      <div class="row">
                        <div class="row col-lg-8">
                            <div class="col-lg-6">
                            <div class="form-group">
                            <label for="" class="col-form-label">Nombre</label>
                            <input type="text" class="form-control" id="txtNombre" name="txtNombre" value="">
                            </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label for="" class="col-form-label">Apellido</label>
                                <input type="text" class="form-control" id="txtApellido" name="txtApellido">
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                              <label for="" class="col-form-label">Direccion</label>
                              <input type="text" id="txtDireccion" name="txtDireccion" class="form-control" value="">
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label for="" class="col-form-label">Telefono</label>
                                <input type="number" class="form-control" id="txtPhone" name="txtPhone">
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label for="" class="col-form-label">Gestion Realizada</label>
                                <select class="form-control select2" id="cmbGestion" name="cmbGestion">

                                </select>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">

                              </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                <label for="" class="col-form-label">Problema expuesto por el cliente</label>
                                <input type="text" class="form-control" id="txtProblema" name="txtProblema" value="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-group">
                                  <label for="" class="col-form-label">Solucion brindada</label>
                                  <input type="text" class="form-control" id="txtSolucion" name="txtSolucion" value="">
                                </div>
                            </div>
                            <div class="col-lg-3">
                              <div class="form-group">
                                <label for="" class="col-form-label" style="color:white">-</label>
                                <button id="btnSave" type="button" class="form-control btn-info" >Guardar Gestion</button>
                              </div>
                            </div>
                        </div>

                        <div class="row col-lg-4" style="display:flex">
                          <div class="col-lg-12">
                            <div class="form-group">
                              <div class="card-body" style=" overflow-x: scroll; ">
                                <button type="button" class="btn btn-success" id="btnActualizar" name="btnActualizar">Actualizar Lista</button>
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

                      </div>



                    </div>


                    <div class="row">



                    </div>
                    <div class="row">


                    </div>

                </div>
                <div class="modal-footer">

                </div>
            </form>
  </div>
</div>
