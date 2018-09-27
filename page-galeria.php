<?php get_header(); ?>

      <!-- Section Gallery -->
      <section id="gallery" class="pages">
         <div class="jumbotron" data-stellar-background-ratio="0.5">
            <!-- Heading -->
            <div class="jumbo-heading" data-stellar-background-ratio="1.2">
               <h1>Galeria</h1>
            </div>
         </div>

         <div class="container">
            <div class="nav-gallery col-md-12">
               <!-- Navegação galeria -->
               <div class="text-center col-md-12">
                  <ul class="nav nav-pills category text-center" role="tablist" id="gallerytab">
                     <li class="active"><a href="#" data-toggle="tab" data-filter="*">Cães</a>
                  
                  </ul>
               </div>
            </div>
			<!-- /Menu Galeria -->


            <!-- Gallery Starts-->
            <div class="row">
               <div class="col-md-12 margin1">
                  <div id="lightbox">
                     <!-- Image 1 -->
                    
                    <?php for ($i=1; $i <10 ; $i++) { 
                       # code...
                    ?>
                     <div class="col-sm-6 col-md-6 col-lg-4 dogcat">
                        <div class="portfolio-item">
                           <div class="gallery-thumb">
       <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/gallery<?php echo $i; ?>.jpg" alt="">
                              <span class="overlay-mask"></span>
                              <a href="<?php echo get_template_directory_uri(); ?>/img/gallery<?php echo $i; ?>.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="">
                              <i class="fa fa-expand"></i></a>
                           </div>
                        </div>
                     </div>
                     <!--image 12 ends -->

<?php } ?>



                  </div>
                  <!-- /lightbox-->
               </div>
               <!-- /col-md-12-->
            </div>
            <!-- /row -->
         </div>
         <!-- /container -->
      </section>
      <!-- Section ends --> 
    


    <?php get_footer(); ?>