<?php get_header(); ?>



<?php 
   // Se houver algum post
                     if(have_posts()) :
                        // Enquanto houver algum post, chame o post de determinada maneira
                        while (have_posts()) : the_post(); 
                  

               
get_template_part('content-video'); 




endwhile;
endif;

?>


<!-- /blog-post -->  
               <!-- Comments Form -->
               <div class="row">
                  <div class="col-md-7">
                     <div class="media comment-form">
                        <h5>Leave a Comment:</h5>
                        <!-- Form Starts -->
                        <div class="form-group">
                           <label>Name<span class="required">*</span></label>
                           <input type="text" name="name" class="form-control input-field" required="">                    
                           <label>Email Adress <span class="required">*</span></label>
                           <input type="email" name="email" class="form-control input-field" required="">           
                           <label>Comment<span class="required">*</span></label>
                           <textarea name="comment" id="comment" class="textarea-field form-control" rows="3"  required=""></textarea>
                        </div>
                        <button type="submit" id="send" value="Submit" class="btn">Post Comment</button>
                     </div>
                  </div>
                  <!-- /col-md-7 -->
               </div>
               <!-- /row -->
               <!-- Posted Comments -->
               <div class="comments-block">
                  <h5>Comments</h5>
                  <hr>
                  <!-- Comment -->
                  <div class="comment media">
                     <a href="#">
                     <img class="media-object  img-responsive" src="http://ingridkuhn.com/themes/petz/img/review1.jpg" alt="">
                     </a>
                     <div class="media-body">
                        <a href="#">
                           <h6 class="media-heading">Maria Silva
                              <small>August 25, 2014 at 9:30 PM</small>
                           </h6>
                        </a>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>
                        <!-- Reply Button -->
                        <a class="btn text-right">Reply</a>
                     </div>
                  </div>
                  <!-- /media -->
                  <!-- Comment -->
                  <div class="comment media">
                     <a href="#">
                     <img class="media-object  img-responsive" src="http://ingridkuhn.com/themes/petz/img/review2.jpg" alt="">
                     </a>
                     <div class="media-body">
                        <a href="#">
                           <h6 class="media-heading">Mariane Lindberg
                              <small>August 25, 2014 at 9:30 PM</small>
                           </h6>
                        </a>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>
                        <!-- Reply Button -->
                        <a class="btn text-right">Reply</a>
                        <!-- Nested Comment -->
                        <div class="comment media nested">
                           <a href="#">
                           <img class="media-object img-responsive" src="http://ingridkuhn.com/themes/petz/img/review3.jpg" alt="">
                           </a>
                           <div class="media-body">
                              <a href="#">
                                 <h6 class="media-heading">Nested Comment
                                    <small>August 25, 2014 at 9:30 PM</small>
                                 </h6>
                              </a>
                              <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                              </p>
                              <!-- Reply Button -->
                              <a class="btn text-right">Reply</a>
                           </div>
                        </div>
                        <!-- /media -->
                        <!-- End Nested Comment -->
                     </div>
                  </div>
                  <!-- /media -->
               </div>
               <!-- /comments block -->
            </div>
            <!-- /blog-container col-md-9 -->
           
<?php get_sidebar(); ?>

      <!-- Footer -->      
      <?php get_footer(); ?>