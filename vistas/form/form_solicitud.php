

  <div class="card card-primary" >
                <div class="card-header" style="background-color: #00C8D2;">
                  <h3 class="card-title">Gestiones Disponibles</h3>
                  <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              </div>
                </div>
                <div class="card-body">

                  <!-- phone mask -->
                  <div class="form-group">
                    <div class="container">

                      <div class="row">
                        <?php
                          require_once 'Controladores/conexion.php';
                          $sql="SELECT IdGestion,NombreGestion from gestion";
                          $result=mysqli_query($conexion,$sql);
                          while ($item = mysqli_fetch_assoc($result)) {
                            echo '<div class="col-6">
                              <button style="margin-top:8px" onclick="gestion('.$item['IdGestion'].')" class="form-control btn btn-info" type="button" id="btnGestion" name="btnGestion" value="">'.$item['NombreGestion'].'</button>
                            </div>';
                          }
                         ?>
                      </div>
                    </div>
                  </div>

                    <br>

                  <!-- /.form group -->
                   <div class="col-sm-12">
                    <div id="respuesta"></div>
                   </div>
                   <br>

                </div>
                <!-- /.card-body -->
              </div>

              <!-- Trigger/Open The Modal -->



  <script type="text/javascript">
    // Get the modal




  </script>
