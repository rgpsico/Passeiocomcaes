
               <!-- Blog Post 1 -->
               <div class="blog-post row">
                  <div class="img-date">
                     <!-- date and category -->
                     <div class="col-md-1 text-center date-category">
                        <i class="fa fa-camera fa-2x"></i>
                        <p><?php echo get_the_date(); ?></p>
                     </div>
                     <!-- blog image -->
                     <div class="img-blog">
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large',array('class'=>'img-responsive')); ?></a>  
                     </div>
                  </div>
                  <div class="col-md-12">
                     <!-- Post header -->
                     <h3>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                     </h3>
                     <div class="post-info">
                        <!-- Post Author -->
                        <p><i class="fa fa-user"></i>Por:<a href="<?php the_author_posts_link(); ?>"></a><?php the_author(); ?></p>
                        <!-- Post Comments -->
                        <p><i class="fa fa-comment"></i><a href="#">12 Comments</a></p>
                     </div>
                     <!-- Post Excerpt -->
                     <p><?php the_excerpt(); ?></p>
                     <a class="btn" href="<?php the_permalink(); ?>">Leia Mais <i class="fa fa-angle-right"></i></a>
                  </div>
               </div>

