  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Title Page-->
    <title>bank</title>

    <link rel="shortcut icon" href="{{ asset('/assets/images/logo.svg') }}" type="image/x-icon" />
    <link rel="icon" href="{{ asset('/assets/images/logo.svg') }}" type="image/x-icon" />

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/default.css">
    <link rel="stylesheet" href="assets/libs/css/animate.css">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"/>
   <!-- <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css"/> -->
    
  </head>

@yield('styles')

@section('scripts')

    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>    
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- main js -->
    <script src="/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script> -->
    <script src="https://cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json"></script>

    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
    <script>
      $( function() {
        $( "#datepicker" ).datepicker({ dateFormat: 'd M, yy' });
      } );
    </script>
    <script>
      $( function() {
        $( "#datepicker1" ).datepicker({ dateFormat: 'd M, yy' });
    } );
    </script>
  
    <script>
      $( function() {
        $( "#datepickerBirthday" ).datepicker({ dateFormat: 'd/m/yy' });
    } );
    </script>
    <script>
      $( function() {
        $( "#datepickerStartRescue" ).datepicker({ dateFormat: 'd/m/yy' });
    } );
    </script>
    <script>
      $( function() {
        $( "#datepickerDeadlineRescue" ).datepicker({ dateFormat: 'd/m/yy' });
    } );
    </script>
    <script>
      $( function() {
        $( "#datepickerStartRemuneration" ).datepicker({ dateFormat: 'd/m/yy' });
    } );
    </script>
    <script>
      $( function() {
        $( "#datepickerEndRemuneration" ).datepicker({ dateFormat: 'd/m/yy' });
    } );
    </script>
    <script>
      $( function() {
        $( "#datepickerEmission" ).datepicker({ dateFormat: 'd/m/yy' });
    } );
    </script>
    <script>
      $.datepicker.regional['pt-BR'] = {
          closeText: 'Fechar',
          prevText: '&#x3c;Anterior',
          nextText: 'Pr&oacute;ximo&#x3e;',
          currentText: 'Hoje',
          monthNames: ['Janeiro','Fevereiro','Mar&ccedil;o','Abril','Maio','Junho',
          'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
          monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun',
          'Jul','Ago','Set','Out','Nov','Dez'],
          dayNames: ['Domingo','Segunda-feira','Ter&ccedil;a-feira','Quarta-feira','Quinta-feira','Sexta-feira','Sabado'],
          dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sab'],
          dayNamesMin: ['Dom','Seg','Ter','Qua','Qui','Sex','Sab'],
          weekHeader: 'Sm',
          dateFormat: 'dd/mm/yy',
          firstDay: 0,
          isRTL: false,
          showMonthAfterYear: false,
          yearSuffix: ''};
        $.datepicker.setDefaults($.datepicker.regional['pt-BR']);
    </script>
   

    <script>
      $(".toggle-password").click(function() {

          $(this).toggleClass("fa-eye fa-eye-slash");
          var input = $($(this).attr("toggle"));
          if (input.attr("type") == "text") {
          input.attr("type", "password");
          } else {
          input.attr("type", "text");
          }
      });
    </script>
    <script>
      $( ".slide-toggle" ).click(function() {
        $( ".slide-toggled-element").slideToggle("fast");
      });
      $(document).mouseup(function(e) 
      {
          var container = $(".slide-toggled-element");

          if (!container.is(e.target) && container.has(e.target).length === 0) 
          {
              container.hide();
          }
      });
      $( ".slide-toggle1" ).click(function() {
        $( ".slide-toggled-element1").slideToggle("fast");
      });
      $(document).mouseup(function(e) 
      {
          var container = $(".slide-toggled-element1");

          if (!container.is(e.target) && container.has(e.target).length === 0) 
          {
              container.hide();
          }
      });
      $( ".slide-toggle2" ).click(function() {
        $( ".slide-toggled-element2").slideToggle("fast");
      });
      $(document).mouseup(function(e) 
      {
          var container = $(".slide-toggled-element2");

          if (!container.is(e.target) && container.has(e.target).length === 0) 
          {
              container.hide();
          }
      });
      $( ".slide-toggle3" ).click(function() {
        $( ".slide-toggled-element3").slideToggle("fast");
      });
      $(document).mouseup(function(e) 
      {
          var container = $(".slide-toggled-element3");

          if (!container.is(e.target) && container.has(e.target).length === 0) 
          {
              container.hide();
          }
      });
    </script>
    <script>
      $.extend( true, $.fn.dataTable.defaults, {
         "searching": true,
         "ordering": false
      } );
      $(document).ready(function() {
         $('#table_soldActions, #table_investors, #table_pendingOrders, #table_paidOrders, #table_canceledOrders, #table_actionsSold, #table_income, #table_withdrawal, #table_myOrders ').DataTable( {
            select: {
                  style:    'os',
                  selector: 'td:first-child'
            },
            "language": {
                  "sEmptyTable": "<center><img src='assets/images/icons/smile-black.svg' width='50px' alt=''></center><br><p>Ainda nao há informações disponíveis</p>",
                  "sInfo": "Mostrando de <b>_START_</b> até <b>_END_</b> de _TOTAL_ registros",
                  "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                  "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                  "sInfoPostFix": "",
                  "sInfoThousands": ".",
                  "sLengthMenu": "_MENU_ resultados por página",
                  "sLoadingRecords": "Carregando...",
                  "sProcessing": "Processando...",
                  "sZeroRecords": "<center><img src='assets/images/icons/smile-black.svg' width='50px' alt=''></center><br><p>Ainda nao há informações disponíveis</p>",
                  "sSearch": "",
                  "oPaginate": {
                     "sNext": "Próximo",
                     "sPrevious": "Anterior",
                     "sFirst": "Primeiro",
                     "sLast": "Último"
                  },
                  "oAria": {
                     "sSortAscending": ": Ordenar colunas de forma ascendente",
                     "sSortDescending": ": Ordenar colunas de forma descendente"
                  },
                  "select": {
                     "rows": {
                           "_": "Selecionado %d linhas",
                           "0": "",
                           "1": "Selecionado 1 linha"
                     }
                  },
                  "buttons": {
                     "copy": "Copiar para a área de transferência",
                     "copyTitle": "Cópia bem sucedida",
                     "copySuccess": {
                           "1": "Uma linha copiada com sucesso",
                           "_": "%d linhas copiadas com sucesso"
                     }
                  }
               }
         } );
         $(".dataTables_filter input").attr("placeholder", "Pesquisar");
      } );
      
   </script>

  <script>
      $(".show_content").hide();
      $(document).ready(function(){
         $(".show_btn").click(function(){
            $(".show_content").toggle();
         });
      });
  </script>
  <script>
    $(function() {
      $('.show_btn').click(function(){
        $('.show_btn').removeClass('radius_border');
          $(this).addClass('radius_border');     
      });
    });
   </script>

<script>
      $(document).ready(function(){
         $(".show_btn").click(function(){
            $("#togBorder").toggleClass("radius_border");
         });
      });
   </script>

   <script>
      // Toggle div display

      $(".span2").hide();
      $(".show_btn").click(function(){
          $(".span1").toggle();
          $(".span2").toggle();
      });
   </script>
   <script>
      // Toggle div display

      $(".span-close").hide();
      $(".navbar-toggler").click(function(){
          $(".span-nav").toggle();
          $(".span-close").toggle();
      });
   </script>
@stop