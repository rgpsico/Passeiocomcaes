   <!DOCTYPE html>
<html>
   
<!-- Mirrored from ingridkuhn.com/themes/petz/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Aug 2018 00:43:38 GMT -->
<head>
      <meta charset="utf-8">
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Page title -->
      <title><?php wp_title(); ?></title>
      <!--[if lt IE 9]>
      <script src="js/respond.js"></script>
      <![endif]-->
      <!-- Bootstrap Core CSS -->

      <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
       <link href="<?php echo get_template_directory_uri(); ?>/css/corretor.css" rel="stylesheet" type="text/css">
      <!-- Icon fonts -->
      <link href="<?php echo get_template_directory_uri(); ?>/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="<?php echo get_template_directory_uri(); ?>/fonts/flaticons/flaticon.css" rel="stylesheet" type="text/css">
      <link href="<?php echo get_template_directory_uri(); ?>/fonts/glyphicons/bootstrap-glyphicons.css" rel="stylesheet" type="text/css">
      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Lato:400,800" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi" rel="stylesheet">
      <!-- Style CSS -->
      <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
      <!-- Plugins CSS -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/plugins.css">
      <!-- Color Style CSS -->
      <link href="<?php echo get_template_directory_uri(); ?>/styles/maincolors.css" rel="stylesheet">
      <!-- Favicons-->
      <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/../../apple-icon-72x72.html">
      <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/../../apple-icon-114x114.html">
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
	   <!-- Switcher Only -->
	<link rel="stylesheet" id="switcher-css" type="text/css" href="<?php echo get_template_directory_uri(); ?>/switcher/css/switcher.css" media="all" />
	<!-- END Switcher Styles -->

	<!-- Demo Examples (For Module #3) -->
	<link rel="alternate stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/bluecollarpet.css" title="bluecollarpet" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/delicatepet.css" title="delicatepet" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/maincolors.css" title="maincolors" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/tropicalpet.css" title="tropicalpet" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/sweetpet.css" title="sweetpet" media="all" />
	<!-- END Demo Examples -->
      <link rel="alternate stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/bluecollarpet.css" title="bluecollarpet" media="all" />
      <link rel="alternate stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/delicatepet.css" title="delicatepet" media="all" />
      <link rel="alternate stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/maincolors.css" title="maincolors" media="all" />
      <link rel="alternate stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/tropicalpet.css" title="tropicalpet" media="all" />
      <link rel="alternate stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/sweetpet.css" title="sweetpet" media="all" />
      <!-- END Demo Examples -->




   </head>
<body <?php body_class(); ?> id="page-top">
  <!-- Start Switcher -->
      <div class="demo_changer">
         <div class="demo-icon">
              <i class="fa fa-cog fa-spin fa-2x"></i>
         </div>
         <!-- end opener icon -->
         <div class="form_holder text-center">
              <div class="row">
                   <div class="col-lg-12">
                        <div class="predefined_styles">
                           <h5>Choose a Color Skin</h5>
                           <!-- MODULE #3 -->
                           <a href="bluecollarpet.html" class="styleswitch"><img src="<?php echo get_template_directory_uri(); ?>/switcher/images/bluecollarpet.png" alt="Blue Collar Pet"></a>       
                           <a href="delicatepet.html" class="styleswitch"><img src="<?php echo get_template_directory_uri(); ?>/switcher/images/delicate.png" alt="Delicate Pet"></a>           
                           <a href="tropicalpet.html" class="styleswitch"><img src="<?php echo get_template_directory_uri(); ?>/switcher/images/tropical.png" alt="Tropical Pet"></a>           
                           <a href="sweetpet.html" class="styleswitch"><img src="<?php echo get_template_directory_uri(); ?>/switcher/images/sweet.png" alt="Sweet Pet"></a>        
                           <a href="maincolors.html" class="styleswitch"><img src="<?php echo get_template_directory_uri(); ?>/switcher/images/maincolors.png" alt="Main Colors"></a>           
                           <!-- END MODULE #3 -->
                        </div>
                        <!-- end predefined_styles -->
                        <h5>Change Home Header</h5>
                        <select id="headers" class="show-menu-arrow selectpicker" onchange="document.location = this.value">
                           <option value="">Select</option>
                           <option value="index1.html">Video Header</option>
                           <option value="index-2.html">Drag Slider</option>
                        </select>
                        <h5>Layout</h5>
                        <select id="headers2" class="show-menu-arrow selectpicker" onchange="document.location = this.value">
                           <option value="">Select</option>
                           <option value="index-boxed.html">Boxed</option>
                           <option value="index-2.html">Fullwidth</option>
                        </select>
                   </div>
                   <!-- end col -->
              </div>
              <!-- end row -->
         </div>
         <!-- end form_holder -->
      </div>
      <!-- end demo_changer -->
      <!-- End Switcher -->
      <!-- Preloader --
        <div id="preloader">
         <div class="spinner">
            <div class="bounce1"></div>
         </div>
      </div>