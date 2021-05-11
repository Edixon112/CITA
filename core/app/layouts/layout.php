<!DOCTYPE html>
<html lang="en">
  <head>
           <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
           <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="keyword" content="">
      <meta name="author"  content=""/>
      <!-- Page Title -->
      <title>CITAS</title>
      <!-- Main CSS -->			
      <link type="text/css" rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"/>
      <link type="text/css" rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css"/>
      <link type="text/css" rel="stylesheet" href="assets/plugins/flag-icon/flag-icon.min.css"/>
      <link type="text/css" rel="stylesheet" href="assets/plugins/simple-line-icons/css/simple-line-icons.css">
      <link type="text/css" rel="stylesheet" href="assets/plugins/ionicons/css/ionicons.css">
      <link type="text/css" rel="stylesheet" href="assets/plugins/jquery-ui/jquery-ui.css">
      <link type="text/css" rel="stylesheet" href="assets/plugins/datatables/jquery.dataTables.min.css">
      <link type="text/css" rel="stylesheet" href="assets/plugins/datatables/extensions/dataTables.jqueryui.min.css">
      <link type="text/css" rel="stylesheet" href="assets/css/app.min.css"/>
      <link type="text/css" rel="stylesheet" href="assets/css/style.min.css"/>
      <link type="text/css" rel="stylesheet" href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css">

      <link type="text/css" rel="stylesheet" href="assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css"><!-- boos de tiempo xd-->
      <link type="text/css" rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.min.css"><!-- este tiempo-->
      
      <!-- Favicon -->	
      <link rel="icon" href="assets/images/EB.jpeg" type="image/x-icon">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Lavado</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />
    
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>    
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>


<!--
Parallo Template
https://templatemo.com/tm-534-parallo
-->
  </head>
  <body>
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/agua2.jpg">
      <div class="container-fluid">
        <div class="row tm-brand-row">
          <div class="col-lg-6 offset-md-4">
            <div class="tm-brand-container tm-bg-white-transparent">
              <div class="tm-brand-texts">
                <h1 class="text-uppercase tm-brand-name">Autolavado</h1>
                <p class=" offset-md-4 small">Bienvenido</p>
              </div>
            </div>
          </div>

        </div>
                <?php   View::load("Cita/UserCita"); ?>

       </div>
      <!-- .container-fluid -->
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script>
        $(function(){
            $('.tabgroup > div').hide();
            $('.tabgroup > div:first-of-type').show();  
            $('.tabs a').click(function(e){
              e.preventDefault();
              var $this = $(this),
                  tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
                  others = $this.closest('li').siblings().children('a'),
                  target = $this.attr('href');
              others.removeClass('active');
              $this.addClass('active');
              $(tabgroup).children('div').hide();
              $(target).show();

              // Scroll to tab content (for mobile)
              if($(window).width() < 992) {
                  $('html, body').animate({
                      scrollTop: $("#first-tab-group").offset().top
                  }, 200);    
              }              
            })  
        });
        
    </script>
    <script>
        $(function(){
            $('.tabgroup > div').hide();
            $('.tabgroup > div:first-of-type').show();  
            $('.tabs a').click(function(e){
              e.preventDefault();
              var $this = $(this),
                  tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
                  others = $this.closest('li').siblings().children('a'),
                  target = $this.attr('href');
              others.removeClass('active');
              $this.addClass('active');
              $(tabgroup).children('div').hide();
              $(target).show();

              // Scroll to tab content (for mobile)
              if($(window).width() < 992) {
                  $('html, body').animate({
                      scrollTop: $("#first-tab-group").offset().top
                  }, 200);    
              }              
            })

            $('.tm-carousel').slick({
                dots: true,
                  infinite: false,
                  arrows: false,
                  speed: 300,
                  slidesToShow: 3,
                  slidesToScroll: 2,
                  responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                          arrows: false,
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                      }
                    },
                    {
                      breakpoint: 600,
                      settings: {
                          arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 480,
                      settings: {
                          arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                  ]
            });  
        });
    </script>

    
          <!-- Footer Script -->
      <!--================================-->
      <script src="assets/plugins/jquery/jquery.min.js"></script>
      <script src="assets/plugins/jquery-ui/jquery-ui.js"></script>
      <script src="assets/plugins/popper/popper.js"></script>
      <script src="assets/plugins/feather-icon/feather.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/plugins/pace/pace.min.js"></script>
      <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="assets/plugins/datatables/responsive/dataTables.responsive.js"></script>
      <script src="assets/plugins/datatables/extensions/dataTables.jqueryui.min.js"></script>
      <script src="assets/plugins/simpler-sidebar/jquery.simpler-sidebar.min.js"></script>
      <script src="assets/js/jquery.slimscroll.min.js"></script>
      <script src="assets/js/highlight.min.js"></script>
      <script src="assets/js/app.js"></script>
      <script src="assets/js/custom.js"></script>
      <script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>

      <script src="assets/plugins/moment/moment.min.js"></script>
      <script src="assets/plugins/datepicker/js/datepicker.min.js"></script>
      <script src="assets/plugins/datepicker/js/datepicker.es.js"></script>
      <script type="text/javascript">
         // Time Picker 1  
         $('#timepicker1').timepicker();
         
         // Create start date
         var start = new Date(),
         prevDay,
         startHours = 9;
         
         // 09:00 AM
         start.setHours(9);
         start.setMinutes(0);
         
         // If today is Saturday or Sunday set 10:00 AM
         if ([6, 0].indexOf(start.getDay()) != -1) {
         start.setHours(10);
         startHours = 10
         }
         
         $('#timepicker-actions-exmpl').datepicker({
         timepicker: true,
         language: 'en',
         startDate: start,
         minHours: startHours,
         maxHours: 18,
         onSelect: function (fd, d, picker) {
         // Do nothing if selection was cleared
         if (!d) return;
         
         var day = d.getDay();
         
         // Trigger only if date is changed
         if (prevDay != undefined && prevDay == day) return;
         prevDay = day;
         
         // If chosen day is Saturday or Sunday when set
         // hour value for weekends, else restore defaults
         if (day == 6 || day == 0) {
         picker.update({
         minHours: 10,
         maxHours: 16
         })
         } else {
         picker.update({
         minHours: 9,
         maxHours: 18
         })
         }
         }
         })
      </script>
           <script>
         // Example starter JavaScript for disabling form submissions if there are invalid fields
         (function() {
           'use strict';
           window.addEventListener('load', function() {
             // Fetch all the forms we want to apply custom Bootstrap validation styles to
             var forms = document.getElementsByClassName('needs-validation');
             // Loop over them and prevent submission
             var validation = Array.prototype.filter.call(forms, function(form) {
               form.addEventListener('submit', function(event) {
                 if (form.checkValidity() === false) {
                   event.preventDefault();
                   event.stopPropagation();
                 }
                 form.classList.add('was-validated');
               }, false);
             });
           }, false);
         })();
      </script>
      <script>
         // Basic DataTable	
          $('#basicDataTable').DataTable({
         	responsive: true,
         	language: {
         	  searchPlaceholder: 'Search...',
         	  sSearch: ''
         	}
           });
           
         // No Style DataTable	
          $('#noStyleedTable').DataTable({
         	responsive: true,
         	language: {
         	  searchPlaceholder: 'Search...',
         	  sSearch: ''
         	}
           });
           
         // Cell Border DataTable	
          $('#cellBorder').DataTable({
         	responsive: true,
         	language: {
         	  searchPlaceholder: 'Search...',
         	  sSearch: ''
         	}
           });
           
         // Compact DataTable	
          $('#compactTable').DataTable({
         	responsive: true,
         	language: {
         	  searchPlaceholder: 'Search...',
         	  sSearch: ''
         	}
           });
           
         // Hoverable DataTable	
          $('#hoverTable').DataTable({
         	responsive: true,
         	language: {
         	  searchPlaceholder: 'Search...',
         	  sSearch: ''
         	}
           });
           
         // Hoverable DataTable	
          $('#orderActiveTable').DataTable({
         	responsive: true,
         	language: {
         	  searchPlaceholder: 'Search...',
         	  sSearch: ''
         	},
         	"order": [[ 1, "desc" ]]
           });
         
         // Scrollable Table DataTable	
          $('#scrollableTable').DataTable({
         	responsive: true,
         	language: {
         	  searchPlaceholder: 'Search...',
         	  sSearch: ''
         	},
         	"order": [[ 1, "desc" ]],
         	"scrollY":        "250px",
         	"scrollCollapse": true,
         	"paging":         false
           });
      </script>
      <script type="text/javascript">
        

        $(document).ready(function () {
      $('#dtHorizontalVerticalExample').DataTable({
        
        
      "scrollX": true,
      "scrollY": 450,
      "order": [[ 0, "desc" ]]
      });
      $('.dataTables_length').addClass('bs-select');
      });
  </script>
  </body>
</html>           