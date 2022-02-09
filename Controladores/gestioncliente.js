$(document).ready(function(){
  $('#cmbGestion').load('Controladores/obtenerGestionReal.php');
  obtenerGestiones();
  obtenerHistGestiones()
});

$('#btnActualizar').click(()=>{
  obtenerGestiones();
})

$('#btnActualizarGestiones').click(()=>{
  obtenerHistGestiones();
})

$(document).on("change","#chkSelect",function(e){
  fila=$(this).closest("tr");
  id= fila.find('td:eq(1)').text();
  gestion=fila.find('td:eq(2)').text()
  $('#txtIdGestion').val(id);
  if (this.checked) {
      $('#strGestion').text(id + " "+ gestion)
  }else{
    $('#strGestion').text('')
  }

});

$('#btnSave').click(()=>{
  var data = new FormData($('#formGestiones')[0]);
  var nombre=$('#txtNombre').val();
  var apellido=$('#txtApellido').val();
  var direccion=$('#txtDireccion').val();
  var solucion=$('#txtSolucion').val();
  var problema=$('#txtProblema').val();
  var gestion=$('#cmbGestion').val();
  var phone=$('#txtPhone').val();
  var idgestion=$('#txtIdGestion').val();
  data.append('txtNombre',nombre);
  data.append('txtApellido',apellido);
  data.append('txtDireccion',direccion);
  data.append('txtSolucion',solucion);
  data.append('txtProblema',problema);
  data.append('cmbGestion',gestion);
  data.append('txtPhone',phone);
  data.append('txtIdGestion',idgestion);
  console.log(data)
  $.ajax({
    url: "Controladores/guardarTickets.php",
    type: 'POST',
    contentType: false,
    dataType: 'json',
    data: data,
    processData: false,
    beforeSend: function () {
      $('#btnSave').text('Guardando...');
    },
    success: function (data) {
      if (data == "1") {
        alertify.success("Registrado con Exito!");
        $('#btnSave').text('Guardar');
        obtenerGestiones();
        limpiarCampos();
        return false;

      } else {
        alertify.error("Error al registrar");
        $('#btnSave').text('Guardar');
        return false;
      }
    }
  });
})

function limpiarCampos(){
  $('#txtNombre').val('');
  $('#txtApellido').val('');
  $('#txtDireccion').val('');
  $('#txtPhone').val('');
  $('#txtProblema').val('');
  $('#txtSolucion').val('');
}
function gestion(codGestion){
  $.ajax({
       url:'Controladores/gestionCliente.php',
       type:'POST',
       data:{IdGestion:codGestion},
       success:function(r){
           if (r==1) {
               alertify.alert('Solicitud Enviada', 'Pronto lo estaremos atendiendo!', function(){ alertify.success('Enviado'); });
           }
       }
   });
}


function obtenerGestiones(){
  $('#tblGestiones').DataTable({
    "bDeferRender": true,
    "sPaginationType": "full_numbers",
    "ajax": {
      "url": "Controladores/gestionesIngresadas.php",
      "method": 'GET', //usamos el metodo POST
      "dataSrc": "Data"
    },
    "columns": [
      {"defaultContent": "<div class='text-center'><div class='btn-group'> <input id='chkSelect' type='checkbox'> </div></div>"},
      {"data": "CodGestion"},
      {"data":"NombreGestion"}
    ],
    "paging": false,
    "lengthChange": true,
    "searching": false,
    "ordering": true,
    "info": false,
    "autoWidth": true,
    "destroy": true,
    "language": {
      "emptyTable": "No existen registros en la base de datos",
      "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
      "lengthMenu": "Mostrar _MENU_ registros",
      "infoFiltered": "(Filtrado de _MAX_ total registros)",
      "infoEmpty": "Mostrando 0 de 0 de 0 registros",
      "paginate": {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
      }
    }
  });
}

function obtenerHistGestiones(){
  $('#tblHist').DataTable({
    "bDeferRender": true,
    "sPaginationType": "full_numbers",
    "ajax": {
      "url": "Controladores/tickets.php",
      "method": 'GET', //usamos el metodo POST
      "dataSrc": "Data"
    },
    "columns": [
      {"data": "NombreCliente"},
      {"data":"ApellidoCliente"},
      {"data":"FechaCreacion"},
      {"data":"NombreGestion"}
    ],
    "paging": false,
    "lengthChange": true,
    "searching": false,
    "ordering": true,
    "info": false,
    "autoWidth": true,
    "destroy": true,
    "language": {
      "emptyTable": "No existen registros en la base de datos",
      "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
      "lengthMenu": "Mostrar _MENU_ registros",
      "infoFiltered": "(Filtrado de _MAX_ total registros)",
      "infoEmpty": "Mostrando 0 de 0 de 0 registros",
      "paginate": {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
      }
    }
  });
}
