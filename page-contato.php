
<?php get_header();?>

<style>
   input[type="text"]
{
    background-color: #fff;
    color: #000;
    width: 50%;
}


</style>

      <!-- Section Contact -->
      <section id="contact" class="pages no-padding">
         <div class="jumbotron" data-stellar-background-ratio="0.5">
            <!-- Heading -->
            <div class="jumbo-heading" data-stellar-background-ratio="1.2">
               <h1>Contato</h1>
            </div>
         </div>
         <!-- container -->
         <div class="container">
            <div class="row">
               <!-- Contact Info -->
               <div class="col-lg-5 col-md-5">
                     <h3>Informação: </h3>
                     <ul class="list-inline">
                        <li><i class="fa fa-envelope"></i><a href="mailto:Passeiocomcaes10@gmail.com">Passeiocomcaes10@gmail.com</a></li>
                        <li><i class="fa fa-phone margin-icon"></i>Cel: 21 990271287</li>
                        <li><i class="fa fa-map-marker margin-icon"></i>Roger Neves</li>
                     </ul>
                     <!-- address info -->
                     <p>Qualquer sujestão , reclamacões  , erros , duvidas so entrar em contato com a gente ficaremos muito felizes em responde-los.                     </p>
					<img src="<?php echo get_template_directory_uri(); ?>/img/contactpage1.png" alt="" class="img-rounded center-block img-responsive">             
               </div>
               <!-- /col-lg-5-->
               <!-- Contact Form -->
               <div class="col-lg-6 col-md-6 col-lg-offset-1 col-md-offset-1 res-margin">
			     <h3>Envie uma Mensagem</h3>
                  <!-- Form Starts -->
                  <div id="contact_form">
                     <div class="form-group">
      <?php echo do_shortcode('[contact-form-7 class="form-control input-field"
       id="108" 
       title="Formulário de contato 1"]'); ?>
                     </div>
                    
                  </div>
                  <!-- Contact results -->
                  <div id="contact_results"></div>
               </div>
               <!--/col-lg-6 -->             
            </div>
            <!-- /row-->
         </div>
         <!-- /container-->
         <div class="container-fluid margin1">
            <!-- map-->
            
               
           <?php include('mapa.php') ?>

         </div>
         <!-- /container-fluid-->
      </section>
      <!-- /Section ends -->
      <?php get_footer();?>