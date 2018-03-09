<?php
header('Access-Control-Allow-Origin: *');
session_start();
date_default_timezone_set('America/Santo_Domingo');
include("funciones.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CONSULTRADA | APP</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Sistema de entradas y consultas de lordcomputer">
    <meta name="author" content="MediaExperto" />

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png" />

    <!-- Bootstrap 3.3.2 -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="assets/plugins/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Datepicker -->
    <link href="assets/plugins/datepicker/datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Chosen Select -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/chosen/css/chosen.min.css" />
    <!-- Theme style -->
    <link href="assets/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link href="assets/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="assets/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Toggle-->
    <link href="assets/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap-toggle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>


    <script language="javascript">
      function getkey(e)
      {
        if (window.event)
          return window.event.keyCode;
        else if (e)
          return e.which;
        else
          return null;
      }

      function goodchars(e, goods, field)
      {
        var key, keychar;
        key = getkey(e);
        if (key == null) return true;

        keychar = String.fromCharCode(key);
        keychar = keychar.toLowerCase();
        goods = goods.toLowerCase();

        // check goodkeys
        if (goods.indexOf(keychar) != -1)
            return true;
        // control keys
        if ( key==null || key==0 || key==8 || key==9 || key==27 )
          return true;

        if (key == 13) {
          var i;
          for (i = 0; i < field.form.elements.length; i++)
            if (field == field.form.elements[i])
              break;
          i = (i + 1) % field.form.elements.length;
          field.form.elements[i].focus();
          return false;
        };
        // else return false
        return false;
      }
      // FUNCION PARA PESTAS DE FILTRO
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
              tablinks[i].className = tablinks[i].className.replace(" active", "");
          }

      function cambiarTab(evt, tabName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
              tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(tabName).style.display = "block";
          evt.currentTarget.className += " active";
      }

        function updateTime(){
          var hora = new Date();
          $('#time').html(hora.toUTCString());
        }
        $(function(){
          setInterval(updateTime, 1000);
        });

    </script>



  </head>
  <body class="skin-blue fixed">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="?module=dashboard" class="logo">
          <img style="margin-top:-8px;margin-right:5px" width="150" src="assets/img/lordcomputer_logo.png" alt="Logo">
          <span style="font-size:20px"></span>
        </a>

        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="fecha">
            <span class="fecha_titulo">Fecha actual: </span>
            <strong id="time"></strong>
          </div>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <?php include "top-menu.php" ?>

            </ul>
          </div>
        </nav>
      </header>

      <aside class="main-sidebar">

        <section class="sidebar">

            <?php include "sidebar-menu.php" ?>

        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <?php include "content.php" ?>

        <!-- Modal Logout -->
        <div class="modal fade" id="logout">
          <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="fa fa-sign-out"> Salir</i></h4>
                </div>
                <div class="modal-body">
                    <p>¿Seguro que quieres salir? </p>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-danger" href="logout.php">Si, Salir</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
              </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <strong>Copyright &copy; <?php echo date('Y');?> - <a href="http://lordcomputer.com" target="_blank">Lord Computer</a>.</strong>
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- chosen select -->
    <script src="assets/plugins/chosen/js/chosen.jquery.min.js"></script>
    <!-- DATA TABLES SCRIPT -->
    <script src="assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- Datepicker -->
    <script src="assets/plugins/datepicker/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='assets/plugins/fastclick/fastclick.min.js'></script>
    <!-- maskMoney -->
    <script src="assets/js/jquery.maskMoney.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/js/app.min.js" type="text/javascript"></script>
    <!-- Busqueda ajax -->
    <script type="text/javascript" src="js/busqueda.js"></script>

    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        // datepicker plugin
        $('.date-picker').datepicker({
          autoclose: true,
          todayHighlight: true
        });

        // chosen select
        $('.chosen-select').chosen({allow_single_deselect:true});
        //resize the chosen on window resize

        // mask money
        $('#harga_beli').maskMoney({thousands:'.', decimal:',', precision:0});
        $('#harga_jual').maskMoney({thousands:'.', decimal:',', precision:0});

        $(window)
        .off('resize.chosen')
        .on('resize.chosen', function() {
          $('.chosen-select').each(function() {
             var $this = $(this);
             $this.next().css({'width': $this.parent().width()});
          })
        }).trigger('resize.chosen');
        //resize chosen on sidebar collapse/expand
        $(document).on('settings.ace.chosen', function(e, event_name, event_val) {
          if(event_name != 'sidebar_collapsed') return;
          $('.chosen-select').each(function() {
             var $this = $(this);
             $this.next().css({'width': $this.parent().width()});
          })
        });


        $('#chosen-multiple-style .btn').on('click', function(e){
          var target = $(this).find('input[type=radio]');
          var which = parseInt(target.val());
          if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
           else $('#form-field-select-4').removeClass('tag-input-style');
        });

        // DataTables
        $("#dataTables1").dataTable();
        $('#dataTables2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false,

          "language": idioma_español
        });
      });

var idioma_español= {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}
    /**********PASANDO VALOR DEL CAMPO BUSQUEDA A MODAL **************/
        $('#Entrada').on('shown.bs.modal', function () {
          $("#special").val('');
          $("#coment").val('');
          $("#qty").val('');
          $("#location").val('');
          $("#weight").val('');
          $("#unit").val('');
          $('#check').addClass('active');
          $('#deschequear1').removeClass('active');
          $('#deschequear2').removeClass('active');
          $('#deschequear3').removeClass('active');
          $('#deschequear4').removeClass('active');
          $('#deschequear5').removeClass('active');
          $('#deschequear6').removeClass('active');
          $('#deschequear7').removeClass('active');
          $('#deschequear8').removeClass('active');
          $('#deschequear9').removeClass('active');
          $('#deschequear10').removeClass('active');
          $('#deschequear11').removeClass('active');
          $('#deschequear12').removeClass('active');
          $('#buttonMissing').removeClass('active');
          $('#guardar_producto').trigger("reset");


            var value_q = $('#value_q3').val();
              if (value_q) {
                //q3 iene contenido
              }else {
                var value_q = $('#value_q').val();
                  if(value_q) {
                    //q2 tiene contenido
                  }else {
                    var value_q = $('#value_q2').val();
                  }
              }
              var param = {barcode: value_q};
              $.ajax({
              data: param,
              dataType: 'json',
              url: "json.php",
              method: "post",
              success: function(resultados) {
                  document.getElementById("title").innerHTML = resultados.titulo;
                  document.getElementById("titl").value = resultados.titulo;
                  document.getElementById("img_result").src = resultados.imagen;
                  document.getElementById("img_res").value= resultados.imagen;
              }
          });
              document.getElementById('barcode').innerHTML = "ENTRADA UPC: "+value_q;
              document.getElementById('bcode').value = value_q;
            // $("#barcode").focus();
           $('.wizard .nav-tabs li #primero').click();
        });



/*************** Missing Otro Mostrar *******************/
$('#buttonMissing').on('click', function(e){

    $(".otroInput").toggle(500);
});
/********************************************************/


/************ESCONDER LOS MENSAJES SUCESS************************/
setTimeout(function() {
    $('.alert').fadeOut('slow');
}, 4000);

/**************CREAR PRODUCTO MODAL******************/

$( "#guardar_producto" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);

 var parametros = $(this).serialize();
   $.ajax({
      type: "POST",
      url: "ajax/nuevo_producto.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#resultados_ajax_productos").html("Mensaje: Cargando...");
        },
      success: function(datos){
      $("#resultados_final").html(datos);
      $('#guardar_datos').attr("disabled", false);
      load(1);
      $('#Entrada').modal('hide');
      /*********ocular sucess*********/
      setTimeout(function() {
          $('.alert').fadeOut('slow');
      }, 4000);
      /****************************/
      }
  });
  event.preventDefault();
});

/******************CAMBIAR ESTADO ENTRADA CORTE*************************/
function chgRealizado(id_producto, realizado) {
      $.ajax({
           method: "POST",
           url: 'ajax/chgRealizado.php',
           data:{action:'cambiar', id:id_producto, realizado:realizado},
           success:function(html) {
              location.reload()
           }

      });
 }

    </script>

  </body>
</html>
